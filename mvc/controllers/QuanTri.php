<?php
require 'mvc/class/Server.php';

class QuanTri extends Controller
{

    public $UserModel;

    public function __construct()
    {
        $this->UserModel = $this->model("UserModel");
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

    public function QuanTriCongTy()
    {
        // View
        $this->view("admin-template", [
            "Page" => "quan-tri-cong-ty"
        ]);
    }

    public function ThemCongTy()
    {
        if (isset($_POST["btn-submit"])) {
            $tencongty = "";
            $slugcongty = "";
            $nganhnghe = "";
            $nhanvien = "";
            $diachi = "";
            if(isset($_POST["ten-cong-ty"])){
                $tencongty = $_POST["ten-cong-ty"];
                $slugcongty = $_POST["slug-cong-ty"];
            }
            if(isset($_POST["nganhnghe"])){
                $nganhnghe = $_POST["nganh-nghe"];
            }
            if(isset($_POST["nhanvien"])){
                $nhanvien = $_POST["nhan-vien"];
            }
            if(isset($_POST["diachi"])){
                $diachi = $_POST["diachi"];
            }
            if (isset($_POST["image"])) {
                $data = $_POST["image"];
            }
        } else {
            // View
            $this->view("admin-template", [
                "Page" => "them-cong-ty"
            ]);
        }
    }
}
?>
