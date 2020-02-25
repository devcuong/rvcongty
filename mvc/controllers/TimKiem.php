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
            $tuKhoa = $_POST["tencongty"];
            $congTyModel = $this->CongTyModel;
            $allKetQua = $congTyModel->LayCongTyTheoKyTu($tuKhoa);
            $resultArrayKetQua = $allKetQua->fetch_all(MYSQLI_ASSOC);
            echo json_encode($resultArrayKetQua);
        }
    }
    
    public function TrangKetQua(){
        if(isset($_POST["company-search"])){
            // View
            $this->view("main-template", [
                "Page" => "trang-ket-qua"
            ]);
        }
    }
}
?>