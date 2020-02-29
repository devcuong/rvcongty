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
        
        /*PHÂN TRANG*/
        // Lấy công ty để phân trang
        public function LayCongTyPhanTrang($soCongTyBoQua, $soCongTyMoiTrang){
            $qr = "SELECT * FROM congty LIMIT ".$soCongTyBoQua.','.$soCongTyMoiTrang;
            return mysqli_query($this->con, $qr);
        }
        // Lấy công ty best để phân trang
        public function LayCongTyBestPhanTrang($soCongTyBoQua, $soCongTyMoiTrang){
            $qr = "SELECT * FROM congty ORDER BY rate DESC LIMIT ".$soCongTyBoQua.','.$soCongTyMoiTrang;
            return mysqli_query($this->con, $qr);
        }
        
        // Lấy công ty worst để phân trang
        public function LayCongTyWorstPhanTrang($soCongTyBoQua, $soCongTyMoiTrang){
            $qr = "SELECT * FROM congty ORDER BY rate ASC LIMIT ".$soCongTyBoQua.','.$soCongTyMoiTrang;
            return mysqli_query($this->con, $qr);
        }
        /*HẾT PHÂN TRANG*/
        
        /*TÌM KIẾM*/
        /*Lấy công ty theo ký tự trong tên*/
        public function LayCongTyTheoKyTu($ten){
            $qr = "SELECT * FROM congty WHERE tencongty LIKE '%$ten%'";
            return mysqli_query($this->con, $qr);
        }
        /*Tìm công ty theo từ khóa và phân trang*/
        public function PhanTrangCongTyTheoTuKhoa($soCongTyBoQua, $soCongTyMoiTrang, $ten){
            $qr = "";
            if($ten != ""){
                $qr = "SELECT * FROM congty WHERE tencongty LIKE '%$ten%' LIMIT $soCongTyBoQua,$soCongTyMoiTrang";
            }else{
                $qr = "SELECT * FROM congty LIMIT $soCongTyBoQua,$soCongTyMoiTrang";
            }
            return mysqli_query($this->con, $qr);
            //return $qr;
        }
        /*HẾT TÌM KIẾM*/
        // Update rate công ty
        public function UpdateRateCongTy($iD, $score){
            $qr = "UPDATE congty SET luotdanhgia = luotdanhgia + 1, tongsao = tongsao + $score, rate = tongsao/luotdanhgia WHERE id = $iD";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
        
        /*THÊM CÔNG TY*/
        public function ThemCongTy($tencongty, $slugcongty, $fileName, $nganhnghe, $nhanvien, $diachi) {
            $qr= "INSERT INTO congty (tencongty, slugcongty, logo, nganhnghe, nhanvien, diachi) VALUES(?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($this->con);
            $result = 0;
            if(!mysqli_stmt_prepare($stmt, $qr)){
                $result = "SQL statement failed";
            }else{
                mysqli_stmt_bind_param($stmt, "ssssss", $tencongty, $slugcongty, $fileName, $nganhnghe, $nhanvien, $diachi);
                $result =mysqli_stmt_execute($stmt);
            }
            return $result;
        }
}
?>