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
        $reviewerName = "";
        $reviewerPosition = "";
        $content="";
        $score="";
        
        // id công ty
        if(isset($_POST["companyId"])){
            $idCongTy = $_POST["companyId"];
        }
        
        // reviewer
        if(isset($_POST["reviewer"])){
            $reviewerName = $_POST["reviewer"];
        }
        else {
            $reviewerName = "Ẩn Danh";
        }
        
        // content
        $content = $_POST["content"];
        
        // position
        if(isset($_POST["position"])){
            $reviewerPosition = "Dev quèn";
        }
        
        // score
        $score = intval($_POST["score"]);
        
        $created_date = date("Y-m-d H:i:s");
        
        $kq = $this->ReviewModel->ThemReview($reviewerName, $score, $content, $idCongTy, $created_date);
        $kq2 = $this->CongTyModel->UpdateRateCongTy($idCongTy, $score);
        
        echo $kq2;
    }
    
}
?>
