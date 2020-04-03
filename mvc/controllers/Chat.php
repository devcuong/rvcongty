<?php
require 'mvc/class/ChatMessage.php';
class Chat extends Controller
{
    public $ChatModel;
    
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->ChatModel = $this->model("ChatModel");
    }
    
    function Index()
    {
        // echo session_id();
        // View
        $this->view("chat-template", [
            "Page" => "chat"]);
    }
    
    function ReadFile(){
        $fileName = "";
        if (isset($_POST["cong-ty"])){
            $fileName=$_POST["cong-ty"];
        }
        else{
            $fileName = "f1";
        }
        $textFile = "mvc/public/asset/chatfile/".$fileName.".txt";
        $chat = file_get_contents($textFile);
        echo $chat;
    }
    
    function GuiMessage(){
        $noiDungMessage = "";
        $congTy = "";
        $chatUser = "Ngạn mắt biếc";
        $gioiTinh = "nam";
        $sessionId = session_id();
        $chatTime = date("Y-m-d H:i:s");
        $arrData = [];
        if (isset($_POST["chat-message"])) {
            $noiDungMessage = trim($_POST["chat-message"]);
        }
        if (isset($_POST["cong-ty"])) {
            $congTy = trim($_POST["cong-ty"]);
        }
        $chatMessage = new ChatMessage();
        $chatMessage->chatuser = $chatUser;
        $chatMessage->gioitinh = $gioiTinh;
        $chatMessage->noidung = $noiDungMessage;
        $chatMessage->sessionid = $sessionId;
        $chatMessage->chattime = $chatTime;
        /*$chatKiemTra = $this->ChatModel->LayChatByIdCongTy($idCongTy);
        if (mysqli_num_rows($chatKiemTra) > 0) {
            while ($r = mysqli_fetch_array($chatKiemTra)) {
                $noidung = $r["noidung"];
            }
            $arrData = json_decode($noidung);
            array_push($arrData, $chatMessage);
            $kq = $this->ChatModel->CapNhatChatByIdCongTy($idCongTy, json_encode($arrData, JSON_UNESCAPED_UNICODE));
            echo $kq;
        }else {
            //$arrData = json_decode($noidung);
            array_push($arrData, $chatMessage);
            $kq = $this->ChatModel->ThemChatByIdCongTy($idCongTy, json_encode($arrData, JSON_UNESCAPED_UNICODE));
            echo $kq;
        }*/
        //array_push($arrData, $chatMessage);
        $kq = $this->ChatModel->ThemChatByIdCongTy($congTy,json_encode($chatMessage, JSON_UNESCAPED_UNICODE));
        echo $kq;
        
    }
}
?>