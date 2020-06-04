<style>
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
    color: #000;
    padding-top: 0px;
}
.playlist-container .video-main-more-list-header {
    background-color: #111;
}
.playlist-container .video-list-vertical .video-item .video-img {
    width: 100px;
    height: calc(100px * 9 / 16);
    margin-right: 10px;
    margin-bottom: 0px;
}
.video-item .video-time {
    position: absolute;
    bottom: 5px;
    right: 5px;
    background-color: rgba(0,0,0,0.8);
    border-radius: 3px;
    padding: 2px 5px;
    color: #fff;
    font-weight: 500;
    font-size: 90%;
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
</style>
<section id="divCenter" class="video-container">
	<div class="container">
		<span macd="chitiet_video"></span>
		<div class="video-main ng-scope" id="video-main"
			ng-controller="videos-detail as ctrl" ng-init="init('8', 'true')">
			<div class="columns">
				<div class="column is-three-fifths">
					<div class="video-main-content">
						<div class="video-main-iframe">
							<div class="embed-responsive embed-responsive-16by9"
								compile="stringHTMLIframe">
								<iframe id="player"
									src="https://www.youtube.com/embed/9gdMn9yQIsk?autoplay=0&rel=0&amp;enablejsapi=1&amp;rel=0"
									frameborder="0"
									allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
									allowfullscreen="" class="ng-scope"></iframe>
							</div>
						</div>
						<ul class="hash-tag-list ng-hide"
							ng-show="dataVideo.HashTagsInChiTiet">
						</ul>
						<h1 class="video-title ng-binding">[Review] Honda City 2017</h1>
						<div class="video-info">
							<span class="mr-auto ng-binding">20 lượt xem</span>
						</div>
					</div>
				</div>
				<div class="column">
					<div
						class="video-main-more-list playlist-container container-scroll mb-5">
						<div class="video-main-more-list-header sticky-top">
							<div class="d-flex mb-2">
								<span class="title ng-binding">DailyXe Review Honda</span>
							</div>
						</div>
						<div class="video-list video-list-vertical">
							<div ng-repeat="item in listPlaylistVideo"
								class="video-item media  playing">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									ng-click="playVideoById(item.Id)"> <img
									ng-src="https://cdn.dailyxe.com.vn/image/review-honda-city-2017-75698j0.jpg"
									alt="[Review] Honda City 2017"
									src="https://cdn.dailyxe.com.vn/image/review-honda-city-2017-75698j0.jpg">
									<span class="video-time ng-binding ng-scope">4:30</span>
								</a>
								<div class="media-body">
									<h3 class="title">
										<a href="javascript:void(0)" ng-click="playVideoById(item.Id)"
											class="ng-binding">[Review] Honda City 2017</a>
									</h3>
									<div class="video-info">
										<span class="video-info-item ng-binding ng-scope">20 lượt xem</span>
										<span class="video-info-item ng-binding ng-scope">11 tháng trước</span>
									</div>
								</div>
							</div>
							<div ng-repeat="item in listPlaylistVideo"
								class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="javascript:void(0)" ng-click="playVideoById(item.Id)"> <img
									ng-src="https://cdn.dailyxe.com.vn/image/tinh-nang-va-loi-ich-honda-crv-2018-75696j0.jpg"
									alt="[Tính năng và lợi ích] Honda CRV 2018"
									src="https://cdn.dailyxe.com.vn/image/tinh-nang-va-loi-ich-honda-crv-2018-75696j0.jpg">
									<span
									class="video-time ng-binding ng-scope">5:45</span>
								</a>
								<div class="media-body">
									<h3 class="title">
										<a href="javascript:void(0)" ng-click="playVideoById(item.Id)"
											class="ng-binding">[Tính năng và lợi ích] Honda CRV 2018</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope">42 lượt xem</span>
										<span class="video-info-item ng-binding ng-scope">11 tháng trước</span>
									</div>
								</div>
							</div>
							<div ng-repeat="item in listPlaylistVideo"
								class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="javascript:void(0)" ng-click="playVideoById(item.Id)"> <img
									ng-src="https://cdn.dailyxe.com.vn/image/comercial-video-honda-accord-2018-75697j0.jpg"
									alt="[Comercial Video] Honda Accord 2018"
									src="https://cdn.dailyxe.com.vn/image/comercial-video-honda-accord-2018-75697j0.jpg">
									<span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">3:38</span>
								</a>
								<div class="media-body">
									<h3 class="title">
										<a href="javascript:void(0)" ng-click="playVideoById(item.Id)"
											class="ng-binding">[Comercial Video] Honda Accord 2018</a>
									</h3>
									<div class="video-info">
										<span class="video-info-item ng-binding ng-scope">14 lượt xem</span>
										<span class="video-info-item ng-binding ng-scope">11 tháng trước</span>
									</div>
								</div>
							</div>
							<!-- end ngRepeat: item in listPlaylistVideo -->
							<div ng-repeat="item in listPlaylistVideo"
								class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="javascript:void(0)" ng-click="playVideoById(item.Id)"> <img
									ng-src="https://cdn.dailyxe.com.vn/image/commercial-video-honda-accord-2017-75699j0.jpg"
									alt="[Commercial video] Honda Accord 2017"
									src="https://cdn.dailyxe.com.vn/image/commercial-video-honda-accord-2017-75699j0.jpg">
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">2:24</span>
									<!-- end ngIf: item.Duration -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a href="javascript:void(0)" ng-click="playVideoById(item.Id)"
											class="ng-binding">[Commercial video] Honda Accord 2017</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">18 lượt xem</span>
										<!-- end ngIf: item.SoLuotXem -->
										<!-- ngIf: item.NgayTao -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">11 tháng trước</span>
										<!-- end ngIf: item.NgayTao -->
									</div>
								</div>
							</div>
							<!-- end ngRepeat: item in listPlaylistVideo -->
							<div ng-repeat="item in listPlaylistVideo"
								class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="javascript:void(0)" ng-click="playVideoById(item.Id)"> <img
									ng-src="https://cdn.dailyxe.com.vn/image/review-honda-civic-2017-75695j0.jpg"
									alt="[Review] Honda Civic 2017"
									src="https://cdn.dailyxe.com.vn/image/review-honda-civic-2017-75695j0.jpg">
									<span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">4:52</span>
								</a>
								<div class="media-body">
									<h3 class="title">
										<a href="javascript:void(0)" ng-click="playVideoById(item.Id)"
											class="ng-binding">[Review] Honda Civic 2017</a>
									</h3>
									<div class="video-info">
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">8 lượt xem</span>
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">11 tháng trước</span>
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