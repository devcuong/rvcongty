<?php
class ReviewModel extends DB{
    // Lấy review bằng id công ty
    public function LayReviewBangIdCongTy($iDCongTy){
        $qr = "SELECT review.id AS review_id, review.reviewer AS review_reviewer, review.rate AS review_rate, review.noidung AS review_noidung, review.congty AS review_congty, review.thoigian AS review_thoigian, reply.id AS reply_id, reply.idreview AS reply_idreview, reply.data AS reply_data FROM review LEFT JOIN reply on reply.idreview = review.id WHERE review.congty = $iDCongTy";
        return mysqli_query($this->con, $qr);
    } 
    
    // Lấy 15 review mới nhất
    public function Lay15ReviewMoiNhat(){
        $qr = "SELECT congty.id, review.reviewer, congty.tencongty, congty.slugcongty, review.thoigian, review.rate, review.noidung FROM review LEFT JOIN congty ON review.congty = congty.id ORDER BY review.id DESC LIMIT 15";
        return mysqli_query($this->con, $qr);
    }
    
    // Thêm review
    public function ThemReview($reviewer, $rate, $noidung, $congty, $thoigian){
        $qr = "INSERT INTO review VALUES(null, '$reviewer', $rate, '$noidung', '$congty', '$thoigian')";
        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return json_encode($result);
    }
}
?>