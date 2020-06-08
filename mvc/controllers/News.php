<?php
require_once 'mvc/class/Server.php';
require_once 'mvc/class/Schema.php';
class News extends Controller
{
    public $NewsModel;
    
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->NewsModel = $this->model("NewsModel");
    }
    
    function TinTucMoi(){
        // Title
        $title = "CongTyTop";
        
        // Description
        $description = "CongTyTop";
        
        $this->view("main-template", [
            "Page" => "tin-tuc-moi",
            "Title" => $title,
            "Description" => $description
        ]);
    }
    
    function Index($a, $b=NULL){
        if ($b != NULL){
            $tags = "";
            $tieuDe = "";
            $moTa = "";
            $thoiGian = "";
            $thumbnail = "";
            $urlNews = explode("-", $b);
            $idNews = end($urlNews);
            $newsNow = $this->NewsModel->LayNewsById($idNews);
            $newsLater = $this->NewsModel->LayNewsById($idNews);
           
            while ($r = mysqli_fetch_array($newsNow)) {
                $tags = $r["tagnews"];
                $tieuDe = $r["tieude"];
                $moTa = $r["motangan"];
                $thoiGian = $r["thoigian"];
                $thumbnail = $r["thumbnail"];
            }
            
            $newsMoiNhat = $this->NewsModel->Lay8TinMoiNhat();
            $capNhatViews = $this->NewsModel->CapNhatLuotView($idNews);
            $newsLienQuan = $this->NewsModel->Lay3NewsLienQuan($tags);
           
            // Schema
            $schema = new Schema();
            $StringSchema = $schema->generate_schema_for_news($tieuDe,$thoiGian,$thumbnail,"news-detail");
            
            // Title
            $title = $tieuDe." - CongTyTop";
            
            // Description
            $description = $moTa;
            
            // Keyword
            $keyword = "";
            
            // View
            $this->view("main-template", [
                "Page" => "news-detail",
                "Title" => $title,
                "Description" => $description,
                "Keyword" => $keyword,
                "News" => $newsLater,
                "NewsMoiNhat"=>$newsMoiNhat,
                "NewsLienQuan" => $newsLienQuan,
                "StringSchema" => $StringSchema
            ]);
        }else{
            $newsBinhThuong = $this->NewsModel->LayNewsByLoai("NORMAL", 3);
            $newsECom = $this->NewsModel->LayNewsByLoai("HR",3);
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
                "NewsHR" => $newsECom,
                "NewsThumbnail" => $rows,
                "NewsXemNhieuNhat" => $newsXemNhieuNhat
            ]);
        }
    }
    
    
}
?>