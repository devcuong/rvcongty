<?php
class NewsModel extends DB{
        
        // Lấy tất cả tin tức
        public function TatCaNews(){
            $qr = "SELECT * FROM news";
            return mysqli_query($this->con, $qr);
        }
    
        // Lấy tin tức bằng slug
        public function LayNewsBySlug($slug){
            $qr = "SELECT * FROM news WHERE slugtieude = '$slug'";
            return mysqli_query($this->con, $qr);
        }
        
        // Lấy tin tức bằng ID
        public function LayNewsById($id){
            $qr = "SELECT * FROM news WHERE id = $id";
            return mysqli_query($this->con, $qr);
        }
        /*PHÂN TRANG*/
        // Lấy news để phân trang
        public function LayNewsPhanTrang($soNewsBoQua, $newsMoiTrang){
            $qr = "SELECT * FROM news ORDER BY thoigian DESC LIMIT $soNewsBoQua, $newsMoiTrang" ;
            return mysqli_query($this->con, $qr);
        }
    
        /*THÊM TIN TỨC*/
        public function ThemNews($tieude, $slugtieude, $thumbnail,$motangan, $noidung, $tagnews ,$nguon, $thoigian) {
            $qr= "INSERT INTO news (tieude, slugtieude, thumbnail, motangan,noidung, tagnews ,nguon, thoigian) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($this->con);
            $result = 0;
            //echo $result;
            if(!mysqli_stmt_prepare($stmt, $qr)){
                $result = "SQL statement failed";
            }else{
                mysqli_stmt_bind_param($stmt, "ssssssss", $tieude, $slugtieude, $thumbnail,$motangan,$noidung, $tagnews, $nguon, $thoigian);
                $result = mysqli_stmt_execute($stmt);
            }
            return $qr;
        }
        /* CẬP NHẬT NEWS */
        // Update reply có sẵn
        public function CapNhatNews($tieude, $slugtieude, $thumbnail,$motangan, $noidung, $tagnews ,$nguon, $thoigian, $id){
            $qr = "UPDATE news SET tieude = ?, slugtieude = ?, thumbnail = ?, motangan = ?, noidung = ?, tagnews = ?, nguon = ?, thoigian = ? WHERE id = ?";
            $stmt = mysqli_stmt_init($this->con);
            $result = 0;
            if(!mysqli_stmt_prepare($stmt, $qr)){
                echo "SQL statement failed";
            }else{
                mysqli_stmt_bind_param($stmt, "sssssssss",$tieude, $slugtieude, $thumbnail, $motangan, $noidung, $tagnews, $nguon, $thoigian, $id);
                $result= mysqli_stmt_execute($stmt);
            }
            return $result;
        }
        // Xóa NEWS theo ID
        public function XoaNews($iDNews){
            $qr = "DELETE FROM news WHERE id = $iDNews";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
        
        /*LẤY TIN TỨC TRANG CHỦ*/
        public function Lay8TinMoiNhat(){
            $qr = "SELECT * FROM news ORDER BY id DESC LIMIT 8";
            return mysqli_query($this->con, $qr);
        }
        
        /*CẬP NHẬT LƯỢT VIEW*/
        public function CapNhatLuotView($idNews){
            $qr = "UPDATE news SET luotxem = luotxem + 1 WHERE id = $idNews";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
}
?>
