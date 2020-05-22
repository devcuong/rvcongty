<?php
class ReviewModel extends DB{
    // Lấy review bằng id công ty
    public function LayReviewBangIdCongTy($iDCongTy){
        $qr = "SELECT review.id AS review_id, review.reviewer AS review_reviewer, review.position AS review_position, review.rate AS review_rate, review.noidung AS review_noidung, review.congty AS review_congty, review.thoigian AS review_thoigian, reply.id AS reply_id, reply.idreview AS reply_idreview, reply.data AS reply_data FROM review LEFT JOIN reply on reply.idreview = review.id WHERE review.congty = $iDCongTy ORDER BY review.id DESC";
        return mysqli_query($this->con, $qr);
    }
    
    // Lấy review bằng id review
    public function LayReviewBangIdReview($iDReview){
        $qr = "SELECT review.id AS review_id, review.reviewer AS review_reviewer, review.position AS review_position, review.rate AS review_rate, review.noidung AS review_noidung, review.thoigian AS review_thoigian,congty.id AS congty_id ,congty.tencongty AS congty_tencongty, congty.slugcongty AS congty_slugcongty, congty.logo AS congty_logo, congty.nganhnghe AS congty_nganhnghe, congty.nhanvien AS congty_nhanvien, congty.luotdanhgia AS congty_luotdanhgia, congty.rate AS congty_rate, congty.diachi AS congty_diachi FROM review LEFT JOIN congty ON review.congty = congty.id WHERE review.id = $iDReview";
        return mysqli_query($this->con, $qr);
    }
    
    // Lấy 15 review mới nhất
    public function Lay10ReviewMoiNhat(){
        $qr = "SELECT congty.id, review.reviewer, congty.tencongty, congty.slugcongty, review.thoigian, review.rate, review.noidung FROM review LEFT JOIN congty ON review.congty = congty.id ORDER BY review.id DESC LIMIT 10";
        return mysqli_query($this->con, $qr);
    }
    
    // Thêm review
    public function ThemReview($reviewer,$position, $rate, $noidung, $congty, $thoigian){
        $qr= "INSERT INTO review (reviewer, position, rate, noidung, congty, thoigian) VALUES(?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($this->con);
        $result = 0;
        if(!mysqli_stmt_prepare($stmt, $qr)){
            echo "SQL statement failed";
        }else{
            mysqli_stmt_bind_param($stmt, "ssssss", $reviewer, $position, $rate, $noidung, $congty, $thoigian);
            $result = mysqli_stmt_execute($stmt);
        }
        return $result;
        //return $qr;
    }
    
    // Lấy tất cả review
    public function LayTatCaReview(){
        $qr = "SELECT * FROM review";
        return mysqli_query($this->con, $qr);
    }
    
    // Lấy review để phân trang
    public function LayReviewPhanTrang($iDCongTy ,$soReviewBoQua, $soReviewMoiTrang){
        $qr = "SELECT review.id AS review_id, review.reviewer AS review_reviewer, review.position AS review_position, review.rate AS review_rate, review.noidung AS review_noidung, review.congty AS review_congty, review.thoigian AS review_thoigian, reply.id AS reply_id, reply.idreview AS reply_idreview, reply.data AS reply_data FROM review LEFT JOIN reply on reply.idreview = review.id WHERE review.congty = $iDCongTy ORDER BY review.id DESC LIMIT ".$soReviewBoQua.','.$soReviewMoiTrang;
        return mysqli_query($this->con, $qr);
       // return $qr;
    }
    
    // Lấy review để phân trang quản trị
    public function LayReviewPhanTrangQuanTri($soReviewBoQua, $soReviewMoiTrang){
        $qr = "SELECT * from review ORDER BY id DESC LIMIT ".$soReviewBoQua.','.$soReviewMoiTrang;
        return mysqli_query($this->con, $qr);
        // return $qr;
    }
    
    // Xóa review theo ID công ty
    public function XoaReview($iDCongTy){
        $qr = "DELETE FROM review WHERE congty = '$iDCongTy'";
        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return $result;
    }
    
    // Xóa review theo id review
    public function XoaReviewBoiIdReview($idReview){
        $qr = "DELETE FROM review WHERE id = $idReview";
        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return $result;
    }
}
?>