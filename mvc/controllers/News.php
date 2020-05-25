<?php
class News extends Controller
{
    public $NewsModel;
    
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->NewsModel = $this->model("NewsModel");
    }
    
    function Index($a, $b=NULL){
        if ($b != NULL){
            $tags = "";
            $urlNews = explode("-", $b);
            $idNews = end($urlNews);
            $newsNow = $this->NewsModel->LayNewsById($idNews);
            $newsLater = $this->NewsModel->LayNewsById($idNews);
           
            while ($r = mysqli_fetch_array($newsNow)) {
                $tags = $r["tagnews"];
            }
            
            $newsMoiNhat = $this->NewsModel->Lay8TinMoiNhat();
            $capNhatViews = $this->NewsModel->CapNhatLuotView($idNews);
            $newsLienQuan = $this->NewsModel->Lay3NewsLienQuan($tags);
           
            // Title
            $title = "Review công ty ";
            
            // Description
            $description = "Review về mức lương, qui trình phỏng vấn, môi trường, tuyển dụng, sếp và công việc tại ";
            
            // View
            $this->view("main-template", [
                "Page" => "news-detail",
                "Title" => $title,
                "Description" => $description,
                "News" => $newsLater,
                "NewsMoiNhat"=>$newsMoiNhat,
                "NewsLienQuan" => $newsLienQuan
              
            ]);
        }else{
            $newsBinhThuong = $this->NewsModel->LayNewsByLoai("NORMAL", 8);
            $newsECom = $this->NewsModel->LayNewsByLoai("E-COM",8);
            $newsStartup = $this->NewsModel->LayNewsByLoai("STARTUP", 8);
            $newsThumbnail = $this->NewsModel->Lay5NewsMoiNhat();
            $newsXemNhieuNhat = $this->NewsModel->Lay8NewsXemNhieuNhat();
            $rows = [];
            
            while($row = mysqli_fetch_assoc($newsThumbnail)) {
                $rows[] = $row;
            }
            // Title
            $title = "Review công ty ";
            
            // Description
            $description = "Review về mức lương, qui trình phỏng vấn, môi trường, tuyển dụng, sếp và công việc tại ";
            
            $this->view("main-template", [
                "Page" => "news",
                "Title" => $title,
                "Description" => $description,
                "NewsBinhThuong" => $newsBinhThuong,
                "NewsECom" => $newsECom,
                "NewsStartup" => $newsStartup,
                "NewsThumbnail" => $rows,
                "NewsXemNhieuNhat" => $newsXemNhieuNhat
            ]);
        }
    }
}
?>