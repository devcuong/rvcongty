<?php
class CongTy extends Controller{
    function Index($a, $b){
        $congty = $this->model("CongTyModel");
        $review = $this->model("ReviewModel");
        $urlCongTy = explode("-",$b);
        $idCongTy = end($urlCongTy);
        //View
        $this->view("main-template", ["Page"=>"cong-ty",
            "CongTy" => $congty->LayCongTyBangId($idCongTy),
            "Review" => $review->LayReviewBangIdCongTy($idCongTy)
        ]);
    }
    
}
?>
