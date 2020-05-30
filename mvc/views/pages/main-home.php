<style>
.news .news-posted, .news-right .news-posted {
	color: #888;
	font-size: 80%;
	margin-bottom: .5rem;
}
.news-posted i, .news .news-posted i, .news-right .news-posted i {
    margin-right: 3px;
}
</style>
<section class="hero-img">
	<div class="hero-img__gradient"></div>
	<img src="<?php echo $servername ?>/mvc/public/images/banner.png"
		alt="công ty top">
	<div class="hero">
		<div class="hero-body z-1">
			<div>
				<div class="field has-addons">
					<div class="control has-icons-left is-expanded banner-search-box">
						<form action="<?php echo $servername ?>/tim-kiem/trang-ket-qua"
							method="POST">
							<div class="input-group box-search">
								<input name="company-search" id="company-search"
									class="input form-control" type="text"
									placeholder="Tìm công ty" autocomplete="off">
								<div class="input-group-append">
									<button class="btn" type="submit">
										<i class="fa fa-search" aria-hidden="true"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="columns" style="height: auto !important;">
	<section class="companies column is-three-fifths"
		style="height: auto !important;">
		<div class="tabs" style="margin-bottom: 0.6rem">
			<ul>
				<li data-tab="top-comments"
					class="tab <?php if($data["TabCongTy"]=="latest"){ echo "is-active"; } ?>"><a
					href="<?php echo $servername ?>?tab=latest"
					class="has-text-weight-bold"> <span class="icon has-text-info"> <i
							class="fas fa-comments"></i>
					</span> Mới nhất
				</a></li>
				<li data-tab="top-companies"
					class="tab <?php if($data["TabCongTy"]=="best"){ echo "is-active"; } ?>"><a
					href="<?php echo $servername ?>?tab=best"
					class="has-text-weight-bold"> <span class="icon has-text-success">
							<i class="fas fa-thumbs-up"></i>
					</span> Top công ty chất
				</a></li>
				<li data-tab="worst-companies"
					class="tab <?php if($data["TabCongTy"]=="worst"){ echo "is-active"; } ?>"><a
					href="<?php echo $servername ?>?tab=worst"
					class="has-text-weight-bold"> <span class="icon has-text-danger"> <i
							class="fas fa-thumbs-down"></i>
					</span> Top công ty tào lao
				</a></li>
			</ul>
		</div>
		<div class="tabs-section" style="height: auto !important;">
			<nav class="pagination is-small custom-pagination" role="navigation"
				aria-label="pagination">
				<?php echo $data["Navigate"]; ?>
			</nav>
					<?php
    while ($row = mysqli_fetch_array($data["CongTyTrangHienTai"])) {
        ?>
                                        <div
				data-href="<?php echo $servername ?>/companies/<?php echo $row["slugcongty"]."-".$row["id"]?>"
				class="company-item">
				<div class="company-info">
					<div class="home-logo-company">
						<figure class="company-info__logo image is-64x64">
							<img
								src="<?php echo $servername ?>/mvc/public/asset/companies/logo/<?php echo $row["logo"]; ?>"
								alt="<?php echo $row["tencongty"];?>">
						</figure>
					</div>
					
						<div class="company-info__detail">
							<h2 class="is-size-5 has-text-weight-semibold company-info__name">
								<a
									href="<?php echo $servername ?>/companies/<?php echo $row["slugcongty"]."-".$row["id"]?>">
										<?php echo $row["tencongty"]; ?> </a> <span
									class="company-info__rating"> <span>
										 <?php
        $n = $row["rate"];
        $whole = floor($row["rate"]);
        for ($i = 1; $i <= $whole; $i ++) {
            ?>
										 <span class="icon is-small has-text-warning"> <i
											class="fas fa-star"></i>
									</span>
										 <?php } ?>
										<?php for ($i=1; $i<=(5-$whole);$i++){ ?>
										<span class="icon is-small has-text-warning"> <i
											class="far fa-star"></i>
									</span>
										<?php } ?>
										
										</span> <span class="company-info__rating-count">(<?php echo $row["luotdanhgia"] ?>)</span>
								</span>
							</h2>
							<div class="company-info__other">
								<span style="margin-right: 0.3rem"> <span class="icon"> <i
										class="fas fa-briefcase"></i></span> <?php echo $row["nganhnghe"]?>
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
								</span> <?php echo $row["nhanvien"] ?> </span>
							</div>
							<div class="company-info__location">
								<span> <span class="icon"> <i class="fas fa-building"></i>
								</span> <?php echo $row["diachi"]?>
									</span>
							</div>
						</div>
					
				</div>
			</div>
                                        <?php } ?>
					<div style="margin-top: 0.6rem">
				<nav class="pagination is-small custom-pagination" role="navigation"
					aria-label="pagination">
				<?php echo $data["Navigate"]; ?>
			</nav>

			</div>
		</div>
	</section>
	<section class="summary-reviews column z-1">
		<h1 class="is-size-4 has-text-weight-bold reviews__header">Review gần
			đây</h1>
				<?php
				$cutString = new CutString();
    while ($r = mysqli_fetch_array($data["10ReviewMoiNhat"])) {
        ?>
                                        <div class="review">
			<h3>
				<span class="has-text-weight-bold"><?php echo $r["reviewer"] ?></span>
				đã review <a
					href="<?php echo $servername ?>/companies/<?php echo $r["slugcongty"]."-".$r["id"] ?>"> <?php echo $r["tencongty"] ?> </a>
			</h3>
			<p>
				<span class="needs_to_be_rendered"
					datetime="<?php echo $r["thoigian"] ?>"><?php echo $r["thoigian"] ?></span>
				<span>
						  <?php
        $n = $r["rate"];
        $whole = floor($r["rate"]);
        for ($i = 1; $i <= $whole; $i ++) {
            ?>
										 <span class="icon is-small has-text-warning"> <i
						class="fas fa-star"></i>
				</span>
										 <?php } ?>
										<?php for ($i=1; $i<=(5-$whole);$i++){ ?>
										<span class="icon is-small has-text-warning"> <i
						class="far fa-star"></i>
				</span>
										<?php } ?>
						</span>
			</p>
			<p><?php $noidung = $r["noidung"];
			 $shortString = $cutString->get_first_num_of_words(trim($noidung), 20);
			 echo $shortString;
			?></p>
		</div>
                                        <?php } ?>

			</section>
</div>
<div class="page-heading d-flex"><h4 class="box-title-page mr-auto">TIN TỨC</h4></div>
<div class="columns">
	<?php
$index = 0;
while ($r = mysqli_fetch_array($data["ThumbnailTinTucMoiNhat"])) {
    ?>
        <?php if($index == 0 || $index == 1) { ?>
        <div class="column">
		<div class="card news first-news">
			<a target="_blank" title="<?php echo $r["tieude"] ?>"
				href="<?php echo $servername ?>/news/<?php echo $r["slugtieude"] ?>-<?php echo $r["id"] ?>">
			</a> <a class="news-right-img" target="_self"
				title="<?php echo $r["tieude"] ?>"
				href="<?php echo $servername ?>/news/<?php echo $r["slugtieude"] ?>-<?php echo $r["id"] ?>">
				<img class="card-img-top lazy-loading-image loaded"
				style="width: 100%"
				src="<?php echo $servername ?>/mvc/public/asset/news/<?php echo $r["thumbnail"] ?>"
				alt="<?php echo $r["tieude"] ?>" data-pin-nopin="true">
			</a>
			<div class="card-block has-menu-dots">
				<h1 class="news-title">
					<a target="_self" title="<?php echo $r["tieude"] ?>"
						href="<?php echo $servername ?>/news/<?php echo $r["slugtieude"] ?>-<?php echo $r["id"] ?>"><?php echo $r["tieude"] ?></a>
				</h1>
				<h4 class="news-desc"><?php echo $r["motangan"] ?></h4>
			</div>
		</div>
	</div>
        <?php } ?>
        <?php  $index++; ?>
        <?php } ?>
	<div class="column col-top-right">
		<?php
$index = 0;
while ($row = mysqli_fetch_array($data["ListTinTucMoiNhat"])) {
    ?>
    <?php if($index != 0 && $index != 1) { ?>
    <div class="news-right">
			<div class="media">
				<a class="news-right-img" target="_self"
					title="<?php echo $row["tieude"] ?>"
					href="<?php echo $servername ?>/news/<?php echo $row["slugtieude"] ?>-<?php echo $row["id"] ?>">
					<img class="lazy-loading-image loaded" style="width: 100%"
					src="<?php echo $servername ?>/mvc/public/asset/news/<?php echo $row["thumbnail"] ?>"
					alt="<?php echo $row["tieude"] ?>" data-pin-nopin="true">

				</a>
				<div class="media-body has-menu-dots">
					<h3 class="news-right-title">
						<a target="_self" title="<?php echo $row["tieude"] ?>"
							href="<?php echo $servername ?>/news/<?php echo $row["slugtieude"] ?>-<?php echo $row["id"] ?>"><?php echo $row["tieude"] ?></a>
					</h3>
					<h5 class="news-posted">
						<span class="origin"><a title="<?php echo $row["nguon"] ?>"
							href="<?php echo $servername ?>/news/<?php echo $row["slugtieude"] ?>-<?php echo $row["id"] ?>"><?php echo $row["nguon"] ?></a></span>
						<span><i class="fa fa-eye"></i><?php echo $row["luotxem"] ?></span>
					</h5>
				</div>
			</div>
		</div>
    <?php } ?>
    <?php  $index++; ?>
		<?php } ?>
	</div>
</div>