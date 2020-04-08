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
				<div class="company-info columns">
					<div class="home-logo-company is-2">
						<figure class="company-info__logo image is-64x64">
							<img
								src="<?php echo $servername ?>/mvc/public/asset/companies/logo/<?php echo $row["logo"]; ?>"
								alt="<?php echo $row["tencongty"];?>">
						</figure>
					</div>
					<div class="home-detail-company is-10">
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
			<p><?php echo $r["noidung"] ?></p>
		</div>
                                        <?php } ?>

			</section>
</div>
<p class="title-news-blue">TIN TỨC</p>
<div class="columns">
	<div class="column">
		<div class="card news first-news">
			<a target="_blank"
				title="Rolls-Royce Cullinan giá hơn 40 tỷ ở Việt Nam bị triệu hồi vì...đèn hậu quá tối"
				href="https://dailyxe.com.vn/tin-tuc/rolls-royce-cullinan-gia-hon-40-ty-o-viet-nam-bi-trieu-hoi-viden-hau-qua-toi-8474d.html">
			</a> <a class="news-right-img" target="_self"
				title="Rolls-Royce Cullinan giá hơn 40 tỷ ở Việt Nam bị triệu hồi vì...đèn hậu quá tối"
				href="https://dailyxe.com.vn/tin-tuc/rolls-royce-cullinan-gia-hon-40-ty-o-viet-nam-bi-trieu-hoi-viden-hau-qua-toi-8474d.html">
				<img class="card-img-top lazy-loading-image loaded"
				style="width: 100%"
				src="https://cdn.dailyxe.com.vn/image/rolls-royce-cullinan-gia-hon-40-ty-o-viet-nam-bi-trieu-hoi-viden-hau-qua-toi-81800j7.jpg"
				alt="Rolls-Royce Cullinan giá hơn 40 tỷ ở Việt Nam bị triệu hồi vì...đèn hậu quá tối"
				data-pin-nopin="true">
			</a>
			<div class="card-block has-menu-dots">
				<h1 class="news-title">
					<a target="_self"
						title="Rolls-Royce Cullinan giá hơn 40 tỷ ở Việt Nam bị triệu hồi vì...đèn hậu quá tối"
						href="https://dailyxe.com.vn/tin-tuc/rolls-royce-cullinan-gia-hon-40-ty-o-viet-nam-bi-trieu-hoi-viden-hau-qua-toi-8474d.html">Rolls-Royce
						Cullinan giá hơn 40 tỷ ở Việt Nam bị triệu hồi vì...đèn hậu quá
						tối</a>
				</h1>
				<h4 class="news-desc">Rolls-Royce Cullinan được bán với giá hơn 300
					ngàn đô ở Mỹ và về Việt Nam thì con số này lên đến hơn 40 tỷ, nhưng
					xe đắt tiền không giúp nó ngoại lệ với những đợt triệu hồi.</h4>
			</div>
		</div>
	</div>
	<div class="column">
		<div class="card news first-news">
			<a target="_blank"
				title="Rolls-Royce Cullinan giá hơn 40 tỷ ở Việt Nam bị triệu hồi vì...đèn hậu quá tối"
				href="https://dailyxe.com.vn/tin-tuc/rolls-royce-cullinan-gia-hon-40-ty-o-viet-nam-bi-trieu-hoi-viden-hau-qua-toi-8474d.html">
			</a> <a class="news-right-img" target="_self"
				title="Rolls-Royce Cullinan giá hơn 40 tỷ ở Việt Nam bị triệu hồi vì...đèn hậu quá tối"
				href="https://dailyxe.com.vn/tin-tuc/rolls-royce-cullinan-gia-hon-40-ty-o-viet-nam-bi-trieu-hoi-viden-hau-qua-toi-8474d.html">
				<img class="card-img-top lazy-loading-image loaded"
				style="width: 100%"
				src="https://cdn.dailyxe.com.vn/image/rolls-royce-cullinan-gia-hon-40-ty-o-viet-nam-bi-trieu-hoi-viden-hau-qua-toi-81800j7.jpg"
				alt="Rolls-Royce Cullinan giá hơn 40 tỷ ở Việt Nam bị triệu hồi vì...đèn hậu quá tối"
				data-pin-nopin="true">
			</a>
			<div class="card-block has-menu-dots">
				<h1 class="news-title">
					<a target="_self"
						title="Rolls-Royce Cullinan giá hơn 40 tỷ ở Việt Nam bị triệu hồi vì...đèn hậu quá tối"
						href="https://dailyxe.com.vn/tin-tuc/rolls-royce-cullinan-gia-hon-40-ty-o-viet-nam-bi-trieu-hoi-viden-hau-qua-toi-8474d.html">Rolls-Royce
						Cullinan giá hơn 40 tỷ ở Việt Nam bị triệu hồi vì...đèn hậu quá
						tối</a>
				</h1>
				<h4 class="news-desc">Rolls-Royce Cullinan được bán với giá hơn 300
					ngàn đô ở Mỹ và về Việt Nam thì con số này lên đến hơn 40 tỷ, nhưng
					xe đắt tiền không giúp nó ngoại lệ với những đợt triệu hồi.</h4>
			</div>
		</div>
	</div>
	<div class="column col-top-right">
		<div class="news-right">
			<div class="media">
				<a class="news-right-img" target="_self"
					title="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
					href="https://dailyxe.com.vn/tin-tuc/trien-lam-oto-frankfurt-motor-show-bi-lo-chet-yeu-neu-khong-doi-moi-8473d.html">
					<img class="lazy-loading-image loaded" style="width: 100%"
					src="https://cdn.dailyxe.com.vn/image/trien-lam-oto-frankfurt-motor-show-bi-lo-chet-yeu-neu-khong-doi-moi-81786j1.jpg"
					alt="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
					data-pin-nopin="true">

				</a>
				<div class="media-body has-menu-dots">
					<h3 class="news-right-title">
						<a target="_self"
							title="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
							href="https://dailyxe.com.vn/tin-tuc/trien-lam-oto-frankfurt-motor-show-bi-lo-chet-yeu-neu-khong-doi-moi-8473d.html">Triển
							lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới</a>
					</h3>
					<h5 class="news-posted">
						<span class="origin"><a title="Zing.vn"
							href="https://dailyxe.com.vn/zing.vn-tin-tuc-hinh-anh-moi-nhat-ve-cac-loai-xe-oto-9w.html">Zing.vn</a></span>
					</h5>
				</div>
			</div>
		</div>
		<div class="news-right">
			<div class="media">
				<a class="news-right-img" target="_self"
					title="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
					href="https://dailyxe.com.vn/tin-tuc/trien-lam-oto-frankfurt-motor-show-bi-lo-chet-yeu-neu-khong-doi-moi-8473d.html">
					<img class="lazy-loading-image loaded" style="width: 100%"
					src="https://cdn.dailyxe.com.vn/image/trien-lam-oto-frankfurt-motor-show-bi-lo-chet-yeu-neu-khong-doi-moi-81786j1.jpg"
					alt="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
					data-pin-nopin="true">

				</a>
				<div class="media-body has-menu-dots">
					<h3 class="news-right-title">
						<a target="_self"
							title="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
							href="https://dailyxe.com.vn/tin-tuc/trien-lam-oto-frankfurt-motor-show-bi-lo-chet-yeu-neu-khong-doi-moi-8473d.html">Triển
							lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới</a>
					</h3>
					<h5 class="news-posted">
						<span class="origin"><a title="Zing.vn"
							href="https://dailyxe.com.vn/zing.vn-tin-tuc-hinh-anh-moi-nhat-ve-cac-loai-xe-oto-9w.html">Zing.vn</a></span>
					</h5>
				</div>
			</div>
		</div>
		<div class="news-right">
			<div class="media">
				<a class="news-right-img" target="_self"
					title="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
					href="https://dailyxe.com.vn/tin-tuc/trien-lam-oto-frankfurt-motor-show-bi-lo-chet-yeu-neu-khong-doi-moi-8473d.html">
					<img class="lazy-loading-image loaded" style="width: 100%"
					src="https://cdn.dailyxe.com.vn/image/trien-lam-oto-frankfurt-motor-show-bi-lo-chet-yeu-neu-khong-doi-moi-81786j1.jpg"
					alt="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
					data-pin-nopin="true">

				</a>
				<div class="media-body has-menu-dots">
					<h3 class="news-right-title">
						<a target="_self"
							title="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
							href="https://dailyxe.com.vn/tin-tuc/trien-lam-oto-frankfurt-motor-show-bi-lo-chet-yeu-neu-khong-doi-moi-8473d.html">Triển
							lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới</a>
					</h3>
					<h5 class="news-posted">
						<span class="origin"><a title="Zing.vn"
							href="https://dailyxe.com.vn/zing.vn-tin-tuc-hinh-anh-moi-nhat-ve-cac-loai-xe-oto-9w.html">Zing.vn</a></span>
					</h5>
				</div>
			</div>
		</div>
		<div class="news-right">
			<div class="media">
				<a class="news-right-img" target="_self"
					title="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
					href="https://dailyxe.com.vn/tin-tuc/trien-lam-oto-frankfurt-motor-show-bi-lo-chet-yeu-neu-khong-doi-moi-8473d.html">
					<img class="lazy-loading-image loaded" style="width: 100%"
					src="https://cdn.dailyxe.com.vn/image/trien-lam-oto-frankfurt-motor-show-bi-lo-chet-yeu-neu-khong-doi-moi-81786j1.jpg"
					alt="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
					data-pin-nopin="true">

				</a>
				<div class="media-body has-menu-dots">
					<h3 class="news-right-title">
						<a target="_self"
							title="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
							href="https://dailyxe.com.vn/tin-tuc/trien-lam-oto-frankfurt-motor-show-bi-lo-chet-yeu-neu-khong-doi-moi-8473d.html">Triển
							lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới</a>
					</h3>
					<h5 class="news-posted">
						<span class="origin"><a title="Zing.vn"
							href="https://dailyxe.com.vn/zing.vn-tin-tuc-hinh-anh-moi-nhat-ve-cac-loai-xe-oto-9w.html">Zing.vn</a></span>
					</h5>
				</div>
			</div>
		</div>
		<div class="news-right">
			<div class="media">
				<a class="news-right-img" target="_self"
					title="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
					href="https://dailyxe.com.vn/tin-tuc/trien-lam-oto-frankfurt-motor-show-bi-lo-chet-yeu-neu-khong-doi-moi-8473d.html">
					<img class="lazy-loading-image loaded" style="width: 100%"
					src="https://cdn.dailyxe.com.vn/image/trien-lam-oto-frankfurt-motor-show-bi-lo-chet-yeu-neu-khong-doi-moi-81786j1.jpg"
					alt="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
					data-pin-nopin="true">

				</a>
				<div class="media-body has-menu-dots">
					<h3 class="news-right-title">
						<a target="_self"
							title="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
							href="https://dailyxe.com.vn/tin-tuc/trien-lam-oto-frankfurt-motor-show-bi-lo-chet-yeu-neu-khong-doi-moi-8473d.html">Triển
							lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới</a>
					</h3>
					<h5 class="news-posted">
						<span class="origin"><a title="Zing.vn"
							href="https://dailyxe.com.vn/zing.vn-tin-tuc-hinh-anh-moi-nhat-ve-cac-loai-xe-oto-9w.html">Zing.vn</a></span>
					</h5>
				</div>
			</div>
		</div>
		<div class="news-right">
			<div class="media">
				<a class="news-right-img" target="_self"
					title="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
					href="https://dailyxe.com.vn/tin-tuc/trien-lam-oto-frankfurt-motor-show-bi-lo-chet-yeu-neu-khong-doi-moi-8473d.html">
					<img class="lazy-loading-image loaded" style="width: 100%"
					src="https://cdn.dailyxe.com.vn/image/trien-lam-oto-frankfurt-motor-show-bi-lo-chet-yeu-neu-khong-doi-moi-81786j1.jpg"
					alt="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
					data-pin-nopin="true">

				</a>
				<div class="media-body has-menu-dots">
					<h3 class="news-right-title">
						<a target="_self"
							title="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
							href="https://dailyxe.com.vn/tin-tuc/trien-lam-oto-frankfurt-motor-show-bi-lo-chet-yeu-neu-khong-doi-moi-8473d.html">Triển
							lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới</a>
					</h3>
					<h5 class="news-posted">
						<span class="origin"><a title="Zing.vn"
							href="https://dailyxe.com.vn/zing.vn-tin-tuc-hinh-anh-moi-nhat-ve-cac-loai-xe-oto-9w.html">Zing.vn</a></span>
					</h5>
				</div>
			</div>
		</div>
	</div>
</div>