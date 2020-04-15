<?php
class NewsModel extends DB{
        // Lấy tin tức bằng slug
        public function LayTinTucBySlug($slug){
            $qr = "SELECT * FROM news WHERE slugtieude = '$slug'";
            return mysqli_query($this->con, $qr);
        }
        
        // Lấy tin tức bằng ID
        public function LayTinTucById($id){
            $qr = "SELECT * FROM news WHERE id = $id";
            return mysqli_query($this->con, $qr);
        }
    
        /*THÊM TIN TỨC*/
        public function ThemTinTuc($tieude, $slugtieude, $thumbnail, $noidung, $nguon, $thoigian) {
            $qr= "INSERT INTO news (tieude, slugtieude, thumbnail, noidung, nguon, thoigian) VALUES(?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($this->con);
            $result = 0;
            if(!mysqli_stmt_prepare($stmt, $qr)){
                $result = "SQL statement failed";
            }else{
                mysqli_stmt_bind_param($stmt, "ssssss", $tieude, $slugtieude, $thumbnail, $noidung, $nguon, $thoigian);
                $result = mysqli_stmt_execute($stmt);
            }
            return $result;
        }
        
        /*LẤY TIN TỨC TRANG CHỦ*/
        public function Lay8TinMoiNhat(){
            $qr = "SELECT * FROM news ORDER BY id DESC LIMIT 8";
            return mysqli_query($this->con, $qr);
        }
        
}
?>
