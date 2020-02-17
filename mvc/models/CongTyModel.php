<?php
class CongTyModel extends DB{
        public function TatCaCongTy(){
            $qr = "SELECT * FROM congty";
            return mysqli_query($this->con, $qr);
        }
}
?>