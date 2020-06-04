<style>
body{
	background: #222 !important;
}
.video-main-content {
	width: 100%;
	margin-bottom: 20px;
}

.video-main-iframe {
	margin-bottom: 10px;
	height: 465px;
}

.embed-responsive {
	position: relative;
	display: block;
	width: 100%;
	height: 100%;
	padding: 0;
	overflow: hidden;
}

.embed-responsive iframe {
	left: 0;
	width: 100%;
	height: 100%;
	border: 0;
}

.video-main-content .video-title {
	font-size: 130%;
	font-weight: 500;
	color: #fff;
	padding-top: 0px;
}
.playlist-container {
	background-color: #111;
	max-height: 530px;
}
.container-scroll {
    overflow: auto;
}
.playlist-container .video-main-more-list-header {
	background-color: #111;
	display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    padding: 10px 30px;
    margin-bottom: 10px;
}

.playlist-container .video-list-vertical .video-item {
	border-top: 0px;
	width: 100%;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-orient: horizontal;
	-webkit-box-direction: normal;
	-ms-flex-direction: row;
	flex-direction: row;
	padding: 0px;
	padding-left: 20px;
	position: relative;
}

.playlist-container .video-list-vertical .video-item .video-img {
	width: 100px;
	height: calc(100px * 9/ 16);
	margin-right: 10px;
	margin-bottom: 0px;
}
.video-item.playing::before {
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    left: 0px;
    content: "";
    width: 0px;
    height: 0px;
    border: 7px solid transparent;
    border-left-width: 13px;
    border-left-color: #999;
}
.video-item .video-time {
	position: absolute;
	bottom: 5px;
	left: 60px;
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

.video-item .title {
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
.video-item .title a{
	color: #fff;
}
.video-info {
	color: #999;
}

.video-item .video-info .video-info-item:not (:last-child ) {
	margin-right: 20px;
}

.video-item .video-info .video-info-item {
	font-size: 90%;
	color: #666;
	position: relative;
}

.dark-mode .video-info .video-info-item:not (:first-child )::after {
	background-color: #999;
}

.mb-2 {
	margin-bottom: 0.5rem !important;
}

.playlist-container .video-main-more-list-header .title {
	color: #fff;
	font-size: 120%;
}

.sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
}

/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
.breadcrumb a {
    align-items: center;
    color: #fff;
    display: flex;
    justify-content: center;
    padding: 0 .75em;
}
</style>
<section id="divCenter" class="video-container">
<nav class="breadcrumb m-b-10 m-t-10" aria-label="breadcrumbs" data-no-instant="">
	<ul>
		<li><a href="<?php echo $servername ?>"> <span class="icon is-small">
					<i class="fas fa-home" aria-hidden="true"></i>
			</span> <span>Trang chủ</span>
		</a></li>
		<li><a href="<?php echo $servername ?>/videos/"><span>Videos</span>
		</a></li>
		<li class="is-active"><a href="#"> <span>Videos ABC</span>
		</a></li>
	</ul>
</nav>
	<div class="container">
		<div class="video-main ng-scope" id="video-main"
			ng-controller="videos-detail as ctrl" ng-init="init('2', 'true')">
			<div class="columns">
				<div class="column is-two-thirds">
					<div class="video-main-content">
						<div class="video-main-iframe">
							<div class="embed-responsive embed-responsive-16by9"
								compile="stringHTMLIframe">
								<iframe id="player" width="560" height="315"
									src="https://www.youtube.com/embed/Jn3XnB2IlNw?autoplay=1&amp;enablejsapi=1&amp;rel=0"
									frameborder="0"
									allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
									allowfullscreen="" class="ng-scope"></iframe>
							</div>
						</div>
						<h1 class="video-title ng-binding">Triển lãm Auto Show Detroit
							2019 nổi bật với những dòng xe cơ bắp, bán tải và xe điện [2]</h1>
						<div class="video-info">
							<span class="mr-auto ng-binding">33 lượt xem</span>
						</div>
					</div>
				</div>
				<div class="column">
					<div
						class="video-main-more-list playlist-container container-scroll mb-5">
						<div class="video-main-more-list-header sticky-top">
							<div class="d-flex mb-2">
								<span class="title ng-binding">Triển lãm Auto Show Detroit 2019
									nổi bật với những dòng xe cơ bắp, bán tải và xe điện [1]</span>
							</div>
						</div>
						<div class="video-list video-list-vertical">
							<div ng-repeat="item in listPlaylistVideo"
								class="video-item media">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="javascript:void(0)"> <img
									ng-src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-5-66858j0.jpg"
									alt="Triển lãm Auto Show Detroit 2019 nổi bật với những dòng xe cơ bắp, bán tải và xe điện [5]"
									src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-5-66858j0.jpg">
									<!-- ngIf: item.Duration -->
									<span class="video-time ng-binding ng-scope">1:05</span>
								<!-- end ngIf: item.Duration -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a
											class="ng-binding">Triển lãm Auto Show Detroit 2019 nổi bật
											với những dòng xe cơ bắp, bán tải và xe điện [5]</a>
									</h3>
									<div class="video-info">
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">24 lượt xem</span>
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">1 năm trước</span>
									</div>
								</div>
							</div>
							<div ng-repeat="item in listPlaylistVideo"
								class="video-item media  playing">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="javascript:void(0)" ng-click="playVideoById(item.Id)"> <img
									ng-src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-2-66855j0.jpg"
									alt="Triển lãm Auto Show Detroit 2019 nổi bật với những dòng xe cơ bắp, bán tải và xe điện [2]"
									src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-2-66855j0.jpg">
									<!-- ngIf: item.Duration -->
									<span class="video-time ng-binding ng-scope">1:58</span>
								</a>
								<div class="media-body">
									<h3 class="title">
										<a
											class="ng-binding">Triển lãm Auto Show Detroit 2019 nổi bật
											với những dòng xe cơ bắp, bán tải và xe điện [2]</a>
									</h3>
									<div class="video-info">
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">33 lượt xem</span>
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">1 năm trước</span>
									</div>
								</div>
							</div>
							<div ng-repeat="item in listPlaylistVideo"
								class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="javascript:void(0)" ng-click="playVideoById(item.Id)"> <img
									ng-src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-3-66856j0.jpg"
									alt="Triển lãm Auto Show Detroit 2019 nổi bật với những dòng xe cơ bắp, bán tải và xe điện [3]"
									src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-3-66856j0.jpg">
									<span class="video-time ng-binding ng-scope"
									ng-if="item.Duration">1:10</span>
								</a>
								<div class="media-body">
									<h3 class="title">
										<a href="javascript:void(0)" ng-click="playVideoById(item.Id)"
											class="ng-binding">Triển lãm Auto Show Detroit 2019 nổi bật
											với những dòng xe cơ bắp, bán tải và xe điện [3]</a>
									</h3>
									<div class="video-info">
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">140 lượt xem</span>
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">1 năm trước</span>
									</div>
								</div>
							</div>
							<div ng-repeat="item in listPlaylistVideo"
								class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="javascript:void(0)" ng-click="playVideoById(item.Id)"> <img
									ng-src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-7-66860j0.jpg"
									alt="Triển lãm Auto Show Detroit 2019 nổi bật với những dòng xe cơ bắp, bán tải và xe điện [7]"
									src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-7-66860j0.jpg">
									<span class="video-time ng-binding ng-scope">1:44</span>
								</a>
								<div class="media-body">
									<h3 class="title">
										<a href="javascript:void(0)" ng-click="playVideoById(item.Id)"
											class="ng-binding">Triển lãm Auto Show Detroit 2019 nổi bật
											với những dòng xe cơ bắp, bán tải và xe điện [7]</a>
									</h3>
									<div class="video-info">
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">22 lượt xem</span>
										<span class="video-info-item ng-binding ng-scope">1 năm trước</span>
									</div>
								</div>
							</div>
							<div ng-repeat="item in listPlaylistVideo"
								class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="javascript:void(0)" ng-click="playVideoById(item.Id)"> <img
									ng-src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-8-66861j0.jpg"
									alt="Triển lãm Auto Show Detroit 2019 nổi bật với những dòng xe cơ bắp, bán tải và xe điện [8]"
									src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-8-66861j0.jpg">
									<span class="video-time ng-binding ng-scope"
									ng-if="item.Duration">1:10</span>
								</a>
								<div class="media-body">
									<h3 class="title">
										<a href="javascript:void(0)" ng-click="playVideoById(item.Id)"
											class="ng-binding">Triển lãm Auto Show Detroit 2019 nổi bật
											với những dòng xe cơ bắp, bán tải và xe điện [8]</a>
									</h3>
									<div class="video-info">
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">18 lượt xem</span>
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">1 năm trước</span>
									</div>
								</div>
							</div>
							<div ng-repeat="item in listPlaylistVideo"
								class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="javascript:void(0)" ng-click="playVideoById(item.Id)"> <img
									ng-src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-6-66859j0.jpg"
									alt="Triển lãm Auto Show Detroit 2019 nổi bật với những dòng xe cơ bắp, bán tải và xe điện [6]"
									src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-6-66859j0.jpg">
									<!-- ngIf: item.Duration -->
									<span class="video-time ng-binding ng-scope"
									ng-if="item.Duration">1:31</span>
								</a>
								<div class="media-body">
									<h3 class="title">
										<a href="javascript:void(0)" ng-click="playVideoById(item.Id)"
											class="ng-binding">Triển lãm Auto Show Detroit 2019 nổi bật
											với những dòng xe cơ bắp, bán tải và xe điện [6]</a>
									</h3>
									<div class="video-info">
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">30 lượt xem</span>
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">1 năm trước</span>
									</div>
								</div>
							</div>
							<div ng-repeat="item in listPlaylistVideo"
								class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="javascript:void(0)" ng-click="playVideoById(item.Id)"> <img
									ng-src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-1-66854j0.jpg"
									alt="Triển lãm Auto Show Detroit 2019 nổi bật với những dòng xe cơ bắp, bán tải và xe điện [1]"
									src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-1-66854j0.jpg">
									<span class="video-time ng-binding ng-scope">1:29</span>
								</a>
								<div class="media-body">
									<h3 class="title">
										<a href="javascript:void(0)" ng-click="playVideoById(item.Id)"
											class="ng-binding">Triển lãm Auto Show Detroit 2019 nổi bật
											với những dòng xe cơ bắp, bán tải và xe điện [1]</a>
									</h3>
									<div class="video-info">

										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">49 lượt xem</span>
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">1 năm trước</span>
									</div>
								</div>
							</div>
							<div ng-repeat="item in listPlaylistVideo"
								class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="javascript:void(0)" ng-click="playVideoById(item.Id)"> <img
									ng-src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-4-66857j0.jpg"
									alt="Triển lãm Auto Show Detroit 2019 nổi bật với những dòng xe cơ bắp, bán tải và xe điện [4]"
									src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-4-66857j0.jpg">
									<span class="video-time ng-binding ng-scope">1:01</span>
								</a>
								<div class="media-body">
									<h3 class="title">
										<a href="javascript:void(0)" ng-click="playVideoById(item.Id)"
											class="ng-binding">Triển lãm Auto Show Detroit 2019 nổi bật
											với những dòng xe cơ bắp, bán tải và xe điện [4]</a>
									</h3>
									<div class="video-info">
										<span class="video-info-item ng-binding ng-scope">14 lượt xem</span>
										<span class="video-info-item ng-binding ng-scope">1 năm trước</span>
									</div>
								</div>
							</div>
							<div ng-repeat="item in listPlaylistVideo"
								class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="javascript:void(0)" ng-click="playVideoById(item.Id)"> <img
									ng-src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-9-66862j0.jpg"
									alt="Triển lãm Auto Show Detroit 2019 nổi bật với những dòng xe cơ bắp, bán tải và xe điện [9]"
									src="https://cdn.dailyxe.com.vn/image/trien-lam-auto-show-detroit-2019-noi-bat-voi-nhung-dong-xe-co-bap-ban-tai-va-xe-dien-9-66862j0.jpg">
									<span class="video-time ng-binding ng-scope">1:04</span>
								</a>
								<div class="media-body">
									<h3 class="title">
										<a href="javascript:void(0)" ng-click="playVideoById(item.Id)"
											class="ng-binding">Triển lãm Auto Show Detroit 2019 nổi bật
											với những dòng xe cơ bắp, bán tải và xe điện [9]</a>
									</h3>
									<div class="video-info">
										<span class="video-info-item ng-binding ng-scope">17 lượt xem</span>
										<span class="video-info-item ng-binding ng-scope">1 năm trước</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>