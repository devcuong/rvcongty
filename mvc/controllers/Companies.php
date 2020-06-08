<?php
require 'mvc/class/Replyer.php';
require 'mvc/class/CutString.php';
require_once 'mvc/class/Schema.php';
class Companies extends Controller
{

    public $CongTyModel;

    public $ReviewModel;

    public $ReplyModel;
    
    

    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->CongTyModel = $this->model("CongTyModel");
        $this->ReviewModel = $this->model("ReviewModel");
        $this->ReplyModel = $this->model("ReplyModel");
    }

    function Index($a, $b, $c=null, $d=null)
    {
        $trangReviewHienTai = 1;
        $soReviewMoiTrang = 15;
        if($c != null){
            $pageOrView = $urlCongTy = explode("-", $c);
            if($c != "review"){
                $trangReviewHienTai = $c;
            }else{
                
                $rvNow = $this->ReviewModel->LayReviewBangIdReview($d);
                $rvLater = $this->ReviewModel->LayReviewBangIdReview($d);
                $getRVNow = $rvNow->fetch_assoc();
                $tenCongTy = $getRVNow["congty_tencongty"];
                $noiDungReview = $getRVNow["review_noidung"];
                
                $rp = $this->ReplyModel->LayReplyBangIdReview($d);
                
                $cutString = new CutString();
                
                // Title
                $title = "Review công ty ".$tenCongTy." - ".$cutString->get_first_num_of_words(trim($noiDungReview), 60);
              
                // Description
                $description = "Công ty ".$tenCongTy." - ".$noiDungReview;
                
                $keyword =  $title = "Review công ty $tenCongTy";
                
                // View
                $this->view("main-template", [
                    "Page" => "review",
                    "Review" => $rvLater,
                    "Reply" => $rp,
                    "TenCongTy" => $tenCongTy,
                    "NoiDungReview" => $noiDungReview,
                    "Title" => $title,
                    "Description" => $description,
                    "Keyword" => $keyword
                ]);
            }
            
        }
        $soReviewBoQua = ($trangReviewHienTai-1)*$soReviewMoiTrang;
        $urlCongTy = explode("-", $b);
        $idCongTy = end($urlCongTy);
        
        // Model
        $congty = $this->CongTyModel;
        $review = $this->ReviewModel;
        
        // Tất cả review
        $tatCaReview = $review->LayReviewBangIdCongTy($idCongTy);
        $soReview = mysqli_num_rows($tatCaReview);
        $soTrang = ceil($soReview/$soReviewMoiTrang);
        
        // Lấy review tại trang
        $reviewTrangHienTai = $review->LayReviewPhanTrang($idCongTy, $soReviewBoQua, $soReviewMoiTrang);
        $reviewForSchema = $review->LayReviewPhanTrang($idCongTy, $soReviewBoQua, $soReviewMoiTrang);
        
        // Công ty
        $congTyLater = $congty->LayCongTyBangId($idCongTy);
        $congTyNow = $congty->LayCongTyBangId($idCongTy);
        $congTySchema = $congty->LayCongTyBangId($idCongTy);
        $congTyForReviewSchema = $congty->LayCongTyBangId($idCongTy);
        
        $tencongty = "";        
        $tencongty = $congTyNow->fetch_assoc()["tencongty"];
        
        // Title
        $title = "Review công ty ".$tencongty;
        
        // Description
       $description = "Review về mức lương, qui trình phỏng vấn, môi trường, tuyển dụng, sếp và công việc tại ".$tencongty;
        
       // Keyword
       $keyword = "review công ty $tencongty, review cong ty $tencongty, công ty review $tencongty, cong ty review $tencongty, review công việc $tencongty, review cong viec $tencongty, review mức lương $tencongty, review muc luong $tencongty, review sếp $tencongty, review sep $tencongty";
       
       $schema = new Schema();
       $StringSchema = $schema->generate_schema_for_vid_videos($congTySchema,"companies");
       
       $arrayReviewSchema = $schema->generate_schema_for_review($congTyForReviewSchema, $reviewForSchema);
       
       // View
        $this->view("main-template", [
            "Page" => "companies",
            "CongTy" => $congTyLater,
            "Review" => $reviewTrangHienTai,
            "SoTrang" => $soTrang,
            "TrangHienTai" => $trangReviewHienTai,
            "Title" => $title,
            "Description" => $description,
            "Keyword" => $keyword,
            "StringSchema" => $StringSchema,
            "ArrayReviewSchema" => $arrayReviewSchema
        ]);
    }

    // Đăng review
    function DangReview()
    {
        $reviewerName = "";
        $reviewerPosition = "";
        $contactReviewer = "";
        $score = "";
        
        // id công ty
        $idCongTy = $_POST["companyId"];
        
        // slug công ty
        $companyUrl = $_POST["companyUrl"];
        
        // content
        $content = nl2br($_POST["content"]);
        
        // reviewer
        if (isset($_POST['reviewer'])) {
            if (trim($_POST['reviewer']) != "") {
                $reviewerName = trim($_POST["reviewer"]);
            } else {
                $reviewerName = "Ẩn Danh";
            }
        }
        // position
        if (isset($_POST['position'])) {
            if (trim($_POST['position']) != "") {
                $reviewerPosition = trim($_POST["position"]);
            } else {
                $reviewerPosition = "Dev";
            }
        }
        // contact
        if(isset($_POST['contact'])){
            if (trim($_POST['contact']) != ""){
                $contactReviewer = trim($_POST["contact"]);
            }else {
                $contactReviewer = "Không có contact";
            }
        }
        
        // score
        $score = intval($_POST["score"]);
        
        $createdDate = date("Y-m-d H:i:s");
        
        /*echo $createdDate;*/
        
        $kq = $this->ReviewModel->ThemReview($reviewerName, $reviewerPosition, $score, $content, $idCongTy, $createdDate);
        if ($kq > 0) {
            $kq2 = $this->CongTyModel->UpdateRateCongTy($idCongTy, $score, $createdDate);
            echo $kq2;
            if ($kq2) {
                ob_start();
                header("Location: " . $companyUrl, 301);
                exit();
            }
        }
    }

    // Đăng reply
    function DangReply()
    {
        $data = "";
        $reviewer = "";
        $arrData = [];
        $kq = false;
        // reviewer
        if (isset($_POST['reviewer'])) {
            if (trim($_POST['reviewer']) != "") {
                $reviewer = trim($_POST["reviewer"]);
            } else {
                $reviewer = "Ẩn Danh";
            }
        }
        // content
        $content = $_POST["content"];
        // id công ty
        $idCongTy = $_POST["companyId"];
        // slug công ty
        $companyUrl = $_POST["companyUrl"];
        // id Review
        $idReview = $_POST["reviewId"];
        // reaction
        $reaction = $_POST["reaction"];
        
        $replyer = new Replyer();
        $replyer->replyer = $reviewer;
        $replyer->reaction = $reaction;
        $replyer->noidung = $content;
        
        $createdDate = date("Y-m-d H:i:s");
        $replyer->thoigian = $createdDate;
        $replyKiemTra = $this->ReplyModel->LayReplyBangIdReview($idReview);
        if (mysqli_num_rows($replyKiemTra) > 0) {
            while ($r = mysqli_fetch_array($replyKiemTra)) {
                $data = $r["data"];
            }
            $arrData = json_decode($data);
            array_push($arrData, $replyer);
            $kq = $this->ReplyModel->CapNhatReplyBangIdReview($idCongTy, $idReview, json_encode($arrData, JSON_UNESCAPED_UNICODE));
             echo $kq;
        } else {
            array_push($arrData, $replyer);
            $kq = $this->ReplyModel->ThemReplyTheoIdReview($idCongTy, $idReview, json_encode($arrData, JSON_UNESCAPED_UNICODE));
        }
        ob_start();
        header("Location: " . $companyUrl, 301);
        exit();
    }
    

}
?>
