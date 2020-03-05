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
            echo "ok";
            $_SESSION["email"] = $email;
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
        if (isset($_SESSION["email"])) {
            if (isset($_POST["btn-submit"])) {
                $tencongty = "";
                $slugcongty = "";
                $nganhnghe = "";
                $nhanvien = "";
                $diachi = "";
                $fileName = "";
                if (isset($_POST["ten-cong-ty"])) {
                    $tencongty = trim($_POST["ten-cong-ty"]);
                    $slugcongty = $_POST["slug-cong-ty"];
                }
                if (isset($_POST["nganh-nghe"])) {
                    $nganhnghe = trim($_POST["nganh-nghe"]);
                }
                if (isset($_POST["nhan-vien"])) {
                    $nhanvien = trim($_POST["nhan-vien"]);
                }
                if (isset($_POST["dia-chi"])) {
                    $diachi = trim($_POST["dia-chi"]);
                }
                if (isset($_FILES["logo-cong-ty"])) {
                    
                    // Nếu file upload không bị lỗi,
                    if ($_FILES['logo-cong-ty']['error'] > 0) {
                        echo 'File Upload Bị Lỗi';
                    } else {
                        $fileName = $_FILES['logo-cong-ty']['name'];
                        $duongDanHinhAnh = 'mvc/public/asset/companies/logo/' . $fileName;
                        // Upload file
                        move_uploaded_file($_FILES['logo-cong-ty']['tmp_name'], $duongDanHinhAnh);
                        
                        $createdDate = date("Y-m-d H:i:s");
                        // Kiểm tra công ty có hay chưa
                        $daco = $this->CongTyModel->LayCongTyBangSlug($slugcongty);
                        if (mysqli_num_rows($daco) < 1) {
                            // Thêm công ty
                            $kq = $this->CongTyModel->ThemCongTy($tencongty, $slugcongty, $fileName, $nganhnghe, $nhanvien, $diachi, $createdDate);
                            if ($kq) {
                                // View
                                $this->view("admin-template", [
                                    "Page" => "quan-tri-thanh-cong"
                                ]);
                            }
                        }
                    }
                }
            } else {
                // View
                $this->view("admin-template", [
                    "Page" => "them-cong-ty"
                ]);
            }
        } else {
            // View
            $this->view("admin-template", [
                "Page" => "quan-tri"
            ]);
        }
    }

    // TẤT CẢ CÔNG TY
    public function TatCaCongTy($a, $b, $c = null)
    {
        if (isset($_SESSION["email"])) {
            $trangHienTai = 1;
            $congTyMoiTrang = 10;
            if ($c != null) {
                $trangHienTai = $c;
            }
            $soCongTyBoQua = ($trangHienTai - 1) * $congTyMoiTrang;
            // Model
            $congty = $this->model("CongTyModel");
            $review = $this->model("ReviewModel");
            // Tất cả công ty
            $tatCaCongTy = $congty->TatCaCongTy();
            $soCongTy = mysqli_num_rows($tatCaCongTy);
            $soTrang = ceil($soCongTy / $congTyMoiTrang);
            $congTyTrangHienTai = "";
            $congTyTrangHienTai = $congty->LayCongTyPhanTrang($soCongTyBoQua, $congTyMoiTrang);
            // View
            $this->view("admin-template", [
                "Page" => "tat-ca-cong-ty",
                "CongTy" => $congTyTrangHienTai,
                "SoTrang" => $soTrang,
                "TrangHienTai" => $trangHienTai,
                "CongTyTrangHienTai" => $congTyTrangHienTai
            ]);
        } else {
            $server = new Server();
            ob_start();
            header("Location: " . $server->get_servername() . "/quan-tri", 301);
            exit();
        }
    }

    // XÓA CÔNG TY
    public function XoaCongTy($a, $b, $c)
    {
        $kt = false;
        $idCongTy = $c;
        $kq = $this->CongTyModel->XoaCongTy($idCongTy);
        if ($kq) {
            $kt = true;
        }
        $kq2 = $this->ReviewModel->XoaReview($idCongTy);
        if ($kq2) {
            $kt = true;
        }
        if ($kt) {
            // View
            $this->view("admin-template", [
                "Page" => "quan-tri-thanh-cong"
            ]);
        } else {
            $server = new Server();
            ob_start();
            header("Location: " . $server->get_servername() . "/quan-tri", 301);
            exit();
        }
    }

    // GET DATA
    public function GetDataCongTy()
    {
        if (isset($_POST["url-company"])) {
            $urlCompany = $_POST["url-company"];
            $page = file_get_contents($urlCompany);
            @$doc = new DOMDocument();
            @$doc->loadHTML($page);
            
            $xpath = new DomXPath($doc);
            
            // Thông tin
            $nodeList = $xpath->query("//div[@class='company-info__detail']");
            $nodeCongTy = $nodeList->item(0);
            
            $tenCongTy = $nodeCongTy->getElementsByTagName('h2')
                ->item(0)
                ->getElementsByTagName('a')
                ->item(0)->nodeValue;
            $nganhNghe = $nodeCongTy->getElementsByTagName('div')
                ->item(0)
                ->getElementsByTagName('span')
                ->item(0)->nodeValue;
            $nhanVien = $nodeCongTy->getElementsByTagName('div')
                ->item(0)
                ->getElementsByTagName('span')
                ->item(2)->nodeValue;
            $diaChi = $nodeCongTy->getElementsByTagName('div')->item(1)->nodeValue;
            
            // Image
            $nodeImage = $xpath->query("//div[@class='company-info']");
            $imageUrl = $nodeImage->item(0)
                ->getElementsByTagName('img')
                ->item(0)
                ->getAttribute('src');
            $arrImage = explode("/", $imageUrl);
            $imageName = end($arrImage);
            
            // Model
            $congty = $this->model("CongTyModel");
            
            $duongDanHinhAnh = 'mvc/public/asset/companies/logo/' . $imageName;
            
            file_put_contents($duongDanHinhAnh, file_get_contents("https://reviewcongty.com" . $imageUrl));
            
            $createdDate = date("Y-m-d H:i:s");
            
            // Kiểm tra công ty có hay chưa
            $daco = $this->CongTyModel->LayCongTyBangSlug(trim($this->ToSlug(trim($tenCongTy))));
            
            if (mysqli_num_rows($daco) == 0) {
                // Thêm công ty
                $kq = $this->CongTyModel->ThemCongTy(trim($tenCongTy), trim($this->ToSlug(trim($tenCongTy))), trim($imageName), trim($nganhNghe), trim($nhanVien), trim($diaChi), $createdDate);
                if ($kq) {
                    echo "THÀNH CÔNG " . $tenCongTy;
                }
            }
            else{
                echo "ĐÃ CÓ " . $tenCongTy;
            }
        }
    }

    function ToSlug($str)
    {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }
}
?>
