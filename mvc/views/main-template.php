<?php require_once 'mvc/core/Config.php'; ?>
<?php require_once 'mvc/class/CutString.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $data["Description"]; ?>">

<meta name="keywords" content="<?php echo $data["Keyword"]; ?>">

<meta property="og:title" content="<?php echo $data["Title"]; ?>">
<meta property="og:description"
	content="<?php echo $data["Description"]; ?>">
<meta property="og:type" content="website">

<meta property="og:url"
	content="<?php
$url = "https" . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $url?>">
<link rel="canonical" href="<?php echo $url ?>">
<?php if(isset($data["StringSchema"])) {?>
<script type="application/ld+json">
<?php echo $data["StringSchema"];?>
</script>
<?php } ?>

<meta property="og:image"
	content="<?php
$url = "https" . "://$_SERVER[HTTP_HOST]";
echo $url?>/mvc/public/images/banner.png">
<meta property="og:locale" content="vi_VN">
<meta property="og:site_name" content="Công ty TOP">
<title><?php echo $data["Title"]; ?></title>
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
<link href="<?php echo $servername ?>/mvc/public/css/css"
	rel="stylesheet">
<link rel="stylesheet" as="style"
	href="<?php echo $servername ?>/mvc/public/css/jquery-ui.min.css">
<link rel="preload stylesheet" as="style"
	href="https://cdnjs.cloudflare.com/ajax/libs/JavaScript-autoComplete/1.0.4/auto-complete.min.css">
<link rel="stylesheet" type="text/css"
	href="<?php echo $servername ?>/mvc/public/css/style.css" />
<link rel="preload stylesheet" as="style"
	href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
	crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript"
	src="<?php echo $servername ?>/mvc/public/js/timeago.locales.min.js"></script>
<script type="text/javascript"
	src="<?php echo $servername ?>/mvc/public/js/jquery-ui.min.js"></script>
<script type="text/javascript"
	src="<?php echo $servername ?>/mvc/public/js/config.js"></script>
<style type="text/css" id="less:stylesheets-style">
@media screen and (min-width: 769px) {
	.columns {
		display: flex;
	}
	.hero {
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
	color: #363636;
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

.tabs














:not







 







(
:last-child







 







)
{
margin-bottom














:







 







0
.8rem














;
}
.z-1 {
	z-index: 1;
}

.text-500 {
	font-weight: 500;
}

.main-nav {
	font-size: 1rem;
	line-height: 0.6rem;
	background-color: #00b9f2;
	background-image: linear-gradient(97deg, #088A08 35%, #04B431 62%, #71bf44 81%);
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
	background-image: linear-gradient(97deg, #088A08 35%, #04B431 62%, #71bf44 81%);
	flex-basis: 40px;
	padding: 0.5rem 0;
	margin-top: 20px;
}

.level-item a {
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

.hero {
	border-radius: 50px;
	position: absolute;
	left: 15%;
	width: 70%;
	z-index: 1000;
	background: rgba(0, 0, 0, 0.2);
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

.banner-search-box .box-search .form-control {
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
	.hero {
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

.tabs












:not






 






(
:last-child






 






){
margin-bottom












:






 






0
px






 






!
important












;
}
.custom-pagination {
	margin-top: 0.8rem;
}

.summary-reviews {
	padding-left: 1rem;
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
	border: 1px solid #71bf44 !important;
	margin-bottom: 10px;
}

.company-item:hover {
	/* 	background: #f1f2f2; */
	/* 	border-left: 2px solid #3273dc; */
	/* 	cursor: pointer; */
	box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.1);
}

.company-info {
	display: flex;
	align-items: center;
	flex-direction: row;
	margin-bottom: 0px !important;
	margin-left: 0px;
	margin-right: 0px;
}

.home-logo-company {
	text-align: center;
	padding: 1.25rem;
	border-right: 1px solid #71bf44;
	background: #fff;
}

.home-detail-company {
	flex-grow: 0;
	flex-shrink: 0;
	flex-basis: auto;
}

.company-info__detail {
	/* 	width: 100%; */
	
}

.pagination-link {
	border-radius: 0px;
}

@media screen and (max-width: 768px) { /* 	.company-info { */
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
		/* 		right: calc(155px - 100vw); */
		left: calc(50vw - 72px);
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
	color: #e86b1f;
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

.textarea






:not



 



(
[
rows
]



 



)
{
max-height






:



 



600
px






;
min-height






:



 



120
px






;
}
@media screen and (min-width:1088px) {
	.navbar.is-primary .navbar-end>a.navbar-item.is-active, .navbar.is-primary .navbar-end>a.navbar-item:hover
		{
		background-color: #0B610B;
		color: #fff;
		font-weight: bold;
		border-bottom: 3px solid #F7941D
	}
}
</style>
<script type="text/javascript" async=""
	src="<?php echo $servername ?>/mvc/public/js/js"></script>
<style>
#instantclick {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	pointer-events: none;
	z-index: 2147483647;
	transition: opacity .25s .1s
}

.instantclick-bar {
	background: #29d;
	width: 100%;
	margin-left: -100%;
	height: 2px;
	transition: all .25s
}
</style>
<style type="text/css">
iframe#_hjRemoteVarsFrame {
	display: none !important;
	width: 1px !important;
	height: 1px !important;
	opacity: 0 !important;
	pointer-events: none !important;
}
</style>
<style type="text/css">
.fb_hidden {
	position: absolute;
	top: -10000px;
	z-index: 10001
}

.fb_reposition {
	overflow: hidden;
	position: relative
}

.fb_invisible {
	display: none
}

.fb_reset {
	background: none;
	border: 0;
	border-spacing: 0;
	color: #000;
	cursor: auto;
	direction: ltr;
	font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
	font-size: 11px;
	font-style: normal;
	font-variant: normal;
	font-weight: normal;
	letter-spacing: normal;
	line-height: 1;
	margin: 0;
	overflow: visible;
	padding: 0;
	text-align: left;
	text-decoration: none;
	text-indent: 0;
	text-shadow: none;
	text-transform: none;
	visibility: visible;
	white-space: normal;
	word-spacing: normal
}

.fb_reset>div {
	overflow: hidden
}

@
keyframes fb_transform {
	from {opacity: 0;
	transform: scale(.95)
}

to {
	opacity: 1;
	transform: scale(1)
}

}
body.fb_hidden {
	height: 100%;
	left: 0;
	margin: 0;
	overflow: visible;
	position: absolute;
	top: -10000px;
	transform: none;
	width: 100%
}

.loading.centered #fb_dialog_loader_close {
	clear: both;
	color: #fff;
	display: block;
	font-size: 18px;
	padding-top: 20px
}

@
keyframes rotateSpinner { 0%{
	transform: rotate(0deg)
}

100%{
transform
















:rotate(360deg)
















}
}
.fb_iframe_widget {
	display: inline-block;
	position: relative
}

.fb_iframe_widget span {
	display: inline-block;
	position: relative;
	text-align: justify
}

.fb_iframe_widget iframe {
	position: absolute
}

.fb_iframe_widget_fluid_desktop, .fb_iframe_widget_fluid_desktop span,
	.fb_iframe_widget_fluid_desktop iframe {
	max-width: 100%
}

.fb_iframe_widget_fluid_desktop iframe {
	min-width: 220px;
	position: relative
}

.fb_iframe_widget_lift {
	z-index: 1
}

.fb_iframe_widget_fluid {
	display: inline
}

.fb_iframe_widget_fluid span {
	width: 100%
}

.summary-reviews .review {
	margin-bottom: 1rem;
}

.btn-group button {
	float: left; /* Float the buttons side by side */
	border-radius: 0px;
}

/* Clear floats (clearfix hack) */
.btn-group:after {
	content: "";
	clear: both;
	display: table;
}

.ui-menu-item .ui-menu-item-wrapper.ui-state-active {
	background: #F5FCFF !important;
	font-weight: bold !important;
	color: #000 !important;
	border: none;
}

.textarea












:not






 






(
[
rows
]






 






)
{
max-height












:






 






600
px












;
min-height












:






 






120
px














}
.select












:not






 






(
.is-multiple






 






)
{
height












:






 






2
.25em












;
}
.select






 






select












:not






 






(
[
multiple
]






 






)
{
padding-right












:






 






2
.5em












;
}
.select {
	display: inline-block;
	max-width: 100%;
	position: relative;
	vertical-align: top;
}

.select select {
	background-color: #fff;
	border-color: #dbdbdb;
	color: #363636;
	cursor: pointer;
	display: block;
	font-size: 1em;
	max-width: 100%;
	outline: 0;
}

.message.is-info .message-header {
	background-color: #04B431;
	color: #fff;
}

.field












:not






 






(
:last-child






 






)
{
margin-bottom












:






 






.75rem












;
}
.select:not (.is-multiple ):not (.is-loading )::after {
	border-color: #3273dc;
	right: 1.125em;
	z-index: 4;
}

.button.is-rounded {
	border-radius: 0px;
	padding-left: 1em;
	padding-right: 1em;
}

.button.upload-review {
	background-color: #f7941d;
}

.news.first-news {
	margin-top: 0;
	border: none;
}

.news {
	margin-bottom: .625rem;
}

.card {
	position: relative;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-direction: column;
	flex-direction: column;
	min-width: 0;
	word-wrap: break-word;
	background-color: #fff;
	border: 1px solid rgba(0, 0, 0, .125);
	box-shadow: none;
}

.first-news>a {
	display: block;
}

.lazy-loading-image.loaded {
	-webkit-filter: blur(0px);
	filter: blur(0px);
}

.first-news .card-img-top {
	max-width: 100%;
	border-top-right-radius: 0;
}

.card-img-top {
	width: 100%;
	border-top-left-radius: calc(.25rem - 1px);
	border-top-right-radius: calc(.25rem - 1px);
}

.first-news .card-block {
	padding: .625rem;
}

.news .news-title {
	font-size: 125%;
	display: block;
	margin-bottom: .25rem;
}

.news .news-title a {
	color: #e86b1f;
	font-weight: 600;
}

.col-top-right {
	padding: .625rem !important;
	border-left: 1px solid #ddd;
}

.col-top-right .news-right:first-child {
	margin-top: 0;
}

.col-top-right



 



.news-right






:not



 



(
:last-child



 



)
{
border-bottom






:



 



1
px



 



dashed



 



#ddd






;
}
.col-top-right .news-right {
	padding-bottom: .75rem;
}

.news-right






:not



 



(
:last-child



 



)
{
margin-bottom






:



 



10
px






;
}
.media {
	display: -ms-flexbox;
	display: -webkit-box;
	display: flex;
	-ms-flex-align: start;
	-webkit-box-align: start;
	align-items: flex-start;
}

.news-right .news-right-img {
	width: 100px;
	margin-right: 0.625rem;
}

.news-right .news-right-img img {
	max-width: 100%;
}

.has-menu-dots {
	position: relative;
	padding-right: 10px !important;
}

.col-top-right .news-right .news-right-title {
	font-weight: 600;
}

.news-right .news-right-title {
	display: block;
	margin-bottom: 0.25rem;
	max-height: 2.75rem;
	line-height: 1.5;
	overflow: hidden;
}

.news-right-title a {
	font-size: 1rem;
}

.news-right .news-posted {
	margin-bottom: 0px;
	line-height: 1;
}

.page-heading {
	margin-top: 20px;
	margin-bottom: 10px;
	border-bottom: 1px solid #d0d1d5;
}

.page-heading h4 {
	display: inline-block;
	color: #71bf44;
	font-family: 'Anton', sans-serif;
	font-size: 150%;
	font-weight: 400;
	padding-right: 10px;
	margin-bottom: -1px;
	border-bottom: 2px solid #71bf44;
}

.origin a {
	color: #71bf44;
}

.tabs li.is-active a {
	border-bottom-color: #088A08;
	color: #088A08;
}

.has-text-info {
	color: #088A08 !important;
}

.pagination-link.is-current {
	background-color: #088A08;
	border-color: #088A08;
	color: #fff;
}

.message.is-info .question {
	color: #e86b1f;
}

.box-right>.card-block {
	padding: 0.625rem 0.625rem 0.625rem 0.625rem;
}

.mt-10 {
	margin-top: 10px;
}

.d-flex {
	display: -ms-flexbox !important;
	display: -webkit-box !important;
	display: flex !important;
}

@media screen and (max-width: 768px) {
	/* <== You can change this break point as per your  needs */
	.reverse-columns {
		flex-direction: column-reverse;
		display: flex;
	}
}

.review a {
	color: #e86b1f;
}

.tt-header-top {
	height: 25px;
	background-color: #424242;
	color: #fff;
	font-size: 90%;
}

.tt-header-top .page-link-out {
	margin-bottom: 0px;
	padding: 0px;
	list-style: none;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	font-size: 90%;
	color: #fff;
	line-height: 25px;
}

.tt-header-top .page-link-out a {
	position: relative;
	display: block;
	line-height: 25px;
	padding: 0px 10px;
	color: #fff;
}

.mr-auto {
	margin-right: auto !important;
}

.tt-header-top .active {
	background: #fff;
}

.tt-header-top .page-link-out .active a {
	color: #333;
}

.wrap {
	/* 	margin: 20px; */
	padding: 1rem 1rem 1rem 1rem;
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

.hidden {
	display: none;
}
/*News Item*/
.media-body {
    -ms-flex: 1;
    -webkit-box-flex: 1;
    flex: 1;
}
.news .news-img {
	width: 150px;
	margin-right: .625rem;
}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async
	src="https://www.googletagmanager.com/gtag/js?id=UA-159821622-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159821622-1');
</script>

</head>

<body>
	<div class="tt-header-top">
		<div class="container d-flex align-items-center">
			<ul class="page-link-out mr-auto">
				<li
					<?php
    
    if ($data["Page"] == "main-home") {
        echo "class='active'";
    }
    ?>><a href="<?php echo $servername ?>"
					title="Trang review công ty, lương bổng, đãi ngộ, tuyển dụng, sếp của các công ty">Trang
						chủ</a></li>
				<li
					<?php
    
    if ($data["Page"] == "news" || $data["Page"] == "videos" || $data["Page"] == "video-show") {
        echo "class='active'";
    }
    ?>><a href="<?php echo $servername ?>/news/"
					title="Tin tức của các công ty hiện nay">Tin tức</a></li>
				<li
					<?php
    
    if ($data["Page"] == "jobs") {
        echo "class='active'";
    }
    ?>><a href="<?php echo $servername ?>/jobs/"
					title="Đăng tin tuyển dụng, việc làm, nhân sự">Việc làm</a></li>
			</ul>
			<div class="page-link-out is-hidden-touch">
				<span class="d-none d-md-inline-block">Góp ý:</span> <a
					href="mailto:company@congtytop.com"
					title="Góp ý company@congtytop.com"> <i
					class="fa fa-envelope mr-1 d-md-none"></i> company@congtytop.com
				</a>
			</div>
			<div class="page-link-out ng-scope" ng-controller="dang-nhap as ctrl">
				<a href="<?php echo $servername ?>" title="Đăng nhập"
					class="ng-scope">Đăng nhập</a> <span class="ng-scope">/</span> <a
					href="<?php echo $servername ?>" title="Đăng ký" class="ng-scope">Đăng
					ký</a>
			</div>
		</div>
	</div>
	<nav class="main-nav navbar is-primary" role="navigation"
		aria-label="main navigation">
		<div class="container">
			<div class="navbar-brand">
				<div class="logo" data-no-instant="">
					<a href="<?php echo $servername ?>"> <img class="logo__img"
						src="<?php echo $servername ?>/mvc/public/images/logo.png" alt="">
					</a>
					<h1 class="logo__header has-text-white is-size-5">
						<a href="<?php echo $servername ?>"> <b>CÔNG TY TOP</b></a>
					</h1>
				</div>
				<span class="navbar-burger burger" data-target="navMenu"> <span></span>
					<span></span> <span></span>
				</span>
			</div>
			<div
				class="wrap <?php if($data["Page"] == "main-home" || $data["Page"] == "companies"){ echo "hidden";} ?> is-hidden-touch">
				<form
					action="<?php echo $servername ?>/tim-kiem/<?php if($data["Page"] == "news" || $data["Page"] == "news-detail" || $data["Page"] == "news" || $data["Page"] == "ket-qua-tim-kiem-tin-tuc") echo "news"; else echo "videos" ?>"
					method="post" style="width: 200%">
					<div class="search">
						<input type="text" name="search" class="searchTerm"
							placeholder="Tìm tin tức hoặc videos gì bạn muốn tìm">
						<button type="submit" class="searchButton">
							<i class="fa fa-search"></i>
						</button>

					</div>
				</form>
			</div>
			<?php if($data["Page"] == "news" || $data["Page"] == "news-detail" || $data["Page"] == "tin-tuc-moi"|| $data["Page"] == "hr-insider"|| $data["Page"] == "ket-qua-tim-kiem-tin-tuc" || $data["Page"] == "videos" || $data["Page"] == "video-show") {?>
			<div id="navMenu" class="navbar-menu">
				<div class="navbar-end">
					<a href="<?php echo $servername ?>/news/"
						class="navbar-item <?php if($data["Page"] == "news") { echo "is-active";} else{ echo ""; }?>">Tin
						tức</a>
					<a href="<?php echo $servername ?>/news/tin-tuc-moi/"
						class="navbar-item <?php if($data["Page"] == "tin-tuc-moi") { echo "is-active";} else{ echo ""; }?>">Tin
						tức mới</a> 
					<a href="<?php echo $servername ?>/news/hr-insider/"
						class="navbar-item <?php if($data["Page"] == "hr-insider") { echo "is-active";} else{ echo ""; }?>">HR
						Insider</a> <a href="<?php echo $servername ?>/videos/"
						class="navbar-item <?php if($data["Page"] == "videos" || $data["Page"] == "video-show") { echo "is-active";} else{ echo ""; }?>">Videos</a>
				</div>
			</div>
			<?php } ?>
		</div>
	</nav>
	<script type="text/javascript">
		(function(){
			var burger = document.querySelector('.burger');
			var nav = document.querySelector('#'+burger.dataset.target);

			burger.addEventListener('click', function(){
				//alert(burger.length);
				burger.classList.toggle('is-active');
				nav.classList.toggle('is-active');
			})
		})();
	</script>
	<div class="container main-container"
		style="height: auto !important; min-height: 0px !important;">
		<?php require_once "./mvc/views/pages/" . $data["Page"] . ".php"?>
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
	<script type="text/javascript">
	 var nodes = document.querySelectorAll(".needs_to_be_rendered");
	 timeago.render(nodes, "vi"), timeago.cancel();
    </script>
	<script>
    jQuery.ui.autocomplete.prototype._resizeMenu = function() {
        this.menu.element.outerWidth(this.element.outerWidth())
    }, $(function() {
        $("#company-search").autocomplete({
            source: function(e, t) {
                var keyWord = e.term;
                $.ajax({
                    type: "post",
                    url: SiteName+"/tim-kiem/companies",
                    dataType: "json",
                    data: {
                    	tencongty: e.term
                    },
                    success: function(e) {
                        t($.map(e, function(e) {
                            var t = SiteName+"/companies/" + e.slugcongty + "-" + e.id + "/";
                            return {
                                label: e.tencongty,
                                url: t,
                                image: e.logo,
                                slug: e.slugcongty,
                                term: keyWord
                            }
                        }))
                    }
                })
            },
            minlength: 2,
            select: function(e, t) {
                window.location.href = t.item.url
            },
            open: function() {},
            close: function() {}
        })
	 $("#company-search").data( "ui-autocomplete" )._renderItem = function( div, item ) {
          	 
        	div.addClass('autocomplete-suggestions');
            var $childDiv = $('<div>');
            var $img = $('<img>');
			var	$figure = $('<figure>');
			var $span = $('<span>');
			// image
			$figure.addClass("company-logo image is-32x32");
			// tên công ty
			$span.addClass("company-name");
			// suggest result
			$childDiv.addClass("autocomplete-suggestion");
            $img.attr({
              src: SiteName+'/mvc/public/asset/companies/logo/' + item.image,
              alt: item.label,
            });
            $childDiv.attr('data-value', item.label);
            $childDiv.attr('data-slug', item.slug);
            //$li.append('<a href="#">');
            //image
            $figure.append($img);
            //text
            var search = item.term.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
            const re = new RegExp("(" + search.split(' ').join('|') + ")", "gi");
            var normalLabel =  item.label;
            var boldLabel = normalLabel.replace(re, "<b>$1</b>");
            $span.append(boldLabel);
            $childDiv.append($figure).append($span);    
            return $childDiv.appendTo(div);
          };
        
    });
    </script>
</body>
</html>