<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

.news .news-title {
	font-family: 'Anton', sans-serif;
	font-size: 125%;
	font-weight: 400;
	display: block;
	margin-bottom: .25rem;
}

.news .news-posted, .news-right .news-posted {
	color: #888;
	font-size: 80%;
	margin-bottom: .5rem;
}

.news .news-posted span, .news-right .news-posted span {
	margin-right: 5px;
}

.news-posted .origin {
	color: #FF9800;
}

.news-posted i, .news .news-posted i, .news-right .news-posted i {
	margin-right: 3px;
}

.news .news-img {
	width: 450px;
	margin-right: .625rem;
}

.news .news-img>img {
	max-width: 100%;
}

.news .news-desc {
	color: #555;
	margin-bottom: 0;
}

.news .news-desc {
	font-weight: 400;
}

.news-item {
	border: 1px solid #71bf44;
	border-top: 3px solid #71bf44;
/* 	padding-left: 10px; */
	padding: 5px;
}

.new-main-left {
	padding-left: 0px;
	padding-top: 24px;
}

.new-main-left .new-item {
	height: 100%;
}

.news-main .new-item {
	position: relative;
	width: 100%;
	overflow: hidden;
}

.news-main .new-item .new-info {
	position: absolute;
	bottom: 0px;
	left: 0px;
	width: 100%;
	padding: 10px;
	padding-top: 40px;
	height: 100px;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-orient: vertical;
	-webkit-box-direction: normal;
	-ms-flex-direction: column;
	flex-direction: column;
	-webkit-box-pack: end;
	-ms-flex-pack: end;
	justify-content: flex-end;
	background: -webkit-gradient(linear, left top, left bottom, from(transparent),
		to(#000));
	background: -webkit-linear-gradient(transparent, #000);
	background: -o-linear-gradient(transparent, #000);
	background: linear-gradient(transparent, #000);
}

.news-main .new-item .new-info .new-title {
	color: #fff;
	font-family: "Roboto", sans-serif;
	font-size: 100%;
	margin-bottom: 5px;
	text-decoration: none;
}

.news-main .new-item .new-info .new-title a {
	color: #fff;
}

.news-main .new-item .new-info .new-title:hover a {
	color: #fff;
	text-decoration: none;
}

.news-main .news-main-container .new-main-left .new-item .new-title {
	font-size: 150%;
}

.news-main .new-item span {
	color: #fff;
	font-size: 80%;
}

.news-posted span:not (:last-child )::after {
	content: "";
	display: inline-block;
	margin-left: 7px;
	background-color: #888;
	width: 5px;
	height: 5px;
	margin-bottom: 2px;
	border-radius: 50%;
}

.news-main .new-item img {
	-webkit-transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
	-o-transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
	transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.news-main .new-item:hover img {
	-webkit-transform: scale(1.1);
	-ms-transform: scale(1.1);
	transform: scale(1.1)
}

/*news item for mobile*/
.news-item .box-img {
    margin-bottom: 10px;
}
.news-item .box-img {
    width: 100%;
    margin-right: 0px;
    margin-bottom: 10px;
    position: relative;
}
.news-info {
    position: relative;
    padding-right: 20px !important;
}
.news-info .news-title a{
	color: #e86b1f;
    font-weight: 600;
}
.news-item .news-desc {
    font-size: 100%;
    color: #666;
    margin-bottom: 10px;
    line-height: 1.4em;
    max-height: 4.2em;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
}
.media-mobile {
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}
</style>
<section class="news-main home-section">
	<div class="container">
		<div class="columns news-main-container">
			<div class="column new-main-left">
			<?php $row = $data["NewsThumbnail"];?>
				<div class="new-item">
					<a class="box-img" title="<?php echo $row[0]["tieude"] ?>"
						href="<?php echo $servername ?>/companies-news/<?php echo $row[0]["slugtieude"] ?>-<?php echo $row[0]["id"]; ?>">
						<img class="new-img img-responsive lazy-loading-image loaded"
						src="<?php echo $servername ?>/mvc/public/asset/news/<?php echo $row[0]["thumbnail"] ?>"
						title="<?php echo $row[0]["tieude"] ?>"
						alt="<?php echo $row[0]["tieude"] ?>">
					</a>
					<div class="new-info">
						<h3 class="new-title" title="<?php echo $row[0]["tieude"] ?>">
							<a title="<?php echo $row[0]["tieude"] ?>"
								href="<?php echo $servername ?>/companies-news/<?php echo $row[0]["slugtieude"] ?>-<?php echo $row[0]["id"]; ?>"><?php echo $row[0]["tieude"] ?></a>
						</h3>
						<p class="news-posted mb-0">
							<span class="origin"><a title="<?php echo $row[0]["nguon"] ?>"
								href="<?php echo $servername ?>/companies-news/<?php echo $row[0]["slugtieude"] ?>-<?php echo $row[0]["id"]; ?>"><?php echo $row[0]["nguon"] ?></a></span>
							<span><i class="fa fa-eye"></i><?php echo $row[0]["luotxem"] ?></span>
						</p>
					</div>
				</div>
			</div>
			<div class="column new-main-right">
				<div class="columns is-multiline is-mobile">
					<div class="column is-half">
						<div class="new-item">
							<a class="box-img" title="<?php echo $row[1]["tieude"] ?>"
								href="<?php echo $servername ?>/companies-news/<?php echo $row[1]["slugtieude"] ?>-<?php echo $row[1]["id"]; ?>">
								<img class="new-img img-responsive lazy-loading-image loaded"
								src="<?php echo $servername ?>/mvc/public/asset/news/<?php echo $row[1]["thumbnail"] ?>"
								title="<?php echo $row[1]["tieude"] ?>"
								alt="<?php echo $row[1]["tieude"] ?>">
							</a>
							<div class="new-info">
								<h3 class="new-title" title="<?php echo $row[1]["tieude"] ?>">
									<a title="<?php echo $row[1]["tieude"] ?>"
										href="<?php echo $servername ?>/companies-news/<?php echo $row[1]["slugtieude"] ?>-<?php echo $row[1]["id"]; ?>"><?php echo $row[1]["tieude"] ?></a>
								</h3>
								<p class="news-posted mb-0">
									<span class="origin"><a title="<?php echo $row[1]["nguon"] ?>"
										href="<?php echo $servername ?>/companies-news/<?php echo $row[1]["slugtieude"] ?>-<?php echo $row[1]["id"]; ?>"><?php echo $row[1]["nguon"] ?></a></span>
									<span><i class="fa fa-eye"></i><?php echo $row[1]["luotxem"] ?></span>
								</p>
							</div>
						</div>
					</div>
					<div class="column is-half">
						<div class="new-item">
							<a class="box-img" title="<?php echo $row[2]["tieude"] ?>"
								href="<?php echo $servername ?>/companies-news/<?php echo $row[2]["slugtieude"] ?>-<?php echo $row[2]["id"]; ?>">
								<img class="new-img img-responsive lazy-loading-image loaded"
								src="<?php echo $servername ?>/mvc/public/asset/news/<?php echo $row[2]["thumbnail"] ?>"
								title="<?php echo $row[2]["tieude"] ?>"
								alt="<?php echo $row[2]["tieude"] ?>">
							</a>
							<div class="new-info">
								<h3 class="new-title" title="<?php echo $row[2]["tieude"] ?>">
									<a title="<?php echo $row[2]["tieude"] ?>"
										href="<?php echo $servername ?>/companies-news/<?php echo $row[2]["slugtieude"] ?>-<?php echo $row[2]["id"]; ?>"><?php echo $row[2]["tieude"] ?></a>
								</h3>
								<p class="news-posted mb-0">
									<span class="origin"><a title="<?php echo $row[2]["nguon"] ?>"
										href="<?php echo $servername ?>/companies-news/<?php echo $row[2]["slugtieude"] ?>-<?php echo $row[2]["id"]; ?>"><?php echo $row[2]["nguon"] ?></a></span>
									<span><i class="fa fa-eye"></i><?php echo $row[2]["luotxem"] ?></span>
								</p>
							</div>
						</div>
					</div>
					<div class="column is-half">
						<div class="new-item">
							<a class="box-img" title="<?php echo $row[3]["tieude"] ?>"
								href="<?php echo $servername ?>/companies-news/<?php echo $row[3]["slugtieude"] ?>-<?php echo $row[3]["id"]; ?>">
								<img class="new-img img-responsive lazy-loading-image loaded"
								src="<?php echo $servername ?>/mvc/public/asset/news/<?php echo $row[3]["thumbnail"] ?>"
								title="<?php echo $row[3]["tieude"] ?>"
								alt="<?php echo $row[3]["tieude"] ?>">
							</a>
							<div class="new-info">
								<h3 class="new-title" title="<?php echo $row[3]["tieude"] ?>">
									<a title="<?php echo $row[3]["tieude"] ?>"
										href="<?php echo $servername ?>/companies-news/<?php echo $row[3]["slugtieude"] ?>-<?php echo $row[3]["id"]; ?>"><?php echo $row[3]["tieude"] ?></a>
								</h3>
								<p class="news-posted mb-0">
									<span class="origin"><a title="<?php echo $row[3]["nguon"] ?>"
										href="<?php echo $servername ?>/companies-news/<?php echo $row[3]["slugtieude"] ?>-<?php echo $row[3]["id"]; ?>"><?php echo $row[3]["nguon"] ?></a></span>
									<span><i class="fa fa-eye"></i><?php echo $row[3]["luotxem"] ?></span>
								</p>
							</div>
						</div>
					</div>
					<div class="column is-half">
						<div class="new-item">
							<a class="box-img" title="<?php echo $row[4]["tieude"] ?>"
								href="<?php echo $servername ?>/companies-news/<?php echo $row[4]["slugtieude"] ?>-<?php echo $row[4]["id"]; ?>">
								<img class="new-img img-responsive lazy-loading-image loaded"
								src="<?php echo $servername ?>/mvc/public/asset/news/<?php echo $row[4]["thumbnail"] ?>"
								title="<?php echo $row[4]["tieude"] ?>"
								alt="<?php echo $row[4]["tieude"] ?>">
							</a>
							<div class="new-info">
								<h3 class="new-title" title="<?php echo $row[4]["tieude"] ?>">
									<a title="<?php echo $row[4]["tieude"] ?>"
										href="<?php echo $servername ?>/companies-news/<?php echo $row[4]["slugtieude"] ?>-<?php echo $row[4]["id"]; ?>"><?php echo $row[4]["tieude"] ?></a>
								</h3>
								<p class="news-posted mb-0">
									<span class="origin"><a title="<?php echo $row[4]["nguon"] ?>"
										href="<?php echo $servername ?>/companies-news/<?php echo $row[4]["slugtieude"] ?>-<?php echo $row[4]["id"]; ?>"><?php echo $row[4]["nguon"] ?></a></span>
									<span><i class="fa fa-eye"></i><?php echo $row[4]["luotxem"] ?></span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- reverse-columns -->
<div class="columns">
	<div class="column is-two-thirds">
		<!-- search box -->
	<?php require_once "./mvc/views/partials/search-box.php"?>
		<p class="title-news title-news-normal">TIN CÔNG TY</p>
	<?php while ($newsBinhThuong = mysqli_fetch_array($data["NewsBinhThuong"])){ ?>
		<div class="news box-border news-item is-hidden-mobile">
			<h2 class="news-title">
				<a target="_self" title="<?php echo $newsBinhThuong["tieude"] ?>"
					href="<?php echo $servername ?>/companies-news/<?php echo $newsBinhThuong["slugtieude"] ?>-<?php echo $newsBinhThuong["id"] ?>"><?php echo $newsBinhThuong["tieude"] ?></a>
			</h2>
			<p class="news-posted">
				<span class="origin"><a title="Autopro"
					href="<?php echo $newsBinhThuong["webnguon"] ?>"><?php echo $newsBinhThuong["nguon"] ?></a></span>
				<span><i class="fa fa-eye"></i><?php echo $newsBinhThuong["luotxem"] ?></span>
			</p>
			<div class="media">
				<a class="news-img"
					href="<?php echo $servername ?>/companies-news/<?php echo $newsBinhThuong["slugtieude"] ?>-<?php echo $newsBinhThuong["id"] ?>">
					<img class="lazy-loading-image loaded"
					src="<?php echo $servername ?>/mvc/public/asset/news/<?php echo $newsBinhThuong["thumbnail"]?>"
					alt="<?php echo $newsBinhThuong["tieude"] ?>">
				</a>
				<div class="media-body">
					<h4 class="news-desc"><?php echo $newsBinhThuong["motangan"] ?></h4>
				</div>
			</div>
		</div>
		<div class="news media news-item is-hidden-tablet media-mobile">
			<a
				title="<?php echo $newsBinhThuong["tieude"] ?>"
				class="border-primary box-img"
				href="<?php echo $servername ?>/companies-news/<?php echo $newsBinhThuong["slugtieude"] ?>-<?php echo $newsBinhThuong["id"] ?>">
				<img class="lazy-loading-image loaded"
				src="<?php echo $servername ?>/mvc/public/asset/news/<?php echo $newsBinhThuong["thumbnail"]?>"
				alt="<?php echo $newsBinhThuong["tieude"] ?>">
			</a>
			<div class="media-body news-info">
				<h2 class="news-title">
					<a
						href="<?php echo $servername ?>/companies-news/<?php echo $newsBinhThuong["slugtieude"] ?>-<?php echo $newsBinhThuong["id"] ?>"
						title="<?php echo $newsBinhThuong["tieude"] ?>"><?php echo $newsBinhThuong["tieude"] ?></a>
				</h2>
				<p class="news-desc"><?php echo $newsBinhThuong["tieude"] ?></p>
				<div class="news-tag">
					<a class="news-tag-item"
						href="https://dailyxe.com.vn/zing.vn-tin-tuc-hinh-anh-moi-nhat-ve-cac-loai-xe-oto-9w.html"
						title="<?php echo $newsBinhThuong["webnguon"] ?>"> <span class="news-type"><?php echo $newsBinhThuong["nguon"] ?></span>
					</a><span
						class="news-tag-item"> <i class="fa fa-eye"></i><?php echo $newsBinhThuong["luotxem"] ?>
					</span>
				</div>
			</div>
		</div>
		<?php } ?>
		<p class="title-news title-news-ecom">CÔNG TY E-COMMERCE</p>
		<?php while ($NewsECom= mysqli_fetch_array($data["NewsECom"])){ ?>
		<div class="news box-border news-item">
			<h2 class="news-title">
				<a target="_self" title="<?php echo $NewsECom["tieude"] ?>"
					href="<?php echo $servername ?>/companies-news/<?php echo $NewsECom["slugtieude"] ?>-<?php echo $NewsECom["id"] ?>"><?php echo $NewsECom["tieude"] ?></a>
			</h2>
			<p class="news-posted">
				<span class="origin"><a title="Autopro"
					href="https://dailyxe.com.vn/autopro-autopro.com.vn-1w.html"><?php echo $NewsECom["nguon"] ?></a></span>
				<span><i class="fa fa-eye"></i><?php echo $NewsECom["luotxem"] ?></span>
			</p>
			<div class="media">
				<a class="news-img"
					href="<?php echo $servername ?>/companies-news/<?php echo $NewsECom["slugtieude"] ?>-<?php echo $NewsECom["id"] ?>">
					<img class="lazy-loading-image loaded"
					src="<?php echo $servername ?>/mvc/public/asset/news/<?php echo $NewsECom["thumbnail"]?>"
					alt="<?php echo $NewsECom["tieude"] ?>">
				</a>
				<div class="media-body">
					<h4 class="news-desc"><?php echo $NewsECom["motangan"] ?></h4>
				</div>
			</div>
		</div>
		<?php } ?>
		<p class="title-news title-news-startup">CÔNG TY STARTUP</p>
		<?php while ($NewsStartup= mysqli_fetch_array($data["NewsStartup"])){ ?>
		<div class="news box-border news-item">
			<h2 class="news-title">
				<a target="_self" title="<?php echo $NewsStartup["tieude"] ?>"
					href="<?php echo $servername ?>/companies-news/<?php echo $NewsStartup["slugtieude"] ?>-<?php echo $NewsStartup["id"] ?>"><?php echo $NewsStartup["tieude"] ?></a>
			</h2>
			<p class="news-posted">
				<span class="origin"><a title="Autopro"
					href="https://dailyxe.com.vn/autopro-autopro.com.vn-1w.html"><?php echo $NewsStartup["nguon"] ?></a></span>
				<span><i class="fa fa-eye"></i><?php echo $NewsStartup["luotxem"] ?></span>
			</p>
			<div class="media">
				<a class="news-img"
					href="<?php echo $servername ?>/companies-news/<?php echo $NewsStartup["slugtieude"] ?>-<?php echo $NewsStartup["id"] ?>">
					<img class="lazy-loading-image loaded"
					src="<?php echo $servername ?>/mvc/public/asset/news/<?php echo $NewsStartup["thumbnail"]?>"
					alt="<?php echo $NewsStartup["tieude"] ?>">
				</a>
				<div class="media-body">
					<h4 class="news-desc"><?php echo $NewsStartup["motangan"] ?></h4>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	<div class="column">
		<?php require_once "./mvc/views/partials/right-news.php"?>
	</div>
</div>