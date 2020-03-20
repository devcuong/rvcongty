<?php require_once 'mvc/core/Config.php'; ?>
<?php header("HTTP/1.0 404 Not Found"); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:type" content="website">

<meta property="og:url" content="<?php $url = "https"."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $url ?>">
<link rel="canonical" href="<?php echo $url ?>">

<meta property="og:image"
	content="<?php
	$url = "https"."://$_SERVER[HTTP_HOST]";
	echo $url ?>/mvc/public/images/banner.png">
<meta property="og:locale" content="vi_VN">
<meta property="og:site_name" content="Công ty TOP">
<title></title>

<link rel="apple-touch-icon" sizes="57x57"
	href="<?php echo $servername ?>/mvc/public/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60"
	href="<?php echo $servername ?>/mvc/public/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72"
	href="<?php echo $servername ?>/mvc/public/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76"
	href="<?php echo $servername ?>/mvc/public/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114"
	href="<?php echo $servername ?>/mvc/public/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120"
	href="<?php echo $servername ?>/mvc/public/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144"
	href="<?php echo $servername ?>/mvc/public/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152"
	href="<?php echo $servername ?>/mvc/public/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180"
	href="<?php echo $servername ?>/mvc/public/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"
	href="<?php echo $servername ?>/mvc/public/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32"
	href="<?php echo $servername ?>/mvc/public/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96"
	href="<?php echo $servername ?>/mvc/public/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16"
	href="<?php echo $servername ?>/mvc/public/favicon/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage"
	content="<?php echo $servername ?>/mvc/public/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<link rel="preload stylesheet" as="style"
	href="<?php echo $servername ?>/mvc/public/css/bulma.min.css">
<link href="<?php echo $servername ?>/mvc/public/css/css" rel="stylesheet">
<link rel="stylesheet" as="style"
	href="<?php echo $servername ?>/mvc/public/css/jquery-ui.min.css">  
<style type="text/css" id="less:stylesheets-style">
@media screen and (min-width: 769px) {
	.columns{
        display: flex;
    }
    .hero{
    bottom: 80px;
    }
}
@media screen and (max-width: 768px) {
	html {
		font-size: 14px;
	}
	.hero-body {
		padding: 1.5rem;
	}
	.title {
		font-size: 1.5rem;
	}
	.tabs {
		font-size: 0.75rem;
		max-width: 100%;
		overflow-x: hidden;
	}
	.tabs a {
		padding: 0.2rem 0.7rem 0.2rem 0;
	}
	.tabs .icon:last-child {
		margin-left: 0;
	}
	.breadcrumb {
		padding-left: 1rem;
	}
	.columns {
		margin-left: auto;
		margin-right: auto;
		width: 100%;
	}
	.modal-card {
		width: 85vw;
		margin: 0 auto;
	}
	.modal-card .modal-card-head {
		padding: 1rem;
	}
	.modal-card .modal-card-head .modal-card-title {
		font-size: 1.2rem;
		width: 100%;
	}
	.modal-card .modal-card-body {
		padding: 1rem;
	}
	.modal-content {
		width: 90%;
	}
	.section {
		padding: 1.5rem 1rem;
	}
}

body {
	font-family: 'Quicksand', sans-serif;
	background: #fff;
	min-height: 100vh;
}

a {
	color: #00b7ff;
}

a.white-link:hover {
	color: white;
}

.m-t-5 {
	margin-top: 5px !important;
}

.m-t-10 {
	margin-top: 10px !important;
}

.m-t-15 {
	margin-top: 15px !important;
}

.m-b-5 {
	margin-bottom: 5px !important;
}

.m-b-10 {
	margin-bottom: 10px !important;
}

.m-b-15 {
	margin-bottom: 15px !important;
}

.tabs:not (:last-child ) {
	margin-bottom: 0.8rem;
}

.z-1 {
	z-index: 1;
}

.text-500 {
	font-weight: 500;
}

.main-nav {
	font-size: 1rem;
	line-height: 1.5rem;
	background-color: #00b9f2;
	background-image:linear-gradient(97deg,#00b9f2 35%,#0e7ccd 62%,#00b9f2 81%);
}

.main-nav .logo {
	padding: 0.3rem 0 0;
	display: flex;
	align-items: center;
}

.main-nav .logo .logo__img {
	width: 4rem;
}

.main-nav .logo .logo__header {
	margin-left: 0.5rem;
}

.main-nav .logo .logo__header a {
	color: white;
}

@media screen and (max-width: 768px) {
	.main-nav .logo {
		justify-content: center;
	}
}

.main-footer {
	background-color: #00b9f2;
    background-image: linear-gradient(97deg,#00b9f2 35%,#0e7ccd 62%,#00b9f2 81%);
	flex-basis: 40px;
	padding: 0.5rem 0;
	margin-top: 20px;
}
.level-item a{
	color: #fff !important;
}
@media screen and (max-width: 768px) {
	.main-footer {
		padding: 0.5rem 1rem;
	}
}

.main-container {
	min-height: calc(100vh - 120px);
}


@media screen and (max-width: 768px) {
	.hero-img {
		margin-left: 0;
/* 		height: 220px; */
		margin-right: 0;
	}
}

.hero-img .hero-img__gradient {
	position: absolute;
	top: 0;
	left: -64px;
	right: -64px;
	height: 434px;
}
.hero{
	border-radius: 50px;
    position: absolute;
    left: 15%;
    width: 70%;
    z-index: 1000;
	background: rgba(0,0,0,0.2);
}
.banner-search-box {
    border-radius: 30px;
    background-color: transparent;
	position: relative;
    background: #fff;
}
.box-search {
    border-radius: 30px !important;
    overflow: hidden;
	background-color: #fff;
    border: 1px solid #ced4da;
	position: relative;
	display: flex;
	flex-wrap: wrap;
}
.banner-search-box .box-search .form-control{
	position: relative;
	flex: 1 1 auto;
	padding: 12px 20px;
    font-size: 120%;
	border: none;
	border-top-right-radius: 0;
    border-bottom-right-radius: 0;
	border-radius: 3px;
	width: 1%;
    margin-bottom: 0;
}
.input-group-append {
    margin-left: -1px;
	display: flex;
}
.input-group-append .btn {
    padding: 0px 12px;
	    width: 42px;
    text-align: center;
	position: relative;
    z-index: 2;
}
.box-search .input-group-append .btn i {
    color: #b62831;
}
.box-search .input-group-append .btn {
    background-color: transparent;
	border: none;
}
@media screen and (max-width: 768px) {
	.hero-img .hero-img__gradient {
		height: 220px;
		left: 0;
		right: 0;
	}
    .hero{
    bottom: 20px;
    }
}

.companies {
    background-color: #fff;
    color: #4a4a4a;
    max-width: 100%;
    position: relative;
    padding: 0.3rem 0 0 0;
}
.tabs:not(:last-child){
	margin-bottom: 0px !important;
}
.custom-pagination{
	margin-top: 0.8rem;
}
.summary-reviews{
	box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.1);
    margin-left: 1rem;
	padding-left: 0.5rem;
    background: white;
}
.custom-pagination {
	padding-left: 1rem;
	margin-bottom: 0.4rem;
}

.custom-pagination .pagination-summary {
	margin-right: 0.5rem;
}

.company-item {
	display: block;
	border: 1px solid #A8E4FC !important;
	margin-bottom: 10px;
}

.company-item:hover {
/* 	background: #f1f2f2; */
/* 	border-left: 2px solid #3273dc; */
/* 	cursor: pointer; */
	box-shadow: 0 3px 10px 0 rgba(0,0,0,0.1);
}

.company-info {
	display: flex;
	align-items: center;
	flex-direction: row;
	margin-bottom: 0px !important;
	margin-left: 0px;
	margin-right: 0px;
}
.home-logo-company{
	text-align: center;
	padding:1.25rem;
	border-right: 1px solid #A8E4FC;
	background: #fff;
}
.home-detail-company{
	flex-grow: 0;
	flex-shrink: 0;
	flex-basis:auto;
}
.company-info__detail{
/* 	width: 100%; */
}
.pagination-link{
	border-radius: 0px;
}
@media screen and (max-width: 768px) {
/* 	.company-info { */
/* 		padding: 0.4rem 1.2rem; */
/* 	} */
}

.company-info .company-info__name {
	margin-left: 4px;
}

.company-info .company-info__logo {
	margin-right: 0.5rem;
	display: flex;
	min-width: 64px;
	align-items: center;
}

@media screen and (max-width: 768px) {
	.company-info .company-info__logo {
		margin-right: 0.9rem;
	}
}

.company-info .company-info__rating {
	position: relative;
	top: -2px;
	font-size: 0.85rem;
	margin-left: 0.2rem;
}

@media screen and (max-width: 768px) {
	.company-info .company-info__rating {
		display: block;
		top: 0px;
		left: -5px;
		margin-bottom: 2px;
	}
}

.company-info .company-info__rating-count {
	font-weight: 700;
}

.company-info-company-page {
	background-color: #fff;
	position: relative;
	color: #4a4a4a;
}

.company-info-company-page .button-review {
	position: absolute;
	box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1);
	opacity: 0.85;
	border: none;
	top: 0.8rem;
	right: 1.5rem;
	transition: 0.2s all;
}

.company-info-company-page .button-review:hover {
	opacity: 1;
}

@media screen and (max-width: 768px) {
	.company-info-company-page .button-review {
		position: relative;
		right: calc(155px - 100vw);
		top: 0.7rem;
		margin-bottom: 1rem;
	}
}

.company-info-company-page .company-info {
	border: 1px solid #A8E4FC !important;
}

@media screen and (max-width: 768px) {
	.company-info-company-page .company-info {
		padding: 0.5rem 0.8rem;
	}
}

@media screen and (max-width: 768px) {
	.summary-reviews {
		padding: 0 0.8rem;
	}
}

.summary-reviews .reviews__header {
	margin-bottom: 0.4rem;
}

@media screen and (max-width: 768px) {
	.summary-reviews .reviews__header {
		margin-top: 1.5rem;
	}
}

.autocomplete-suggestion {
	display: flex;
	align-items: center;
	padding: 0.4rem;
}

.autocomplete-suggestion b {
	font-weight: 700;
	color: #209cee;
}

.autocomplete-suggestion .company-logo {
	margin-right: 0.25rem;
	display: flex;
	align-items: center;
	border: 1px solid #c2c2c2;
}

.full-reviews {
	margin-top: 0.6rem;
	overflow-x: hidden;
	padding: 1px;
}

@media screen and (max-width: 768px) {
	.full-reviews .no-review-text {
		padding-left: 1rem;
	}
}

.full-reviews .review {
	margin-bottom: 1rem;
}

.full-reviews .review .card-header-title {
	padding: 0.5rem 0.75rem;
}

.full-reviews .review .card-footer-item {
	padding: 0.2rem 0.75rem;
}

.full-reviews .review .card-footer-item.clickable:hover {
	cursor: pointer;
	background-image: linear-gradient(to top, #e6e9f0 0%, #eef1f5 100%);
}

.full-reviews .review .card-content {
	padding: 0.75rem;
}

.full-reviews .review .review__time {
	display: flex;
	align-items: center;
	padding-right: 0.75rem;
}

.full-reviews .review .review__share {
	display: flex;
	align-items: center;
	padding: 0 0.75rem;
}

.full-reviews .review .link-delete {
	position: absolute;
	right: 0.75rem;
}

.full-reviews .review .icon-like, .full-reviews .review .icon-dislike,
	.full-reviews .review .icon-ban {
	position: relative;
	left: 3px;
}

.full-reviews .review .icon-like {
	top: -1px;
}

.full-reviews .review .icon-reply {
	position: relative;
	left: -3px;
}

.review-comments {
	border-top: 1px solid rgba(128, 128, 128, 0.35);
	padding: 1rem 2rem;
}

.review-comments .comment {
	padding-top: 0.5rem;
	padding-bottom: 0.5rem;
	border-top: 1px solid rgba(128, 128, 128, 0.35);
}

.review-comments .comment:last-child {
	margin-bottom: 0;
	border-bottom: 1px solid rgba(128, 128, 128, 0.35);
}

.review-comments .comment:nth-child(even) {
	background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 250%);
}

.help-section {
	padding-left: 50px;
}

@media screen and (max-width: 768px) {
	.help-section {
		padding: 1rem;
		font-size: 1rem !important;
	}
}

.help-section .question {
	font-weight: 600;
}

.help-section .answer {
	margin-bottom: 1rem;
}

.login-container {
	padding-top: 25vh;
}

.login-container .login-form {
	width: 25rem;
	padding: 1.5rem;
	background: white;
	border-radius: 0.5rem;
	margin: 0 auto;
}

.user-panel {
	position: absolute;
	text-align: right;
	right: 0;
	top: 0;
	padding: 1rem;
	box-shadow: 0 2px 2px rgba(10, 10, 10, 0.2);
	z-index: 10;
	background: white;
}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
</head>
<body>
	<nav class="main-nav navbar" role="navigation"
		aria-label="main navigation">
		<div class="container">
			<div class="logo" data-no-instant="">
				<a href="<?php echo $servername ?>"> <img class="logo__img"
					src="<?php echo $servername ?>/mvc/public/images/logo.png" alt="">
				</a>
				<h1 class="logo__header has-text-white is-size-5">
					<a href="<?php echo $servername ?>"> <b>CÔNG TY TOP</b></a>
				</h1>
			</div>
		</div>
	</nav>
	<div class="container main-container"
		style="height: auto !important; min-height: 0px !important;">
		<img alt="không tìm thấy" src="<?php echo $servername ?>/mvc/public/images/404.jpg">
	</div>
	<footer class="main-footer">
		<div class="container level">
			<div class="level-left">
				<p class="level-item">
					<a class="white-link" target="_blank"
						href="<?php echo $servername ?>/faq">Giải đáp thắc mắc - Yêu cầu
						xóa review</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a class="white-link"
						target="_blank" href="<?php echo $servername ?>/tnc">Điều khoản sử
						dụng</a>
				</p>
			</div>
		</div>
	</footer>
</body>
</html>
