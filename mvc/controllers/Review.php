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
        $rv = $review->LayReviewBangIdReview($b);
        $idReview = "";
        $rp = $reply->LayReplyBangIdReview($b);
        // View
        $this->view("main-template", [
            "Page" => "review",
            "Review" => $rv,
            "Reply" => $rp
        ]);
    }
}
    ?>