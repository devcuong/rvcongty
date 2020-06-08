<?php
require_once 'mvc/class/Server.php';
require_once 'mvc/class/Schema.php';
require_once 'mvc/class/CutString.php';
class News extends Controller
{
    public $NewsModel;
    
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->NewsModel = $this->model("NewsModel");
    }
    
    function TinTucMoi(){
        $trangTinTucHienTai = 1;
        $soTinTucMoiTrang = 15;
        if (isset($_GET["page"])) {
            $trangTinTucHienTai= $_GET["page"];
        }
        $soTinTucBoQua = ($trangTinTucHienTai - 1) * $soTinTucMoiTrang;
        
        // Tất cả tin tức
        $tatCaTinTuc = $this->NewsModel->TatCaNews();
        $soTinTuc = mysqli_num_rows($tatCaTinTuc);
        $soTrang = ceil($soTinTuc/$soTinTucMoiTrang);
        
        // Lấy tin tức phân trang
        $tinTucTrangHienTai = $this->NewsModel->LayNewsPhanTrang($soTinTucBoQua, $soTinTucMoiTrang);
        
        // Lấy tin tức được xem nhiều nhất
        $tinTucXemNhieuNhat = $this->NewsModel->Lay8NewsXemNhieuNhat();
        
        // Tạo navigate phân trang
        $server = new Server();
        $string = new CutString();
        $nav = $string->get_nav_render_videos($trangTinTucHienTai, $soTrang, $server->servername . "/news/tin-tuc-moi");
        
        // Title
        $title = "CongTyTop";
        
        // Description
        $description = "CongTyTop";
        
        $this->view("main-template", [
            "Page" => "tin-tuc-moi",
            "Title" => $title,
            "Description" => $description,
            "NewsXemNhieuNhat"=>$tinTucXemNhieuNhat,
            "NewsTrangHienTai" => $tinTucTrangHienTai,
            "Navigate" => $nav
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