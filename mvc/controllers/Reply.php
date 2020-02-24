<?php
require 'mvc/class/Replyer.php';

class Reply extends Controller{
   
    function Index(){
        
        $arr = array();
        
        $myObj = new Replyer();
        
        $myObj->replyer = "John";
        $myObj->likeordislike = 1;
        $myObj->noidung = "New York";
        
        $myObj2 = new Replyer();
        
        $myObj2->replyer = "John Wick";
        $myObj2->likeordislike = 1;
        $myObj2->noidung = "New York";
        
        array_push($arr, $myObj);
        array_push($arr, $myObj2);
        
        $myJSON = json_encode($arr);
        
        $arrJson = json_decode($myJSON);
        
        $replyObject = $arrJson[0];
        
        $review = $this->model("ReviewModel");
        
        $allReview = $review->LayReviewBangIdCongTy(1);
        
        $resultArray = $allReview->fetch_all(MYSQLI_ASSOC);
        
        echo(json_encode($resultArray));
    }
    
}
?>
