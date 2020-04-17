<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Anton');

.box-border {
	background-color: #fff;
	border-width: 1px;
	border-style: solid;
	border-color: #e5e6e9 #dfe0e4 #d0d1d5;
}

.detail-news {
	padding-left: 5rem;
}

.detail-news {
	position: relative;
	font-size: 2rem;
	padding: 1.5rem;
	font-family: "Roboto", sans-serif;
}

.detail-news .detail-news-title {
	font-family: 'Anton', sans-serif;
	font-size: 1.4rem;
	margin-bottom: 10px;
}

.detail-news .detail-news-posted {
	border-bottom: 1px dotted #ccc;
	padding-bottom: 5px;
	font-weight: 100;
	font-size: 1.2rem;
}

.detail-news .detail-news-posted {
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
	color: #71bf44;
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
	font-size: 1rem;
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

.news-list-small .news-item .news-title::before {
	content: "";
	width: 12px;
	height: 12px;
	background-image:
		url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iNTEyIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMiI+PGc+PHBhdGggZD0ibTI1NiA1MTEuMjg1MTU2LTg5LjI4NTE1Ni04OS4yODUxNTZoLTEwNi43MTQ4NDRjLTMzLjA4NTkzOCAwLTYwLTI2LjkxNDA2Mi02MC02MHYtMzAyYzAtMzMuMDg1OTM4IDI2LjkxNDA2Mi02MCA2MC02MGgzOTJjMzMuMDg1OTM4IDAgNjAgMjYuOTE0MDYyIDYwIDYwdjMwMmMwIDMzLjA4NTkzOC0yNi45MTQwNjIgNjAtNjAgNjBoLTEwNi43MTQ4NDR6bS0xOTYtNDcxLjI4NTE1NmMtMTEuMDI3MzQ0IDAtMjAgOC45NzI2NTYtMjAgMjB2MzAyYzAgMTEuMDI3MzQ0IDguOTcyNjU2IDIwIDIwIDIwaDEyMy4yODUxNTZsNzIuNzE0ODQ0IDcyLjcxNDg0NCA3Mi43MTQ4NDQtNzIuNzE0ODQ0aDEyMy4yODUxNTZjMTEuMDI3MzQ0IDAgMjAtOC45NzI2NTYgMjAtMjB2LTMwMmMwLTExLjAyNzM0NC04Ljk3MjY1Ni0yMC0yMC0yMHptMzQyIDcwaC0yOTJ2NDBoMjkyem0wIDgwaC0yOTJ2NDBoMjkyem0tOTYgODBoLTE5NnY0MGgxOTZ6bTAgMCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojOTk5OTk5IiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9wYXRoPjwvZz4gPC9zdmc+);
	background-size: 100%;
	background-repeat: no-repeat;
	display: inline-block;
	color: #999;
	margin-right: 10px;
	position: relative;
	top: 2px;
}

.text-right {
	text-align: right !important;
	font-size: 1.2rem;
}

.box-right>.card-header, .box-left>.card-header {
	color: #fff;
	background-color: #71bf44;
	font-family: 'Anton', sans-serif;
	font-size: 125%;
	text-transform: uppercase;
	padding-top: 0.5rem;
	padding-bottom: 0.25rem;
	padding-left: 1.25rem;
}

.news-right .news-right-img {
	width: 150px;
	margin-right: 0.625rem;
}

.news-right .news-right-img img {
	max-width: 100%;
}
.news-right .news-right-title {
    display: block;
    font-weight: 400;
    margin-bottom: 0.25rem;
    max-height: 2.75rem;
    overflow: hidden;
}
</style>
<div class="columns" style="height: auto !important;">
	<section class="companies column is-two-thirds"
		style="height: auto !important;">
		<?php
while ($row = mysqli_fetch_array($data["News"])) {
    ?>
		<div class="detail-news box-border">
			<h1 class="detail-news-title"><?php echo $row["tieude"] ?></h1>
			<div
				class="detail-news-posted start-social-fixed d-flex align-items-center">
				<div class="d-flex mr-auto">
					<span class="time">đăng lúc 15-04-2020 14:30</span> <span
						class="name-menu">Tin tức mới</span>
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
			<p class="text-right end-social-fixed">Nguồn: <?php echo $row["nguon"] ?></p>
		</div>
		
		<?php } ?>
	</section>
	<section class="summary-reviews column z-1">
		<div class="card box-right box-border box-bottom">
			<h3 class="card-header">Tin tức mới</h3>
			<div class="card-block">
			<?php while ($r = mysqli_fetch_array($data["NewsMoiNhat"])) {?>
			<div class="news-right">
					<div class="media has-menu-dots">
						<a class="news-right-img" target="_self"
							title="<?php echo $r["tieude"] ?>"
							href="<?php echo $servername?>/companies-news/<?php echo $r["slugtieude"] ?>-<?php echo $r["id"] ?>">
							<img class="lazy-loading-image loaded"
							src="<?php echo $servername ?>/mvc/public/asset/news/<?php echo $r["thumbnail"] ?>"
							alt="<?php echo $r["tieude"] ?>"
							data-pin-nopin="true">
						</a>
						<div class="media-body">
							<h3 class="news-right-title">
								<a target="_self"
									title="<?php echo $r["tieude"] ?>"
									href="<?php echo $servername?>/companies-news/<?php echo $r["slugtieude"] ?>-<?php echo $r["id"] ?>"><?php echo $r["tieude"] ?></a>
							</h3>
							<p class="news-posted">
								<span class="origin"><a title="BanXeHoi"
									href="https://dailyxe.com.vn/banxehoi-banxehoi.com-6w.html">BanXeHoi</a></span>
								<span><i class="fa fa-calendar-o"></i>1 giờ</span> <span><i
									class="fa fa-eye"></i>2</span>
							</p>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</section>
</div>