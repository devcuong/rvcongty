<?php
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
        $review = $this->ReviewModel;
        $reply = $this->ReplyModel;
        $rvNow = $review->LayReviewBangIdReview($b);
        $rvLater = $review->LayReviewBangIdReview($b);
        $getRVNow = $rvNow->fetch_assoc();
        $tenCongTy = $getRVNow["congty_tencongty"];
        $noiDungReview = $getRVNow["review_noidung"];
        $rp = $reply->LayReplyBangIdReview($b);
        
        // Title
        $title = "Công ty ".$tenCongTy." - ".$noiDungReview;
        
        // Description
        $description = "Công ty ".$tenCongTy." - Thông tin lương bổng, đãi ngộ, tuyển dụng, sếp của các công ty IT và liên quan IT";
        
        // View
        $this->view("main-template", [
            "Page" => "review",
            "Review" => $rvLater,
            "Reply" => $rp,
            "TenCongTy" => $tenCongTy,
            "NoiDungReview" => $noiDungReview
        ]);
    }
}
    ?>