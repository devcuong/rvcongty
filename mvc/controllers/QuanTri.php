<?php
require 'mvc/class/Server.php';

class QuanTri extends Controller
{

    public $UserModel;
    public $CongTyModel;
    public $ReviewModel;
    public $ReplyModel;

    public function __construct()
    {
        $this->UserModel = $this->model("UserModel");
        $this->CongTyModel = $this->model("CongTyModel");
        $this->ReviewModel = $this->model("ReviewModel");
        $this->ReplyModel = $this->model("ReplyModel");
    }

    public function Index()
    {
        // View
        $this->view("admin-template", [
            "Page" => "quan-tri"
        ]);
    }
// QUẢN TRỊ VIÊN ĐĂNG NHẬP
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
    
    // XÓA CÔNG TY
    public function XoaCongTy($a, $b, $c){
        $kt = false;
        $idCongTy = $c;
        $kq = $this->CongTyModel->XoaCongTy($idCongTy);
        if($kq){
            $kt = true;
        }
        $kq2 = $this->ReviewModel->XoaReview($idCongTy);
        if($kq2){
            $kt = true;
        }
        if($kt){
            // View
            $this->view("admin-template", [
                "Page" => "quan-tri-thanh-cong"
            ]);
            
        }else{
            // View
            $this->view("admin-template", [
                "Page" => "tat-ca-cong-ty"
            ]);
        }
    }
    
    // GET DATA
    public function GetDataCongTy(){
        if(isset($_POST["url-company"])){
            $urlCompany = $_POST["url-company"];
            $page = file_get_contents($urlCompany);
            @$doc = new DOMDocument();
            @$doc->loadHTML($page);   
            
            $xpath = new DomXPath($doc);
            
            // Thông tin
            $nodeList = $xpath->query("//div[@class='company-info__detail']");
            $nodeCongTy = $nodeList->item(0);
            $tenCongTy = $nodeCongTy->getElementsByTagName('h2')->item(0)->nodeValue;
            $nganhNghe = $nodeCongTy->getElementsByTagName('div')->item(0)->getElementsByTagName('span')->item(0)->nodeValue;
            $nhanVien = $nodeCongTy->getElementsByTagName('div')->item(0)->getElementsByTagName('span')->item(2)->nodeValue;
            $diaChi = $nodeCongTy->getElementsByTagName('div')->item(1)->nodeValue;
            // To check the result:
            echo $diaChi ;
}
    }
}
?>
