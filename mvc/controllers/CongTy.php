<?php
class CongTy extends Controller{
    
    public $CongTyModel;
    public $ReviewModel;
    
    public function __construct()
    {
        $this->CongTyModel = $this->model("CongTyModel");
        $this->ReviewModel = $this->model("ReviewModel");
    }
    
    function Index($a, $b){
        $urlCongTy = explode("-",$b);
        $idCongTy = end($urlCongTy);
        //View
        $this->view("main-template", ["Page"=>"cong-ty",
            "CongTy" => $this->CongTyModel->LayCongTyBangId($idCongTy),
            "Review" => $this->ReviewModel->LayReviewBangIdCongTy($idCongTy)
        ]);
    }
    
    function DangReview()
    {
        $idCongTy = "";
        $companyUrl = "";
        $reviewerName = "";
        $reviewerPosition = "";
        $content="";
        $score="";
        
        // id công ty
        if(isset($_POST["companyId"])){
            $idCongTy = $_POST["companyId"];
        }
        
        // slug công ty
        if (isset($_POST[""])){
            $companyUrl = $_POST["companyUrl"];
        }
        
        // reviewer
        if("" != trim($_POST['reviewer'])){
            $reviewerName = $_POST["reviewer"];
        }
        else {
            $reviewerName = "Ẩn Danh";
        }
        
        // content
        $content = $_POST["content"];
        
        // position
        if("" != trim($_POST["position"])){
            $reviewerPosition = $_POST["position"];
        }
        else {
            $reviewerPosition = "Dev quèn";
        }
        
        // score
        $score = intval($_POST["score"]);
        
        $createdDate = date("Y-m-d H:i:s");
        
        $kq = $this->ReviewModel->ThemReview($reviewerName, $score, $content, $idCongTy, $createdDate);
        if($kq)
        {
            $kq2 = $this->CongTyModel->UpdateRateCongTy($idCongTy, $score);
            if($kq2){
                header("Location: " . $companyUrl, 301);
                exit();
            }
        }
    }
    
}
?>
