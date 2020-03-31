<?php
require 'mvc/class/ChatMessage.php';
class Chat extends Controller
{
    function Index()
    {
       // echo session_id();
        // View
        $this->view("chat-template", [
            "Page" => "chat"]);
    }
    
    function GuiMessage($a, $b, $c){
        $noiDungMessage = "";
        $chatUser = "Ngạn mắt biếc";
        $gioiTinh = "nam";
        $idCongTy = $c;
        $sessionId = session_id();
        if (isset($_POST["chat-message"])) {
            $noiDungMessage= trim($_POST["chat-message"]);
        }
        
    }
}
?>