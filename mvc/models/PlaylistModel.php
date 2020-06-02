<?php
class PlaylistModel extends DB{
    /*THÊM PLAYLIST*/
    public function ThemPlaylist($tenplaylist, $slugplaylist, $sovideo, $thoigian) {
        $qr= "INSERT INTO playlist (tenplaylist, slugplaylist, sovideo, thoigian) VALUES(?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($this->con);
        $result = 0;
        if(!mysqli_stmt_prepare($stmt, $qr)){
            $result = "SQL statement failed";
        }else{
            mysqli_stmt_bind_param($stmt, "ssss", $tenplaylist, $slugplaylist, $sovideo, $thoigian);
            $result = mysqli_stmt_execute($stmt);
            //echo $stmt->error;
        }
        return $result;
    }
    // LẤY TẤT CẢ PLAYLIST
    public function TatCaPlaylist(){
        $qr = "SELECT * FROM playlist";
        return mysqli_query($this->con, $qr);
    }
    
    // TĂNG SỐ VIDEO
    public function TangSoVideo($idPlaylist) {
        $qr = "UPDATE playlist SET sovideo = sovideo + 1 WHERE id = $idPlaylist";
        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return $result;
    }
}
?>
