<?php
class ChatModel extends DB{
    public function LayChatByIdCongTy($idCongTy){
        $qr = "SELECT * FROM Chat WHERE congty = $idCongTy";
        return mysqli_query($this->con, $qr);
    }
    
    // Thêm chat
    public function ThemChatByIdCongTy($congTy,$noidung){
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
        $filename4 = "mvc/public/asset/chatfile/".$congTy.".txt";
        //$content = file_get_contents($filename4);
        $noidung=$noidung . "\n";
        file_put_contents($filename4, $noidung, FILE_APPEND);
    }
}
?>
