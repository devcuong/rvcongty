<style>
.align-items-center {
	-ms-flex-align: center !important;
	-webkit-box-align: center !important;
	align-items: center !important;
}

.video-title {
	font-size: 120%;
	font-weight: 500;
	padding-top: 20px;
}

.ml-auto {
	margin-left: auto !important;
}

.form-search {
	position: relative;
}

.form-search input {
	width: 400px;
	background-color: #666;
	color: #dfdfdf;
	padding-right: 60px;
	border-radius: 2px;
	border: none;
}

.form-control {
	padding: 7px 12px;
	line-height: 1.4;
	font-size: 100%;
}

.form-search .btn-search {
	color: #222;
	width: 30px !important;
	position: absolute;
	top: 0;
	right: 0;
	height: 100%;
	background: none !important;
	border-top-left-radius: 0px;
	border-bottom-left-radius: 0px;
	display: -webkit-box !important;
	display: -ms-flexbox !important;
	display: flex !important;
	-webkit-box-align: center !important;
	-ms-flex-align: center !important;
	align-items: center !important;
	-webkit-box-pack: center !important;
	-ms-flex-pack: center !important;
	justify-content: center !important;
	cursor: pointer;
}

.video-main {
	padding-bottom: 20px;
}

.video-list {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;
	margin-left: -10px;
	margin-right: -10px;
}

.video-item {
	position: relative;
	width: 20%;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-orient: vertical;
	-webkit-box-direction: normal;
	-ms-flex-direction: column;
	flex-direction: column;
	padding-left: 10px;
	padding-right: 10px;
	margin-bottom: 20px;
}

@media screen and (max-width: 769px) {
	.video-item {
		width: 100%;
	}
}

@media ( min-width : 768px) and (max-width: 1024px) {
	.video-item {
		width: 50%;
	}
}

.media {
	border-top: 0px !important;
	margin-top: 0px !important;
	padding-top: 1rem;
	display: -ms-flexbox;
	display: -webkit-box;
	display: flex;
	-ms-flex-align: start;
	-webkit-box-align: start;
	align-items: flex-start;
	padding-top: 1rem;
}

.video-item .video-img {
	display: block;
	margin-bottom: 10px;
	width: 100%;
	padding-top: 56.2%;
	overflow: hidden;
	position: relative;
}

.playlist .video-img {
	position: relative;
}

.video-item .video-img img {
	width: 100%;
	position: absolute;
	top: 50%;
	left: 0px;
	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
}

.video-item .video-time {
	position: absolute;
	bottom: 5px;
	right: 5px;
	background-color: rgba(0, 0, 0, 0.8);
	border-radius: 3px;
	padding: 2px 5px;
	color: #fff;
	font-weight: 500;
	font-size: 90%;
}

.video-item .media-body {
	width: 100%;
}

.title {
	color: #363636;
	font-size: 1rem;
	font-weight: bold;
	line-height: 1.125;
}

.video-item .title {
	color: #333;
	font-family: "Roboto", sans-serif;
	font-size: 100%;
	display: -webkit-box;
	-webkit-box-orient: vertical;
	-webkit-line-clamp: 2;
	-o-text-overflow: ellipsis;
	text-overflow: ellipsis;
	overflow: hidden;
	width: 100%;
}

.video-item .title a {
	display: block;
}

.video-info {
	color: #999;
	display: flex;
}

.date-add {
	margin-right: 20px;
}

.video-info-item i {
	margin-right: 3px;
}

.playlist .playlist-count {
	position: absolute;
	top: 0px;
	right: 0px;
	width: 40%;
	height: 100%;
	background-color: rgba(0, 0, 0, 0.8);
	color: #ccc;
	display: -webkit-box !important;
	display: -ms-flexbox !important;
	display: flex !important;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	font-size: 130%;
	padding-bottom: 20px;
}

.playlist .playlist-count::after {
	position: absolute;
	top: 55%;
	left: 50%;
	-webkit-transform: translateX(-50%);
	-ms-transform: translateX(-50%);
	transform: translateX(-50%);
	content: "";
	display: block;
	background-size: contain;
	background-repeat: no-repeat;
	width: 17px;
	height: 17px;
	background-image:
		url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgMzIwIDMyMCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzIwIDMyMDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIj48Zz48Zz4KCTxnPgoJCTxyZWN0IHk9Ijk2IiB3aWR0aD0iMjU2IiBoZWlnaHQ9IjQyLjY2NyIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojQ0NDQ0NDIiBkYXRhLW9sZF9jb2xvcj0iI2NjY2NjYyI+PC9yZWN0PgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cmVjdCB5PSIxMC42NjciIHdpZHRoPSIyNTYiIGhlaWdodD0iNDIuNjY3IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNDQ0NDQ0MiIGRhdGEtb2xkX2NvbG9yPSIjY2NjY2NjIj48L3JlY3Q+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxyZWN0IHk9IjE4MS4zMzMiIHdpZHRoPSIxNzAuNjY3IiBoZWlnaHQ9IjQyLjY2NyIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojQ0NDQ0NDIiBkYXRhLW9sZF9jb2xvcj0iI2NjY2NjYyI+PC9yZWN0PgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cG9seWdvbiBwb2ludHM9IjIxMy4zMzMsMTgxLjMzMyAyMTMuMzMzLDMwOS4zMzMgMzIwLDI0NS4zMzMgICAiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0NDQ0NDQyIgZGF0YS1vbGRfY29sb3I9IiNjY2NjY2MiPjwvcG9seWdvbj4KCTwvZz4KPC9nPjwvZz4gPC9zdmc+);
}

.title-video-box {
	margin-top: 1rem;
}
</style>
<section id="divCenter" class="video-container">
	<div class="container">
		<nav class="breadcrumb m-b-10 m-t-10" aria-label="breadcrumbs"
			data-no-instant="">
			<ul>
				<li><a href="<?php echo $servername ?>"> <span class="icon is-small">
							<i class="fas fa-home" aria-hidden="true"></i>
					</span> <span>Trang chủ</span>
				</a></li>
				<li><a href="<?php echo $servername ?>/videos"> <span>Videos</span>
				</a></li>
				<li class="active"><a href="<?php echo $servername ?>/videos"> <span>Kết quả tìm kiếm video</span>
				</a></li>
			</ul>
		</nav>
		<?php require_once "./mvc/views/partials/search-box.php"?>
		<div class="video-bottom news-list ng-scope" id="containerResult"
			ng-controller="videos-list as ctrl">
			<div class="page-heading d-flex">
				<h4 class="box-title-page mr-auto title-video-box">VIDEOS</h4>
				<nav class="pagination is-small custom-pagination" role="navigation"
					aria-label="pagination">
				<?php echo $data["Navigate"]; ?>
			</nav>
			</div>
			<div class="video-main">
				<div class="video-list">
					<!-- end ngRepeat: item in listVideo -->
					<?php while ($row = mysqli_fetch_array($data["KetQuaTrangHienTai"])) {?>
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a title="<?php echo $row["tieudevideo"]; ?>" class="video-img"
							href="<?php echo $servername ?>/videos/<?php echo $row["slugvideo"] ?>-<?php echo $row["id"] ?>">
							<img
							ng-src="https://img.youtube.com/vi/<?php echo $row["videoid"]; ?>/hqdefault.jpg"
							alt="<?php echo $row["tieudevideo"]; ?>"
							src="https://img.youtube.com/vi/<?php echo $row["videoid"]; ?>/hqdefault.jpg">
							<span class="video-time ng-binding ng-scope"><?php echo $row["thoiluong"]; ?></span>
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="<?php echo $servername ?>/videos/<?php echo $row["slugvideo"] ?>-<?php echo $row["id"] ?>"
									title="<?php echo $row["tieudevideo"]; ?>" class="ng-binding"><?php echo $row["tieudevideo"]; ?></a>
							</h2>
							<div class="video-info">
								<span class="video-info-item ng-binding ng-scope date-add"><?php
        $date = date_create($row["thoigian"]);
        echo date_format($date, "d/m/Y");
        ?></span> <span class="video-info-item ng-binding ng-scope"> <i
									class="fa fa-eye"></i><?php echo $row["luotxem"]; ?> lượt xem
								</span>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

</section>