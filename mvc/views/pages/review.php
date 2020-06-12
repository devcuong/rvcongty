<?php
while ($row = mysqli_fetch_array($data["Review"])) {
    ?>
<nav class="breadcrumb m-b-10 m-t-10" aria-label="breadcrumbs">
    <ul>
        <li>
            <a href="<?php echo $servername ?>">
                <span class="icon is-small">
                    <i class="fas fa-home" aria-hidden="true"></i>
                </span>
                <span>Trang chủ</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $servername ?>/companies/<?php echo $row["congty_slugcongty"]?>-<?php echo $row["congty_id"] ?>">
                <span>Review Công ty <?php echo $row["congty_tencongty"]?></span>
            </a>
        </li>
        <li class="is-active">
            <a href="#">
                <span>Review của <?php echo $row["review_reviewer"]?></span>
            </a>
        </li>
    </ul>
</nav>
<section class="company-info-company-page">
    <div class="company-info">
        
        <figure class="company-info__logo image is-64x64">
            <img src="<?php echo $servername ?>/mvc/public/asset/companies/logo/<?php echo $row["congty_logo"] ?>">
        </figure>
    
        <div class="company-info__detail">
            <h2 class="is-size-5 has-text-weight-semibold company-info__name">
                <a href="<?php echo $servername ?>/companies/<?php echo $row["congty_slugcongty"] ?>-<?php echo $row["congty_id"]; ?>">
                    <?php echo $row["congty_tencongty"] ?>
                </a>            <span class="company-info__rating">
                    <span><span>
										 <?php
    $n = $row["congty_rate"];
    $whole = floor($row["congty_rate"]);
    $fraction = $n - $whole;
    for ($i = 1; $i <= $whole; $i ++) {
        ?>
										 <span class="icon is-small has-text-warning"> <i
						class="fas fa-star"></i>
				</span>
										 <?php } ?>
										<?php if($whole != 5) {?>
										<span class="icon is-small has-text-warning"> <i
						class="fas fa-star-half-alt"></i>
				</span>
										<?php } ?>
										<?php for ($i=1; $i<=(5-($whole+1));$i++){ ?>
										<span class="icon is-small has-text-warning"> <i
						class="far fa-star"></i>
				</span>
										<?php } ?>
										
										</span></span> 
                    <span class="company-info__rating-count">(<?php echo $row["congty_luotdanhgia"] ?>)</span>
                </span>
            </h2>
            <div class="company-info__other">
                <span style="margin-right: 0.3rem">
                    <span class="icon"> <i class="fas fa-briefcase"></i></span>
                    <?php echo $row["congty_nganhnghe"] ?>
                </span>
                <span><span class="icon"> <i class="fas fa-users"></i> </span>
                    <?php echo $row["congty_nhanvien"] ?>
                </span>
            </div>
            <div class="company-info__location">
                <span>
                    <span class="icon"> <i class="fas fa-building"></i> </span>
                    <?php echo $row["congty_diachi"] ?>
                </span>
            </div>
        </div>
    
    </div></section>
    <section class="full-reviews">
    <div class="review card">
        <header class="card-header">
            <p class="card-header-title">
                 <?php echo $row["review_reviewer"] ?>  &nbsp;(<?php echo $row["review_position"] ?>) &nbsp;<span> <?php
                 $n = $row["review_rate"];
                 $whole = floor($row["review_rate"]);
    $fraction = $n - $whole;
    for ($i = 1; $i <= $whole; $i ++) {
        ?>
										 <span class="icon is-small has-text-warning"> <i
						class="fas fa-star"></i>
				</span>
										 <?php } ?>
										<?php if($whole != 5) {?>
										<span class="icon is-small has-text-warning"> <i
						class="fas fa-star-half-alt"></i>
				</span>
										<?php } ?>
										<?php for ($i=1; $i<=(5-($whole+1));$i++){ ?>
										<span class="icon is-small has-text-warning"> <i
						class="far fa-star"></i>
				</span>
										<?php } ?></span>
            </p>
            <time class="review__time ">3 giờ trước</time>
            <a class="review__share" href="<?php echo $servername ?>/companies/<?php echo $row["congty_slugcongty"] ?>-<?php echo $row["congty_id"] ?>/review/<?php echo $row["review_id"]; ?>">
                <i class="fas fa-link" style="margin-right: 5px"></i> Share
            </a>
        </header>
        <div class="card-content">
    
            <div class="content text-500">
                 <?php echo $row["review_noidung"] ?>
            </div>
        </div>
        <footer class="card-footer">
            <a href="#" data-id="<?php echo $row["review_id"] ?>" data-prefill="" data-reaction="LIKE" class="link-comment card-footer-item clickable">
                <span class="icon-reply icon has-text-info">
                    <i class="fas fa-comments"></i>
                </span>
                Reply
            </a>
            <span data-id="<?php echo $row["review_id"] ?>" data-prefill="Bác nói đúng vãi, tặng 1 like" data-reaction="LIKE" class="link-comment card-footer-item clickable">
                <span class="icon-like icon has-text-success">
                    <i class="fas fa-thumbs-up"></i>
                </span>
            </span>
            <span data-id="<?php echo $row["review_id"] ?>" data-prefill="Review nhảm nhí, dislike" data-reaction="HATE" class="link-comment card-footer-item clickable">
                <span class="icon-dislike icon has-text-danger">
                    <i class="fas fa-thumbs-down"></i>
                </span>
            </span>
            <span data-id="<?php echo $row["review_id"] ?>" data-prefill="Xóa review này giùm!" data-reaction="DELETE" class="link-comment card-footer-item clickable">
                <span class="icon-ban icon is-medium">
                    <span class="fa-stack fa-md">
                        <i class="fas fa-comments fa-stack-1x has-text-info"></i>
                        <i class="fas fa-ban fa-stack-2x has-text-danger"></i>
                    </span>
                </span>
            </span>
        </footer>
        <div class="review-comments">
        <?php while($reply = mysqli_fetch_array($data["Reply"])){?>
           <?php
        
           $dataReply = $reply["data"];
        $arrJson = json_decode($dataReply);
        for ($i = 0; $i < count($arrJson); $i ++) {
            ?>
                 <div class="comment">
				<p class="comment__title">
					<span class="has-text-weight-bold"> <?php echo $arrJson[$i]->replyer?> đã <?php if (($arrJson[$i]->reaction)=="LIKE") {?><span
						class="icon-like icon has-text-success"> <i
							class="fas fa-thumbs-up"></i>
					</span><?php }else if(($arrJson[$i]->reaction)=="HATE") { ?><span
						class="icon-dislike icon has-text-danger"> <i
							class="fas fa-thumbs-down"></i>
					</span><?php }else{ ?>
					đề nghị xóa X
					<?php } ?>
                  
                  </span> &nbsp; <span class="needs_to_be_rendered" datetime="<?php echo $arrJson[$i]->thoigian ?>"><?php echo $arrJson[$i]->thoigian ?></span>
				</p>
				<p class="comment__content text-500">
                  <?php echo $arrJson[$i]->noidung?>
              </p>
			</div>
             
      <?php } ?>
      <?php } ?>
        </div>
    </div></section>
    

<div class="modal" id="comment-modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box">
            <form id="comment-form" action="<?php echo $servername ?>/companies/dang-reply" method="POST">
                <div class="field">
                    <label class="label">Tên họ</label>
                    <div class="control">
                        <input class="input" name="reviewer" type="text"
                            placeholder="Muốn xưng tên thật thì xưng không thì thui">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Comment <span class="has-text-danger">(Bắt buộc)</span> </label>
                    <div class="control">
                        <textarea required class="textarea" name="content" id="review-content"
                            placeholder="Bức xúc hay gì thì viết dài dài vô (Tối thiểu 10 kí tự)"></textarea>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Bày tỏ thái độ</label>
                    <div class="control">
                        <div class="select">
                            <select name="reaction" id="review-reaction">
                                <option value="LIKE" selected>👍 Like</option>
                                <option value="HATE">👎 Đếch lai</option>
                                <option value="DELETE">❌ Xóa giùm</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="g-recaptcha" data-sitekey="6LeCXNoUAAAAAKA3UQKXI_5FRluNDNnjJbFaUCBm" data-callback="onCommentCaptchaSuccess"></div>
                <input type="hidden" name="companyId" value="<?php echo $row["congty_id"] ?>" />
                <input type="hidden" name="companyUrl" value="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" />
                <input type="hidden" id="review-id" name="reviewId" />

                <div class="m-t-15">
                    <button type="submit" disabled class="button is-success button-comment-submit">Đăng Comment</button>
                    <button type="button" class="button button-close">Hủy bỏ</button>
                </div>
            </form>
        </div>
    </div>
    <button class="modal-close button-close is-large" aria-label="close"></button>
</div>
<?php } ?>
<script src="<?php echo $servername ?>/mvc/public/js/comment.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>