<?php

class PlaylistModel extends DB
{

    /* THÊM PLAYLIST */
    public function ThemPlaylist($tenplaylist, $slugplaylist, $sovideo, $thoigian)
    {
        $qr = "INSERT INTO playlist (tenplaylist, slugplaylist, sovideo, thoigian) VALUES(?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($this->con);
        $result = 0;
        if (! mysqli_stmt_prepare($stmt, $qr)) {
            $result = "SQL statement failed";
        } else {
            mysqli_stmt_bind_param($stmt, "ssss", $tenplaylist, $slugplaylist, $sovideo, $thoigian);
            $result = mysqli_stmt_execute($stmt);
            // echo $stmt->error;
        }
        return $result;
    }

    // LẤY TẤT CẢ PLAYLIST
    public function TatCaPlaylist()
    {
        $qr = "SELECT * FROM playlist";
        return mysqli_query($this->con, $qr);
    }

    /* UPDATE THÔNG TIN PLAYLIST KHI THÊM VIDEO */
    public function UpdateInfoKhiCapNhatVideo($action, $idPlaylist, $imageThumbnail, $thoiGian)
    {
        $qr = "";
        if ($action == "add") {
            $qr = "UPDATE playlist SET sovideo = sovideo + 1, thumbnail = '$imageThumbnail', thoigian = '$thoiGian' WHERE id = $idPlaylist";
        } else {
            $qr = "UPDATE playlist SET sovideo = sovideo - 1, thoigian = '$thoiGian' WHERE id = $idPlaylist";
        }
        $result = false;
        if (mysqli_query($this->con, $qr)) {
            $result = true;
        }
        return $result;
    }
    /* PHÂN TRANG */
    // Lấy playlist để phân trang
    public function LayPlaylistPhanTrang($soPlaylistBoQua, $PlaylistMoiTrang)
    {
        $qr = "SELECT * FROM playlist ORDER BY thoigian DESC LIMIT $soPlaylistBoQua, $PlaylistMoiTrang";
        return mysqli_query($this->con, $qr);
    }
    // Lấy playlist bằng id
    public function LayPlaylistById($playId){
        $qr = "SELECT * FROM playlist WHERE id = $playId";
        return mysqli_query($this->con, $qr);
    }

    /* XÓA PLAYLIST */
    public function XoaPlaylist($idPlaylist)
    {
        $qr = "DELETE FROM playlist WHERE id = $idPlaylist";
        $result = false;
        if (mysqli_query($this->con, $qr)) {
            $result = true;
        }
        return $result;
    }
}
?>
