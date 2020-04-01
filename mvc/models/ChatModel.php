<?php
class ChatModel extends DB{
    public function LayChatByIdCongTy($idCongTy){
        $qr = "SELECT * FROM Chat WHERE congty = $idCongTy";
        return mysqli_query($this->con, $qr);
    }
    
    // Update chat có sẵn
    public function CapNhatChatByIdCongTy($idCongTy, $noidung){
        /*$qr = "UPDATE chat SET noidung = ? WHERE congty = ?";
        $stmt = mysqli_stmt_init($this->con);
        $result = 0;
        if(!mysqli_stmt_prepare($stmt, $qr)){
            echo "SQL statement failed";
        }else{
            mysqli_stmt_bind_param($stmt, "ss",$noidung, $idCongTy);
            $result= mysqli_stmt_execute($stmt);
        }
        return $result;*/
    }
    
    // Thêm chat
    public function ThemChatByIdCongTy($congTy, $noidung){
       /* $qr = "INSERT INTO chat(congty, noidung) VALUES(?, ?)";
        $stmt = mysqli_stmt_init($this->con);
        $result = 0;
        if(!mysqli_stmt_prepare($stmt, $qr)){
            echo "SQL statement failed";
        }else{
            mysqli_stmt_bind_param($stmt, "ss",$congTy, $noidung);
            $result = mysqli_stmt_execute($stmt);
        }
        return $result;*/
        $fp = fopen('mvc/public/asset/chatfile/f1.txt', 'w');
        fwrite($fp, $noidung);
        fclose($fp);
    }
}
?>
