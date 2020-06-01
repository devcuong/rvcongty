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
        }
        return $result;
    }
}
?>
