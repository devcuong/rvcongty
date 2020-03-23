<?php
require 'mvc/class/Server.php';

class QuanTri extends Controller
{

    // Khai báo model
    public $UserModel;

    public $CongTyModel;

    public $ReviewModel;

    public $ReplyModel;

    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
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
        //echo $email;
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

    // QUẢN TRỊ VIÊN ĐĂNG XUẤT
    public function DangXuat()
    {
        unset($_SESSION['email']);
        if (! isset($_SESSION['email'])) {
            // View
            $this->view("admin-template", [
                "Page" => "quan-tri"
            ]);
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
        if (isset($_SESSION["email"])) {
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
    }

    // GET DATA
    public function GetDataCongTy($a = NULL)
    {
        $urlCompany = "";
        if (isset($_POST["url-company"])) {
            $urlCompany = $_POST["url-company"];
        } else if ($a != null) {
            $urlCompany = $a;
        }
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
        
        // First comment
        $nodeComment = $xpath->query("//div[@class='card-content']");
        $firstComment = $nodeComment->item(0)->nodeValue;
        
        // Model
        $congty = $this->model("CongTyModel");
        
        $duongDanHinhAnh = 'mvc/public/asset/companies/logo/' . $imageName;
        
        file_put_contents($duongDanHinhAnh, file_get_contents("https://reviewcongty.com" . $imageUrl));
        
        $createdDate = date("Y-m-d H:i:s");
        
        // Kiểm tra công ty có hay chưa
        $daco = $this->CongTyModel->LayCongTyBangSlug(trim($this->ToSlug(trim($tenCongTy))));
        
        if (mysqli_num_rows($daco) == 0) {
            $kt = false;
            $db = new DB();
            // Thêm công ty
            $kq = $this->CongTyModel->ThemCongTy(trim($tenCongTy), trim($this->ToSlug(trim($tenCongTy))), trim($imageName), trim($nganhNghe), trim($nhanVien), trim($diaChi), $createdDate);
            $lastId = $this->CongTyModel->GetLastId();
            $kq2 = $this->ReviewModel->ThemReview("Ẩn danh", "Dev", 3, $firstComment, $lastId, $createdDate, "Không có contact");
            $kq3 = $this->CongTyModel->UpdateRateCongTy($lastId, 3, $createdDate);
            if ($kq3) {
                echo "THÀNH CÔNG " . $tenCongTy . " " . $lastId;
            }
        } else {
            echo "ĐÃ CÓ " . $tenCongTy;
        }
    }

    // get data page
    public function GetDataPageCongTy()
    {
        if (isset($_POST["url-page"])) {
            $url = "https://reviewcongty.com";
            $urlCompany = $_POST["url-page"];
            $page = file_get_contents($urlCompany);
            @$doc = new DOMDocument();
            @$doc->loadHTML($page);
            
            $xpath = new DomXPath($doc);
            
            // Thông tin
            $nodeList = $xpath->query("//div[@class='company-item']");
            // $nodeCongTy = $nodeList->item(0)->getAttribute('data-href');
            foreach ($nodeList as $node) {
                echo $this->GetDataCongTy($url . $node->getAttribute('data-href'));
            }
            
            // echo $nodeCongTy;
        }
    }

    /* cập nhật slug */
    function CapNhatSlug($a, $b, $c, $d)
    {
        $idCongTy = $c;
        $tenCongTy = $d;
        if (isset($_SESSION["email"])) {
            $slugCongTy = $this->ToSlug($tenCongTy);
            $kq = $this->CongTyModel->CapNhatSlug($idCongTy, $slugCongTy);
            if ($kq) {
                // View
                $this->view("admin-template", [
                    "Page" => "quan-tri-thanh-cong"
                ]);
            }
        }
    }

    /* review mới nhất */
    function ReviewMoiNhat($a, $b, $c = null)
    {
        if (isset($_SESSION["email"])) {
            $trangHienTai = 1;
            $reviewMoiTrang = 10;
            if ($c != null) {
                $trangHienTai = $c;
            }
            $soReviewBoQua = ($trangHienTai - 1) * $reviewMoiTrang;
            // Model
            $review = $this->model("ReviewModel");
            // Tất cả công ty
            $tatCaReview = $review->LayTatCaReview();
            $soCongTy = mysqli_num_rows($tatCaReview);
            $soTrang = ceil($soCongTy / $reviewMoiTrang);
            $reviewTrangHienTai = $review->LayReviewPhanTrangQuanTri($soReviewBoQua, $reviewMoiTrang);
            // View
            $this->view("admin-template", [
                "Page" => "review-moi-nhat",
                "SoTrang" => $soTrang,
                "TrangHienTai" => $trangHienTai,
                "ReviewTrangHienTai" => $reviewTrangHienTai
            ]);
        } else {
            $server = new Server();
            ob_start();
            header("Location: " . $server->get_servername() . "/quan-tri", 301);
            exit();
        }
    }

    /* xóa review */
    function XoaReview($a, $b, $c = NULL, $d = NULL, $e = NULL)
    {
        if (isset($_SESSION["email"])) {
            $kt = false;
            $idReview = $c;
            $rate = $d;
            $congty = $e;
            $kq = $this->ReviewModel->XoaReviewBoiIdReview($idReview);
            if ($kq) {
                $kt = true;
            }
            $kq2 = $this->ReplyModel->XoaReplyTheoIdReview($idReview);
            if ($kq2) {
                $kt = true;
            }
            $kq3 = $this->CongTyModel->UpdateRateCongTyXoaReview($congty, $rate);
            if ($kq3) {
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
    }

    function ToSlug($str, $options = array())
    {
        // Make sure string is in UTF-8 and strip invalid UTF-8 characters
        $str = mb_convert_encoding((string) $str, 'UTF-8', mb_list_encodings());
        
        $defaults = array(
            'delimiter' => '-',
            'limit' => null,
            'lowercase' => true,
            'replacements' => array(),
            'transliterate' => true
        );
        
        // Merge options
        $options = array_merge($defaults, $options);
        
        // Lowercase
        if ($options['lowercase']) {
            $str = mb_strtolower($str, 'UTF-8');
        }
        
        $char_map = array(
            // Latin
            'á' => 'a',
            'à' => 'a',
            'ả' => 'a',
            'ã' => 'a',
            'ạ' => 'a',
            'ă' => 'a',
            'ắ' => 'a',
            'ằ' => 'a',
            'ẳ' => 'a',
            'ẵ' => 'a',
            'ặ' => 'a',
            'â' => 'a',
            'ấ' => 'a',
            'ầ' => 'a',
            'ẩ' => 'a',
            'ẫ' => 'a',
            'ậ' => 'a',
            'đ' => 'd',
            'é' => 'e',
            'è' => 'e',
            'ẻ' => 'e',
            'ẽ' => 'e',
            'ẹ' => 'e',
            'ê' => 'e',
            'ế' => 'e',
            'ề' => 'e',
            'ể' => 'e',
            'ễ' => 'e',
            'ệ' => 'e',
            'í' => 'i',
            'ì' => 'i',
            'ỉ' => 'i',
            'ĩ' => 'i',
            'ị' => 'i',
            'ó' => 'o',
            'ò' => 'o',
            'ỏ' => 'o',
            'õ' => 'o',
            'ọ' => 'o',
            'ô' => 'o',
            'ố' => 'o',
            'ồ' => 'o',
            'ổ' => 'o',
            'ỗ' => 'o',
            'ộ' => 'o',
            'ơ' => 'o',
            'ớ' => 'o',
            'ờ' => 'o',
            'ở' => 'o',
            'ỡ' => 'o',
            'ợ' => 'o',
            'ú' => 'u',
            'ù' => 'u',
            'ủ' => 'u',
            'ũ' => 'u',
            'ụ' => 'u',
            'ư' => 'u',
            'ứ' => 'u',
            'ừ' => 'u',
            'ử' => 'u',
            'ữ' => 'u',
            'ự' => 'u',
            'ý' => 'y',
            'ỳ' => 'y',
            'ỷ' => 'y',
            'ỹ' => 'y',
            'ỵ' => 'y'
        );
        
        // Make custom replacements
        $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
        
        // Transliterate characters to ASCII
        if ($options['transliterate']) {
            $str = str_replace(array_keys($char_map), $char_map, $str);
        }
        
        // Replace non-alphanumeric characters with our delimiter
        $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
        
        // Remove duplicate delimiters
        $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
        
        // Truncate slug to max. characters
        $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
        
        // Remove delimiter from ends
        $str = trim($str, $options['delimiter']);
        
        return $str;
    }
}
?>
