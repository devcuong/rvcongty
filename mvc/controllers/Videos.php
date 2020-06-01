<?php
class Videos extends Controller
{
    public $VideoModel;
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->VideoModel= $this->model("VideoModel");
    }
    
    function Index(){
        
        $allVideos = $this->VideoModel->TatCaVideo();
        
        // Title
        $title = "Review công ty ";
        
        // Description
        $description = "Review về mức lương, qui trình phỏng vấn, môi trường, tuyển dụng, sếp và công việc tại ";
        
        // View
        $this->view("main-template", [
            "Page" => "videos",
            "Title" => $title,
            "Description" => $description,
            "Videos" => $allVideos
        ]);
    }
}
