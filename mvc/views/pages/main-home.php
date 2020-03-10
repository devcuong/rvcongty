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
				<li data-tab="top-comments" class="tab <?php if($data["TabCongTy"]=="latest"){ echo "is-active"; } ?>"><a
					href="<?php echo $servername ?>?tab=latest" class="has-text-weight-bold"> <span
						class="icon has-text-info"> <i class="fas fa-comments"></i>
					</span> Mới nhất
				</a></li>
				<li data-tab="top-companies" class="tab <?php if($data["TabCongTy"]=="best"){ echo "is-active"; } ?>"><a href="<?php echo $servername ?>?tab=best"
					class="has-text-weight-bold"> <span class="icon has-text-success">
							<i class="fas fa-thumbs-up"></i>
					</span> Top công ty chất
				</a></li>
				<li data-tab="worst-companies" class="tab <?php if($data["TabCongTy"]=="worst"){ echo "is-active"; } ?>"><a href="<?php echo $servername ?>?tab=worst"
					class="has-text-weight-bold"> <span class="icon has-text-danger"> <i
							class="fas fa-thumbs-down"></i>
					</span> Top công ty tào lao
				</a></li>
			</ul>
		</div>
		<div class="tabs-section" style="height: auto !important;">
			<nav class="pagination is-small custom-pagination" role="navigation"
				aria-label="pagination">
				<span class="pagination-summary">Trang <b><?php echo $data["TrangHienTai"] ?></b>
					trên tổng số <b><?php echo $data["SoTrang"]; ?></b></span>
				<ul class="pagination-list">
						<?php for($i=1; $i<=$data["SoTrang"]; $i++){ ?>
							<?php if($i == $data["TrangHienTai"]) {?>
							<?php if("latest" == $data["TabCongTy"]){ ?>
							<li><a href="<?php echo $servername ?>/?page=<?php echo $i ?>"
						class="pagination-link is-current"><?php echo $i ?></a></li>
								<?php }else if("best" == $data["TabCongTy"]) { ?>
								<li><a
						href="<?php echo $servername ?>/?tab=best&amp;page=<?php echo $i ?>"
						class="pagination-link is-current"><?php echo $i ?></a></li>
								<?php }else{ ?>
								<li><a
						href="<?php echo $servername ?>/?tab=worst&amp;page=<?php echo $i ?>"
						class="pagination-link is-current"><?php echo $i ?></a></li>
								<?php } ?>
							<?php }else{ ?>
							<?php if("latest" == $data["TabCongTy"]) {?>
							<li><a
						href="<?php echo $servername ?>/?tab=latest&amp;page=<?php echo $i ?>"
						class="pagination-link "><?php echo $i ?></a></li>
								<?php } else if("best" == $data["TabCongTy"]){ ?>
								<li><a
						href="<?php echo $servername ?>/?tab=best&amp;page=<?php echo $i ?>"
						class="pagination-link "><?php echo $i ?></a></li>
								<?php } else{ ?>
								<li><a
						href="<?php echo $servername ?>/?tab=worst&amp;page=<?php echo $i ?>"
						class="pagination-link "><?php echo $i ?></a></li>
								<?php }?>
							<?php } ?>
						<?php } ?>
						</ul>
			</nav>
					<?php
    while ($row = mysqli_fetch_array($data["CongTyTrangHienTai"])) {
        ?>
                                        <div
				data-href="<?php echo $servername ?>/cong-ty/<?php echo $row["slugcongty"]."-".$row["id"]?>"
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
									href="<?php echo $servername ?>/cong-ty/<?php echo $row["slugcongty"]."-".$row["id"]?>">
										<?php echo $row["tencongty"]; ?> </a> 
								<span class="company-info__rating"> <span>
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
				<span class="pagination-summary">Trang <b><?php echo $data["TrangHienTai"] ?></b>
					trên tổng số <b><?php echo $data["SoTrang"]; ?></b></span>
				<ul class="pagination-list">
						<?php for($i=1; $i<=$data["SoTrang"]; $i++){ ?>
							<?php if($i == $data["TrangHienTai"]) {?>
							<?php if("latest" == $data["TabCongTy"]){ ?>
							<li><a href="<?php echo $servername ?>/?page=<?php echo $i ?>"
						class="pagination-link is-current"><?php echo $i ?></a></li>
								<?php }else if("best" == $data["TabCongTy"]) { ?>
								<li><a
						href="<?php echo $servername ?>/?tab=best&amp;page=<?php echo $i ?>"
						class="pagination-link is-current"><?php echo $i ?></a></li>
								<?php }else{ ?>
								<li><a
						href="<?php echo $servername ?>/?tab=worst&amp;page=<?php echo $i ?>"
						class="pagination-link is-current"><?php echo $i ?></a></li>
								<?php } ?>
							<?php }else{ ?>
							<?php if("latest" == $data["TabCongTy"]) {?>
							<li><a
						href="<?php echo $servername ?>/?tab=latest&amp;page=<?php echo $i ?>"
						class="pagination-link "><?php echo $i ?></a></li>
								<?php } else if("best" == $data["TabCongTy"]){ ?>
								<li><a
						href="<?php echo $servername ?>/?tab=best&amp;page=<?php echo $i ?>"
						class="pagination-link "><?php echo $i ?></a></li>
								<?php } else{ ?>
								<li><a
						href="<?php echo $servername ?>/?tab=worst&amp;page=<?php echo $i ?>"
						class="pagination-link "><?php echo $i ?></a></li>
								<?php }?>
							<?php } ?>
						<?php } ?>
						</ul>
			</nav>

			</div>
		</div>
	</section>
	<section class="summary-reviews column z-1">
		<h1 class="is-size-4 has-text-weight-bold reviews__header">Review gần
			đây</h1>
				<?php
    while ($r = mysqli_fetch_array($data["15ReviewMoiNhat"])) {
        ?>
                                        <div class="review">
			<h3>
				<span class="has-text-weight-bold"><?php echo $r["reviewer"] ?></span>
				đã review <a
					href="<?php echo $servername ?>/cong-ty/<?php echo $r["slugcongty"]."-".$r["id"] ?>"> <?php echo $r["tencongty"] ?> </a>
			</h3>
			<p>
				<span class="needs_to_be_rendered"
					datetime="<?php echo $r["thoigian"] ?>"><?php echo $r["thoigian"] ?></span>
				<span>
						  <?php
        $n = $r["rate"];
        $whole = floor($r["rate"]);
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
			<p><?php echo $r["noidung"] ?></p>
		</div>
                                        <?php } ?>

			</section>
</div>
