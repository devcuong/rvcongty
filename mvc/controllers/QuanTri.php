<?php
require 'mvc/class/Server.php';

class QuanTri extends Controller
{

    public $UserModel;
    public $CongTyModel;

    public function __construct()
    {
        $this->UserModel = $this->model("UserModel");
        $this->CongTyModel = $this->model("CongTyModel");
    }

    public function Index()
    {
        // View
        $this->view("admin-template", [
            "Page" => "quan-tri"
        ]);
    }

    public function DangNhap()
    {
        $email = "";
        $pass = "";
        if (isset($_POST["user-email"])) {
            $email = trim($_POST["user-email"]);
        }
        if (isset($_POST["user-password"])) {
            $pass = md5(trim($_POST["user-password"]));
        }
        $kq = $this->UserModel->LayUserBangEmailVaPassword($email);
        $temp = "";
        
        while ($row = mysqli_fetch_array($kq)) {
            $temp = $row["password"];
        }
        $server = new Server();
        if ($temp == $pass) {
            header("Location: " . $server->servername . "/quan-tri/quan-tri-cong-ty", 301);
            exit();
        }
    }
// QUẢN TRỊ CHUNG
    public function QuanTriCongTy()
    {
        // View
        $this->view("admin-template", [
            "Page" => "quan-tri-cong-ty"
        ]);
    }
// THÊM CÔNG TY
    public function ThemCongTy()
    {
        if (isset($_POST["btn-submit"])) {
            $tencongty = "";
            $slugcongty = "";
            $nganhnghe = "";
            $nhanvien = "";
            $diachi = "";
            $fileName = "";
            if(isset($_POST["ten-cong-ty"])){
                $tencongty = trim($_POST["ten-cong-ty"]);
                $slugcongty = $_POST["slug-cong-ty"];
            }
            if(isset($_POST["nganh-nghe"])){
                $nganhnghe = trim($_POST["nganh-nghe"]);
            }
            if(isset($_POST["nhan-vien"])){
                $nhanvien = trim($_POST["nhan-vien"]);
            }
            if(isset($_POST["dia-chi"])){
                $diachi = trim($_POST["dia-chi"]);
            }
            if (isset($_FILES["logo-cong-ty"])) {
            
                // Nếu file upload không bị lỗi,
                if ($_FILES['logo-cong-ty']['error'] > 0)
                {
                    echo 'File Upload Bị Lỗi';
                }
                else{
                    $fileName = $_FILES['logo-cong-ty']['name'];
                    $duongDanHinhAnh = 'mvc/public/asset/companies/logo/' . $fileName;
                    // Upload file
                    move_uploaded_file($_FILES['logo-cong-ty']['tmp_name'], $duongDanHinhAnh);
                
                    // Thêm công ty
                    $kq = $this->CongTyModel->ThemCongTy($tencongty, $slugcongty, $fileName, $nganhnghe, $nhanvien, $diachi);
                    if($kq){
                        // View
                        $this->view("admin-template", [
                            "Page" => "quan-tri-thanh-cong"
                        ]);
                    }
                }
            }
            
        } else {
            // View
            $this->view("admin-template", [
                "Page" => "them-cong-ty"
            ]);
        }
    }
    
    // TẤT CẢ CÔNG TY
    public function TatCaCongTy()
    {
        $trangHienTai = 1;
        $congTyMoiTrang = 10;
        if(isset($_GET["page"])){
            $trangHienTai = $_GET["page"];
        }
        $soCongTyBoQua = ($trangHienTai-1)*$congTyMoiTrang;
        // Model
        $congty = $this->model("CongTyModel");
        $review = $this->model("ReviewModel");
        // Tất cả công ty
        $tatCaCongTy = $congty->TatCaCongTy();
        $soCongTy = mysqli_num_rows($tatCaCongTy);
        $soTrang = ceil($soCongTy/$congTyMoiTrang);
        $congTyTrangHienTai="";
        $congTyTrangHienTai = $congty->LayCongTyPhanTrang($soCongTyBoQua, $congTyMoiTrang);
        // View
        $this->view("admin-template", [
            "Page" => "tat-ca-cong-ty",
            "CongTy" => $congTyTrangHienTai,
            "SoTrang" => $soTrang,
            "TrangHienTai" => $trangHienTai,
            "CongTyTrangHienTai" => $congTyTrangHienTai
        ]);
    }
}
?>
