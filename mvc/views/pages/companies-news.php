<style type="text/css" >
.box-border {
    background-color: #fff;
    border-width: 1px;
    border-style: solid;
    border-color: #e5e6e9 #dfe0e4 #d0d1d5;
    border-radius: 3px;
}
.detail-news {
    padding-left: 5rem;
}
.detail-news {
    position: relative;
    font-size: 2rem;
    padding: 1.5rem;
	font-family: "Roboto",sans-serif;
}

.detail-news .detail-news-title {
    font-family: 'Anton', sans-serif;
    font-size: 2rem;
    margin-bottom: 10px;
}

.detail-news .detail-news-posted {
    border-bottom: 1px dotted #ccc;
    padding-bottom: 5px;
    margin-bottom: 20px;
    font-size: 90%;
    font-weight: 500;
}

.detail-news .detail-news-posted {
    color: #4285f4;
    margin-bottom: .5rem;
}

.mr-auto, .mx-auto {
    margin-right: auto !important;
}

.d-flex {
    display: -ms-flexbox !important;
    display: -webkit-box !important;
    display: flex !important;
}

.detail-news .detail-news-posted .author {
    color: #b62831;
    margin-right: 7px;
}

.detail-news .detail-news-posted .time {
    display: block;
    padding: 0px;
    color: #666;
    margin-right: 7px;
}

.detail-news .detail-news-posted .name-menu {
    display: block;
    padding-left: 10px;
    color: #444;
    text-transform: uppercase;
    margin-right: 7px;
    font-weight: 700;
    position: relative;
}

.news-list-small {
    margin-bottom: 15px;
    margin-left: 0px !important;
}

.list-group {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-direction: column;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
}

.news-list-small .news-item {
    margin-bottom: 7px;
    border: none;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding: 0px;
    padding-left: 0px;
    padding-right: 0px;
    position: relative;
    background-image: none !important;
}

.news-list-small .news-item .news-title {
    margin-bottom: 0px;
    font-size: 90%;
    color: #004383;
    width: 100%;
    display: block;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    overflow: hidden;
    font-weight: normal;
}

.news-list-small .news-item .news-title a {
    font-weight: normal !important;
    color: inherit !important;
}

.detail-content {
    font-size: 1.2rem;
    text-align: justify;
}

.detail-news .detail-news-desc, .detail-news h2 {
    font-weight: 600;
    font-style: italic;
    margin-bottom: 1rem;
}

</style>
<div class="columns" style="height: auto !important;">
	<section class="companies column is-three-quarters"
		style="height: auto !important;">
		<?php
while ($row = mysqli_fetch_array($data["News"])) {
    ?>
		<div class="detail-news box-border">
			<h1 class="detail-news-title"><?php echo $row["tieude"] ?></h1>
			<div
				class="detail-news-posted start-social-fixed d-flex align-items-center">
				<div class="d-flex mr-auto">
					<span class="author"><a
						title="Xem các bài viết của Nguyễn Trọng Hữu"
						href="https://dailyxe.com.vn/author/nguyen-trong-huu-16a.html">Nguyễn
							Trọng Hữu</a></span> <span class="time">đăng lúc 15-04-2020 14:30</span>
					<span class="name-menu">Tin tức mới</span>
				</div>
			</div>
			<span macd="tinlienquan_chitiettintuc"></span>
			<ul class="list-group list-group-flush news-list-small ng-scope"
				ng-controller="modal-content as ctrl">
				<li class="list-group-item news-item"><h3 class="news-title">
						<a target="_self"
							href="https://dailyxe.com.vn/tin-tuc/hang-hot-mitsubishi-xpander-truoc-co-hoi-noi-dia-hoa-gia-con-co-the-re-hon-tai-viet-nam-5629d.html"
							class="modal-link-content" data-id="5629"
							ng-click="ctrl.loadTinTuc('5629', 'https://dailyxe.com.vn/tin-tuc/hang-hot-mitsubishi-xpander-truoc-co-hoi-noi-dia-hoa-gia-con-co-the-re-hon-tai-viet-nam-5629d.html')"
							title="Hàng hot Mitsubishi Xpander trước cơ hội nội địa hóa, giá còn có thể rẻ hơn tại Việt Nam"><span
							class="times-small"></span>Hàng hot Mitsubishi Xpander trước cơ
							hội nội địa hóa, giá còn có thể rẻ hơn tại Việt Nam</a>
					</h3></li>
				<li class="list-group-item news-item"><h3 class="news-title">
						<a target="_self"
							href="https://dailyxe.com.vn/tin-tuc/nhung-mau-xe-phan-khuc-b-dat-khach-nhat-viet-nam-thang-72017-1444d.html"
							class="modal-link-content" data-id="1444"
							ng-click="ctrl.loadTinTuc('1444', 'https://dailyxe.com.vn/tin-tuc/nhung-mau-xe-phan-khuc-b-dat-khach-nhat-viet-nam-thang-72017-1444d.html')"
							title="Những mẫu xe phân khúc B đắt khách nhất Việt Nam tháng 7/2017"><span
							class="times-small"></span>Những mẫu xe phân khúc B đắt khách
							nhất Việt Nam tháng 7/2017</a>
					</h3></li>
				<li class="list-group-item news-item"><h3 class="news-title">
						<a target="_self"
							href="https://dailyxe.com.vn/tin-tuc/giam-gia-bot-lai-nhieu-hang-xe-ban-chay-bat-ngo-trong-mua-dich-co-ca-nhung-cai-ten-xua-nay-e-nhat-viet-nam-12875d.html"
							class="modal-link-content" data-id="12875"
							ng-click="ctrl.loadTinTuc('12875', 'https://dailyxe.com.vn/tin-tuc/giam-gia-bot-lai-nhieu-hang-xe-ban-chay-bat-ngo-trong-mua-dich-co-ca-nhung-cai-ten-xua-nay-e-nhat-viet-nam-12875d.html')"
							title="Giảm giá bớt lãi, nhiều hãng xe bán chạy bất ngờ trong mùa dịch: Có cả những cái tên xưa nay ế nhất Việt Nam"><span
							class="times-small"></span>Giảm giá bớt lãi, nhiều hãng xe bán
							chạy bất ngờ trong mùa dịch: Có cả những cái tên xưa nay ế nhất
							Việt Nam</a>
					</h3></li>
			</ul>
			<div class="detail-news-body detail-content clearfix" id="qcbody">
			<?php echo $row["noidung"] ?>
			</div>
		</div>
		<?php } ?>
	</section>
	<section class="summary-reviews column z-1">cba</section>
</div>