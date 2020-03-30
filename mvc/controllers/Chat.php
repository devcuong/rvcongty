<?php
class Chat extends Controller
{
    function Index()
    {
       // echo session_id();
        // View
        $this->view("chat-template", [
            "Page" => "chat"]);
    }
    
    function GuiMessage(){
        $chatMessage = "";
        if (isset($_POST["chat-message"])) {
            $chatMessage = trim($_POST["chat-message"]);
        }
        echo "from server".$chatMessage;
    }
}
?>