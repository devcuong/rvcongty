<?php
while ($row = mysqli_fetch_array($data["CongTy"])) {
    ?>
<nav class="breadcrumb m-b-10 m-t-10" aria-label="breadcrumbs"
	data-no-instant="">
	<ul>
		<li><a href="<?php echo $servername ?>"> <span class="icon is-small"> <i class="fas fa-home"
					aria-hidden="true"></i>
			</span> <span>Trang chủ</span>
		</a></li>
		<li class="is-active"><a href="#"> <span>Review Công ty <?php echo $row["tencongty"]; ?></span>
		</a></li>
	</ul>
</nav>

<section class="company-info-company-page">
	<div class="company-info">

		<figure class="company-info__logo image is-64x64">
			<img
				src="<?php echo $servername ?>/mvc/public/asset/companies/logo/<?php echo $row["logo"] ?>">
		</figure>

		<div class="company-info__detail">
			<h2 class="is-size-5 has-text-weight-semibold company-info__name">
				<a href="/companies/blameo-technology">
                  <?php echo $row["tencongty"] ?>
              </a><span class="company-info__rating"> <span>
										 <?php
    $n = $row["rate"];
    $whole = floor($row["rate"]);
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
										
										</span> <span class="company-info__rating-count">(<?php echo $row["luotdanhgia"] ?>)</span>
				</span>
			</h2>
			<div class="company-info__other">
				<span style="margin-right: 0.3rem"> <span class="icon"> <i
						class="fas fa-briefcase"></i></span>
                  <?php echo $row["nganhnghe"] ?>
              </span> <span><span class="icon"> <i class="fas fa-users"></i>
				</span>
                  <?php echo $row["nhanvien"] ?>
              </span>
			</div>
			<div class="company-info__location">
				<span> <span class="icon"> <i class="fas fa-building"></i>
				</span>
                  <?php echo $row["diachi"] ?>
              </span>
			</div>
		</div>

	</div>
	<button class="button-review button is-success is-medium is-rounded">
		<span class="icon"> <i class="fas fa-pencil-alt"></i>
		</span> &nbsp;&nbsp; Viết review
	</button>
</section>
<section class="full-reviews">
<nav class="pagination is-small custom-pagination" role="navigation" aria-label="pagination">
  <span class="pagination-summary">Trang <b><?php echo $data["TrangHienTai"] ?></b> trên tổng số <b><?php echo $data["SoTrang"] ?></b></span>
  <ul class="pagination-list">
  	<?php for($i=1; $i <= $data["SoTrang"]; $i++){ ?>
  		<?php if($i == $data["TrangHienTai"]){ ?>
  		<li><a href="<?php echo $servername?>/cong-ty/<?php echo $row["slugcongty"]."-".$row["id"]."/".$i ?>" class="pagination-link is-current"><?php echo $i ?></a></li>
  		<?php }else{ ?>
  		 <li><a href="<?php echo $servername ?>/cong-ty/<?php echo $row["slugcongty"]."-".$row["id"]."/".$i ?>" class="pagination-link "><?php echo $i ?></a></li>
  		<?php } ?>
  	<?php } ?>
  </ul>
</nav>
	<!-- Review Page Top -->
 <?php
while ($r = mysqli_fetch_array($data["Review"])) {
    ?>
  <div class="review card">
		<header class="card-header">
			<p class="card-header-title">
              <?php echo $r["review_reviewer"]." (".$r["review_position"].")" ?>  &nbsp; 
        <span>
        <?php
    $n = $r["review_rate"];
    $whole = floor($r["review_rate"]);
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
        </span>
			</p>
			<span class="review__time needs_to_be_rendered" datetime="<?php echo $r["review_thoigian"] ?>"><?php echo $r["review_thoigian"] ?></span>
			<a class="review__share"
				href="/companies/first-interactive-technology/review/5e4a4b5a4563221e556e76cc">
				<i class="fas fa-link" style="margin-right: 5px"></i> Share
			</a>
		</header>
		<div class="card-content">

			<div class="content text-500">
              <?php echo $r["review_noidung"] ?>
          </div>
		</div>
		<footer class="card-footer">
			<a href="#" data-id="<?php echo $r["review_id"] ?>" data-prefill=""
				data-reaction="LIKE" class="link-comment card-footer-item clickable">
				<span class="icon-reply icon has-text-info"> <i
					class="fas fa-comments"></i>
			</span> Reply
			</a> <span data-id="<?php echo $r["review_id"] ?>"
				data-prefill="Bác nói đúng vãi, tặng 1 like" data-reaction="LIKE"
				class="link-comment card-footer-item clickable"> <span
				class="icon-like icon has-text-success"> <i class="fas fa-thumbs-up"></i>
			</span>
			</span> <span data-id="<?php echo $r["review_id"] ?>"
				data-prefill="Review nhảm nhí, dislike" data-reaction="HATE"
				class="link-comment card-footer-item clickable"><span
				class="icon-dislike icon has-text-danger"> <i
					class="fas fa-thumbs-down"></i>
			</span>
			</span> <span data-id="<?php echo $r["review_id"] ?>"
				data-prefill="Xóa review này giùm!" data-reaction="DELETE"
				class="link-comment card-footer-item clickable"><span
				class="icon-ban icon is-medium"> <span class="fa-stack fa-md"> <i
						class="fas fa-comments fa-stack-1x has-text-info"></i> <i
						class="fas fa-ban fa-stack-2x has-text-danger"></i>
				</span>
			</span>
			</span>
		</footer>
      <?php if(isset($r["reply_data"])){ ?>
       <div class="review-comments">
       <?php
        
$dataReply = $r["reply_data"];
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
       </div>
       <?php } ?>
  </div>
  <?php } ?>
  
</section>
<div class="modal" id="review-modal">
    <form id="review-form" action="<?php echo $servername ?>/cong-ty/dang-review" method="POST">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Viết Review công ty <?php echo $row["tencongty"] ?></p>
                <button class="delete button-close" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                <div class="field">
                    <label class="label">Tên họ</label>
                    <div class="control">
                        <input class="input" name="reviewer" type="text"
                            placeholder="Muốn xưng tên thật thì xưng không thì thui">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Chức vụ</label>
                    <div class="control">
                        <input class="input" name="position" type="text" placeholder="Dev quèn/HR hay Manager">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Review công ty <span class="has-text-danger">(Bắt buộc)</span> </label>
                    <div class="control">
                        <textarea required class="textarea" name="content"
                            placeholder="Bức xúc hay gì thì viết dài dài vô (Tối thiểu 10 kí tự)"></textarea>
                    </div>
                    <p class="help is-danger is-hidden">Nội dung tối thiếu 10 kí tự</p>
                </div>
                <div class="field">
                    <label class="label">Cho điểm công ty</label>
                    <div class="control">
                        <div class="select">
                            <select name="score">
                                <option value="1">1 điểm - Max sida, né gấp kẻo hối hận</option>
                                <option value="2">2 điểm - Hết thuốc chữa, đang tính đường chuồn</option>
                                <option value="3" selected>3 điểm - Cũng tạm, để coi sao</option>
                                <option value="4">4 điểm - Cũng ngon, nên làm lâu dài</option>
                                <option value="5">5 điểm - Công ty tuyệt cmn vời, đuổi cũng méo đi</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="companyId" value="<?php echo $row["id"] ?>" />
                 <input type="hidden" name="companyUrl" value="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" />
                <div class="g-recaptcha" data-sitekey="6LdzGtkUAAAAAPbjiQfk8z3AbWKKjRWNE_MXxcOQ" data-callback="onReviewCaptchaSuccess"></div>
                <p class="m-t-5">
                    Người đăng chịu trách nhiệm về tính xác thực của nội dung chứ <b>bên mình không có chịu</b>, okay?
                </p>
            </section>
            <footer class="modal-card-foot">
                <button type="submit" disabled class="button button-review-submit is-success">Đăng Review</button>
                <button class="button button-close">Hủy bỏ</button>
            </footer>
        </div>
    </form>
    <button class="modal-close button-close is-large" aria-label="close"></button>
</div>

<script src="https://reviewcongty.com/javascript/review.js" async defer></script>
<div class="modal" id="comment-modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box">
            <form id="comment-form" action="<?php echo $servername ?>/cong-ty/dang-reply" method="POST">
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
                <input type="hidden" name="companyId" value="<?php echo $row["id"] ?>" />
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
<script src="https://reviewcongty.com/javascript/comment.js" async defer></script>
<script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
