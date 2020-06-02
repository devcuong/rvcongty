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

.media {
	border-top: 1px solid rgba(219, 219, 219, .5);
	margin-top: 1rem;
	padding-top: 1rem;
	display: -ms-flexbox;
	display: -webkit-box;
	display: flex;
	-ms-flex-align: start;
	-webkit-box-align: start;
	align-items: flex-start;
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

.video-item .video-info .video-info-item:not(:last-child) {
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
    background-color: rgba(0,0,0,0.8);
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
    background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgMzIwIDMyMCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzIwIDMyMDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIj48Zz48Zz4KCTxnPgoJCTxyZWN0IHk9Ijk2IiB3aWR0aD0iMjU2IiBoZWlnaHQ9IjQyLjY2NyIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojQ0NDQ0NDIiBkYXRhLW9sZF9jb2xvcj0iI2NjY2NjYyI+PC9yZWN0PgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cmVjdCB5PSIxMC42NjciIHdpZHRoPSIyNTYiIGhlaWdodD0iNDIuNjY3IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNDQ0NDQ0MiIGRhdGEtb2xkX2NvbG9yPSIjY2NjY2NjIj48L3JlY3Q+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxyZWN0IHk9IjE4MS4zMzMiIHdpZHRoPSIxNzAuNjY3IiBoZWlnaHQ9IjQyLjY2NyIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojQ0NDQ0NDIiBkYXRhLW9sZF9jb2xvcj0iI2NjY2NjYyI+PC9yZWN0PgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cG9seWdvbiBwb2ludHM9IjIxMy4zMzMsMTgxLjMzMyAyMTMuMzMzLDMwOS4zMzMgMzIwLDI0NS4zMzMgICAiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0NDQ0NDQyIgZGF0YS1vbGRfY29sb3I9IiNjY2NjY2MiPjwvcG9seWdvbj4KCTwvZz4KPC9nPjwvZz4gPC9zdmc+);
}
</style>
<section id="divCenter" class="video-container">
	<div class="container">
		<span macd="danhsach_video"></span>
		<div class="video-bottom news-list ng-scope" id="containerResult"
			ng-controller="videos-list as ctrl" ng-init="init('')">
			<div class="d-flex align-items-center">
				<h1 class="video-title ng-scope" ng-if="!isLoadTimKiem">Videos</h1>
				<div class="d-flex align-items-center ml-auto">
					<div class="form-search m-0">
						<input ng-attr-id="{{id}}" type="text" ng-model="tuKhoaTimKiem"
							class="form-control ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty"
							placeholder="Tìm kiếm videos..."
							auto-complete="ctrl.autoCompleteOptions"
							ng-keyup="$event.keyCode === 13 &amp;&amp; loadData(1, displayItems)"
							id="auto-complete-video"><i class="fa fa-search"></i>
					</div>
				</div>
			</div>
			<div class="video-main">
				<div class="video-list">
					<!-- end ngRepeat: item in listVideo -->
					<?php while ($row = mysqli_fetch_array($data["Videos"])) {?>
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="<?php echo $row["tieudevideo"]; ?>"
							class="video-img"
							href="<?php echo $servername ?>/videos/<?php echo $row["slugvideo"] ?>-<?php echo $row["id"] ?>">
							<img
							ng-src="https://img.youtube.com/vi/<?php echo $row["videoid"]; ?>/hqdefault.jpg"
							alt="<?php echo $row["tieudevideo"]; ?>"
							src="https://img.youtube.com/vi/<?php echo $row["videoid"]; ?>/hqdefault.jpg">
							<span
							class="video-time ng-binding ng-scope" ng-if="item.Duration"><?php echo $row["thoiluong"]; ?></span>
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="<?php echo $servername ?>/videos/<?php echo $row["slugvideo"] ?>-<?php echo $row["id"] ?>"
									title="<?php echo $row["tieudevideo"]; ?>"
									class="ng-binding"><?php echo $row["tieudevideo"]; ?></a>
							</h2>
							<div class="video-info">
								<span class="video-info-item ng-binding ng-scope"><?php
    $date = date_create($row["thoigian"]);
    echo date_format($date, "d/m/Y");
    ?></span>
								<span class="video-info-item ng-binding ng-scope"> <i class="fa fa-eye"></i><?php echo $row["luotxem"]; ?> lượt xem
								</span>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="video-bottom news-list ng-scope" id="containerResult"
			ng-controller="playlist-videos-list as ctrl" ng-init="init('')">
			<!-- ngIf: listVideo.length > 0 -->
			<div class="d-flex align-items-center ng-scope"
				ng-if="listVideo.length > 0">
				<!-- ngIf: !isLoadTimKiem -->
				<h1 class="video-title ng-scope" ng-if="!isLoadTimKiem">Playlist
					videos</h1>
			</div>
			<div class="video-main ng-scope" ng-if="listVideo.length > 0">
				<div class="video-list">
					<!-- ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo"
						class="video-item media playlist">
						<a title="DailyXe Review Honda" class="video-img"
							href="https://dailyxe.com.vn/videos/dailyxe-review-honda-8q.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/dailyxe-review-honda-75698j2.jpg"
							alt="DailyXe Review Honda"
							src="https://cdn.dailyxe.com.vn/image/dailyxe-review-honda-75698j2.jpg">
							<!-- ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
							<span class="playlist-count ng-binding ng-scope"
							ng-if="item.IdVideos">5</span>
						<!-- end ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/dailyxe-review-honda-8q.html"
									title="DailyXe Review Honda" class="ng-binding">DailyXe Review
									Honda</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 10 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo"
						class="video-item media playlist">
						<a title="DailyXe Review Ford" class="video-img"
							href="https://dailyxe.com.vn/videos/dailyxe-review-ford-7q.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/dailyxe-review-ford-75693j2.jpg"
							alt="DailyXe Review Ford"
							src="https://cdn.dailyxe.com.vn/image/dailyxe-review-ford-75693j2.jpg">
							<!-- ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
							<span class="playlist-count ng-binding ng-scope"
							ng-if="item.IdVideos">4</span>
						<!-- end ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/dailyxe-review-ford-7q.html"
									title="DailyXe Review Ford" class="ng-binding">DailyXe Review
									Ford</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 10 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo"
						class="video-item media playlist">
						<a title="DailyXe Review Chevrolet" class="video-img"
							href="https://dailyxe.com.vn/videos/dailyxe-review-chevrolet-6q.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/dailyxe-review-chevrolet-75690j2.jpg"
							alt="DailyXe Review Chevrolet"
							src="https://cdn.dailyxe.com.vn/image/dailyxe-review-chevrolet-75690j2.jpg">
							<!-- ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
							<span class="playlist-count ng-binding ng-scope"
							ng-if="item.IdVideos">4</span>
						<!-- end ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/dailyxe-review-chevrolet-6q.html"
									title="DailyXe Review Chevrolet" class="ng-binding">DailyXe
									Review Chevrolet</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 10 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo"
						class="video-item media playlist">
						<a
							title="Thỏa sức &quot;nghịch cát&quot; với video mới của Ken Block"
							class="video-img"
							href="https://dailyxe.com.vn/videos/thoa-suc-nghich-cat-voi-video-moi-cua-ken-block-5q.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/thoa-suc-nghich-cat-voi-video-moi-cua-ken-block-15551j2.jpg"
							alt="Thỏa sức &quot;nghịch cát&quot; với video mới của Ken Block"
							src="https://cdn.dailyxe.com.vn/image/thoa-suc-nghich-cat-voi-video-moi-cua-ken-block-15551j2.jpg">
							<!-- ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
							<span class="playlist-count ng-binding ng-scope"
							ng-if="item.IdVideos">3</span>
						<!-- end ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/thoa-suc-nghich-cat-voi-video-moi-cua-ken-block-5q.html"
									title="Thỏa sức &quot;nghịch cát&quot; với video mới của Ken Block"
									class="ng-binding">Thỏa sức "nghịch cát" với video mới của Ken
									Block</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 năm trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo"
						class="video-item media playlist">
						<a
							title="Mercedes-AMG E63 S thử khả năng tăng tốc với Tesla Model S P100D [1]"
							class="video-img"
							href="https://dailyxe.com.vn/videos/mercedes-amg-e63-s-thu-kha-nang-tang-toc-voi-tesla-model-s-p100d-1-4q.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/mercedes-amg-e63-s-thu-kha-nang-tang-toc-voi-tesla-model-s-p100d-1-66915j2.jpg"
							alt="Mercedes-AMG E63 S thử khả năng tăng tốc với Tesla Model S P100D [1]"
							src="https://cdn.dailyxe.com.vn/image/mercedes-amg-e63-s-thu-kha-nang-tang-toc-voi-tesla-model-s-p100d-1-66915j2.jpg">
							<!-- ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
							<span class="playlist-count ng-binding ng-scope"
							ng-if="item.IdVideos">2</span>
						<!-- end ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/mercedes-amg-e63-s-thu-kha-nang-tang-toc-voi-tesla-model-s-p100d-1-4q.html"
									title="Mercedes-AMG E63 S thử khả năng tăng tốc với Tesla Model S P100D [1]"
									class="ng-binding">Mercedes-AMG E63 S thử khả năng tăng tốc với
									Tesla Model S P100D [1]</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 năm trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo"
						class="video-item media playlist">
						<a
							title="Chevrolet Trailblazer được thử nghiệm vô cùng nghiêm ngặt trước khi về Việt Nam [1]"
							class="video-img"
							href="https://dailyxe.com.vn/videos/chevrolet-trailblazer-duoc-thu-nghiem-vo-cung-nghiem-ngat-truoc-khi-ve-viet-nam-1-3q.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/chevrolet-trailblazer-duoc-thu-nghiem-vo-cung-nghiem-ngat-truoc-khi-ve-viet-nam-1-66917j2.jpg"
							alt="Chevrolet Trailblazer được thử nghiệm vô cùng nghiêm ngặt trước khi về Việt Nam [1]"
							src="https://cdn.dailyxe.com.vn/image/chevrolet-trailblazer-duoc-thu-nghiem-vo-cung-nghiem-ngat-truoc-khi-ve-viet-nam-1-66917j2.jpg">
							<!-- ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
							<span class="playlist-count ng-binding ng-scope"
							ng-if="item.IdVideos">2</span>
						<!-- end ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/chevrolet-trailblazer-duoc-thu-nghiem-vo-cung-nghiem-ngat-truoc-khi-ve-viet-nam-1-3q.html"
									title="Chevrolet Trailblazer được thử nghiệm vô cùng nghiêm ngặt trước khi về Việt Nam [1]"
									class="ng-binding">Chevrolet Trailblazer được thử nghiệm vô
									cùng nghiêm ngặt trước khi về Việt Nam [1]</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 năm trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo"
						class="video-item media playlist">
						<a
							title="Triển lãm Auto Show Detroit 2019 nổi bật với những dòng xe cơ bắp, bán tải và xe điện [1]"
							class="video-img"
							href="https://dailyxe.com.vn/videos/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-1-2q.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-1-66916j2.jpg"
							alt="Triển lãm Auto Show Detroit 2019 nổi bật với những dòng xe cơ bắp, bán tải và xe điện [1]"
							src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-1-66916j2.jpg">
							<!-- ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
							<span class="playlist-count ng-binding ng-scope"
							ng-if="item.IdVideos">17</span>
						<!-- end ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-1-2q.html"
									title="Triển lãm Auto Show Detroit 2019 nổi bật với những dòng xe cơ bắp, bán tải và xe điện [1]"
									class="ng-binding">Triển lãm Auto Show Detroit 2019 nổi bật với
									những dòng xe cơ bắp, bán tải và xe điện [1]</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 năm trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo"
						class="video-item media playlist">
						<a
							title="9 cảnh hành động nghẹt thở tiêu biểu xuyên suốt series phim Fast and Furious"
							class="video-img"
							href="https://dailyxe.com.vn/videos/9-canh-hanh-dong-nghet-tho-tieu-bieu-xuyen-suot-series-phim-fast-and-furious-1q.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/9-canh-hanh-dong-nghet-tho-tieu-bieu-xuyen-suot-series-phim-fast-and-furious-66930j2.jpg"
							alt="9 cảnh hành động nghẹt thở tiêu biểu xuyên suốt series phim Fast and Furious"
							src="https://cdn.dailyxe.com.vn/image/9-canh-hanh-dong-nghet-tho-tieu-bieu-xuyen-suot-series-phim-fast-and-furious-66930j2.jpg">
							<!-- ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
							<span class="playlist-count ng-binding ng-scope"
							ng-if="item.IdVideos">9</span>
						<!-- end ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/9-canh-hanh-dong-nghet-tho-tieu-bieu-xuyen-suot-series-phim-fast-and-furious-1q.html"
									title="9 cảnh hành động nghẹt thở tiêu biểu xuyên suốt series phim Fast and Furious"
									class="ng-binding">9 cảnh hành động nghẹt thở tiêu biểu xuyên
									suốt series phim Fast and Furious</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 năm trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>

</section>