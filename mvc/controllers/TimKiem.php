<?php
class TimKiem extends Controller
{
    public $CongTyModel;
    public $NewsModel;
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->CongTyModel = $this->model("CongTyModel");
        $this->NewsModel = $this->model("NewsModel");
    }
    
    // Tìm kiếm tin tức
    public function News(){
        if(isset($_POST["search"])){
           
            $tuKhoa = trim($_POST["search"]);
            $newsModel = $this->NewsModel;
            $allKetQua = $newsModel->LayNewsTimKiem($tuKhoa);
            
            // Title
            $title = "Công ty TOP - Kết quả tìm kiếm";
            
            // Description
            $description = "Công ty TOP - Kết quả tìm kiếm";
            // View
            $this->view("main-template", [
                "Page" => "ket-qua-tim-kiem-tin-tuc",
                "AllKetQua" => $allKetQua,
                "Keyword" => $tuKhoa,
                "Title" => $title,
                "Description" => $description
            ]);
        }
        $trangHienTai = 0;
        if (isset($_GET["page"])) {
            $trangHienTai = $_GET["page"];
        }
        echo $trangHienTai;
    }
    
    // Tìm kiếm công ty
    public function Companies(){
        if (isset($_POST["tencongty"])){
            $tuKhoa = trim($_POST["tencongty"]);
            $congTyModel = $this->CongTyModel;
            $allKetQua = $congTyModel->LayCongTyTheoKyTu($tuKhoa);
            //$resultArrayKetQua = $allKetQua -> fetch_all(MYSQLI_ASSOC);
            //echo $_POST["tencongty"]."-"."ok";
            $parameters = array();
            while ($row = $allKetQua->fetch_assoc()) {
              $parameters[] = $row;
            }
            echo json_encode($parameters);
        }
       
    }
    
    // Kết quả tìm kiếm công ty
    public function TrangKetQua($a, $b, $c=null, $d=null){
        $trangHienTai = 1;
        $congTyMoiTrang = 10;
        $tuKhoa = "";
        if($c != null){
            $trangHienTai = $c;
        }
        if(isset($_POST["company-search"])){
            $tuKhoa= trim($_POST["company-search"]);
        }
        if($d != null){
            $tuKhoa= $d;
        }
        $soCongTyBoQua = ($trangHienTai-1)*$congTyMoiTrang;
        // Model
        $congty = $this->model("CongTyModel");
        $review = $this->model("ReviewModel");
        // Tất cả công ty
        $congTyTimDuoc = $congty->LayCongTyTheoKyTu($tuKhoa);
        $soCongTy = mysqli_num_rows($congTyTimDuoc);
        $soTrang = ceil($soCongTy/$congTyMoiTrang);
        $congTyTrangHienTai="";
        $congTyTrangHienTai = $congty->PhanTrangCongTyTheoTuKhoa($soCongTyBoQua, $congTyMoiTrang, $tuKhoa);
        
        // Title
        $title = "Công ty TOP - Kết quả tìm kiếm";
        
        // Description
        $description = "Công ty TOP - Kết quả tìm kiếm";
        
        //View
        $this->view("main-template", ["Page"=>"trang-ket-qua",
            "15ReviewMoiNhat" => $review->Lay15ReviewMoiNhat(),
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