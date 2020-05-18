<style>
.news-item {
	border: 1px solid #71bf44;
	border-top: 3px solid #71bf44;
	padding-left: 10px;
}

.news {
	margin-bottom: .625rem;
}

.news .news-title {
	font-family: 'Anton', sans-serif;
	font-size: 125%;
	font-weight: 400;
	display: block;
	margin-bottom: .25rem;
}

.news .news-title a {
	color: #e86b1f;
	font-weight: 600;
}

.news .news-posted {
	color: #888;
	font-size: 80%;
	margin-bottom: .5rem;
}

.news .news-posted span {
	margin-right: 5px;
}

.news-posted .origin {
	color: #FF9800;
}

.origin a {
	color: #71bf44;
}

.news-posted i, .news .news-posted i, .news-right .news-posted i {
	margin-right: 3px;
}

.news .news-img {
	width: 250px;
	margin-right: .625rem;
}

.news .news-img>img {
	max-width: 100%;
}

.news .news-desc {
	font-weight: 400;
}

.news .news-desc {
	color: #555;
	margin-bottom: 0;
}
</style>
<section class="news-main home-section">
	<div class="container">
		<nav class="breadcrumb m-b-10 m-t-10" aria-label="breadcrumbs">
			<ul>
				<li><a href="/"> <span class="icon is-small"> <i class="fas fa-home"
							aria-hidden="true"></i>
					</span> <span>Trang chủ</span>
				</a></li>
				<li><a href="<?php echo $servername ?>/companies-news/"> <span>Companies
							News</span>
				</a></li>
				<li class="is-active"><a href="#"> <span>Kết quả tìm kiếm tin tức</span>
				</a></li>
			</ul>
		</nav>
		<!-- reverse-columns -->
		<div class="columns">
			<div class="column is-two-thirds">
			<!-- search box -->
			<?php require_once "./mvc/views/partials/search-box.php"?>
				<p class="title-news">KẾT QUẢ - TÌM THẤY <?php echo mysqli_num_rows ( $data["KetQuaTrangHienTai"] );?> KẾT QUẢ PHÙ HỢP</p>
<?php while ($AllKetQua = mysqli_fetch_array($data["KetQuaTrangHienTai"])){ ?>
<div class="news box-border news-item">
					<h2 class="news-title">
						<a target="_self" title="<?php echo $AllKetQua["tieude"] ?>"
							href="<?php echo $servername ?>/companies-news/<?php echo $AllKetQua["slugtieude"] ?>-<?php echo $AllKetQua["id"] ?>"><?php echo $AllKetQua["tieude"] ?></a>
					</h2>
					<p class="news-posted">
						<span class="origin"><a title="<?php echo $AllKetQua["nguon"] ?>"
							href="https://dailyxe.com.vn/autopro-autopro.com.vn-1w.html"><?php echo $AllKetQua["nguon"] ?></a></span>
						<span><i class="fa fa-eye"></i><?php echo $AllKetQua["luotxem"] ?></span>
					</p>
					<div class="media">
						<a class="news-img"
							href="<?php echo $servername ?>/companies-news/<?php echo $AllKetQua["slugtieude"] ?>-<?php echo $NewsStartup["id"] ?>">
							<img class="lazy-loading-image loaded" style="width: 100%"
							src="<?php echo $servername ?>/mvc/public/asset/news/<?php echo $AllKetQua["thumbnail"]?>"
							alt="<?php echo $AllKetQua["tieude"] ?>">
						</a>
						<div class="media-body">
							<h4 class="news-desc"><?php echo $AllKetQua["motangan"] ?></h4>
						</div>
					</div>
				</div>
<?php } ?>
<nav class="pagination is-small custom-pagination" role="navigation"
					aria-label="pagination">
				<?php echo $data["Navigate"]; ?>
			</nav>
			</div>
			<div class="column"><?php require_once "./mvc/views/partials/right-news.php"?></div>
		</div>

	</div>
</section>