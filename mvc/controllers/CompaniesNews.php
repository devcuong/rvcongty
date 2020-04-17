<?php
class CompaniesNews extends Controller
{
    public $NewsModel;
    
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->NewsModel = $this->model("NewsModel");
    }
    
    function Index($a, $b=NULL){
        if ($b != NULL){
            $urlNews = explode("-", $b);
            $idNews = end($urlNews);
            $news = $this->NewsModel->LayTinTucById($idNews);
            $newsMoiNhat = $this->NewsModel->Lay8TinMoiNhat();
            
            // Title
            $title = "Review công ty ";
            
            // Description
            $description = "Review về mức lương, qui trình phỏng vấn, môi trường, tuyển dụng, sếp và công việc tại ";
            
            // View
            $this->view("main-template", [
                "Page" => "companies-news",
                "Title" => $title,
                "Description" => $description,
                "News" => $news,
                "NewsMoiNhat"=>$newsMoiNhat
            ]);
        }
    }
}
?>