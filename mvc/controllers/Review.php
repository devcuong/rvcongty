<?php
class Review extends Controller
{

    public $ReviewModel;

    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->ReviewModel = $this->model("ReviewModel");
    }
    
    public function Index($a, $b){
        
        // View
        $this->view("main-template", [
            "Page" => "review",
        ]);
    }
}
    ?>