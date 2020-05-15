<style>
.wrap {
	margin: 10px;
}

.search {
	width: 100%;
	position: relative;
	display: flex;
}

.searchTerm {
	width: 100%;
	border: 3px solid #e86b1f;
	border-right: none;
	padding: 5px;
	height: 36px;
	border-radius: 5px 0 0 5px;
	outline: none;
	color: #9DBFAF;
}

.searchTerm:focus {
	color: #e86b1f;
}

.searchButton {
	width: 40px;
	height: 36px;
	border: 1px solid #e86b1f;
	background: #e86b1f;
	text-align: center;
	color: #fff;
	border-radius: 0 5px 5px 0;
	cursor: pointer;
	font-size: 20px;
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
</style>
<div class="card box-right box-border box-bottom">
	<h3 class="card-header">TÌM KIẾM</h3>
	<div class="wrap">
		<form action="<?php echo $servername ?>/tim-kiem/news" method="post"
			style="width: 100%">
			<div class="search">
				<input type="text" name="search" class="searchTerm"
					placeholder="Tìm tin tức hoặc những gì bạn muốn tìm">
				<button type="submit" class="searchButton">
					<i class="fa fa-search"></i>
				</button>

			</div>
		</form>
	</div>
</div>
<div class="card box-right box-border box-bottom mt-10">
	<h3 class="card-header">Tin tức xem nhiều</h3>
	<div class="card-block">
		<div class="news-right">
			<div class="media has-menu-dots">
				<a class="news-right-img" target="_self"
					title="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
					href="http://localhost/rvcongty/companies-news/dieu-sai-lam-nhat-trong-su-nghiep-cua-toi-do-chinh-la-qua-trung-thanh-2">
					<img class="lazy-loading-image loaded"
					src="http://localhost/rvcongty/mvc/public/asset/news/1603.11.1.jpg"
					alt="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
					data-pin-nopin="true">
				</a>
				<div class="media-body">
					<h3 class="news-right-title">
						<a target="_self"
							title="Triển lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới"
							href="http://localhost/rvcongty/companies-news/dieu-sai-lam-nhat-trong-su-nghiep-cua-toi-do-chinh-la-qua-trung-thanh-2">Triển
							lãm ôtô Frankfurt Motor Show bị lo chết yểu nếu không đổi mới</a>
					</h3>
					<p class="news-posted">
						<span class="origin"><a title="BanXeHoi"
							href="http://localhost/rvcongty/companies-news/dieu-sai-lam-nhat-trong-su-nghiep-cua-toi-do-chinh-la-qua-trung-thanh-2">hrinsider</a></span>
						<span><i class="fa fa-eye"></i>15</span>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>