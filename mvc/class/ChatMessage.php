<?php
class ChatMessage {
    // Properties
    public $chatuser;
    public $chattime;
    public $noidung;
    public $gioitinh;
    
    // Methods
    function set_chatuser($chatuser) {
        $this->chatuser = $chatuser;
    }
    function get_chatuser() {
        return $this->chatuser;
    }
    
    function set_chattime($chattime){
        $this->chattime = $chattime;
    }
    
    function get_chattime(){
        return $this->chattime;
    }
    
    function set_noidung($noidung){
        $this->noidung = $noidung;
    }
    
    function get_noidung(){
        return $this->noidung;
    }
    
    function set_gioitinh($gioitinh){
        $this->gioitinh = $gioitinh;
    }
    
    function get_gioitinh(){
        return $this->gioitinh;
    }
}
?>
