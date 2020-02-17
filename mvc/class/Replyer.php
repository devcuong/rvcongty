<?php
class Replyer {
    // Properties
    public $replyer;
    public $likeordislike;
    public $noidung;
    public $thoigian;
    
    // Methods
    function set_replyer($replyer) {
        $this->replyer = $replyer;
    }
    function get_replyer() {
        return $this->replyer;
    }
    
    function set_likeordislike($likeordislike){
        $this->likeordislike = $likeordislike;
    }
    
    function get_likeordislike(){
        return $this->likeordislike;
    }
    
    function set_noidung($noidung){
        $this->noidung = $noidung;
    }
    
    function get_noidung(){
        return $this->noidung;
    }
    
    function set_thoigian($thoigian){
        $this->thoigian = $thoigian;
    }
    
    function get_thoigian(){
        return $this->thoigian;
    }
}
?>
