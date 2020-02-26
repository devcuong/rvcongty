<?php
class TimKiem extends Controller
{
    
    public $CongTyModel;
    
    
    
    
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->CongTyModel = $this->model("CongTyModel");
    }
    
    public function CongTy(){
        if (isset($_POST["tencongty"])){
            $tuKhoa = trim($_POST["tencongty"]);
            $congTyModel = $this->CongTyModel;
            $allKetQua = $congTyModel->LayCongTyTheoKyTu($tuKhoa);
            $resultArrayKetQua = $allKetQua->fetch_all(MYSQLI_ASSOC);
            echo json_encode($resultArrayKetQua);
        }
    }
    
    public function TrangKetQua(){
        $trangHienTai = 1;
        $congTyMoiTrang = 10;
        $tuKhoa = "";
        if(isset($_POST["company-search"])){
            $tuKhoa= trim($_POST["company-search"]);
        }
        if(isset($_GET["company-search"])){
            $tuKhoa= trim($_GET["company-search"]);
        }
        if(isset($_GET["page"])){
            $trangHienTai = $_GET["page"];
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
       
        //View
        $this->view("main-template", ["Page"=>"trang-ket-qua",
            "15ReviewMoiNhat" => $review->Lay15ReviewMoiNhat(),
            "SoTrang" => $soTrang,
            "TrangHienTai" => $trangHienTai,
            "CongTyTrangHienTai" => $congTyTrangHienTai,
            "TuKhoa" => $tuKhoa
        ]);
    }
}
?>