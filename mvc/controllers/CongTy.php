<?php
require 'mvc/class/Replyer.php';

class CongTy extends Controller
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

    function Index($a, $b, $c=null)
    {
        $trangReviewHienTai = 1;
        $soReviewMoiTrang = 10;
        if($c != null){
            $trangReviewHienTai = $c;
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
        // View
        $this->view("main-template", [
            "Page" => "cong-ty",
            "CongTy" => $congty->LayCongTyBangId($idCongTy),
            "Review" => $reviewTrangHienTai,
            "SoTrang" => $soTrang,
            "TrangHienTai" => $trangReviewHienTai
        ]);
        //echo $reviewTrangHienTai;
    }

    // Đăng review
    function DangReview()
    {
        $reviewerName = "";
        $reviewerPosition = "";
        $score = "";
        
        // id công ty
        $idCongTy = $_POST["companyId"];
        
        // slug công ty
        $companyUrl = $_POST["companyUrl"];
        
        // content
        $content = $_POST["content"];
        
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
                $reviewerPosition = "Dev quèn";
            }
        }
        
        // score
        $score = intval($_POST["score"]);
        
        $createdDate = date("Y-m-d H:i:s");
        
        $kq = $this->ReviewModel->ThemReview($reviewerName, $reviewerPosition, $score, $content, $idCongTy, $createdDate);
        if ($kq) {
            $kq2 = $this->CongTyModel->UpdateRateCongTy($idCongTy, $score);
            if ($kq2) {
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
            $kq = $this->ReplyModel->CapNhatReplyBangIdReview($idReview, json_encode($arrData, JSON_UNESCAPED_UNICODE));
        } else {
            array_push($arrData, $replyer);
            $kq = $this->ReplyModel->ThemReplyTheoIdReview($idReview, json_encode($arrData, JSON_UNESCAPED_UNICODE));
            // echo $kq;
        }
        
        header("Location: " . $companyUrl, 301);
        exit();
    }
    

}
?>
