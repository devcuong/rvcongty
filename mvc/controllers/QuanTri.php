<?php
class QuanTri extends Controller
{
    public $UserModel;
    
    public function __construct()
    {
        $this->UserModel = $this->model("UserModel");
    }
    
    public function Index(){
        // View
        $this->view("admin-template", [
            "Page" => "quan-tri"
        ]);
    }
    
    public function DangNhap(){
        $email = "";
        $pass = "";
        if(isset($_POST["user-email"])){
            $email = trim($_POST["user-email"]);
        }
        if(isset($_POST["user-password"])){
            $pass = md5(trim($_POST["user-password"]));
        }
        $kq = $this->UserModel->LayUserBangEmailVaPassword($email);
        $temp = "";
        while ($row = mysqli_fetch_array($kq)){
            $temp = $row["password"];
        }
        if($temp == $pass){
            header("Location: " . $servername . "/quan-tri/cong-ty", 301);
             exit();
        }
    }
}
    ?>
