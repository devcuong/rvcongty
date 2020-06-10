<?php
class NewsModel extends DB{
        
        // Lấy tất cả tin tức
        public function TatCaNews(){
            $qr = "SELECT * FROM news";
            return mysqli_query($this->con, $qr);
        }
        
        // Lấy tin tức xem nhiều nhất
        public function Lay8NewsXemNhieuNhat()
        {
            $qr = "SELECT * FROM news ORDER BY luotxem DESC LIMIT 8";
            return mysqli_query($this->con, $qr);
        }
        
        
        // Lấy 5 tin tức mới nhất
        public function Lay5NewsMoiNhat(){
            $qr = "SELECT * FROM news ORDER BY id DESC LIMIT 5";
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
        
        // Lấy tin tức bằng loại tin
        public function LayNewsByLoai($loai, $sotin){
            $qr = "SELECT * FROM news WHERE loainews = '$loai' LIMIT $sotin";
            //return $qr;
            return mysqli_query($this->con, $qr);
        }
        
        // Lấy tin tức bằng loại tin không giới hạn số tin
        public function LayNewsByLoaiNoLimit($loai){
            $qr = "SELECT * FROM news WHERE loainews = '$loai'";
            return mysqli_query($this->con, $qr);
        }
        
        // Lấy tin tức liên quan
        public function Lay3NewsLienQuan($tags){
            $condition = '';
            $query = explode(" ", $tags);
            foreach($query as $text)
            {
                $condition .= "tagnews LIKE '%".trim($text)."%' OR ";
            }
            $condition = substr($condition, 0, -4);
            $qr = "SELECT * FROM news WHERE " . $condition. " ORDER BY luotxem DESC limit 3";
            
           return mysqli_query($this->con, $qr);
           //return $qr;
        }
        
        // Lấy tin tức tìm kiếm
        public function  LayNewsTimKiem($tuKhoa){
            $condition = '';
            $query = explode(" ", $tuKhoa);
            foreach($query as $text)
            {
                $condition .= "tieude LIKE '%".trim($text)."%' OR ";
            }
            $condition = substr($condition, 0, -4);
            $qr = "SELECT * FROM news WHERE " . $condition. " ORDER BY luotxem DESC";
            
            return mysqli_query($this->con, $qr);
        }
        
        /*PHÂN TRANG*/
        // phân trang trang kết quả tìm kiếm
        public function  LayNewsTimKiemDePhanTrang($tuKhoa,$soNewsBoQua,$newsMoiTrang){
            $condition = '';
            $query = explode(" ", $tuKhoa);
            foreach($query as $text)
            {
                $condition .= "tieude LIKE '%".trim($text)."%' OR ";
            }
            $condition = substr($condition, 0, -4);
            $qr = "SELECT * FROM news WHERE " . $condition. " ORDER BY luotxem DESC LIMIT $soNewsBoQua, $newsMoiTrang";
            
            return mysqli_query($this->con, $qr);
        }
        // Lấy news để phân trang
        public function LayNewsPhanTrang($soNewsBoQua, $newsMoiTrang){
            $qr = "SELECT * FROM news ORDER BY thoigian DESC LIMIT $soNewsBoQua, $newsMoiTrang" ;
            return mysqli_query($this->con, $qr);
        }
        
        // Lấy news để phân trang theo loại tin
        public function LayNewsPhanTrangTheoLoai($loaiNews, $soNewsBoQua, $newsMoiTrang){
            $qr = "SELECT * FROM news WHERE loainews = '$loaiNews' ORDER BY thoigian DESC LIMIT $soNewsBoQua, $newsMoiTrang" ;
            return mysqli_query($this->con, $qr);
        }
    
        /*THÊM TIN TỨC*/
        public function ThemNews($tieude, $slugtieude, $thumbnail,$motangan, $noidung, $tagnews ,$nguon, $webnguontin, $loaitin, $thoigian) {
            $qr= "INSERT INTO news (tieude, slugtieude, thumbnail, motangan,noidung, tagnews ,nguon, webnguon, loainews, thoigian) VALUES(?, ?, ?, ?, ?, ?, ?, ?,?,?)";
            $stmt = mysqli_stmt_init($this->con);
            $result = 0;
            //echo $result;
            if(!mysqli_stmt_prepare($stmt, $qr)){
                $result = "SQL statement failed";
            }else{
                mysqli_stmt_bind_param($stmt, "ssssssssss", $tieude, $slugtieude, $thumbnail,$motangan,$noidung, $tagnews, $nguon, $webnguontin, $loaitin, $thoigian);
                $result = mysqli_stmt_execute($stmt);
            }
            return $qr;
        }
        /* CẬP NHẬT NEWS */
        // Update reply có sẵn
        public function CapNhatNews($tieude, $slugtieude, $thumbnail,$motangan, $noidung, $tagnews ,$nguon,$webnguontin,$loaitin, $thoigian, $id){
            $qr = "UPDATE news SET tieude = ?, slugtieude = ?, thumbnail = ?, motangan = ?, noidung = ?, tagnews = ?, nguon = ?, webnguon = ?, loainews = ?, thoigian = ? WHERE id = ?";
            $stmt = mysqli_stmt_init($this->con);
            $result = 0;
            if(!mysqli_stmt_prepare($stmt, $qr)){
                echo "SQL statement failed";
            }else{
                mysqli_stmt_bind_param($stmt, "sssssssssss",$tieude, $slugtieude, $thumbnail, $motangan, $noidung, $tagnews, $nguon, $webnguontin, $loaitin, $thoigian, $id);
                $result= mysqli_stmt_execute($stmt);
            }
            return $result;
        }
        /* Xóa NEWS theo ID */
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
