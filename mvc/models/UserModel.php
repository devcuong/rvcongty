<?php
class UserModel extends DB{
    // Lấy review bằng id review
    public function LayUserBangEmailVaPassword($email){
        $qr = "SELECT * FROM user WHERE email = '$email'";
        return mysqli_query($this->con, $qr);
        //return $qr;
    }
}
?>
