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
}
?>