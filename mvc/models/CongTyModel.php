<?php
class CongTyModel extends DB{
        public function TatCaCongTy(){
            $qr = "SELECT * FROM congty";
            return mysqli_query($this->con, $qr);
        }
        public function LayCongTyBangId($iD){
            $qr = "SELECT * FROM congty WHERE id = '$iD'";
            return mysqli_query($this->con, $qr);
        }
}
?>