<?php
class ReplyModel extends DB{
    
   // Lấy reply bằng id review
    public function LayReplyBangIdReview($iDreview){
        $qr = "SELECT * FROM reply WHERE idreview = ".$iDreview;
        return mysqli_query($this->con, $qr);
    }
    
    // Update reply có sẵn
    public function CapNhatReplyBangIdReview($congTy,$iDreview, $data){
        $qr = "UPDATE reply SET congty = ?,data = ? WHERE idreview = ?";
        $stmt = mysqli_stmt_init($this->con);
        $result = 0;
        if(!mysqli_stmt_prepare($stmt, $qr)){
            echo "SQL statement failed";
        }else{
            mysqli_stmt_bind_param($stmt, "sss",$congTy, $data, $iDreview);
            $result= mysqli_stmt_execute($stmt);
        }
        return $result;
    }
    
    // Thêm reply
    public function ThemReplyTheoIdReview($congTy,$iDreview, $data){
        $qr = "INSERT INTO reply(congty, idreview, data) VALUES(?, ?, ?)";
        $stmt = mysqli_stmt_init($this->con);
        $result = 0;
        if(!mysqli_stmt_prepare($stmt, $qr)){
            echo "SQL statement failed";
        }else{
            mysqli_stmt_bind_param($stmt, "sss",$congTy, $iDreview, $data);
            $result = mysqli_stmt_execute($stmt);
        }
        return $result;
    }
    
    // Xóa reply theo id review
    public function XoaReplyTheoIdReview($iDReview){
        $qr = "DELETE FROM reply WHERE idreview = $iDReview";
        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return $result;
    }
}
?>