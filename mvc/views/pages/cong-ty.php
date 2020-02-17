<?php
while ($row = mysqli_fetch_array($data["CongTy"])) {
    ?>
<nav class="breadcrumb m-b-10 m-t-10" aria-label="breadcrumbs"
	data-no-instant="">
	<ul>
		<li><a href="/"> <span class="icon is-small"> <i class="fas fa-home"
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
										<span class="icon is-small has-text-warning"> <i
							class="fas fa-star-half-alt"></i>
					</span>
										<?php for ($i=1; $i<=(5-($whole+1));$i++){ ?>
										<?php if($whole != 5){ ?>
										<span class="icon is-small has-text-warning"> <i
							class="far fa-star"></i>
					</span>
										<?php } ?>
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
</section><?php } ?>

<section class="full-reviews">
	<!-- Review Page Top -->
 <?php
while ($row = mysqli_fetch_array($data["Review"])) {
    ?>
  <div class="review card">
		<header class="card-header">
			<p class="card-header-title">
              <?php echo $row["reviewer"] ?>  &nbsp; 
        <span>
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
        </span>
			</p>
			<span class="review__time needs_to_be_rendered" datetime="<?php echo $row["thoigian"] ?>"><?php echo $row["thoigian"] ?></span>
			<a class="review__share"
				href="/companies/first-interactive-technology/review/5e4a4b5a4563221e556e76cc">
				<i class="fas fa-link" style="margin-right: 5px"></i> Share
			</a>
		</header>
		<div class="card-content">

			<div class="content text-500">
              <?php echo $row["noidung"] ?>
          </div>
		</div>
		<footer class="card-footer">
			<a href="#" data-id="5e4a4b5a4563221e556e76cc" data-prefill=""
				data-reaction="LIKE" class="link-comment card-footer-item clickable">
				<span class="icon-reply icon has-text-info"> <i
					class="fas fa-comments"></i>
			</span> Reply
			</a> <span data-id="5e4a4b5a4563221e556e76cc"
				data-prefill="Bác nói đúng vãi, tặng 1 like" data-reaction="LIKE"
				class="link-comment card-footer-item clickable">0 <span
				class="icon-like icon has-text-success"> <i class="fas fa-thumbs-up"></i>
			</span>
			</span> <span data-id="5e4a4b5a4563221e556e76cc"
				data-prefill="Review nhảm nhí, dislike" data-reaction="HATE"
				class="link-comment card-footer-item clickable">0 <span
				class="icon-dislike icon has-text-danger"> <i
					class="fas fa-thumbs-down"></i>
			</span>
			</span> <span data-id="5e4a4b5a4563221e556e76cc"
				data-prefill="Xóa review này giùm!" data-reaction="DELETE"
				class="link-comment card-footer-item clickable">0 <span
				class="icon-ban icon is-medium"> <span class="fa-stack fa-md"> <i
						class="fas fa-comments fa-stack-1x has-text-info"></i> <i
						class="fas fa-ban fa-stack-2x has-text-danger"></i>
				</span>
			</span>
			</span>
		</footer>
      <?php if(isset($row["data"])){ ?>
       <div class="review-comments">
       <?php
        
$dataReply = $row["data"];
        $arrJson = json_decode($dataReply);
        for ($i = 0; $i < count($arrJson); $i ++) {
            ?>
                 <div class="comment">
				<p class="comment__title">
					<span class="has-text-weight-bold"> <?php echo $arrJson[$i]->replyer?> đã <?php if (($arrJson[$i]->likeordislike)==1) {?><span
						class="icon-like icon has-text-success"> <i
							class="fas fa-thumbs-up"></i>
					</span><?php }else{ ?><span
						class="icon-dislike icon has-text-danger"> <i
							class="fas fa-thumbs-down"></i>
					</span><?php } ?>
                  
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

<script src="https://reviewcongty.com/javascript/comment.js" async defer></script>
<script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
