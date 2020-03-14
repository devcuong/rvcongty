<?php
require 'mvc/class/CutString.php';
class Review extends Controller
{

    public $ReviewModel;
    public $ReplyModel;

    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->ReviewModel = $this->model("ReviewModel");
        $this->ReplyModel = $this->model("ReplyModel");
    }
    
    public function Index($a, $b){
        /*$review = $this->ReviewModel;
        $reply = $this->ReplyModel;
        $rvNow = $review->LayReviewBangIdReview($b);
        $rvLater = $review->LayReviewBangIdReview($b);
        $getRVNow = $rvNow->fetch_assoc();
        $tenCongTy = $getRVNow["congty_tencongty"];
        $noiDungReview = $getRVNow["review_noidung"];
        $rp = $reply->LayReplyBangIdReview($b);
        
        $cutString = new CutString();
        
        // Title
        $title = "Review công ty ".$tenCongTy." - ".$cutString->get_first_num_of_words($noiDungReview, 60);
        
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
        ]);*/
    }
}
    ?>