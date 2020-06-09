<?php
require_once 'mvc/class/Server.php';
require_once 'mvc/class/CutString.php';
class TimKiem extends Controller
{

    public $CongTyModel;

    public $NewsModel;
    
    public $ReviewModel;
    
    public $VideoModel;
    
    public $Server;
    
    public $String;

    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->CongTyModel = $this->model("CongTyModel");
        $this->ReviewModel= $this->model("ReviewModel");
        $this->NewsModel = $this->model("NewsModel");
        $this->VideoModel = $this->model("VideoModel");
        $this->Server = new Server();
        $this->String = new CutString();
    }
    
    // Tìm kiếm video
    public function Videos(){
        
        $trangHienTai = 1;
        $videoMoiTrang = 15;
        $keySearch = "";
        if (isset($_POST["search"])) {
            $keySearch = trim($_POST["search"]);
        }
        if (isset($_GET["keysearch"])) {
            $keySearch = $_GET["keysearch"];
        }
        if (isset($_GET["page"])) {
            $trangHienTai = $_GET["page"];
        }
        $videoQuaBoQua = ($trangHienTai - 1) * $videoMoiTrang;
        $allKetQua = $this->VideoModel->LayVideoTimKiem($keySearch);
        $soKetQuaVideo = mysqli_num_rows($allKetQua);
        $soTrang = ceil($soKetQuaVideo/ $videoMoiTrang);
        $ketQuaVideoTrangHienTai = $this->VideoModel->PhanTrangVideoTimKiem($keySearch, $videoQuaBoQua, $videoMoiTrang);
        $nav = $this->String->get_nav_render_with_search($trangHienTai, $soTrang, $this->Server->servername."/tim-kiem/videos",$keySearch);
        
        // Title
        $title = "Công ty TOP - Kết quả tìm kiếm";
        // Description
        $description = "Công ty TOP - Kết quả tìm kiếm";
        
        // View
        $this->view("main-template", [
            "Page" => "ket-qua-tim-kiem-video",
            "Title" => $title,
            "Description" => $description,
            "Navigate" => $nav,
            "KetQuaTrangHienTai" => $ketQuaVideoTrangHienTai,
        ]);
    }
    
    // Tìm kiếm tin tức
    public function News()
    {
        $trangHienTai = 1;
        $tinTucMoiTrang = 15;
        $keySearch = "";
        if (isset($_POST["search"])) {
            $keySearch = trim($_POST["search"]);
        }
        if (isset($_GET["keysearch"])) {
            $keySearch = $_GET["keysearch"];
        }
        if (isset($_GET["page"])) {
            $trangHienTai = $_GET["page"];
        }
        $tinTucQuaBoQua = ($trangHienTai - 1) * $tinTucMoiTrang;
        $allKetQua = $this->NewsModel->LayNewsTimKiem($keySearch);
        $soKetQuaTinTuc = mysqli_num_rows($allKetQua);
        $soTrang = ceil($soKetQuaTinTuc/ $tinTucMoiTrang);
        // Đang sửa
        $ketQuaTinTucTrangHienTai = $this->NewsModel->LayNewsTimKiemDePhanTrang($keySearch, $tinTucQuaBoQua, $tinTucMoiTrang);
        $nav = $this->String->get_nav_render_with_search($trangHienTai, $soTrang, $this->Server->servername."/tim-kiem/news",$keySearch);
        
        // Lấy tin tức xem nhiều nhất
        $newsXemNhieuNhat = $this->NewsModel->Lay8NewsXemNhieuNhat();
        
        // Title
        $title = "Công ty TOP - Kết quả tìm kiếm";
        // Description
        $description = "Công ty TOP - Kết quả tìm kiếm";
        
        // View
        $this->view("main-template", [
            "Page" => "ket-qua-tim-kiem-tin-tuc",
            "KetQuaTrangHienTai" => $ketQuaTinTucTrangHienTai,
            "Navigate" => $nav,
            "NewsXemNhieuNhat" => $newsXemNhieuNhat,
            "Keyword" => $keySearch,
            "Title" => $title,
            "Description" => $description
        ]);
    }
    
    // Tìm kiếm công ty
    public function Companies()
    {
        if (isset($_POST["tencongty"])) {
            $tuKhoa = trim($_POST["tencongty"]);
            $congTyModel = $this->CongTyModel;
            $allKetQua = $congTyModel->LayCongTyTheoKyTu($tuKhoa);
            // $resultArrayKetQua = $allKetQua -> fetch_all(MYSQLI_ASSOC);
            // echo $_POST["tencongty"]."-"."ok";
            $parameters = array();
            while ($row = $allKetQua->fetch_assoc()) {
                $parameters[] = $row;
            }
            echo json_encode($parameters);
        }
    }
    
    // Kết quả tìm kiếm công ty
    public function TrangKetQua($a, $b, $c = null, $d = null)
    {
        $trangHienTai = 1;
        $congTyMoiTrang = 10;
        $tuKhoa = "";
        if ($c != null) {
            $trangHienTai = $c;
        }
        if (isset($_POST["company-search"])) {
            $tuKhoa = trim($_POST["company-search"]);
        }
        if ($d != null) {
            $tuKhoa = $d;
        }
        $soCongTyBoQua = ($trangHienTai - 1) * $congTyMoiTrang;
        // Tất cả công ty
        $congTyTimDuoc = $this->CongTyModel->LayCongTyTheoKyTu($tuKhoa);
        $soCongTy = mysqli_num_rows($congTyTimDuoc);
        $soTrang = ceil($soCongTy / $congTyMoiTrang);
        $congTyTrangHienTai = "";
        $congTyTrangHienTai = $this->CongTyModel->PhanTrangCongTyTheoTuKhoa($soCongTyBoQua, $congTyMoiTrang, $tuKhoa);
        
        // Title
        $title = "Công ty TOP - Kết quả tìm kiếm";
        
        // Description
        $description = "Công ty TOP - Kết quả tìm kiếm";
        
        // View
        $this->view("main-template", [
            "Page" => "trang-ket-qua",
            "15ReviewMoiNhat" => $this->ReviewModel->Lay15ReviewMoiNhat(),
            "SoTrang" => $soTrang,
            "TrangHienTai" => $trangHienTai,
            "CongTyTrangHienTai" => $congTyTrangHienTai,
            "Keyword" => $tuKhoa,
            "Title" => $title,
            "Description" => $description
        ]);
    }
}
?>