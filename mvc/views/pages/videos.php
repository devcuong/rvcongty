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
    background-color: rgba(0,0,0,0.8);
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
.video-info-item i{
	margin-right: 3px;
}

</style>
<section id="divCenter" class="video-container">
	<div class="container">
		<span macd="danhsach_video"></span>
		<div class="video-bottom news-list ng-scope" id="containerResult"
			ng-controller="videos-list as ctrl" ng-init="init('')">
			<div class="d-flex align-items-center">
				<!-- ngIf: !isLoadTimKiem -->
				<h1 class="video-title ng-scope" ng-if="!isLoadTimKiem">Videos</h1>
				<!-- end ngIf: !isLoadTimKiem -->
				<!-- ngIf: isLoadTimKiem -->
				<div class="d-flex align-items-center ml-auto">
					<div class="form-search m-0">
						<input ng-attr-id="{{id}}" type="text" ng-model="tuKhoaTimKiem"
							class="form-control ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty"
							placeholder="Tìm kiếm videos..."
							auto-complete="ctrl.autoCompleteOptions"
							ng-keyup="$event.keyCode === 13 &amp;&amp; loadData(1, displayItems)"
							id="auto-complete-video"><i
							class="fa fa-search"></i>
					</div>
				</div>
			</div>
			<div class="video-main">
				<div class="video-list">
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Lexus RC F Track Edition vượt trội hơn về khả năng vận hành và xử lý"
							class="video-img"
							href="https://dailyxe.com.vn/videos/lexus-rc-f-track-edition-vuot-troi-hon-ve-kha-nang-van-hanh-va-xu-ly-1213o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/lexus-rc-f-track-edition-vuot-troi-hon-ve-kha-nang-van-hanh-va-xu-ly-123615j2.jpg"
							alt="Lexus RC F Track Edition vượt trội hơn về khả năng vận hành và xử lý"
							src="https://cdn.dailyxe.com.vn/image/lexus-rc-f-track-edition-vuot-troi-hon-ve-kha-nang-van-hanh-va-xu-ly-123615j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">2:12</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/lexus-rc-f-track-edition-vuot-troi-hon-ve-kha-nang-van-hanh-va-xu-ly-1213o.html"
									title="Lexus RC F Track Edition vượt trội hơn về khả năng vận hành và xử lý"
									class="ng-binding">Lexus RC F Track Edition vượt trội hơn về
									khả năng vận hành và xử lý</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao">27/04/2020</span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> <i class="fa fa-eye"></i>2 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Porsche lắp đặt trạm sạc nhanh đầu tiên dành cho Taycan tại Sài Gòn"
							class="video-img"
							href="https://dailyxe.com.vn/videos/porsche-lap-dat-tram-sac-nhanh-dau-tien-danh-cho-taycan-tai-sai-gon-1214o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/porsche-lap-dat-tram-sac-nhanh-dau-tien-danh-cho-taycan-tai-sai-gon-123653j2.jpg"
							alt="Porsche lắp đặt trạm sạc nhanh đầu tiên dành cho Taycan tại Sài Gòn"
							src="https://cdn.dailyxe.com.vn/image/porsche-lap-dat-tram-sac-nhanh-dau-tien-danh-cho-taycan-tai-sai-gon-123653j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">4:56</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/porsche-lap-dat-tram-sac-nhanh-dau-tien-danh-cho-taycan-tai-sai-gon-1214o.html"
									title="Porsche lắp đặt trạm sạc nhanh đầu tiên dành cho Taycan tại Sài Gòn"
									class="ng-binding">Porsche lắp đặt trạm sạc nhanh đầu tiên dành
									cho Taycan tại Sài Gòn</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 24 ngày trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 5 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a title="Xe VinFast Lux giảm giá gần 300 triệu đồng"
							class="video-img"
							href="https://dailyxe.com.vn/videos/xe-vinfast-lux-giam-gia-gan-300-trieu-dong-1215o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/xe-vinfast-lux-giam-gia-gan-300-trieu-dong-123654j2.jpg"
							alt="Xe VinFast Lux giảm giá gần 300 triệu đồng"
							src="https://cdn.dailyxe.com.vn/image/xe-vinfast-lux-giam-gia-gan-300-trieu-dong-123654j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">3:00</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/xe-vinfast-lux-giam-gia-gan-300-trieu-dong-1215o.html"
									title="Xe VinFast Lux giảm giá gần 300 triệu đồng"
									class="ng-binding">Xe VinFast Lux giảm giá gần 300 triệu đồng</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 24 ngày trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 3 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
					
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a title="Cận cảnh màn off-road hiếm hoi của Mercedes-AMG G63"
							class="video-img"
							href="https://dailyxe.com.vn/videos/can-canh-man-off-road-hiem-hoi-cua-mercedes-amg-g63-1212o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/can-canh-man-off-road-hiem-hoi-cua-mercedes-amg-g63-123349j2.jpg"
							alt="Cận cảnh màn off-road hiếm hoi của Mercedes-AMG G63"
							src="https://cdn.dailyxe.com.vn/image/can-canh-man-off-road-hiem-hoi-cua-mercedes-amg-g63-123349j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">3:26</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/can-canh-man-off-road-hiem-hoi-cua-mercedes-amg-g63-1212o.html"
									title="Cận cảnh màn off-road hiếm hoi của Mercedes-AMG G63"
									class="ng-binding">Cận cảnh màn off-road hiếm hoi của
									Mercedes-AMG G63</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 25 ngày trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 5 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a title="Vì sao Toyota RAV4 vẫn chưa được bán chính hãng?"
							class="video-img"
							href="https://dailyxe.com.vn/videos/vi-sao-toyota-rav4-van-chua-duoc-ban-chinh-hang-1209o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/vi-sao-toyota-rav4-van-chua-duoc-ban-chinh-hang-121942j2.jpg"
							alt="Vì sao Toyota RAV4 vẫn chưa được bán chính hãng?"
							src="https://cdn.dailyxe.com.vn/image/vi-sao-toyota-rav4-van-chua-duoc-ban-chinh-hang-121942j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">19:29</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/vi-sao-toyota-rav4-van-chua-duoc-ban-chinh-hang-1209o.html"
									title="Vì sao Toyota RAV4 vẫn chưa được bán chính hãng?"
									class="ng-binding">Vì sao Toyota RAV4 vẫn chưa được bán chính
									hãng?</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 2 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a title="Đánh giá Toyota Rush – Tốt ở cả vai trò MPV và SUV"
							class="video-img"
							href="https://dailyxe.com.vn/videos/danh-gia-toyota-rush-tot-o-ca-vai-tro-mpv-va-suv-1208o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/danh-gia-toyota-rush-tot-o-ca-vai-tro-mpv-va-suv-121938j2.jpg"
							alt="Đánh giá Toyota Rush – Tốt ở cả vai trò MPV và SUV"
							src="https://cdn.dailyxe.com.vn/image/danh-gia-toyota-rush-tot-o-ca-vai-tro-mpv-va-suv-121938j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">17:35</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/danh-gia-toyota-rush-tot-o-ca-vai-tro-mpv-va-suv-1208o.html"
									title="Đánh giá Toyota Rush – Tốt ở cả vai trò MPV và SUV"
									class="ng-binding">Đánh giá Toyota Rush – Tốt ở cả vai trò MPV
									và SUV</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 0 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Giá từ 4,1 - 4,7 tỷ, BMW X5 2020 xDrive cạnh tranh với Mercedes GLE 2020 và Audi Q7 2020"
							class="video-img"
							href="https://dailyxe.com.vn/videos/gia-tu-41-47-ty-bmw-x5-2020-xdrive-canh-tranh-voi-mercedes-gle-2020-va-audi-q7-2020-1207o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/gia-tu-41-47-ty-bmw-x5-2020-xdrive-canh-tranh-voi-mercedes-gle-2020-va-audi-q7-2020-121923j2.jpg"
							alt="Giá từ 4,1 - 4,7 tỷ, BMW X5 2020 xDrive cạnh tranh với Mercedes GLE 2020 và Audi Q7 2020"
							src="https://cdn.dailyxe.com.vn/image/gia-tu-41-47-ty-bmw-x5-2020-xdrive-canh-tranh-voi-mercedes-gle-2020-va-audi-q7-2020-121923j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">24:47</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/gia-tu-41-47-ty-bmw-x5-2020-xdrive-canh-tranh-voi-mercedes-gle-2020-va-audi-q7-2020-1207o.html"
									title="Giá từ 4,1 - 4,7 tỷ, BMW X5 2020 xDrive cạnh tranh với Mercedes GLE 2020 và Audi Q7 2020"
									class="ng-binding">Giá từ 4,1 - 4,7 tỷ, BMW X5 2020 xDrive cạnh
									tranh với Mercedes GLE 2020 và Audi Q7 2020</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 2 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a title="Porsche 911 2021 thêm tuỳ chọn và màu mới"
							class="video-img"
							href="https://dailyxe.com.vn/videos/porsche-911-2021-them-tuy-chon-va-mau-moi-1206o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/porsche-911-2021-them-tuy-chon-va-mau-moi-121921j2.jpg"
							alt="Porsche 911 2021 thêm tuỳ chọn và màu mới"
							src="https://cdn.dailyxe.com.vn/image/porsche-911-2021-them-tuy-chon-va-mau-moi-121921j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">19:06</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/porsche-911-2021-them-tuy-chon-va-mau-moi-1206o.html"
									title="Porsche 911 2021 thêm tuỳ chọn và màu mới"
									class="ng-binding">Porsche 911 2021 thêm tuỳ chọn và màu mới</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 4 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Ra mắt 3 phiên bản BMW Series 7 mới tại Việt Nam, giá từ 4,369 tỷ đồng"
							class="video-img"
							href="https://dailyxe.com.vn/videos/ra-mat-3-phien-ban-bmw-series-7-moi-tai-viet-nam-gia-tu-4369-ty-dong-1203o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/ra-mat-3-phien-ban-bmw-series-7-moi-tai-viet-nam-gia-tu-4369-ty-dong-121078j2.jpg"
							alt="Ra mắt 3 phiên bản BMW Series 7 mới tại Việt Nam, giá từ 4,369 tỷ đồng"
							src="https://cdn.dailyxe.com.vn/image/ra-mat-3-phien-ban-bmw-series-7-moi-tai-viet-nam-gia-tu-4369-ty-dong-121078j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">38:00</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/ra-mat-3-phien-ban-bmw-series-7-moi-tai-viet-nam-gia-tu-4369-ty-dong-1203o.html"
									title="Ra mắt 3 phiên bản BMW Series 7 mới tại Việt Nam, giá từ 4,369 tỷ đồng"
									class="ng-binding">Ra mắt 3 phiên bản BMW Series 7 mới tại Việt
									Nam, giá từ 4,369 tỷ đồng</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 1 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Cơ hội sở hữu SUV Pháp chỉ từ 999 triệu đồng và nhiều quà tặng hấp dẫn"
							class="video-img"
							href="https://dailyxe.com.vn/videos/co-hoi-so-huu-suv-phap-chi-tu-999-trieu-dong-va-nhieu-qua-tang-hap-dan-1204o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/co-hoi-so-huu-suv-phap-chi-tu-999-trieu-dong-va-nhieu-qua-tang-hap-dan-121085j2.jpg"
							alt="Cơ hội sở hữu SUV Pháp chỉ từ 999 triệu đồng và nhiều quà tặng hấp dẫn"
							src="https://cdn.dailyxe.com.vn/image/co-hoi-so-huu-suv-phap-chi-tu-999-trieu-dong-va-nhieu-qua-tang-hap-dan-121085j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">14:42</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/co-hoi-so-huu-suv-phap-chi-tu-999-trieu-dong-va-nhieu-qua-tang-hap-dan-1204o.html"
									title="Cơ hội sở hữu SUV Pháp chỉ từ 999 triệu đồng và nhiều quà tặng hấp dẫn"
									class="ng-binding">Cơ hội sở hữu SUV Pháp chỉ từ 999 triệu đồng
									và nhiều quà tặng hấp dẫn</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 2 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Ford Mustang 55 năm tuổi độ 1.000 mã lực với giá gần 24 tỷ VNĐ, tin được không?"
							class="video-img"
							href="https://dailyxe.com.vn/videos/ford-mustang-55-nam-tuoi-do-1000-ma-luc-voi-gia-gan-24-ty-vnd-tin-duoc-khong-1205o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/ford-mustang-55-nam-tuoi-do-1000-ma-luc-voi-gia-gan-24-ty-vnd-tin-duoc-khong-121442j2.jpg"
							alt="Ford Mustang 55 năm tuổi độ 1.000 mã lực với giá gần 24 tỷ VNĐ, tin được không?"
							src="https://cdn.dailyxe.com.vn/image/ford-mustang-55-nam-tuoi-do-1000-ma-luc-voi-gia-gan-24-ty-vnd-tin-duoc-khong-121442j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">5:36</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/ford-mustang-55-nam-tuoi-do-1000-ma-luc-voi-gia-gan-24-ty-vnd-tin-duoc-khong-1205o.html"
									title="Ford Mustang 55 năm tuổi độ 1.000 mã lực với giá gần 24 tỷ VNĐ, tin được không?"
									class="ng-binding">Ford Mustang 55 năm tuổi độ 1.000 mã lực với
									giá gần 24 tỷ VNĐ, tin được không?</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 2 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a title="VinFast 7 chỗ cháy trên cao tốc Trung Lương"
							class="video-img"
							href="https://dailyxe.com.vn/videos/vinfast-7-cho-chay-tren-cao-toc-trung-luong-1202o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/vinfast-7-cho-chay-tren-cao-toc-trung-luong-120901j2.jpg"
							alt="VinFast 7 chỗ cháy trên cao tốc Trung Lương"
							src="https://cdn.dailyxe.com.vn/image/vinfast-7-cho-chay-tren-cao-toc-trung-luong-120901j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">31:11</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/vinfast-7-cho-chay-tren-cao-toc-trung-luong-1202o.html"
									title="VinFast 7 chỗ cháy trên cao tốc Trung Lương"
									class="ng-binding">VinFast 7 chỗ cháy trên cao tốc Trung Lương</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 11 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Cháy ôtô 7 chỗ trên cao tốc Trung Lương, giao thông ùn tắc 3 km"
							class="video-img"
							href="https://dailyxe.com.vn/videos/chay-oto-7-cho-tren-cao-toc-trung-luong-giao-thong-un-tac-3-km-1201o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/chay-oto-7-cho-tren-cao-toc-trung-luong-giao-thong-un-tac-3-km-120776j2.jpg"
							alt="Cháy ôtô 7 chỗ trên cao tốc Trung Lương, giao thông ùn tắc 3 km"
							src="https://cdn.dailyxe.com.vn/image/chay-oto-7-cho-tren-cao-toc-trung-luong-giao-thong-un-tac-3-km-120776j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">7:55</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/chay-oto-7-cho-tren-cao-toc-trung-luong-giao-thong-un-tac-3-km-1201o.html"
									title="Cháy ôtô 7 chỗ trên cao tốc Trung Lương, giao thông ùn tắc 3 km"
									class="ng-binding">Cháy ôtô 7 chỗ trên cao tốc Trung Lương,
									giao thông ùn tắc 3 km</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 2 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Đánh giá xe BMW 740Li 2020 Pure Excellence giá hơn 6 tỷ đồng ĐẦU TIÊN tại Việt Nam"
							class="video-img"
							href="https://dailyxe.com.vn/videos/danh-gia-xe-bmw-740li-2020-pure-excellence-gia-hon-6-ty-dong-dau-tien-tai-viet-nam-1199o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/danh-gia-xe-bmw-740li-2020-pure-excellence-gia-hon-6-ty-dong-dau-tien-tai-viet-nam-119962j2.jpg"
							alt="Đánh giá xe BMW 740Li 2020 Pure Excellence giá hơn 6 tỷ đồng ĐẦU TIÊN tại Việt Nam"
							src="https://cdn.dailyxe.com.vn/image/danh-gia-xe-bmw-740li-2020-pure-excellence-gia-hon-6-ty-dong-dau-tien-tai-viet-nam-119962j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">31:06</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/danh-gia-xe-bmw-740li-2020-pure-excellence-gia-hon-6-ty-dong-dau-tien-tai-viet-nam-1199o.html"
									title="Đánh giá xe BMW 740Li 2020 Pure Excellence giá hơn 6 tỷ đồng ĐẦU TIÊN tại Việt Nam"
									class="ng-binding">Đánh giá xe BMW 740Li 2020 Pure Excellence
									giá hơn 6 tỷ đồng ĐẦU TIÊN tại Việt Nam</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 5 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Nội thất thương gia cực đỉnh của BMW 740li 2020 giá hơn 6 tỷ tại Việt Nam"
							class="video-img"
							href="https://dailyxe.com.vn/videos/noi-that-thuong-gia-cuc-dinh-cua-bmw-740li-2020-gia-hon-6-ty-tai-viet-nam-1198o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/noi-that-thuong-gia-cuc-dinh-cua-bmw-740li-2020-gia-hon-6-ty-tai-viet-nam-119926j2.jpg"
							alt="Nội thất thương gia cực đỉnh của BMW 740li 2020 giá hơn 6 tỷ tại Việt Nam"
							src="https://cdn.dailyxe.com.vn/image/noi-that-thuong-gia-cuc-dinh-cua-bmw-740li-2020-gia-hon-6-ty-tai-viet-nam-119926j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">9:03</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/noi-that-thuong-gia-cuc-dinh-cua-bmw-740li-2020-gia-hon-6-ty-tai-viet-nam-1198o.html"
									title="Nội thất thương gia cực đỉnh của BMW 740li 2020 giá hơn 6 tỷ tại Việt Nam"
									class="ng-binding">Nội thất thương gia cực đỉnh của BMW 740li
									2020 giá hơn 6 tỷ tại Việt Nam</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 1 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a title="Hyundai triệu hồi gần 12.000 xe Sonata và Nexo 2020"
							class="video-img"
							href="https://dailyxe.com.vn/videos/hyundai-trieu-hoi-gan-12000-xe-sonata-va-nexo-2020-1196o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/hyundai-trieu-hoi-gan-12000-xe-sonata-va-nexo-2020-118720j2.jpg"
							alt="Hyundai triệu hồi gần 12.000 xe Sonata và Nexo 2020"
							src="https://cdn.dailyxe.com.vn/image/hyundai-trieu-hoi-gan-12000-xe-sonata-va-nexo-2020-118720j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">13:59</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/hyundai-trieu-hoi-gan-12000-xe-sonata-va-nexo-2020-1196o.html"
									title="Hyundai triệu hồi gần 12.000 xe Sonata và Nexo 2020"
									class="ng-binding">Hyundai triệu hồi gần 12.000 xe Sonata và
									Nexo 2020</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 7 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Chiến binh Offroad Jeep Wrangler Rubicon 2020 giá hơn 4 tỷ tại Việt Nam"
							class="video-img"
							href="https://dailyxe.com.vn/videos/chien-binh-offroad-jeep-wrangler-rubicon-2020-gia-hon-4-ty-tai-viet-nam-1197o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/chien-binh-offroad-jeep-wrangler-rubicon-2020-gia-hon-4-ty-tai-viet-nam-118721j2.jpg"
							alt="Chiến binh Offroad Jeep Wrangler Rubicon 2020 giá hơn 4 tỷ tại Việt Nam"
							src="https://cdn.dailyxe.com.vn/image/chien-binh-offroad-jeep-wrangler-rubicon-2020-gia-hon-4-ty-tai-viet-nam-118721j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">23:25</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/chien-binh-offroad-jeep-wrangler-rubicon-2020-gia-hon-4-ty-tai-viet-nam-1197o.html"
									title="Chiến binh Offroad Jeep Wrangler Rubicon 2020 giá hơn 4 tỷ tại Việt Nam"
									class="ng-binding">Chiến binh Offroad Jeep Wrangler Rubicon
									2020 giá hơn 4 tỷ tại Việt Nam</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 3 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Chi tiết phiên bản mới Kia Soluto AT Luxury giá từ 484 triệu"
							class="video-img"
							href="https://dailyxe.com.vn/videos/chi-tiet-phien-ban-moi-kia-soluto-at-luxury-gia-tu-484-trieu-1195o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/chi-tiet-phien-ban-moi-kia-soluto-at-luxury-gia-tu-484-trieu-118677j2.jpg"
							alt="Chi tiết phiên bản mới Kia Soluto AT Luxury giá từ 484 triệu"
							src="https://cdn.dailyxe.com.vn/image/chi-tiet-phien-ban-moi-kia-soluto-at-luxury-gia-tu-484-trieu-118677j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">0:47</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/chi-tiet-phien-ban-moi-kia-soluto-at-luxury-gia-tu-484-trieu-1195o.html"
									title="Chi tiết phiên bản mới Kia Soluto AT Luxury giá từ 484 triệu"
									class="ng-binding">Chi tiết phiên bản mới Kia Soluto AT Luxury
									giá từ 484 triệu</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 4 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a title="Audi A3 sedan 2021 ra mắt với thiết kế lột xác"
							class="video-img"
							href="https://dailyxe.com.vn/videos/audi-a3-sedan-2021-ra-mat-voi-thiet-ke-lot-xac-1194o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/audi-a3-sedan-2021-ra-mat-voi-thiet-ke-lot-xac-118666j2.jpg"
							alt="Audi A3 sedan 2021 ra mắt với thiết kế lột xác"
							src="https://cdn.dailyxe.com.vn/image/audi-a3-sedan-2021-ra-mat-voi-thiet-ke-lot-xac-118666j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">4:54</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/audi-a3-sedan-2021-ra-mat-voi-thiet-ke-lot-xac-1194o.html"
									title="Audi A3 sedan 2021 ra mắt với thiết kế lột xác"
									class="ng-binding">Audi A3 sedan 2021 ra mắt với thiết kế lột
									xác</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 5 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Toyota Alphard có thêm phiên bản đặc biệt phục vụ khách đại gia"
							class="video-img"
							href="https://dailyxe.com.vn/videos/toyota-alphard-co-them-phien-ban-dac-biet-phuc-vu-khach-dai-gia-1193o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/toyota-alphard-co-them-phien-ban-dac-biet-phuc-vu-khach-dai-gia-118659j2.jpg"
							alt="Toyota Alphard có thêm phiên bản đặc biệt phục vụ khách đại gia"
							src="https://cdn.dailyxe.com.vn/image/toyota-alphard-co-them-phien-ban-dac-biet-phuc-vu-khach-dai-gia-118659j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">22:22</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/toyota-alphard-co-them-phien-ban-dac-biet-phuc-vu-khach-dai-gia-1193o.html"
									title="Toyota Alphard có thêm phiên bản đặc biệt phục vụ khách đại gia"
									class="ng-binding">Toyota Alphard có thêm phiên bản đặc biệt
									phục vụ khách đại gia</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 3 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
						
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Top 5 mẫu xe hot vừa về Việt Nam - Urus 4 chỗ cực độc, RAV4 giá cao hơn GLC300"
							class="video-img"
							href="https://dailyxe.com.vn/videos/top-5-mau-xe-hot-vua-ve-viet-nam-urus-4-cho-cuc-doc-rav4-gia-cao-hon-glc300-1192o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/top-5-mau-xe-hot-vua-ve-viet-nam-urus-4-cho-cuc-doc-rav4-gia-cao-hon-glc300-118204j2.jpg"
							alt="Top 5 mẫu xe hot vừa về Việt Nam - Urus 4 chỗ cực độc, RAV4 giá cao hơn GLC300"
							src="https://cdn.dailyxe.com.vn/image/top-5-mau-xe-hot-vua-ve-viet-nam-urus-4-cho-cuc-doc-rav4-gia-cao-hon-glc300-118204j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">6:41</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/top-5-mau-xe-hot-vua-ve-viet-nam-urus-4-cho-cuc-doc-rav4-gia-cao-hon-glc300-1192o.html"
									title="Top 5 mẫu xe hot vừa về Việt Nam - Urus 4 chỗ cực độc, RAV4 giá cao hơn GLC300"
									class="ng-binding">Top 5 mẫu xe hot vừa về Việt Nam - Urus 4
									chỗ cực độc, RAV4 giá cao hơn GLC300</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 3 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Video: “Ông hoàng địa hình” Mercedes G-Class chạy off-road “điên cuồng” trên đất Nga"
							class="video-img"
							href="https://dailyxe.com.vn/videos/video-ong-hoang-dia-hinh-mercedes-g-class-chay-off-road-dien-cuong-tren-dat-nga-1190o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/video-ong-hoang-dia-hinh-mercedes-g-class-chay-off-road-dien-cuong-tren-dat-nga-117847j2.jpg"
							alt="Video: “Ông hoàng địa hình” Mercedes G-Class chạy off-road “điên cuồng” trên đất Nga"
							src="https://cdn.dailyxe.com.vn/image/video-ong-hoang-dia-hinh-mercedes-g-class-chay-off-road-dien-cuong-tren-dat-nga-117847j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">53:19</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/video-ong-hoang-dia-hinh-mercedes-g-class-chay-off-road-dien-cuong-tren-dat-nga-1190o.html"
									title="Video: “Ông hoàng địa hình” Mercedes G-Class chạy off-road “điên cuồng” trên đất Nga"
									class="ng-binding">Video: “Ông hoàng địa hình” Mercedes G-Class
									chạy off-road “điên cuồng” trên đất Nga</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 3 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Ô tô Nissan và Thông điệp “Chuyển động thông minh” đến từ hãng xe Nhật Bản"
							class="video-img"
							href="https://dailyxe.com.vn/videos/o-to-nissan-va-thong-diep-chuyen-dong-thong-minh-den-tu-hang-xe-nhat-ban-1191o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/o-to-nissan-va-thong-diep-chuyen-dong-thong-minh-den-tu-hang-xe-nhat-ban-117863j2.jpg"
							alt="Ô tô Nissan và Thông điệp “Chuyển động thông minh” đến từ hãng xe Nhật Bản"
							src="https://cdn.dailyxe.com.vn/image/o-to-nissan-va-thong-diep-chuyen-dong-thong-minh-den-tu-hang-xe-nhat-ban-117863j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">4:41</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/o-to-nissan-va-thong-diep-chuyen-dong-thong-minh-den-tu-hang-xe-nhat-ban-1191o.html"
									title="Ô tô Nissan và Thông điệp “Chuyển động thông minh” đến từ hãng xe Nhật Bản"
									class="ng-binding">Ô tô Nissan và Thông điệp “Chuyển động thông
									minh” đến từ hãng xe Nhật Bản</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 7 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Ford Mustang là mẫu xe thể thao bán chạy nhất thế giới 2019"
							class="video-img"
							href="https://dailyxe.com.vn/videos/ford-mustang-la-mau-xe-the-thao-ban-chay-nhat-the-gioi-2019-1189o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/ford-mustang-la-mau-xe-the-thao-ban-chay-nhat-the-gioi-2019-117256j2.jpg"
							alt="Ford Mustang là mẫu xe thể thao bán chạy nhất thế giới 2019"
							src="https://cdn.dailyxe.com.vn/image/ford-mustang-la-mau-xe-the-thao-ban-chay-nhat-the-gioi-2019-117256j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">7:22</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/ford-mustang-la-mau-xe-the-thao-ban-chay-nhat-the-gioi-2019-1189o.html"
									title="Ford Mustang là mẫu xe thể thao bán chạy nhất thế giới 2019"
									class="ng-binding">Ford Mustang là mẫu xe thể thao bán chạy
									nhất thế giới 2019</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 3 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Trải nghiệm thực tế: Bentley Flying Spur 2020 yên tĩnh tới mức nào?"
							class="video-img"
							href="https://dailyxe.com.vn/videos/trai-nghiem-thuc-te-bentley-flying-spur-2020-yen-tinh-toi-muc-nao-1188o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/trai-nghiem-thuc-te-bentley-flying-spur-2020-yen-tinh-toi-muc-nao-117251j2.jpg"
							alt="Trải nghiệm thực tế: Bentley Flying Spur 2020 yên tĩnh tới mức nào?"
							src="https://cdn.dailyxe.com.vn/image/trai-nghiem-thuc-te-bentley-flying-spur-2020-yen-tinh-toi-muc-nao-117251j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">6:47</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/trai-nghiem-thuc-te-bentley-flying-spur-2020-yen-tinh-toi-muc-nao-1188o.html"
									title="Trải nghiệm thực tế: Bentley Flying Spur 2020 yên tĩnh tới mức nào?"
									class="ng-binding">Trải nghiệm thực tế: Bentley Flying Spur
									2020 yên tĩnh tới mức nào?</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 1 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 4 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Hướng dẫn đỗ xe song song - DỄ DÀNG và CHÍNH XÁC cho tài mới"
							class="video-img"
							href="https://dailyxe.com.vn/videos/huong-dan-do-xe-song-song-de-dang-va-chinh-xac-cho-tai-moi-1184o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/huong-dan-do-xe-song-song-de-dang-va-chinh-xac-cho-tai-moi-114592j2.jpg"
							alt="Hướng dẫn đỗ xe song song - DỄ DÀNG và CHÍNH XÁC cho tài mới"
							src="https://cdn.dailyxe.com.vn/image/huong-dan-do-xe-song-song-de-dang-va-chinh-xac-cho-tai-moi-114592j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">14:54</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/huong-dan-do-xe-song-song-de-dang-va-chinh-xac-cho-tai-moi-1184o.html"
									title="Hướng dẫn đỗ xe song song - DỄ DÀNG và CHÍNH XÁC cho tài mới"
									class="ng-binding">Hướng dẫn đỗ xe song song - DỄ DÀNG và CHÍNH
									XÁC cho tài mới</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 2 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 5 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Bất chấp dịch Covid-19, doanh số ô tô Honda tháng 3/2020 vẫn tăng 40%"
							class="video-img"
							href="https://dailyxe.com.vn/videos/bat-chap-dich-covid-19-doanh-so-o-to-honda-thang-32020-van-tang-40-1183o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/bat-chap-dich-covid-19-doanh-so-o-to-honda-thang-32020-van-tang-40-114587j2.jpg"
							alt="Bất chấp dịch Covid-19, doanh số ô tô Honda tháng 3/2020 vẫn tăng 40%"
							src="https://cdn.dailyxe.com.vn/image/bat-chap-dich-covid-19-doanh-so-o-to-honda-thang-32020-van-tang-40-114587j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">30:23</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/bat-chap-dich-covid-19-doanh-so-o-to-honda-thang-32020-van-tang-40-1183o.html"
									title="Bất chấp dịch Covid-19, doanh số ô tô Honda tháng 3/2020 vẫn tăng 40%"
									class="ng-binding">Bất chấp dịch Covid-19, doanh số ô tô Honda
									tháng 3/2020 vẫn tăng 40%</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 2 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 3 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a title="Mỗi siêu xe bán ra, Ferrari thu lời khoảng 94.000 USD"
							class="video-img"
							href="https://dailyxe.com.vn/videos/moi-sieu-xe-ban-ra-ferrari-thu-loi-khoang-94000-usd-1182o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/moi-sieu-xe-ban-ra-ferrari-thu-loi-khoang-94000-usd-114585j2.jpg"
							alt="Mỗi siêu xe bán ra, Ferrari thu lời khoảng 94.000 USD"
							src="https://cdn.dailyxe.com.vn/image/moi-sieu-xe-ban-ra-ferrari-thu-loi-khoang-94000-usd-114585j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">11:59</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/moi-sieu-xe-ban-ra-ferrari-thu-loi-khoang-94000-usd-1182o.html"
									title="Mỗi siêu xe bán ra, Ferrari thu lời khoảng 94.000 USD"
									class="ng-binding">Mỗi siêu xe bán ra, Ferrari thu lời khoảng
									94.000 USD</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 2 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 4 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a title="'Ba lý do người Việt không chọn xe hơi Trung Quốc' [1]"
							class="video-img"
							href="https://dailyxe.com.vn/videos/ba-ly-do-nguoi-viet-khong-chon-xe-hoi-trung-quoc-1-1180o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/ba-ly-do-nguoi-viet-khong-chon-xe-hoi-trung-quoc-1-114582j2.jpg"
							alt="'Ba lý do người Việt không chọn xe hơi Trung Quốc' [1]"
							src="https://cdn.dailyxe.com.vn/image/ba-ly-do-nguoi-viet-khong-chon-xe-hoi-trung-quoc-1-114582j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">5:53</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/ba-ly-do-nguoi-viet-khong-chon-xe-hoi-trung-quoc-1-1180o.html"
									title="'Ba lý do người Việt không chọn xe hơi Trung Quốc' [1]"
									class="ng-binding">'Ba lý do người Việt không chọn xe hơi Trung
									Quốc' [1]</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 2 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 2 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a title="'Ba lý do người Việt không chọn xe hơi Trung Quốc' [2]"
							class="video-img"
							href="https://dailyxe.com.vn/videos/ba-ly-do-nguoi-viet-khong-chon-xe-hoi-trung-quoc-2-1181o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/ba-ly-do-nguoi-viet-khong-chon-xe-hoi-trung-quoc-2-114583j2.jpg"
							alt="'Ba lý do người Việt không chọn xe hơi Trung Quốc' [2]"
							src="https://cdn.dailyxe.com.vn/image/ba-ly-do-nguoi-viet-khong-chon-xe-hoi-trung-quoc-2-114583j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">5:33</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/ba-ly-do-nguoi-viet-khong-chon-xe-hoi-trung-quoc-2-1181o.html"
									title="'Ba lý do người Việt không chọn xe hơi Trung Quốc' [2]"
									class="ng-binding">'Ba lý do người Việt không chọn xe hơi Trung
									Quốc' [2]</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 2 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 3 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Mercedes-Benz ngang ngược chạy 234km/h trên cao tốc, thách thức lực lượng chức năng"
							class="video-img"
							href="https://dailyxe.com.vn/videos/mercedes-benz-ngang-nguoc-chay-234kmh-tren-cao-toc-thach-thuc-luc-luong-chuc-nang-1185o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/mercedes-benz-ngang-nguoc-chay-234kmh-tren-cao-toc-thach-thuc-luc-luong-chuc-nang-114600j2.jpg"
							alt="Mercedes-Benz ngang ngược chạy 234km/h trên cao tốc, thách thức lực lượng chức năng"
							src="https://cdn.dailyxe.com.vn/image/mercedes-benz-ngang-nguoc-chay-234kmh-tren-cao-toc-thach-thuc-luc-luong-chuc-nang-114600j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">0:53</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/mercedes-benz-ngang-nguoc-chay-234kmh-tren-cao-toc-thach-thuc-luc-luong-chuc-nang-1185o.html"
									title="Mercedes-Benz ngang ngược chạy 234km/h trên cao tốc, thách thức lực lượng chức năng"
									class="ng-binding">Mercedes-Benz ngang ngược chạy 234km/h trên
									cao tốc, thách thức lực lượng chức năng</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 2 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 1 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a title="Đánh giá xe BMW 320i GT Sport Line 2020 tại Việt Nam"
							class="video-img"
							href="https://dailyxe.com.vn/videos/danh-gia-xe-bmw-320i-gt-sport-line-2020-tai-viet-nam-1179o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/danh-gia-xe-bmw-320i-gt-sport-line-2020-tai-viet-nam-114346j2.jpg"
							alt="Đánh giá xe BMW 320i GT Sport Line 2020 tại Việt Nam"
							src="https://cdn.dailyxe.com.vn/image/danh-gia-xe-bmw-320i-gt-sport-line-2020-tai-viet-nam-114346j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">27:27</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/danh-gia-xe-bmw-320i-gt-sport-line-2020-tai-viet-nam-1179o.html"
									title="Đánh giá xe BMW 320i GT Sport Line 2020 tại Việt Nam"
									class="ng-binding">Đánh giá xe BMW 320i GT Sport Line 2020 tại
									Việt Nam</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 2 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 6 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Nissan tung ưu đãi khủng cho khách mua xe trong tháng 4/2020"
							class="video-img"
							href="https://dailyxe.com.vn/videos/nissan-tung-uu-dai-khung-cho-khach-mua-xe-trong-thang-42020-1178o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/nissan-tung-uu-dai-khung-cho-khach-mua-xe-trong-thang-42020-113384j2.jpg"
							alt="Nissan tung ưu đãi khủng cho khách mua xe trong tháng 4/2020"
							src="https://cdn.dailyxe.com.vn/image/nissan-tung-uu-dai-khung-cho-khach-mua-xe-trong-thang-42020-113384j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">5:42</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/nissan-tung-uu-dai-khung-cho-khach-mua-xe-trong-thang-42020-1178o.html"
									title="Nissan tung ưu đãi khủng cho khách mua xe trong tháng 4/2020"
									class="ng-binding">Nissan tung ưu đãi khủng cho khách mua xe
									trong tháng 4/2020</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 2 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 3 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Hướng dẫn lái xe số tự động từ A tới Z trên Honda Accord"
							class="video-img"
							href="https://dailyxe.com.vn/videos/huong-dan-lai-xe-so-tu-dong-tu-a-toi-z-tren-honda-accord-1177o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/huong-dan-lai-xe-so-tu-dong-tu-a-toi-z-tren-honda-accord-113381j2.jpg"
							alt="Hướng dẫn lái xe số tự động từ A tới Z trên Honda Accord"
							src="https://cdn.dailyxe.com.vn/image/huong-dan-lai-xe-so-tu-dong-tu-a-toi-z-tren-honda-accord-113381j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">18:50</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/huong-dan-lai-xe-so-tu-dong-tu-a-toi-z-tren-honda-accord-1177o.html"
									title="Hướng dẫn lái xe số tự động từ A tới Z trên Honda Accord"
									class="ng-binding">Hướng dẫn lái xe số tự động từ A tới Z trên
									Honda Accord</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 2 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 2 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Tesla hé lộ những hình ảnh đầu tiên về dự án sản xuất máy thở chống Covid-19"
							class="video-img"
							href="https://dailyxe.com.vn/videos/tesla-he-lo-nhung-hinh-anh-dau-tien-ve-du-an-san-xuat-may-tho-chong-covid-19-1175o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/tesla-he-lo-nhung-hinh-anh-dau-tien-ve-du-an-san-xuat-may-tho-chong-covid-19-113286j2.jpg"
							alt="Tesla hé lộ những hình ảnh đầu tiên về dự án sản xuất máy thở chống Covid-19"
							src="https://cdn.dailyxe.com.vn/image/tesla-he-lo-nhung-hinh-anh-dau-tien-ve-du-an-san-xuat-may-tho-chong-covid-19-113286j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">3:52</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/tesla-he-lo-nhung-hinh-anh-dau-tien-ve-du-an-san-xuat-may-tho-chong-covid-19-1175o.html"
									title="Tesla hé lộ những hình ảnh đầu tiên về dự án sản xuất máy thở chống Covid-19"
									class="ng-binding">Tesla hé lộ những hình ảnh đầu tiên về dự án
									sản xuất máy thở chống Covid-19</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 2 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 5 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a title="So sánh Genesis G80 2021 với Audi A7 Sportback [2]"
							class="video-img"
							href="https://dailyxe.com.vn/videos/so-sanh-genesis-g80-2021-voi-audi-a7-sportback-2-1174o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/so-sanh-genesis-g80-2021-voi-audi-a7-sportback-2-112936j2.jpg"
							alt="So sánh Genesis G80 2021 với Audi A7 Sportback [2]"
							src="https://cdn.dailyxe.com.vn/image/so-sanh-genesis-g80-2021-voi-audi-a7-sportback-2-112936j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">8:10</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/so-sanh-genesis-g80-2021-voi-audi-a7-sportback-2-1174o.html"
									title="So sánh Genesis G80 2021 với Audi A7 Sportback [2]"
									class="ng-binding">So sánh Genesis G80 2021 với Audi A7
									Sportback [2]</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 2 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 13 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a title="So sánh Genesis G80 2021 với Audi A7 Sportback"
							class="video-img"
							href="https://dailyxe.com.vn/videos/so-sanh-genesis-g80-2021-voi-audi-a7-sportback-1173o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/so-sanh-genesis-g80-2021-voi-audi-a7-sportback-112935j2.jpg"
							alt="So sánh Genesis G80 2021 với Audi A7 Sportback"
							src="https://cdn.dailyxe.com.vn/image/so-sanh-genesis-g80-2021-voi-audi-a7-sportback-112935j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">7:21</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/so-sanh-genesis-g80-2021-voi-audi-a7-sportback-1173o.html"
									title="So sánh Genesis G80 2021 với Audi A7 Sportback"
									class="ng-binding">So sánh Genesis G80 2021 với Audi A7
									Sportback</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 2 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 7 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a title="3 mẫu xe BMW dành cho giới trẻ Việt KHÔNG THỂ BỎ QUA"
							class="video-img"
							href="https://dailyxe.com.vn/videos/3-mau-xe-bmw-danh-cho-gioi-tre-viet-khong-the-bo-qua-1172o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/3-mau-xe-bmw-danh-cho-gioi-tre-viet-khong-the-bo-qua-112925j2.jpg"
							alt="3 mẫu xe BMW dành cho giới trẻ Việt KHÔNG THỂ BỎ QUA"
							src="https://cdn.dailyxe.com.vn/image/3-mau-xe-bmw-danh-cho-gioi-tre-viet-khong-the-bo-qua-112925j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">10:22</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/3-mau-xe-bmw-danh-cho-gioi-tre-viet-khong-the-bo-qua-1172o.html"
									title="3 mẫu xe BMW dành cho giới trẻ Việt KHÔNG THỂ BỎ QUA"
									class="ng-binding">3 mẫu xe BMW dành cho giới trẻ Việt KHÔNG
									THỂ BỎ QUA</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 2 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 3 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
					<div ng-repeat="item in listVideo" class="video-item media ">
						<a
							title="Mỹ: Nhận xe sau vài phút, chủ nhân chiếc BMW M5 2020 lập tức gây tai nạn kinh hoàng"
							class="video-img"
							href="https://dailyxe.com.vn/videos/my-nhan-xe-sau-vai-phut-chu-nhan-chiec-bmw-m5-2020-lap-tuc-gay-tai-nan-kinh-hoang-1176o.html">
							<img
							ng-src="https://cdn.dailyxe.com.vn/image/my-nhan-xe-sau-vai-phut-chu-nhan-chiec-bmw-m5-2020-lap-tuc-gay-tai-nan-kinh-hoang-113306j2.jpg"
							alt="Mỹ: Nhận xe sau vài phút, chủ nhân chiếc BMW M5 2020 lập tức gây tai nạn kinh hoàng"
							src="https://cdn.dailyxe.com.vn/image/my-nhan-xe-sau-vai-phut-chu-nhan-chiec-bmw-m5-2020-lap-tuc-gay-tai-nan-kinh-hoang-113306j2.jpg">
							<!-- ngIf: item.Duration --> <span
							class="video-time ng-binding ng-scope" ng-if="item.Duration">1:01</span>
							<!-- end ngIf: item.Duration --> <!-- ngIf: item.IdVideos -->
						</a>
						<div class="media-body has-menu-dots">
							<h2 class="title">
								<a
									href="https://dailyxe.com.vn/videos/my-nhan-xe-sau-vai-phut-chu-nhan-chiec-bmw-m5-2020-lap-tuc-gay-tai-nan-kinh-hoang-1176o.html"
									title="Mỹ: Nhận xe sau vài phút, chủ nhân chiếc BMW M5 2020 lập tức gây tai nạn kinh hoàng"
									class="ng-binding">Mỹ: Nhận xe sau vài phút, chủ nhân chiếc BMW
									M5 2020 lập tức gây tai nạn kinh hoàng</a>
							</h2>
							<div class="video-info">
								<!-- ngIf: item.NgayTao -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.NgayTao"> 2 tháng trước </span>
								<!-- end ngIf: item.NgayTao -->
								<!-- ngIf: item.SoLuotXem -->
								<span class="video-info-item ng-binding ng-scope"
									ng-if="item.SoLuotXem"> 3 lượt xem </span>
								<!-- end ngIf: item.SoLuotXem -->
							</div>
							
						</div>
					</div>
					<!-- end ngRepeat: item in listVideo -->
				</div>
				<!-- ngIf: spinner -->
				<!-- ngIf: !spinner && listVideo.length == 0 -->
			</div>
		</div>
		
				<!-- end ngIf: !isLoadTimKiem -->
				<!-- ngIf: isLoadTimKiem -->
			
				
					<!-- ngRepeat: item in listVideo -->
					
					<!-- end ngRepeat: item in listVideo -->
					
					<!-- end ngRepeat: item in listVideo -->
				
					<!-- end ngRepeat: item in listVideo -->
					
					<!-- end ngRepeat: item in listVideo -->
					
					<!-- end ngRepeat: item in listVideo -->
					
					<!-- end ngRepeat: item in listVideo -->
					
					<!-- end ngRepeat: item in listVideo -->
					
					<!-- end ngRepeat: item in listVideo -->
				</div>
				<!-- ngIf: spinner -->
				<!-- ngIf: !spinner && listVideo.length == 0 -->
				<pagination class="pagination-custom ng-isolate-scope ng-hide"
					ng-show="!spinner &amp;&amp; totalPage > 1" page="displayPage"
					page-size="displayItems" total="total" show-prev-next="true"
					paging-action="loadData(page, pageSize); ScrollToContainer('#containerResult')">
				<ul data-ng-hide="Hide" data-ng-class="ulClass" class="pagination">
					<!-- ngRepeat: Item in List -->
				</ul>
				</pagination>
			</div>
			<!-- end ngIf: listVideo.length > 0 -->
		</div>
	</div>
</section>