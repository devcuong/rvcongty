<?php
class CongTyModel extends DB{
    
        // Lấy danh sách công ty
        public function TatCaCongTy(){
            $qr = "SELECT * FROM congty";
            return mysqli_query($this->con, $qr);
        }
        
        // Lấy công ty bới id
        public function LayCongTyBangId($iD){
            $qr = "SELECT * FROM congty WHERE id = '$iD'";
            return mysqli_query($this->con, $qr);
        }
        
        // Lấy công ty để phân trang
        public function LayCongTyPhanTrang($soCongTyBoQua, $soCongTyMoiTrang){
            $qr = "SELECT * FROM congty LIMIT ".$soCongTyBoQua.','.$soCongTyMoiTrang;
            return mysqli_query($this->con, $qr);
        }
        
        // Update rate công ty
        public function UpdateRateCongTy($iD, $score){
            $qr = "UPDATE congty SET luotdanhgia = luotdanhgia + 1, tongsao = tongsao + $score, rate = tongsao/luotdanhgia WHERE id = $iD";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
}
?>