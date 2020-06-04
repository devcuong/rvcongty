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
									<span class="video-time ng-binding ng-scope"
									ng-if="item.Duration">4:30</span>
								</a>
								<div class="media-body">
									<h3 class="title">
										<a href="javascript:void(0)" ng-click="playVideoById(item.Id)"
											class="ng-binding">[Review] Honda City 2017</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">20 lượt xem</span>
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
									ng-src="https://cdn.dailyxe.com.vn/image/tinh-nang-va-loi-ich-honda-crv-2018-75696j0.jpg"
									alt="[Tính năng và lợi ích] Honda CRV 2018"
									src="https://cdn.dailyxe.com.vn/image/tinh-nang-va-loi-ich-honda-crv-2018-75696j0.jpg">
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">5:45</span>
									<!-- end ngIf: item.Duration -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a href="javascript:void(0)" ng-click="playVideoById(item.Id)"
											class="ng-binding">[Tính năng và lợi ích] Honda CRV 2018</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">42 lượt xem</span>
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
									ng-src="https://cdn.dailyxe.com.vn/image/comercial-video-honda-accord-2018-75697j0.jpg"
									alt="[Comercial Video] Honda Accord 2018"
									src="https://cdn.dailyxe.com.vn/image/comercial-video-honda-accord-2018-75697j0.jpg">
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">3:38</span>
									<!-- end ngIf: item.Duration -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a href="javascript:void(0)" ng-click="playVideoById(item.Id)"
											class="ng-binding">[Comercial Video] Honda Accord 2018</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">14 lượt xem</span>
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
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">4:52</span>
									<!-- end ngIf: item.Duration -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a href="javascript:void(0)" ng-click="playVideoById(item.Id)"
											class="ng-binding">[Review] Honda Civic 2017</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">8 lượt xem</span>
										<!-- end ngIf: item.SoLuotXem -->
										<!-- ngIf: item.NgayTao -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">11 tháng trước</span>
										<!-- end ngIf: item.NgayTao -->
									</div>
								</div>
							</div>
							<!-- end ngRepeat: item in listPlaylistVideo -->
						</div>
					</div>
					<div class="video-main-more-list">
						<div class="video-list video-list-vertical">
							<!-- ngRepeat: item in listVideo -->
							<div ng-repeat="item in listVideo" class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="https://dailyxe.com.vn/videos/toyota-highlander-hybrid-se-cap-ben-thi-truong-chau-au-tu-nam-2021-1219o.html">
									<img
									ng-src="https://cdn.dailyxe.com.vn/image/toyota-highlander-hybrid-se-cap-ben-thi-truong-chau-au-tu-nam-2021-125063j0.jpg"
									alt="Toyota Highlander Hybrid sẽ cập bến thị trường châu Âu từ năm 2021"
									src="https://cdn.dailyxe.com.vn/image/toyota-highlander-hybrid-se-cap-ben-thi-truong-chau-au-tu-nam-2021-125063j0.jpg">
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">11:57</span>
									<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a
											href="https://dailyxe.com.vn/videos/toyota-highlander-hybrid-se-cap-ben-thi-truong-chau-au-tu-nam-2021-1219o.html"
											class="ng-binding">Toyota Highlander Hybrid sẽ cập bến thị
											trường châu Âu từ năm 2021</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">4 lượt xem</span>
										<!-- end ngIf: item.SoLuotXem -->
										<!-- ngIf: item.NgayTao -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">23 ngày trước</span>
										<!-- end ngIf: item.NgayTao -->
									</div>
								</div>
							</div>
							<!-- end ngRepeat: item in listVideo -->
							<div ng-repeat="item in listVideo" class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="https://dailyxe.com.vn/videos/hyundai-trieu-hoi-gan-12000-xe-sonata-va-nexo-2020-1196o.html">
									<img
									ng-src="https://cdn.dailyxe.com.vn/image/hyundai-trieu-hoi-gan-12000-xe-sonata-va-nexo-2020-118720j0.jpg"
									alt="Hyundai triệu hồi gần 12.000 xe Sonata và Nexo 2020"
									src="https://cdn.dailyxe.com.vn/image/hyundai-trieu-hoi-gan-12000-xe-sonata-va-nexo-2020-118720j0.jpg">
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">13:59</span>
									<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a
											href="https://dailyxe.com.vn/videos/hyundai-trieu-hoi-gan-12000-xe-sonata-va-nexo-2020-1196o.html"
											class="ng-binding">Hyundai triệu hồi gần 12.000 xe Sonata và
											Nexo 2020</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">11 lượt xem</span>
										<!-- end ngIf: item.SoLuotXem -->
										<!-- ngIf: item.NgayTao -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">1 tháng trước</span>
										<!-- end ngIf: item.NgayTao -->
									</div>
								</div>
							</div>
							<!-- end ngRepeat: item in listVideo -->
							<div ng-repeat="item in listVideo" class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="https://dailyxe.com.vn/videos/trai-nghiem-thuc-te-bentley-flying-spur-2020-yen-tinh-toi-muc-nao-1188o.html">
									<img
									ng-src="https://cdn.dailyxe.com.vn/image/trai-nghiem-thuc-te-bentley-flying-spur-2020-yen-tinh-toi-muc-nao-117251j0.jpg"
									alt="Trải nghiệm thực tế: Bentley Flying Spur 2020 yên tĩnh tới mức nào?"
									src="https://cdn.dailyxe.com.vn/image/trai-nghiem-thuc-te-bentley-flying-spur-2020-yen-tinh-toi-muc-nao-117251j0.jpg">
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">6:47</span>
									<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a
											href="https://dailyxe.com.vn/videos/trai-nghiem-thuc-te-bentley-flying-spur-2020-yen-tinh-toi-muc-nao-1188o.html"
											class="ng-binding">Trải nghiệm thực tế: Bentley Flying Spur
											2020 yên tĩnh tới mức nào?</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">4 lượt xem</span>
										<!-- end ngIf: item.SoLuotXem -->
										<!-- ngIf: item.NgayTao -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">2 tháng trước</span>
										<!-- end ngIf: item.NgayTao -->
									</div>
								</div>
							</div>
							<!-- end ngRepeat: item in listVideo -->
							<div ng-repeat="item in listVideo" class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="https://dailyxe.com.vn/videos/bat-chap-dich-covid-19-doanh-so-o-to-honda-thang-32020-van-tang-40-1183o.html">
									<img
									ng-src="https://cdn.dailyxe.com.vn/image/bat-chap-dich-covid-19-doanh-so-o-to-honda-thang-32020-van-tang-40-114587j0.jpg"
									alt="Bất chấp dịch Covid-19, doanh số ô tô Honda tháng 3/2020 vẫn tăng 40%"
									src="https://cdn.dailyxe.com.vn/image/bat-chap-dich-covid-19-doanh-so-o-to-honda-thang-32020-van-tang-40-114587j0.jpg">
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">30:23</span>
									<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a
											href="https://dailyxe.com.vn/videos/bat-chap-dich-covid-19-doanh-so-o-to-honda-thang-32020-van-tang-40-1183o.html"
											class="ng-binding">Bất chấp dịch Covid-19, doanh số ô tô
											Honda tháng 3/2020 vẫn tăng 40%</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">3 lượt xem</span>
										<!-- end ngIf: item.SoLuotXem -->
										<!-- ngIf: item.NgayTao -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">2 tháng trước</span>
										<!-- end ngIf: item.NgayTao -->
									</div>
								</div>
							</div>
							<!-- end ngRepeat: item in listVideo -->
							<div ng-repeat="item in listVideo" class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="https://dailyxe.com.vn/videos/huong-dan-lai-xe-so-tu-dong-tu-a-toi-z-tren-honda-accord-1177o.html">
									<img
									ng-src="https://cdn.dailyxe.com.vn/image/huong-dan-lai-xe-so-tu-dong-tu-a-toi-z-tren-honda-accord-113381j0.jpg"
									alt="Hướng dẫn lái xe số tự động từ A tới Z trên Honda Accord"
									src="https://cdn.dailyxe.com.vn/image/huong-dan-lai-xe-so-tu-dong-tu-a-toi-z-tren-honda-accord-113381j0.jpg">
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">18:50</span>
									<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a
											href="https://dailyxe.com.vn/videos/huong-dan-lai-xe-so-tu-dong-tu-a-toi-z-tren-honda-accord-1177o.html"
											class="ng-binding">Hướng dẫn lái xe số tự động từ A tới Z
											trên Honda Accord</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">2 lượt xem</span>
										<!-- end ngIf: item.SoLuotXem -->
										<!-- ngIf: item.NgayTao -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">2 tháng trước</span>
										<!-- end ngIf: item.NgayTao -->
									</div>
								</div>
							</div>
							<!-- end ngRepeat: item in listVideo -->
							<div ng-repeat="item in listVideo" class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="https://dailyxe.com.vn/videos/top-5-sedan-gia-re-dang-mua-nhat-tai-viet-nam-1162o.html">
									<img
									ng-src="https://cdn.dailyxe.com.vn/image/top-5-sedan-gia-re-dang-mua-nhat-tai-viet-nam-107260j0.jpg"
									alt="Top 5 sedan giá rẻ đáng mua nhất tại Việt Nam"
									src="https://cdn.dailyxe.com.vn/image/top-5-sedan-gia-re-dang-mua-nhat-tai-viet-nam-107260j0.jpg">
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">10:16</span>
									<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a
											href="https://dailyxe.com.vn/videos/top-5-sedan-gia-re-dang-mua-nhat-tai-viet-nam-1162o.html"
											class="ng-binding">Top 5 sedan giá rẻ đáng mua nhất tại Việt
											Nam</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">3 lượt xem</span>
										<!-- end ngIf: item.SoLuotXem -->
										<!-- ngIf: item.NgayTao -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">2 tháng trước</span>
										<!-- end ngIf: item.NgayTao -->
									</div>
								</div>
							</div>
							<!-- end ngRepeat: item in listVideo -->
							<div ng-repeat="item in listVideo" class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="https://dailyxe.com.vn/videos/danh-gia-uu-nhuoc-diem-honda-winner-x-vi-sao-nen-mua-thoi-diem-nay-1155o.html">
									<img
									ng-src="https://cdn.dailyxe.com.vn/image/danh-gia-uu-nhuoc-diem-honda-winner-x-vi-sao-nen-mua-thoi-diem-nay-105520j0.jpg"
									alt="Đánh giá ưu nhược điểm Honda Winner X - Vì sao nên mua thời điểm này?"
									src="https://cdn.dailyxe.com.vn/image/danh-gia-uu-nhuoc-diem-honda-winner-x-vi-sao-nen-mua-thoi-diem-nay-105520j0.jpg">
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">11:12</span>
									<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a
											href="https://dailyxe.com.vn/videos/danh-gia-uu-nhuoc-diem-honda-winner-x-vi-sao-nen-mua-thoi-diem-nay-1155o.html"
											class="ng-binding">Đánh giá ưu nhược điểm Honda Winner X - Vì
											sao nên mua thời điểm này?</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">3 lượt xem</span>
										<!-- end ngIf: item.SoLuotXem -->
										<!-- ngIf: item.NgayTao -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">2 tháng trước</span>
										<!-- end ngIf: item.NgayTao -->
									</div>
								</div>
							</div>
							<!-- end ngRepeat: item in listVideo -->
							<div ng-repeat="item in listVideo" class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="https://dailyxe.com.vn/videos/danh-gia-hang-nong-piaggio-medley-2020-nhieu-nang-cap-dang-gia-quyet-dau-honda-sh-2020-1154o.html">
									<img
									ng-src="https://cdn.dailyxe.com.vn/image/danh-gia-hang-nong-piaggio-medley-2020-nhieu-nang-cap-dang-gia-quyet-dau-honda-sh-2020-105518j0.jpg"
									alt="Đánh giá &quot;hàng nóng&quot; Piaggio Medley 2020 - Nhiều nâng cấp đáng giá, quyết đấu Honda SH 2020"
									src="https://cdn.dailyxe.com.vn/image/danh-gia-hang-nong-piaggio-medley-2020-nhieu-nang-cap-dang-gia-quyet-dau-honda-sh-2020-105518j0.jpg">
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">10:13</span>
									<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a
											href="https://dailyxe.com.vn/videos/danh-gia-hang-nong-piaggio-medley-2020-nhieu-nang-cap-dang-gia-quyet-dau-honda-sh-2020-1154o.html"
											class="ng-binding">Đánh giá "hàng nóng" Piaggio Medley 2020 -
											Nhiều nâng cấp đáng giá, quyết đấu Honda SH 2020</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">9 lượt xem</span>
										<!-- end ngIf: item.SoLuotXem -->
										<!-- ngIf: item.NgayTao -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">2 tháng trước</span>
										<!-- end ngIf: item.NgayTao -->
									</div>
								</div>
							</div>
							<!-- end ngRepeat: item in listVideo -->
							<div ng-repeat="item in listVideo" class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="https://dailyxe.com.vn/videos/so-sanh-piaggio-medley-2020-va-honda-sh-2020-cuoc-chien-xe-tay-ga-co-lon-1153o.html">
									<img
									ng-src="https://cdn.dailyxe.com.vn/image/so-sanh-piaggio-medley-2020-va-honda-sh-2020-cuoc-chien-xe-tay-ga-co-lon-105516j0.jpg"
									alt="So sánh Piaggio Medley 2020 và Honda SH 2020 - Cuộc chiến xe tay ga cỡ lớn"
									src="https://cdn.dailyxe.com.vn/image/so-sanh-piaggio-medley-2020-va-honda-sh-2020-cuoc-chien-xe-tay-ga-co-lon-105516j0.jpg">
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">5:48</span>
									<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a
											href="https://dailyxe.com.vn/videos/so-sanh-piaggio-medley-2020-va-honda-sh-2020-cuoc-chien-xe-tay-ga-co-lon-1153o.html"
											class="ng-binding">So sánh Piaggio Medley 2020 và Honda SH
											2020 - Cuộc chiến xe tay ga cỡ lớn</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">3 lượt xem</span>
										<!-- end ngIf: item.SoLuotXem -->
										<!-- ngIf: item.NgayTao -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">2 tháng trước</span>
										<!-- end ngIf: item.NgayTao -->
									</div>
								</div>
							</div>
							<!-- end ngRepeat: item in listVideo -->
							<div ng-repeat="item in listVideo" class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="https://dailyxe.com.vn/videos/danh-gia-mitsubishi-outlander-2020-qua-hanh-trinh-1000-km-chinh-phuc-ha-giang-1149o.html">
									<img
									ng-src="https://cdn.dailyxe.com.vn/image/danh-gia-mitsubishi-outlander-2020-qua-hanh-trinh-1000-km-chinh-phuc-ha-giang-105034j0.jpg"
									alt="Đánh giá Mitsubishi Outlander 2020 qua hành trình 1.000 km chinh phục Hà Giang"
									src="https://cdn.dailyxe.com.vn/image/danh-gia-mitsubishi-outlander-2020-qua-hanh-trinh-1000-km-chinh-phuc-ha-giang-105034j0.jpg">
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">20:01</span>
									<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a
											href="https://dailyxe.com.vn/videos/danh-gia-mitsubishi-outlander-2020-qua-hanh-trinh-1000-km-chinh-phuc-ha-giang-1149o.html"
											class="ng-binding">Đánh giá Mitsubishi Outlander 2020 qua
											hành trình 1.000 km chinh phục Hà Giang</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">4 lượt xem</span>
										<!-- end ngIf: item.SoLuotXem -->
										<!-- ngIf: item.NgayTao -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">2 tháng trước</span>
										<!-- end ngIf: item.NgayTao -->
									</div>
								</div>
							</div>
							<!-- end ngRepeat: item in listVideo -->
							<div ng-repeat="item in listVideo" class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="https://dailyxe.com.vn/videos/honda-cb500x-2020-trinh-lang-voi-bo-ao-bat-mat-hon-1142o.html">
									<img
									ng-src="https://cdn.dailyxe.com.vn/image/honda-cb500x-2020-trinh-lang-voi-bo-ao-bat-mat-hon-103694j0.jpg"
									alt="Honda CB500X 2020 trình làng với bộ áo bắt mắt hơn"
									src="https://cdn.dailyxe.com.vn/image/honda-cb500x-2020-trinh-lang-voi-bo-ao-bat-mat-hon-103694j0.jpg">
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">18:04</span>
									<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a
											href="https://dailyxe.com.vn/videos/honda-cb500x-2020-trinh-lang-voi-bo-ao-bat-mat-hon-1142o.html"
											class="ng-binding">Honda CB500X 2020 trình làng với bộ áo bắt
											mắt hơn</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">2 lượt xem</span>
										<!-- end ngIf: item.SoLuotXem -->
										<!-- ngIf: item.NgayTao -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">2 tháng trước</span>
										<!-- end ngIf: item.NgayTao -->
									</div>
								</div>
							</div>
							<!-- end ngRepeat: item in listVideo -->
							<div ng-repeat="item in listVideo" class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="https://dailyxe.com.vn/videos/hinh-anh-thuc-te-kia-sorento-2021-khi-xe-han-thiet-ke-dep-nhu-xe-sang-1140o.html">
									<img
									ng-src="https://cdn.dailyxe.com.vn/image/hinh-anh-thuc-te-kia-sorento-2021-khi-xe-han-thiet-ke-dep-nhu-xe-sang-103508j0.jpg"
									alt="Hình ảnh thực tế KIA Sorento 2021: Khi xe Hàn thiết kế đẹp như xe sang"
									src="https://cdn.dailyxe.com.vn/image/hinh-anh-thuc-te-kia-sorento-2021-khi-xe-han-thiet-ke-dep-nhu-xe-sang-103508j0.jpg">
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">36:30</span>
									<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a
											href="https://dailyxe.com.vn/videos/hinh-anh-thuc-te-kia-sorento-2021-khi-xe-han-thiet-ke-dep-nhu-xe-sang-1140o.html"
											class="ng-binding">Hình ảnh thực tế KIA Sorento 2021: Khi xe
											Hàn thiết kế đẹp như xe sang</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">39 lượt xem</span>
										<!-- end ngIf: item.SoLuotXem -->
										<!-- ngIf: item.NgayTao -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">3 tháng trước</span>
										<!-- end ngIf: item.NgayTao -->
									</div>
								</div>
							</div>
							<!-- end ngRepeat: item in listVideo -->
							<div ng-repeat="item in listVideo" class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="https://dailyxe.com.vn/videos/hyundai-elantra-2021-lot-xac-hoan-toan-thach-thuc-civic-va-mazda3-1138o.html">
									<img
									ng-src="https://cdn.dailyxe.com.vn/image/hyundai-elantra-2021-lot-xac-hoan-toan-thach-thuc-civic-va-mazda3-102742j0.jpg"
									alt="Hyundai Elantra 2021: Lột xác hoàn toàn, thách thức Civic và Mazda3"
									src="https://cdn.dailyxe.com.vn/image/hyundai-elantra-2021-lot-xac-hoan-toan-thach-thuc-civic-va-mazda3-102742j0.jpg">
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">5:04</span>
									<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a
											href="https://dailyxe.com.vn/videos/hyundai-elantra-2021-lot-xac-hoan-toan-thach-thuc-civic-va-mazda3-1138o.html"
											class="ng-binding">Hyundai Elantra 2021: Lột xác hoàn toàn,
											thách thức Civic và Mazda3</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">9 lượt xem</span>
										<!-- end ngIf: item.SoLuotXem -->
										<!-- ngIf: item.NgayTao -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">3 tháng trước</span>
										<!-- end ngIf: item.NgayTao -->
									</div>
								</div>
							</div>
							<!-- end ngRepeat: item in listVideo -->
							<div ng-repeat="item in listVideo" class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="https://dailyxe.com.vn/videos/tam-13-ty-dong-chon-mercedes-benz-c180-toyota-camry-hay-honda-accord-1132o.html">
									<img
									ng-src="https://cdn.dailyxe.com.vn/image/tam-13-ty-dong-chon-mercedes-benz-c180-toyota-camry-hay-honda-accord-101595j0.jpg"
									alt="Tầm 1,3 tỷ đồng, chọn Mercedes-Benz C180, Toyota Camry hay Honda Accord?"
									src="https://cdn.dailyxe.com.vn/image/tam-13-ty-dong-chon-mercedes-benz-c180-toyota-camry-hay-honda-accord-101595j0.jpg">
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">10:39</span>
									<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a
											href="https://dailyxe.com.vn/videos/tam-13-ty-dong-chon-mercedes-benz-c180-toyota-camry-hay-honda-accord-1132o.html"
											class="ng-binding">Tầm 1,3 tỷ đồng, chọn Mercedes-Benz C180,
											Toyota Camry hay Honda Accord?</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">2 lượt xem</span>
										<!-- end ngIf: item.SoLuotXem -->
										<!-- ngIf: item.NgayTao -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">3 tháng trước</span>
										<!-- end ngIf: item.NgayTao -->
									</div>
								</div>
							</div>
							<!-- end ngRepeat: item in listVideo -->
							<div ng-repeat="item in listVideo" class="video-item media ">
								<a class="video-img"
									title="Xem nhanh Honda CB650R 2019 chính hãng giá 246 triệu"
									href="https://dailyxe.com.vn/videos/mercedes-benz-viet-nam-ra-mat-7-san-pham-chien-luoc-cho-nam-2020-1127o.html">
									<img
									ng-src="https://cdn.dailyxe.com.vn/image/mercedes-benz-viet-nam-ra-mat-7-san-pham-chien-luoc-cho-nam-2020-100141j0.jpg"
									alt="Mercedes-Benz Việt Nam ra mắt 7 sản phẩm chiến lược cho năm 2020"
									src="https://cdn.dailyxe.com.vn/image/mercedes-benz-viet-nam-ra-mat-7-san-pham-chien-luoc-cho-nam-2020-100141j0.jpg">
									<!-- ngIf: item.Duration --> <span
									class="video-time ng-binding ng-scope" ng-if="item.Duration">14:30</span>
									<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
								</a>
								<div class="media-body">
									<h3 class="title">
										<a
											href="https://dailyxe.com.vn/videos/mercedes-benz-viet-nam-ra-mat-7-san-pham-chien-luoc-cho-nam-2020-1127o.html"
											class="ng-binding">Mercedes-Benz Việt Nam ra mắt 7 sản phẩm
											chiến lược cho năm 2020</a>
									</h3>
									<div class="video-info">
										<!-- ngIf: item.SoLuotXem -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.SoLuotXem">9 lượt xem</span>
										<!-- end ngIf: item.SoLuotXem -->
										<!-- ngIf: item.NgayTao -->
										<span class="video-info-item ng-binding ng-scope"
											ng-if="item.NgayTao">3 tháng trước</span>
										<!-- end ngIf: item.NgayTao -->
									</div>
								</div>
							</div>
							<!-- end ngRepeat: item in listVideo -->
						</div>
						<!-- ngIf: spinnerVideoMore -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>