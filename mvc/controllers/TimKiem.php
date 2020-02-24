<?php
class CongTy extends Controller
{
    
    public $CongTyModel;
    
    
    
    
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->CongTyModel = $this->model("CongTyModel");
        $this->ReviewModel = $this->model("ReviewModel");
        $this->ReplyModel = $this->model("ReplyModel");
    }
    
    public function CongTy(){
        if (isset($_POST["tencongty"])){
            echo $_POST["tencongty"];
        }
    }
}
?>