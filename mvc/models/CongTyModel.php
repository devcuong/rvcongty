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
        
        // Lấy công ty bằng slug
        public function LayCongTyBangSlug($slug){
            $qr = "SELECT * FROM congty WHERE slugcongty = '$slug'";
            return mysqli_query($this->con, $qr);
            //return $qr;
        }
        
        /*PHÂN TRANG*/
        // Lấy công ty để phân trang
        public function LayCongTyPhanTrang($soCongTyBoQua, $soCongTyMoiTrang){
            $qr = "SELECT * FROM congty ORDER BY thoigian DESC LIMIT $soCongTyBoQua, $soCongTyMoiTrang" ;
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
        public function UpdateRateCongTy($iD, $score, $thoigian){
            $qr = "UPDATE congty SET luotdanhgia = luotdanhgia + 1, tongsao = tongsao + $score, rate = tongsao/luotdanhgia, thoigian = '$thoigian' WHERE id = $iD";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
        // Update rate công ty giảm
        public function UpdateRateCongTyXoaReview($iD, $score){
            $qr = "UPDATE congty SET luotdanhgia = luotdanhgia - 1, tongsao = tongsao - $score, rate = tongsao/luotdanhgia WHERE id = $iD";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
        
        /*THÊM CÔNG TY*/
        public function ThemCongTy($tencongty, $slugcongty, $fileName, $nganhnghe, $nhanvien, $diachi, $thoigian) {
            $qr= "INSERT INTO congty (tencongty, slugcongty, logo, nganhnghe, nhanvien, diachi, thoigian) VALUES(?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($this->con);
            $result = 0;
            if(!mysqli_stmt_prepare($stmt, $qr)){
                $result = "SQL statement failed";
            }else{
                mysqli_stmt_bind_param($stmt, "sssssss", $tencongty, $slugcongty, $fileName, $nganhnghe, $nhanvien, $diachi, $thoigian);
                $result =mysqli_stmt_execute($stmt);
            }
            return $result;
        }
        
        public function GetLastId(){
            return $this->con->insert_id;
        }
        
        /*XÓA CÔNG TY*/
        public function XoaCongTy($idCongTy){
            $qr = "DELETE FROM congty WHERE id = '$idCongTy'";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
        
        /*CẬP NHẬT SLUG CÔNG TY*/
        public function CapNhatSlug($id, $slug){
            $qr = "UPDATE congty SET slugcongty = '$slug' WHERE id = $id";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
}
?>