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

.news .news-img>img {
	max-width: 100%;
}

.news .news-desc {
	color: #555;
	margin-bottom: 0;
	font-weight: 400;
}

.news-item {
	border: 1px solid #71bf44;
	border-top: 3px solid #71bf44;
	padding: 5px;
}

.new-main-left {
	padding-left: 0px;
	padding-right: 0px;
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
	/*     margin-bottom: 10px; */
	
}

.news-item .box-img {
	width: 100%;
	margin-right: 0px;
	position: relative;
}

.news-info {
	position: relative;
	/*     padding-right: 20px !important; */
}

.news-info .news-title a {
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

.news-tag-item {
	color: #71bf44;
}

.news-tag .news-tag-views {
	color: #888;
	font-size: 80%;
}

.news-tag-views>* {
	margin-right: 5px;
}
/*button xem tất cả*/
.justify-content-center {
	-ms-flex-pack: center !important;
	-webkit-box-pack: center !important;
	justify-content: center !important;
}

.d-flex {
	display: -ms-flexbox !important;
	display: -webkit-box !important;
	display: flex !important;
}

.btn {
	padding: 7px 12px;
	border: none;
}

.btn-view-more {
	background-color: #71bf44;
	border-color: #666;
	color: #fff;
}

.btn-view-more:hover, .btn-view-more:focus, .btn-view-more:active {
	background-color: #22924c;
	border-color: #22924c;
	color: #fff;
}

.btn-icon-right {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	position: relative;
	padding-right: 38px;
	border-radius: 0px;
	font-size: 90%;
}

.btn-icon-right span {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	width: 28px;
	height: 100%;
	position: absolute;
	right: 0px;
	top: 0px;
	background-color: rgba(0, 0, 0, 0.2);
}
/*gap*/
.gap-right-less {
	padding-right: 0.5rem;
}

.gap-left-less {
	padding-left: 0.5rem;
}

.gap-top-less {
	padding-top: 0.5rem;
}

.gap-bottom-less {
	padding-bottom: 0.5rem;
}

.title-news-box {
	margin-top: 1rem;
}

.nav-float-right {
	justify-content: center;
}
.page-heading {
    margin-top: 0px;
}
</style>
<nav class="breadcrumb m-b-10 m-t-10" aria-label="breadcrumbs">
	<ul>
		<li><a href="<?php echo $servername ?>"> <span class="icon is-small"> <i class="fas fa-home"
					aria-hidden="true"></i>
			</span> <span>Trang chủ</span>
		</a></li>
		<li><a href="<?php echo $servername ?>/news/"> <span>News</span>
		</a></li>
		<li class="is-active"><a href="#"> <span>Tin tức mới</span>
		</a></li>
	</ul>
</nav>
<div class="columns">
	<div class="column is-two-thirds">
		<div class="page-heading d-flex">
			<h4 class="box-title-page mr-auto title-news-box">TIN TỨC MỚI</h4>
			<nav class="pagination is-small custom-pagination" role="navigation"
				aria-label="pagination">
				<?php echo $data["Navigate"]; ?>
			</nav>
		</div>
		<?php while ($row = mysqli_fetch_array($data["NewsTrangHienTai"])) { ?>
		<div class="news media news-item is-hidden-tablet media-mobile">
			<a
				title="<?php echo $row["tieude"] ?>"
				class="border-primary box-img"
				href="<?php echo $servername ?>/news/<?php echo $row["slugtieude"] ?>-<?php echo $row["id"] ?>">
				<img class="lazy-loading-image loaded"
				src="<?php echo $servername ?>/mvc/public/asset/news/<?php echo $row["thumbnail"] ?>"
				alt="<?php echo $row["tieude"] ?>">
			</a>
			<div class="media-body news-info">
				<h2 class="news-title">
					<a
						href="<?php echo $servername ?>/news/<?php echo $row["slugtieude"] ?>-<?php echo $row["id"] ?>"
						title="<?php echo $row["tieude"] ?>"><?php echo $row["tieude"] ?></a>
				</h2>
				<p class="news-desc"><?php echo $row["tieude"] ?>"><?php echo $row["motangan"] ?></p>
				<p class="news-posted">
					<span class="origin"><a title="<?php echo $row["nguon"] ?>"
						href="<?php echo $row["webnguon"] ?>"><?php echo $row["nguon"] ?></a></span> <span><i
						class="fa fa-eye"></i><?php echo $row["luotxem"] ?></span>
				</p>
			</div>
		</div>
		<div class="news box-border news-item is-hidden-mobile">
			<h2 class="news-title">
				<a target="_self"
					title="<?php echo $row["tieude"] ?>"
					href="<?php echo $servername ?>/news/<?php echo $row["slugtieude"] ?>-<?php echo $row["id"] ?>"><?php echo $row["tieude"] ?></a>
			</h2>
			<p class="news-posted">
				<span class="origin"><a title="<?php echo $row["nguon"] ?>"
					href="<?php echo $row["webnguon"] ?>"><?php echo $row["nguon"] ?></a></span> <span><i
					class="fa fa-eye"></i><?php echo $row["luotxem"] ?></span>
			</p>
			<div class="media">
				<a class="news-img"
					href="<?php echo $servername ?>/news/<?php echo $row["slugtieude"] ?>-<?php echo $row["id"] ?>">
					<img class="lazy-loading-image loaded"
					src="<?php echo $servername ?>/mvc/public/asset/news/<?php echo $row["thumbnail"] ?>"
					alt="<?php echo $row["tieude"] ?>">
				</a>
				<div class="media-body">
					<h4 class="news-desc"><?php echo $row["motangan"] ?></h4>
				</div>
			</div>
		</div>
		<?php } ?>
		<div class="d-flex nav-float-right">
			<nav class="pagination is-small custom-pagination" role="navigation"
				aria-label="pagination">
				<?php echo $data["Navigate"]; ?>
			</nav>
		</div>
	</div>
	<div class="column">
		<?php require_once "./mvc/views/partials/right-news.php"?>
	</div>
</div>
