<?php
class ReplyModel extends DB{
    
   // Lấy reply bằng id review
    public function LayReplyBangIdReview($iDreview){
        $qr = "SELECT * FROM reply WHERE idreview = ".$iDreview;
        return mysqli_query($this->con, $qr);
    }
    
    // Thêm reply
    public function CapNhatReplyBangIdReview($iDreview, $data){
        $qr = "UPDATE reply SET data = '$data' WHERE id = $iDreview";
        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return $result;
    }
}
?>