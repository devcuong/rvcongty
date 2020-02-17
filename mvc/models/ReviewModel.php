<?php
class ReviewModel extends DB{
    public function LayReviewBangIdCongTy($iDCongTy){
        $qr = "SELECT * FROM review LEFT JOIN reply on reply.idreview = review.id WHERE review.congty = '$iDCongTy'";
        return mysqli_query($this->con, $qr);
    }
}
?>