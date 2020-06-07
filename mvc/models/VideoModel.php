<?php
class VideoModel extends DB{
    /*THÊM VIDEO*/
    public function ThemVideo($tieudevideo, $slugvideo, $playlist, $url, $videoid, $thoiluong, $thoigian) {
        $qr= "INSERT INTO video (tieudevideo, slugvideo, playlist, url, videoid, thoiluong, thoigian) VALUES(?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($this->con);
        $result = 0;
        if(!mysqli_stmt_prepare($stmt, $qr)){
            $result = "SQL statement failed";
        }else{
            mysqli_stmt_bind_param($stmt, "sssssss", $tieudevideo, $slugvideo, $playlist, $url, $videoid, $thoiluong, $thoigian);
            $result = mysqli_stmt_execute($stmt);
        }
        return $result;
    }
    
    /*LẤY TẤT CẢ VIDEO*/
    public function TatCaVideo(){
        $qr = "SELECT * FROM video";
        return mysqli_query($this->con, $qr);
    }
    
    /*LẤY VIDEO PHÂN TRANG*/
    public function LayVideoPhanTrang($soVideoBoQua, $videoMoiTrang){
        $qr = "SELECT * FROM video ORDER BY thoigian DESC LIMIT $soVideoBoQua, $videoMoiTrang" ;
        return mysqli_query($this->con, $qr);
    }
    
    /*LẤY VIDEO BỞI ID*/
    public function LayVideoById($videoId){
        $qr = "SELECT * FROM video WHERE id = $videoId";
        return mysqli_query($this->con, $qr);
    }
    // LẤY VIDEO BỞI PLAYLIST-ID
    public function LayVideoByPlaylistId($playId){
        $qr = "SELECT * FROM video WHERE playlist = $playId";
        return mysqli_query($this->con, $qr);
    }
    // LẤY VIDEO TÌM KIẾM
    public function  LayVideoTimKiem($tuKhoa){
        $condition = '';
        $query = explode(" ", $tuKhoa);
        foreach($query as $text)
        {
            $condition .= "tieudevideo LIKE '%".trim($text)."%' OR ";
        }
        $condition = substr($condition, 0, -4);
        $qr = "SELECT * FROM video WHERE " . $condition. " ORDER BY thoigian DESC";
        return mysqli_query($this->con, $qr);
    }
    // PHÂN TRANG VIDEO TÌM KIẾM
    public function PhanTrangVideoTimKiem($tuKhoa, $soVideoBoQua, $videoMoiTrang){
        $condition = '';
        $query = explode(" ", $tuKhoa);
        foreach($query as $text)
        {
            $condition .= "tieudevideo LIKE '%".trim($text)."%' OR ";
        }
        $condition = substr($condition, 0, -4);
        $qr = "SELECT * FROM video WHERE " . $condition. " ORDER BY thoigian DESC LIMIT $soVideoBoQua, $videoMoiTrang";
        return mysqli_query($this->con, $qr);
    }
    
    /*CẬP NHẬT LƯỢT VIEW VIDE0*/
    public function CapNhatLuotView($idVideo){
        $qr = "UPDATE video SET luotxem = luotxem + 1 WHERE id = $idVideo";
        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return $result;
    }
    
    /*CẬP NHẬT LƯỢT VIEW VIDEO BẰNG PLAYLIST*/
    public function CapNhatLuotViewBangPlaylist($idPlaylist){
        $qr = "UPDATE video SET luotxem = luotxem + 1 WHERE playlist = $idPlaylist";
        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return $result;
    }
    
    /*XÓA VIDEO*/
    public function XoaVideo($idVideo){
        $qr = "DELETE FROM video WHERE id = $idVideo";
        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return $result;
    }
    
    /*XÓA VIDEO BY ID PLAYLIST*/
    public function XoaVideoByIdPlaylist($idPlaylist){
        $qr = "DELETE FROM video WHERE playlist = $idPlaylist";
        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return $result;
    }
}
?>