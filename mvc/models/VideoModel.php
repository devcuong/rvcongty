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
}
?>