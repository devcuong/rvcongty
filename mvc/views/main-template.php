<?php require_once 'mvc/core/Config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"
	content="Review Công ty - Review lương bổng, đãi ngộ, HR, sếp và công việc,... gì cũng có">

<meta property="og:title"
	content="Review Công ty - Review lương bổng, đãi ngộ, HR, sếp và công việc,... gì cũng có">
<meta property="og:description"
	content="Review Công ty - Review lương bổng, đãi ngộ, HR, sếp và công việc,... gì cũng có">
<meta property="og:type" content="website">

<meta property="og:url" content="https://reviewcongty.com">
<link rel="canonical" href="https://reviewcongty.com/">

<meta property="og:image"
	content="https://reviewcongty.com/images/banner.jpg">
<meta property="og:locale" content="vi_VN">
<meta property="og:site_name" content="Review Công ty">
<meta name="google-site-verification"
	content="NdJrx4BHKYYlht3UIv40iAbUayfeEEdK8gP4p2wFgKA">
<title>Review Công ty - Review lương bổng, đãi ngộ, HR, sếp và công
	việc,... gì cũng có</title>

<link rel="apple-touch-icon" sizes="57x57"
	href="https://reviewcongty.com/images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60"
	href="https://reviewcongty.com/images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72"
	href="https://reviewcongty.com/images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76"
	href="https://reviewcongty.com/images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114"
	href="https://reviewcongty.com/images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120"
	href="https://reviewcongty.com/images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144"
	href="https://reviewcongty.com/images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152"
	href="https://reviewcongty.com/images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180"
	href="https://reviewcongty.com/images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"
	href="https://reviewcongty.com/images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32"
	href="https://reviewcongty.com/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96"
	href="https://reviewcongty.com/images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16"
	href="https://reviewcongty.com/images/favicon/favicon-16x16.png">
<link rel="manifest"
	href="https://reviewcongty.com/images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage"
	content="/images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<link rel="preload stylesheet" as="style" crossorigin="anonymous"
	href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
<link href="./rvcongty_files/css" rel="stylesheet">
<link rel="preload stylesheet" as="style" crossorigin="anonymous"
	href="https://cdnjs.cloudflare.com/ajax/libs/JavaScript-autoComplete/1.0.4/auto-complete.min.css"
	integrity="sha256-GHbWr7miG/WXEsrIb47MsX3KBJa9FTyi5ZMYr4XDHAQ=">
<link rel="stylesheet" type="text/css" href=<?php echo $servername ?>/mvc/public/css/style.less />
<style type="text/css" id="less:stylesheets-style">
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
		width: 98%;
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
	background: #f5f7fa;
	background: linear-gradient(to top, #ece9e6, #ffffff);
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
	background-color: #464d5c;
	background: linear-gradient(to right, #464d5c, #302b63, #24243e);
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
	color: white;
	background-color: #464d5c;
	background: linear-gradient(to right, #464d5c, #302b63, #24243e);
	flex-basis: 40px;
	padding: 0.5rem 0;
}

@media screen and (max-width: 768px) {
	.main-footer {
		padding: 0.5rem 1rem;
	}
}

.main-container {
	min-height: calc(100vh - 120px);
}

.hero-img {
	margin-left: -64px;
	margin-right: -64px;
	height: 230px;
	overflow-y: hidden;
	box-shadow: 0 4px 3px rgba(10, 10, 10, 0.1);
}

@media screen and (max-width: 768px) {
	.hero-img {
		margin-left: 0;
		height: 220px;
		margin-right: 0;
	}
}

.hero-img .hero-img__gradient {
	position: absolute;
	top: 0;
	left: -64px;
	right: -64px;
	height: 230px;
	opacity: 0.6;
	background: linear-gradient(to right, #464d5c, #302b63, #24243e);
}

@media screen and (max-width: 768px) {
	.hero-img .hero-img__gradient {
		height: 220px;
		left: 0;
		right: 0;
	}
}

.companies {
	background-color: #fff;
	box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px
		rgba(10, 10, 10, 0.1);
	color: #4a4a4a;
	max-width: 100%;
	position: relative;
	padding: 0.3rem 0 0 0;
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
}

.company-item:hover {
	background: #f1f2f2;
	border-left: 2px solid #3273dc;
	cursor: pointer;
}

.company-item:nth-child(even) {
	background-image: linear-gradient(to top, #e6e9f06b 0%, #eef1f56e 100%);
}

.company-item:nth-child(even):hover {
	background: #f1f2f2;
}

.company-info {
	display: flex;
	padding: 0.7rem;
	align-items: center;
	flex-direction: row;
}

@media screen and (max-width: 768px) {
	.company-info {
		padding: 0.4rem 1.2rem;
	}
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
	top: 1.8rem;
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
	background-image: linear-gradient(to top, #e6e9f0 0%, #eef1f5 100%);
}

@media screen and (max-width: 768px) {
	.company-info-company-page .company-info {
		padding: 0.5rem 0.8rem;
	}
}

.summary-reviews {
	padding-left: 1.8rem;
	padding-top: 0.3rem;
}

@media screen and (max-width: 768px) {
	.summary-reviews {
		padding: 0 0.8rem;
	}
}

.summary-reviews .reviews__header {
	margin-top: 3.1rem;
	margin-bottom: 0.4rem;
}

@media screen and (max-width: 768px) {
	.summary-reviews .reviews__header {
		margin-top: 1.5rem;
	}
}

.summary-reviews .review {
	margin-bottom: 1rem;
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
<script type="text/javascript" async="" src="./rvcongty_files/js"></script>
<script src="./rvcongty_files/osd.js.tải xuống"></script>
<script src="./rvcongty_files/351711512097765" async=""></script>
<script src="./rvcongty_files/sdk.js.tải xuống" async=""
	crossorigin="anonymous"></script>
<script src="./rvcongty_files/f(4).txt"></script>
<script async="" src="./rvcongty_files/fbevents.js.tải xuống"></script>
<script src="./rvcongty_files/f(5).txt" id="google_shimpl"></script>
<script data-ad-client="ca-pub-4277948410104697" async=""
	src="./rvcongty_files/f(6).txt" data-checked-head="true"></script>
<link rel="preload" href="./rvcongty_files/f(7).txt" as="script">
<script type="text/javascript" src="./rvcongty_files/f(7).txt"></script>
<link rel="preload" href="./rvcongty_files/f(8).txt" as="script">
<script type="text/javascript" src="./rvcongty_files/f(8).txt"></script>
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
<script async="" src="./rvcongty_files/hotjar-1196872.js.tải xuống"></script>
<script async=""
	src="./rvcongty_files/modules.a6ee02de5873aa236440.js.tải xuống"
	charset="utf-8"></script>
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
.fb_animate {
	animation: fb_transform .3s forwards
}

.fb_dialog {
	background: rgba(82, 82, 82, .7);
	position: absolute;
	top: -10000px;
	z-index: 10001
}

.fb_dialog_advanced {
	border-radius: 8px;
	padding: 10px
}

.fb_dialog_content {
	background: #fff;
	color: #373737
}

.fb_dialog_close_icon {
	background:
		url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png)
		no-repeat scroll 0 0 transparent;
	cursor: pointer;
	display: block;
	height: 15px;
	position: absolute;
	right: 18px;
	top: 17px;
	width: 15px
}

.fb_dialog_mobile .fb_dialog_close_icon {
	left: 5px;
	right: auto;
	top: 5px
}

.fb_dialog_padding {
	background-color: transparent;
	position: absolute;
	width: 1px;
	z-index: -1
}

.fb_dialog_close_icon:hover {
	background:
		url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png)
		no-repeat scroll 0 -15px transparent
}

.fb_dialog_close_icon:active {
	background:
		url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png)
		no-repeat scroll 0 -30px transparent
}

.fb_dialog_iframe {
	line-height: 0
}

.fb_dialog_content .dialog_title {
	background: #6d84b4;
	border: 1px solid #365899;
	color: #fff;
	font-size: 14px;
	font-weight: bold;
	margin: 0
}

.fb_dialog_content .dialog_title>span {
	background:
		url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif)
		no-repeat 5px 50%;
	float: left;
	padding: 5px 0 7px 26px
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

.fb_dialog.fb_dialog_mobile.loading {
	background:
		url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif)
		white no-repeat 50% 50%;
	min-height: 100%;
	min-width: 100%;
	overflow: hidden;
	position: absolute;
	top: 0;
	z-index: 10001
}

.fb_dialog.fb_dialog_mobile.loading.centered {
	background: none;
	height: auto;
	min-height: initial;
	min-width: initial;
	width: auto
}

.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
	width: 100%
}

.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
	background: none
}

.loading.centered #fb_dialog_loader_close {
	clear: both;
	color: #fff;
	display: block;
	font-size: 18px;
	padding-top: 20px
}

#fb-root #fb_dialog_ipad_overlay {
	background: rgba(0, 0, 0, .4);
	bottom: 0;
	left: 0;
	min-height: 100%;
	position: absolute;
	right: 0;
	top: 0;
	width: 100%;
	z-index: 10000
}

#fb-root #fb_dialog_ipad_overlay.hidden {
	display: none
}

.fb_dialog.fb_dialog_mobile.loading iframe {
	visibility: hidden
}

.fb_dialog_mobile .fb_dialog_iframe {
	position: sticky;
	top: 0
}

.fb_dialog_content .dialog_header {
	background: linear-gradient(from(#738aba), to(#2c4987));
	border-bottom: 1px solid;
	border-color: #043b87;
	box-shadow: white 0 1px 1px -1px inset;
	color: #fff;
	font: bold 14px Helvetica, sans-serif;
	text-overflow: ellipsis;
	text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
	vertical-align: middle;
	white-space: nowrap
}

.fb_dialog_content .dialog_header table {
	height: 43px;
	width: 100%
}

.fb_dialog_content .dialog_header td.header_left {
	font-size: 12px;
	padding-left: 5px;
	vertical-align: middle;
	width: 60px
}

.fb_dialog_content .dialog_header td.header_right {
	font-size: 12px;
	padding-right: 5px;
	vertical-align: middle;
	width: 60px
}

.fb_dialog_content .touchable_button {
	background: linear-gradient(from(#4267B2), to(#2a4887));
	background-clip: padding-box;
	border: 1px solid #29487d;
	border-radius: 3px;
	display: inline-block;
	line-height: 18px;
	margin-top: 3px;
	max-width: 85px;
	padding: 4px 12px;
	position: relative
}

.fb_dialog_content .dialog_header .touchable_button input {
	background: none;
	border: none;
	color: #fff;
	font: bold 12px Helvetica, sans-serif;
	margin: 2px -12px;
	padding: 2px 6px 3px 6px;
	text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
}

.fb_dialog_content .dialog_header .header_center {
	color: #fff;
	font-size: 16px;
	font-weight: bold;
	line-height: 18px;
	text-align: center;
	vertical-align: middle
}

.fb_dialog_content .dialog_content {
	background:
		url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif)
		no-repeat 50% 50%;
	border: 1px solid #4a4a4a;
	border-bottom: 0;
	border-top: 0;
	height: 150px
}

.fb_dialog_content .dialog_footer {
	background: #f5f6f7;
	border: 1px solid #4a4a4a;
	border-top-color: #ccc;
	height: 40px
}

#fb_dialog_loader_close {
	float: left
}

.fb_dialog.fb_dialog_mobile .fb_dialog_close_button {
	text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
}

.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
	visibility: hidden
}

#fb_dialog_loader_spinner {
	animation: rotateSpinner 1.2s linear infinite;
	background-color: transparent;
	background-image:
		url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
	background-position: 50% 50%;
	background-repeat: no-repeat;
	height: 24px;
	width: 24px
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
</style>
</head>

<body>
	<nav class="main-nav navbar" role="navigation"
		aria-label="main navigation">
		<div class="container">
			<div class="logo" data-no-instant="">
				<a href="https://reviewcongty.com/"> <img class="logo__img"
					src="./rvcongty_files/logo_transparent.png" alt="">
				</a>
				<h1 class="logo__header has-text-white is-size-5">
					<a href="https://reviewcongty.com/"> Review Công ty </a>
				</h1>
			</div>
		</div>
	</nav>


	<div class="container main-container"
		style="height: auto !important; min-height: 0px !important;">

		<section class="hero-img">
			<div class="hero-img__gradient"></div>
			<img src="./rvcongty_files/banner.jpg" alt="">
		</section>

		<section class="hero" style="margin-top: -225px">
			<div class="hero-body z-1">
				<h1 class="title has-text-white">Review lương bổng, đãi ngộ, HR,
					tuyển dụng, sếp và công việc,... gì cũng có</h1>
				<div>
					<div class="field has-addons">
						<div class="control has-icons-left is-expanded">
							<span class="icon is-small is-left"> <i class="fas fa-search"></i>
							</span> <input name="company-search" class="input" type="text"
								placeholder="Tìm công ty" autocomplete="off">
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="columns" style="height: auto !important;">
			<section class="companies column is-three-fifths"
				style="height: auto !important;">
				<div class="tabs" style="margin-bottom: 0.6rem">
					<ul>
						<li data-tab="top-comments" class="tab is-active"><a
							href="https://reviewcongty.com/?tab=latest"
							class="has-text-weight-bold"> <span class="icon has-text-info"> <i
									class="fas fa-comments"></i>
							</span> Mới cập nhật
						</a></li>
						<li data-tab="top-companies" class="tab "><a
							href="https://reviewcongty.com/?tab=best"
							class="has-text-weight-bold"> <span class="icon has-text-success">
									<i class="fas fa-thumbs-up"></i>
							</span> Top công ty xịn
						</a></li>
						<li data-tab="worst-companies" class="tab "><a
							href="https://reviewcongty.com/?tab=worst"
							class="has-text-weight-bold"> <span class="icon has-text-danger">
									<i class="fas fa-thumbs-down"></i>
							</span> Công ty bựa nên né
						</a></li>
					</ul>
				</div>
				<div class="tabs-section" style="height: auto !important;">
					<nav class="pagination is-small custom-pagination"
						role="navigation" aria-label="pagination">
						<span class="pagination-summary">Trang <b>1</b> trên tổng số <b>353</b></span>
						<ul class="pagination-list">
							<li><a href="https://reviewcongty.com/?tab=latest&amp;page=1"
								class="pagination-link is-current">1</a></li>
							<li><a href="https://reviewcongty.com/?tab=latest&amp;page=2"
								class="pagination-link ">2</a></li>
							<li><a href="https://reviewcongty.com/?tab=latest&amp;page=3"
								class="pagination-link ">3</a></li>
							<li><a href="https://reviewcongty.com/?tab=latest&amp;page=4"
								class="pagination-link ">4</a></li>
							<li><a href="https://reviewcongty.com/?tab=latest&amp;page=5"
								class="pagination-link ">5</a></li>
							<li><a href="https://reviewcongty.com/?tab=latest&amp;page=6"
								class="pagination-link ">6</a></li>
							<li><a href="https://reviewcongty.com/?tab=latest&amp;page=7"
								class="pagination-link ">7</a></li>
							<li><a href="https://reviewcongty.com/?tab=latest&amp;page=8"
								class="pagination-link ">8</a></li>
							<li><a href="https://reviewcongty.com/?tab=latest&amp;page=9"
								class="pagination-link ">9</a></li>
						</ul>
					</nav>

					<div data-href="/companies/lien-viet-tech" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/lien-viet-tech-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/lien-viet-tech">
										Lien Viet Tech </a> <span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(12)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 51-150 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 109 Tran Hung Dao Hoan Kiem Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/keaz" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/keaz-logo.jpg">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/keaz"> Keaz </a> <span
										class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(2)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 1-50 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 220A-C Nguyễn Đình chiểu, phường 6 District 3 Ho Chi
										Minh
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/sakuko-viet-nam" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/sakuko-vi-t-nam-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/sakuko-viet-nam">
										Sakuko Việt Nam </a> <span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(216)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 1-50 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 1 Trung Yên Plaza Cau Giay Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/softdreams" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/softdreams-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/softdreams">
										Softdreams </a> <span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(7)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 51-150 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 8 Nhà khách ATS, số 8 Phạm Hùng Nam Tu Liem Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/tek-experts" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/tek-experts-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/tek-experts"> Tek
										Experts </a> <span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(300)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Dịch vụ
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 501-1000 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> Lieu Giai Ba Dinh Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/itviec" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/itviec-logo.jpg">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/itviec"> ITviec </a>
									<span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(29)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 1-50 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 60 Nguyen Van Thu District 1 Ho Chi Minh
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/luxstay" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/luxstay-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/luxstay"> Luxstay </a>
									<span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(28)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 1-50 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 68 Duong Dinh Nghe Cau Giay Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/bh-tech" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/bh-tech-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/bh-tech"> BH Tech </a>
									<span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(1)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Dịch vụ
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 1-50 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> Duy Tan Cau Giay Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/sapo" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/sapo-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/sapo"> SAPO </a> <span
										class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(32)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 301-500 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 266 Đội Cấn Ba Dinh Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/nashtech" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/nashtech-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/nashtech"> NashTech
									</a> <span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(87)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Dịch vụ
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 301-500 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 364 Cong Hoa Tan Binh Ho Chi Minh
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/bkav" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/bkav-logo.jpg">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/bkav"> Bkav </a> <span
										class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(32)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 51-150 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> Khu Do Thi Yen Hoa Cau Giay Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/finos-technology" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/finos-technology.jpg">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/finos-technology">
										FinOS Technology </a> <span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(5)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 51-150 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> Ho Chi Minh, Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/designveloper-dsv" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/designveloper-dsv-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/designveloper-dsv">
										Designveloper (DSV) </a> <span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(32)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Dịch vụ
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 51-150 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 146 Nguyen Thai Binh District 1 Ho Chi Minh
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/passion-fruit-software-development"
						class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img
									src="./rvcongty_files/passion-fruit-software-development.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a
										href="https://reviewcongty.com/companies/passion-fruit-software-development">
										Passion Fruit Software Development </a> <span
										class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span></span> <span class="company-info__rating-count">(4)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 51-150 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> Tan Binh, Ho Chi Minh
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/passion-fruit-software"
						class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/passion-fruit-software-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a
										href="https://reviewcongty.com/companies/passion-fruit-software">
										Passion Fruit Software </a> <span class="company-info__rating">
										<span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(37)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 1-50 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 1 Bach Dang Tan Binh Ho Chi Minh
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/cong-ty-tnhh-enjoyworks"
						class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/cong-ty-tnhh-enjoyworks.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a
										href="https://reviewcongty.com/companies/cong-ty-tnhh-enjoyworks">
										Công Ty TNHH Enjoyworks </a> <span
										class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(43)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 1-50 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> Da Nang, Ho Chi Minh
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/cong-nghe-dong-duong-iist"
						class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/cong-ngh-dong-d-ng-iist-logo.jpg">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a
										href="https://reviewcongty.com/companies/cong-nghe-dong-duong-iist">
										CÔNG NGHỆ ĐÔNG DƯƠNG (IIST) </a> <span
										class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(20)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Dịch vụ
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 51-150 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 14th Flr Diamond Flower Tower, 48 Le Van Luong Str
										Thanh Xuan Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/rikkeisoft" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/rikkeisoft-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/rikkeisoft">
										RIKKEISOFT </a> <span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(127)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Dịch vụ
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 501-1000 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> HH3 Building, Me Tri Street Nam Tu Liem Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/bombus" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/bombus.jpg">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/bombus"> Bombus </a>
									<span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(2)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 51-150 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> District 4, Ho Chi Minh
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/lozi" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/lozi-logo.jpg">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/lozi"> Lozi </a> <span
										class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(57)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 51-150 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 268 To Hien Thanh District 10 Ho Chi Minh
									</span>
								</div>
							</div>

						</div>
					</div>

					<div style="margin-top: 0.6rem">
						<nav class="pagination is-small custom-pagination"
							role="navigation" aria-label="pagination">
							<span class="pagination-summary">Trang <b>1</b> trên tổng số <b>353</b></span>
							<ul class="pagination-list">
								<li><a href="https://reviewcongty.com/?tab=latest&amp;page=1"
									class="pagination-link is-current">1</a></li>
								<li><a href="https://reviewcongty.com/?tab=latest&amp;page=2"
									class="pagination-link ">2</a></li>
								<li><a href="https://reviewcongty.com/?tab=latest&amp;page=3"
									class="pagination-link ">3</a></li>
								<li><a href="https://reviewcongty.com/?tab=latest&amp;page=4"
									class="pagination-link ">4</a></li>
								<li><a href="https://reviewcongty.com/?tab=latest&amp;page=5"
									class="pagination-link ">5</a></li>
								<li><a href="https://reviewcongty.com/?tab=latest&amp;page=6"
									class="pagination-link ">6</a></li>
								<li><a href="https://reviewcongty.com/?tab=latest&amp;page=7"
									class="pagination-link ">7</a></li>
								<li><a href="https://reviewcongty.com/?tab=latest&amp;page=8"
									class="pagination-link ">8</a></li>
								<li><a href="https://reviewcongty.com/?tab=latest&amp;page=9"
									class="pagination-link ">9</a></li>
							</ul>
						</nav>

					</div>
				</div>
			</section>
			<section class="summary-reviews column z-1">
				<h1 class="is-size-4 has-text-weight-bold reviews__header">Review
					gần đây</h1>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Văn Nguyễn</span> đã review <a
							href="https://reviewcongty.com/companies/lien-viet-tech"> Lien
							Viet Tech </a>
					</h3>
					<p>
						20 phút trước <span><span class="icon is-small has-text-warning">
								<i class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span></span>
					</p>
					<p>Mọi thứ đều ổn. Lương cũng ổn so mức lương khi mới ra trường.
						Chế độ đãi ngộ tốt. Mọi người đều thân thiện =)).</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Ẩn danh</span> đã review <a
							href="https://reviewcongty.com/companies/keaz"> Keaz </a>
					</h3>
					<p>
						32 phút trước <span><span class="icon is-small has-text-warning">
								<i class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>Technical Lead hiện tại khá cùi nên cũng chả giải quyết gì.</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Ẩn danh</span> đã review <a
							href="https://reviewcongty.com/companies/sakuko-viet-nam"> Sakuko
							Việt Nam </a>
					</h3>
					<p>
						35 phút trước <span><span class="icon is-small has-text-warning">
								<i class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>Em thấy các anh chị quản lý cũ rất có tâm mà công ty không giữ
						được. Ngày trước sếp Hằng còn bỏ tiền túi để mừng tuổi cho nv bán
						bánh bọn em. Giờ anh …</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Ẩn danh</span> đã review <a
							href="https://reviewcongty.com/companies/softdreams"> Softdreams
						</a>
					</h3>
					<p>
						Một giờ trước <span><span class="icon is-small has-text-warning">
								<i class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>- Công ty thuần Việt, lương chỉ ở mức khá, các sếp đều khá nice
						- PM có năng lực nhưng quy trình làm việc chưa rõ ràng, ít buổi
						chia sẻ đào tạo, chủ …</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Ẩn danh</span> đã review <a
							href="https://reviewcongty.com/companies/tek-experts"> Tek
							Experts </a>
					</h3>
					<p>
						Một giờ trước <span><span class="icon is-small has-text-warning">
								<i class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>Cho em hỏi là công ty mình có tuyển thu họ vào làm hay sao ạ ,
						dạo này để ý trên floor có anh nào đeo đủ vòng vèo nhẫn nhủng xong
						mặt lúc nào cũng như…</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Tìm việc</span> đã review <a
							href="https://reviewcongty.com/companies/itviec"> ITviec </a>
					</h3>
					<p>
						Một giờ trước <span><span class="icon is-small has-text-warning">
								<i class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>Cho em hỏi em tính nộp đơn ứng tuyển ở HCm, em thấy bạn em bảo
						đang tuyển 10 vị trí lận mà bạn em lại không đậu, có phải Để số
						cho vui không ạ, em …</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Ứng viên</span> đã review <a
							href="https://reviewcongty.com/companies/luxstay"> Luxstay </a>
					</h3>
					<p>
						2 giờ trước <span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>Bên này backend Dev range lương như nào nhỉ các bác?</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Ẩn danh</span> đã review <a
							href="https://reviewcongty.com/companies/bh-tech"> BH Tech </a>
					</h3>
					<p>
						2 giờ trước <span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>ae nào mới ra trường hoặc đi thực tập thì ko nên vào.</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Dev</span> đã review <a
							href="https://reviewcongty.com/companies/sapo"> SAPO </a>
					</h3>
					<p>
						2 giờ trước <span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>Làm dev ở đây thế nào vậy các ac</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Principal 3</span> đã review <a
							href="https://reviewcongty.com/companies/nashtech"> NashTech </a>
					</h3>
					<p>
						3 giờ trước <span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span></span>
					</p>
					<p>lương 1k9 net sướng</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Một cựu nhân viên AP 4 năm tại
							AP (Chăm sóc khách hàng)</span> đã review <a
							href="https://reviewcongty.com/companies/bkav"> Bkav </a>
					</h3>
					<p>
						4 giờ trước <span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>1. Nếu nói về nhân viên nói chung thì đều rất hoà đồng vui vẻ,
						mọi người phần lớn là lành tính do môi trường ở đây không có gì
						phải tranh đấu. 2. Sếp…</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Định xưng tên nhưng thôi</span>
						đã review <a
							href="https://reviewcongty.com/companies/finos-technology"> FinOS
							Technology </a>
					</h3>
					<p>
						4 giờ trước <span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>Anh em đánh giá hơi tiêu cực nên có thể nhiều người nghĩ là đang
						dìm hàng. Vì vậy để mình tóm lại vài điều như dưới: - Về tổng quát
						thì công ty mới…</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">em trai giấu tên</span> đã
						review <a
							href="https://reviewcongty.com/companies/designveloper-dsv">
							Designveloper (DSV) </a>
					</h3>
					<p>
						5 giờ trước <span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>Công ty có chị đẹp BA mặt sắc, giỏi chịu đựng áp lực tứ phương
						tám hướng, chiên nghiệp, vui vẻ không quạu. Bị cái hiếm khi thấy
						trên công ty, rồi giờ …</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Ẩn danh</span> đã review <a
							href="https://reviewcongty.com/companies/passion-fruit-software-development">
							Passion Fruit Software Development </a>
					</h3>
					<p>
						5 giờ trước <span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span></span>
					</p>
					<p>AE QC apply nhe

						https://itviec.com/it-jobs/quality-and-tester-engineers-qc-qa-passion-fruit-software-development-4039?utm_campaign=gsn_brand&amp;utm_me…</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">MRS</span> đã review <a
							href="https://reviewcongty.com/companies/passion-fruit-software">
							Passion Fruit Software </a>
					</h3>
					<p>
						5 giờ trước <span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span></span>
					</p>
					<p>Passion Fruit Software Development - Omnicasa Software Solutions
						Passion Fruit Software Development Ltd,Co was established on 2004
						with 100% investme…</p>
				</div>

			</section>
		</div>

		<script>
  (() => {
    // Lol, need to write JS for tab
    const $ = document.querySelectorAll.bind(document);
    $('.company-item').forEach(item => {
      item.addEventListener('click', evt => {
        window.location = evt.currentTarget.dataset.href;
      })
    })
  })()
</script>
	</div>
	<div class="autocomplete-suggestions "
		style="left: 120px; top: 261px; width: 1104px;"></div>


	<footer class="main-footer">
		<div class="container level">
			<div class="level-left">
				<p class="level-item">
					<a class="white-link" target="_blank"
						href="https://reviewcongty.com/faq">Giải đáp thắc mắc - Yêu cầu
						xóa review</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a class="white-link"
						target="_blank" href="https://reviewcongty.com/tnc">Điều khoản sử
						dụng</a>
				</p>
			</div>
		</div>
	</footer>

	<iframe id="google_osd_static_frame_7303783858290"
		name="google_osd_static_frame"
		style="display: none; width: 0px; height: 0px;"
		src="./rvcongty_files/saved_resource(3).html"></iframe>
	<iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame"
		id="_hjRemoteVarsFrame"
		src="./rvcongty_files/box-469cf41adb11dc78be68c1ae7f9457a4.html"
		style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
	<div>
		<div id="_hj_feedback_container">
			<style type="text/css"> /*reset css*/
._hj-f5b2a1eb-9b07_widget, ._hj-f5b2a1eb-9b07_widget * {
	line-height: normal;
	font-family: Arial, sans-serif, Tahoma !important;
	text-transform: initial !important;
	letter-spacing: normal !important;
}

._hj-f5b2a1eb-9b07_widget, ._hj-f5b2a1eb-9b07_widget div {
	height: auto;
}

._hj-f5b2a1eb-9b07_widget div, ._hj-f5b2a1eb-9b07_widget span,
	._hj-f5b2a1eb-9b07_widget p, ._hj-f5b2a1eb-9b07_widget a,
	._hj-f5b2a1eb-9b07_widget button {
	font-weight: normal !important;
}

._hj-f5b2a1eb-9b07_widget div, ._hj-f5b2a1eb-9b07_widget span,
	._hj-f5b2a1eb-9b07_widget p, ._hj-f5b2a1eb-9b07_widget a,
	._hj-f5b2a1eb-9b07_widget img, ._hj-f5b2a1eb-9b07_widget strong,
	._hj-f5b2a1eb-9b07_widget form, ._hj-f5b2a1eb-9b07_widget label {
	border: 0;
	outline: 0;
	font-size: 100%;
	vertical-align: baseline;
	background: transparent;
	margin: 0;
	padding: 0;
	float: none !important;
}

._hj-f5b2a1eb-9b07_widget span {
	color: inherit
}

._hj-f5b2a1eb-9b07_widget ol, ._hj-f5b2a1eb-9b07_widget ul,
	._hj-f5b2a1eb-9b07_widget li {
	list-style-type: none !important;
	margin: 0 !important;
	padding: 0 !important;
}

._hj-f5b2a1eb-9b07_widget li:before, ._hj-f5b2a1eb-9b07_widget li:after
	{
	content: none !important;
}

._hj-f5b2a1eb-9b07_widget hr {
	display: block;
	height: 1px;
	border: 0;
	border-top: 1px solid #ccc;
	margin: 1em 0;
	padding: 0;
}

._hj-f5b2a1eb-9b07_widget input[type=submit], ._hj-f5b2a1eb-9b07_widget input[type=button],
	._hj-f5b2a1eb-9b07_widget button {
	margin: 0;
	padding: 0;
	float: none !important;
}

._hj-f5b2a1eb-9b07_widget input, ._hj-f5b2a1eb-9b07_widget select,
	._hj-f5b2a1eb-9b07_widget a img {
	vertical-align: middle;
}

._hj-f5b2a1eb-9b07_widget *:after, ._hj-f5b2a1eb-9b07_widget *::before {
	-webkit-box-sizing: initial;
	-moz-box-sizing: initial;
	box-sizing: initial;
}
	/*******************                     * GENERIC                    ********************/
@font-face {
	font-family: "hotjar";
	src: url("https://script.hotjar.com/font-hotjar_5.fdcf0e.eot");
	src: url("https://script.hotjar.com/font-hotjar_5.fdcf0e.eot#iefix")
		format("embedded-opentype"),
		url("https://script.hotjar.com/font-hotjar_5.c9fb91.woff2")
		format("woff2"),
		url("https://script.hotjar.com/font-hotjar_5.8598c5.ttf")
		format("truetype"),
		url("https://script.hotjar.com/font-hotjar_5.6da396.woff")
		format("woff"),
		url("https://script.hotjar.com/font-hotjar_5.a6049d.svg#hotjar")
		format("svg");
	font-weight: normal;
	font-style: normal;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon {
	speak: none !important;
	font-style: normal !important;
	font-weight: normal !important;
	font-variant: normal !important;
	text-transform: none !important;
	overflow-wrap: normal !important;
	word-break: normal !important;
	word-wrap: normal !important;
	white-space: nowrap !important;
	line-height: normal !important;
	-webkit-font-smoothing: antialiased !important;
	-moz-osx-font-smoothing: grayscale !important;
}

div._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon, div._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon:before,
	div._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon:after, div._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon *,
	div._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon *:before, div._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon *:after
	{
	font-family: "hotjar" !important;
	display: inline-block !important;
	direction: ltr !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon:before {
	color: inherit !important;
}

._hj-f5b2a1eb-9b07_icon-left:before {
	content: "\e805";
}

._hj-f5b2a1eb-9b07_icon-down:before {
	content: "\e800";
}

._hj-f5b2a1eb-9b07_icon-up:before {
	content: "\e801";
}

._hj-f5b2a1eb-9b07_icon-right:before {
	content: "\e802";
}

._hj-f5b2a1eb-9b07_icon-x:before {
	content: "\e803";
}

._hj-f5b2a1eb-9b07_icon-ok:before {
	content: "\e804";
}

._hj-f5b2a1eb-9b07_icon-hotjar:before {
	content: "\e806";
}

._hj-f5b2a1eb-9b07_icon-select-element:before {
	content: "\e91a";
} /*generic css*/
body._hj-f5b2a1eb-9b07_fullscreen_page {
	height: 100% !important;
	width: 100% !important;
}

body._hj-f5b2a1eb-9b07_position_fixed {
	position: fixed;
	-webkit-overflow-scrolling: touch;
}

._hj-f5b2a1eb-9b07_lower_zindex:not (._hj-f5b2a1eb-9b07_widget ) {
	z-index: 2147483600 !important;
}

._hj-f5b2a1eb-9b07_widget {
	font-size: 13px !important;
	position: fixed;
	z-index: 2147483640;
	bottom: -400px;
	right: 100px;
	width: 300px;
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
	-webkit-transform: translateZ(0) !important;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_position_left {
	right: auto;
	left: 100px;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_rounded_corners {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_shadow {
	-webkit-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.15);
	-moz-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.15);
	box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.15);
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_transition {
	-webkit-transition: all .2s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	-ms-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_transition_duration_0 {
	-webkit-transition-duration: 0s;
	-moz-transition-duration: 0s;
	-o-transition-duration: 0s;
	-ms-transition-duration: 0s;
	transition-duration: 0s;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_pull_left {
	float: left !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_pull_right {
	float: right !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_clear_both {
	display: block !important;
	clear: both !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_hidden {
	display: none !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_link_no_underline,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_link_no_underline:hover {
	text-decoration: none !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_wordwrap {
	word-break: break-word;
	word-wrap: break-word;
} /*common css*/
._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_widget_centered {
	right: 50%;
	margin-right: -150px;
	left: auto;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_state {
	display: none;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_icon {
	background-repeat: no-repeat;
	width: 16px;
	height: 16px;
	display: -moz-inline-stack;
	display: inline-block !important;
	zoom: 1;
	*display: inline !important;
	vertical-align: top;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_open_close {
	text-align: center;
	position: absolute;
	top: -18px;
	right: 20px;
	width: 40px;
	height: 18px;
	padding-top: 2px;
	cursor: pointer;
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_open_close ._hj-f5b2a1eb-9b07_widget_icon
	{
	background-position: -32px 0;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_open_close::before {
	content: "";
	position: absolute;
	left: -4px;
	right: -4px;
	bottom: -8px;
	height: 8px;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_hidden_handle {
	display: none;
	height: 4px;
	cursor: pointer;
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_title,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_title span {
	font-weight: bold !important;
	text-align: center;
	padding: 12px !important;
	margin: 0;
	line-height: 17px !important;
	min-height: 17px;
	word-break: break-word;
	word-wrap: break-word;
	cursor: pointer;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_initiator {
	display: none;
	padding: 0 12px 12px 12px;
	text-align: center;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_initiator button {
	padding-left: 20px;
	padding-right: 20px;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_clear,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_primary {
	cursor: pointer;
	text-decoration: none !important;
	font-size: 13px !important;
	font-weight: bold !important;
	padding: 7px 10px !important;
	border: 0 !important;
	outline: 0 !important;
	height: initial !important;
	min-height: initial !important;
	display: -moz-inline-stack;
	display: inline-block;
	*display: inline;
	vertical-align: top;
	width: auto !important;
	min-width: initial !important;
	zoom: 1;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn:after,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_clear:after,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_primary:after {
	content: none !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_primary {
	background: #00C764 !important;
	color: white;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_primary:hover,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_primary:focus,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_primary:active {
	background: #00a251 !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_clear {
	background: transparent !important;
	font-weight: normal !important;
	text-decoration: underline !important;
	color: !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_clear:hover,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_clear:focus,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_clear:active {
	background: transparent !important;
	color: !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_disabled,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_disabled:hover,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_disabled:focus,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_disabled:active {
	cursor: default;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
} /*content*/
._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_content {
	padding: 0 12px;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_content_overflow {
	max-height: 280px;
	overflow-y: auto;
	overflow-x: hidden;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_widget_short ._hj-f5b2a1eb-9b07_widget_content
	{
	padding: 0 11px 0 12px;
	max-height: 120px;
	overflow-y: auto;
	overflow-x: hidden;
} /*open ended*/
._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_content ._hj-f5b2a1eb-9b07_input_field
	{
	font-family: Arial, sans-serif, Tahoma;
	font-size: 14px;
	color: #333 !important;
	padding: 6px !important;
	text-indent: 0 !important;
	height: 30px;
	width: 100%;
	min-width: 100%;
	margin: 0 0 12px 0;
	background: white;
	border: 1px solid !important;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	outline: none !important;
	max-width: none !important;
	float: none;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_content ._hj-f5b2a1eb-9b07_input_field:focus
	{
	border: 1px solid #00a251;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_content textarea._hj-f5b2a1eb-9b07_input_field
	{
	resize: none;
	height: 100px;
} /*close ended*/
._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_content ._hj-f5b2a1eb-9b07_button_radio_checkbox
	{
	position: relative;
	min-height: 45px;
	text-align: left !important;
	height: auto !important;
	height: 45px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_content ._hj-f5b2a1eb-9b07_button_radio_checkbox span._hj-f5b2a1eb-9b07_widget_icon
	{
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;
	border-radius: 30px;
	border: 2px solid #AAA;
	width: 22px;
	height: 22px;
	display: block;
	position: absolute;
	left: 12px;
	top: 50%;
	margin-top: -14px;
	background-position: -64px -100px;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_content                        ._hj-f5b2a1eb-9b07_button_radio_checkbox span._hj-f5b2a1eb-9b07_radio_checkbox_text
	{
	text-align: left !important;
	padding: 14px 20px 14px 50px;
	position: relative;
	display: block;
	word-break: break-word;
	word-wrap: break-word;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_content ._hj-f5b2a1eb-9b07_button_radio_checkbox_full
	{
	margin-left: -12px;
	margin-right: -12px;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_content                        ._hj-f5b2a1eb-9b07_button_radio_checkbox._hj-f5b2a1eb-9b07_button_radio_checkbox_active span
	{
	border-color: white;
	background-position: -97px 4px;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_content ._hj-f5b2a1eb-9b07_button_checkbox span._hj-f5b2a1eb-9b07_widget_icon
	{
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_double_control {
	margin: 0 0 12px 0;
	width: 100%;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_double_control ._hj-f5b2a1eb-9b07_double_first
	{
	min-width: 49% !important;
	width: 49% !important;
	float: left !important;
	margin-bottom: 0;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_double_control ._hj-f5b2a1eb-9b07_double_second
	{
	min-width: 49% !important;
	width: 49% !important;
	float: left !important;
	margin-bottom: 0;
	margin-left: 2%;
} /* footer*/
._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer {
	width: 100%;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_left
	{
	padding: 21px 0 0 12px;
	font-size: 11px;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_left a,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_left a:hover,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_left a:focus,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_left a:active
	{
	text-decoration: underline;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_left span
	{
	background-position: -16px 0;
	margin-right: 4px;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_right
	{
	padding: 12px 12px 12px 0;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_right button
	{
	padding-right: 5px;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_right button span
	{
	background-position: -64px 0;
	margin-left: 8px;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_right button._hj-f5b2a1eb-9b07_btn_disabled span
	{
	background-position: -48px 0;
} /*state: hidden*/
._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_widget_hidden ._hj-f5b2a1eb-9b07_widget_open_close                        ._hj-f5b2a1eb-9b07_widget_icon
	{
	background-position: 0 0;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_widget_hidden ._hj-f5b2a1eb-9b07_widget_title
	{
	display: none;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_widget_hidden ._hj-f5b2a1eb-9b07_widget_hidden_handle
	{
	display: block;
} /*state: collapsed */
._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_widget_collapsed ._hj-f5b2a1eb-9b07_widget_initiator
	{
	display: block;
} /*state: open*/
._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_widget_open ._hj-f5b2a1eb-9b07_widget_state_open
	{
	display: block;
} /*state: thankyou*/
._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_widget_thankyou ._hj-f5b2a1eb-9b07_widget_state_thankyou,
	._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_widget_thankyou_consent ._hj-f5b2a1eb-9b07_widget_state_thankyou_consent
	{
	display: block;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_widget_thankyou ._hj-f5b2a1eb-9b07_widget_open_close,
	._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_widget_thankyou_consent ._hj-f5b2a1eb-9b07_widget_open_close
	{
	display: none;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_widget_thankyou ._hj-f5b2a1eb-9b07_widget_title,
	._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_widget_thankyou_consent ._hj-f5b2a1eb-9b07_widget_title
	{
	display: none;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_widget_thankyou ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_right ._hj-f5b2a1eb-9b07_btn span,
	._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_widget_thankyou_consent ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_right ._hj-f5b2a1eb-9b07_btn span
	{
	background-position: -80px 0;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_thankyou_message {
	text-align: center;
	padding: 20px;
	margin: 0;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_thankyou_message button {
	margin-top: 12px;
	padding: 7px 20px !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_thankyou_message ._hj-f5b2a1eb-9b07_consent_message_title
	{
	display: block;
	font-weight: bold !important;
	font-size: 14px;
	margin-bottom: 16px;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_thankyou_message ._hj-f5b2a1eb-9b07_consent_message_text,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_thankyou_message ._hj-f5b2a1eb-9b07_consent_message_text a
	{
	color: !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_thankyou_message ._hj-f5b2a1eb-9b07_consent_actions button
	{
	font-size: 18px !important;
	margin: 20px 5px 0 5px;
	padding: 7px 10px !important;
	width: 50px !important;
} /************ theme css **************/
._hj-f5b2a1eb-9b07_widget {
	background: !important;
	color: !important;
}

._hj-f5b2a1eb-9b07_widget a, ._hj-f5b2a1eb-9b07_widget a:link,
	._hj-f5b2a1eb-9b07_widget a:hover, ._hj-f5b2a1eb-9b07_widget a:active {
	color: !important;
}

._hj-f5b2a1eb-9b07_widget p {
	color: !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_open_close::before {
	background: !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_icon {
	background-image:
		url(https://script.hotjar.com/widget_icons_light.ddcd59.png)
		!important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_open_close {
	background: !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_hidden_handle {
	background: !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn {
	background: !important;
	color: !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn:hover,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn:focus,
	._hj-f5b2a1eb-9b07_btn:active {
	background: #666 !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_content ._hj-f5b2a1eb-9b07_input_field
	{
	border: 1px solid !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_button_radio_checkbox {
	border-bottom: 1px solid !important;
	border-top: 1px solid !important;
	background: !important;
	cursor: pointer !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_button_radio_checkbox_last
	{
	border-bottom: 0 !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_button_radio_checkbox:hover
	{
	background: !important;
	color:;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_button_radio_checkbox._hj-f5b2a1eb-9b07_button_radio_checkbox_active,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_button_radio_checkbox._hj-f5b2a1eb-9b07_button_radio_checkbox_active:hover
	{
	background: !important;
	color: white !important;
	cursor: default;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_switch {
	position: relative;
	display: inline-block;
	width: 46px;
	height: 28px;
	vertical-align: middle;
	margin: -3px 8px 0 0;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_rtl ._hj-f5b2a1eb-9b07_switch
	{
	margin: -3px 0 0 8px;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_switch>input {
	cursor: pointer;
	display: block !important;
	width: 46px;
	height: 28px;
	position: absolute;
	left: 0;
	right: 0;
	z-index: 2;
	opacity: 0;
	margin: 0;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_switch>input+label {
	cursor: pointer;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background: rgba(0, 0, 0, 1);
	border: 2px solid rgba(255, 255, 255, .3);
	border-radius: 100px;
	-webkit-transition: 400ms all;
	-moz-transition: 400ms all;
	transition: 400ms all;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_switch>input:checked+label
	{
	background: rgba(0, 0, 0, .3);
	border-color: transparent;
	-webkit-transition: 250ms all;
	-moz-transition: 250ms all;
	transition: 250ms all;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_switch>input+label:before {
	content: "";
	transition: 300ms all;
	position: absolute;
	left: 0;
	top: 0;
	display: block;
	width: 24px;
	height: 24px;
	border-radius: 40px;
	background-color: #ffffff;
	background-position: center center;
	background-repeat: no-repeat;
	background-size: 5px;
	-webkit-box-shadow: 0 0 12px 0 rgba(0, 0, 0, .06), 0 0 0 0
		rgba(0, 0, 0, .06), 0 6px 10px 0 rgba(0, 0, 0, .15), 0 0 2px 0
		rgba(0, 0, 0, .07), 0 4px 6px 0 rgba(0, 0, 0, .06), 0 1px 1px 0
		rgba(0, 0, 0, .11);
	-moz-box-shadow: 0 0 12px 0 rgba(0, 0, 0, .06), 0 0 0 0
		rgba(0, 0, 0, .06), 0 6px 10px 0 rgba(0, 0, 0, .15), 0 0 2px 0
		rgba(0, 0, 0, .07), 0 4px 6px 0 rgba(0, 0, 0, .06), 0 1px 1px 0
		rgba(0, 0, 0, .11);
	box-shadow: 0 0 12px 0 rgba(0, 0, 0, .06), 0 0 0 0 rgba(0, 0, 0, .06), 0
		6px 10px 0 rgba(0, 0, 0, .15), 0 0 2px 0 rgba(0, 0, 0, .07), 0 4px 6px
		0 rgba(0, 0, 0, .06), 0 1px 1px 0 rgba(0, 0, 0, .11);
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_switch>input+label>span {
	position: absolute;
	z-index: 3;
	color: #3c3d60;
	background-color: transparent !important;
	border: 0 !important;
	width: 13px !important;
	height: 14px !important;
	left: 6px;
	top: 5px;
	margin: 0 !important;
	opacity: 0;
	font-size: 14px;
	pointer-events: none !important;
	-webkit-transition: 250ms all;
	-moz-transition: 250ms all;
	transition: 250ms all;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_switch>input:checked+label:before
	{
	left: 18px;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_switch>input:checked+label>span
	{
	left: 24px;
	opacity: 1;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_switch>input:checked+label>span:after
	{
	content: initial !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer {
	border-top: 1px solid !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_left,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_left a,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_left a:hover
	{
	color: !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_disabled,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_disabled:hover,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_disabled:focus,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_disabled:active {
	color: !important;
	background: !important;
} /*light theme css*/
._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_skin_light,
	._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_skin_light ._hj-f5b2a1eb-9b07_widget_open_close
	{
	-webkit-box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.3) !important;
	-moz-box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.3) !important;
	box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.3) !important;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_skin_light ._hj-f5b2a1eb-9b07_widget_icon
	{
	background-image:
		url(https://script.hotjar.com/widget_icons_light.ddcd59.png)
		!important;
} /*dark theme css*/
._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_skin_dark,
	._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_skin_dark ._hj-f5b2a1eb-9b07_widget_open_close
	{
	-webkit-box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.6) !important;
	-moz-box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.6) !important;
	box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.6) !important;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_skin_dark ._hj-f5b2a1eb-9b07_widget_icon
	{
	background-image:
		url(https://script.hotjar.com/widget_icons_dark.3a8118.png) !important;
} /*right-to-left css*/
._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_rtl,
	._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_rtl * {
	direction: rtl !important;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_rtl ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_left
	{
	direction: ltr !important;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_rtl ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_right button
	{
	padding-right: 10px;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_rtl ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_right button span
	{
	margin-left: 0;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_rtl._hj-f5b2a1eb-9b07_widget_open ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_right button span
	{
	display: none;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_rtl ._hj-f5b2a1eb-9b07_widget_content ._hj-f5b2a1eb-9b07_button_radio_checkbox
	{
	text-align: right !important;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_rtl ._hj-f5b2a1eb-9b07_widget_content ._hj-f5b2a1eb-9b07_button_radio_checkbox                        span._hj-f5b2a1eb-9b07_widget_icon
	{
	left: auto;
	right: 12px;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_rtl ._hj-f5b2a1eb-9b07_widget_content ._hj-f5b2a1eb-9b07_button_radio_checkbox                        span._hj-f5b2a1eb-9b07_radio_checkbox_text
	{
	text-align: right !important;
	padding: 14px 50px 14px 20px;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_rtl ._hj-f5b2a1eb-9b07_double_control ._hj-f5b2a1eb-9b07_double_first
	{
	float: right;
	margin-left: 2%;
}

._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_rtl ._hj-f5b2a1eb-9b07_double_control ._hj-f5b2a1eb-9b07_double_second
	{
	float: left;
	margin-left: 0;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_thankyou_message ._hj-f5b2a1eb-9b07_more_info_link
	{
	text-decoration: underline !important;
} /* legal footer */
._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_legal {
	border-top: 0 !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_legal ._hj-f5b2a1eb-9b07_pull_left
	{
	padding: 0px 0px 12px 12px;
	font-size: 11px;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_legal ._hj-f5b2a1eb-9b07_pull_right
	{
	padding: 0px 12px 12px 0px;
	font-size: 11px;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_legal ._hj-f5b2a1eb-9b07_pull_right a
	{
	color: !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="consent"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_widget_legal ._hj-f5b2a1eb-9b07_pull_left,
	#_hj-f5b2a1eb-9b07_feedback[data-state="consent"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_widget_legal ._hj-f5b2a1eb-9b07_pull_right a
	{
	color: #333 !important;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_legal ._hj-f5b2a1eb-9b07_pull_left a,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_legal ._hj-f5b2a1eb-9b07_pull_left a:hover,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_legal ._hj-f5b2a1eb-9b07_pull_left a:focus,
	._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_legal ._hj-f5b2a1eb-9b07_pull_left a:active
	{
	text-decoration: underline !important;
}
</style>
			<style type="text/css"> /* Faces (emotion) */
._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon_emotion_default *:before
	{
	color: #3c3c3c;
	margin-left: -1.3984375em;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon_emotion_default .path1:before
	{
	content: "\e900";
	color: #ffd902;
	margin: 0;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon_emotion_default._hj-f5b2a1eb-9b07_bottom_position_launcher *:before
	{
	color: #ffffff
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon_emotion_default._hj-f5b2a1eb-9b07_bottom_position_launcher .path1:before
	{
	color: #3c3d60
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon_emotion_default[data-emotion-score="0"] .path2:before
	{
	content: "\e901";
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon_emotion_default[data-emotion-score="1"] .path2:before
	{
	content: "\e903";
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon_emotion_default[data-emotion-score="2"] .path2:before
	{
	content: "\e905";
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon_emotion_default[data-emotion-score="3"] .path2:before
	{
	content: "\e907";
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon_emotion_default[data-emotion-score="4"] .path2:before
	{
	content: "\e909";
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon_emotion_default[data-emotion-score="wink"] .path2:before
	{
	content: "\e90b";
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon_emotion_smiley {
	color: #3c3d60;
	font-size: 34px;
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon_emotion_smiley[data-emotion-score="0"]:before
	{
	content: "\e91b";
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon_emotion_smiley[data-emotion-score="1"]:before
	{
	content: "\e91f";
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon_emotion_smiley[data-emotion-score="2"]:before
	{
	content: "\e91e";
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon_emotion_smiley[data-emotion-score="3"]:before
	{
	content: "\e91c";
}

._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon_emotion_smiley[data-emotion-score="4"]:before
	{
	content: "\e91d";
} /* Only load the images when needed.*/
	/*******************                     * MAIN CONTAINER                    ********************/
#_hj-f5b2a1eb-9b07_feedback {
	bottom: 0;
	right: 0;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_rtl
	{
	direction: ltr !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="bottom_left"],
	#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_left"] {
	bottom: 0;
	left: 0;
	right: auto;
}
	/*******************                     * MINIMIZED STATE                    ********************/
#_hj-f5b2a1eb-9b07_feedback #_hj-f5b2a1eb-9b07_feedback_minimized {
	display: none;
	opacity: .96;
	height: 60px;
	position: fixed;
	direction: ltr !important;
}

#_hj-f5b2a1eb-9b07_feedback #_hj-f5b2a1eb-9b07_feedback_minimized:hover
	{
	opacity: 1;
} /* BOTTOM LEFT AND BOTTOM RIGHT */
#_hj-f5b2a1eb-9b07_feedback ._hj-f5b2a1eb-9b07_hotjar_buddy {
	position: absolute;
	right: 0;
	bottom: 0;
	height: 50px;
	width: 52px;
	font-size: 37px;
	cursor: pointer;
}

#_hj-f5b2a1eb-9b07_feedback ._hj-f5b2a1eb-9b07_hotjar_buddy>span {
	position: relative;
	z-index: 2;
}

#_hj-f5b2a1eb-9b07_feedback #_hj-f5b2a1eb-9b07_feedback_minimized ._hj-f5b2a1eb-9b07_hotjar_buddy:after
	{
	content: "";
	position: absolute;
	z-index: 1;
	top: 17px;
	left: 25px;
	background: rgba(0, 0, 0, .48);
	width: 6px;
	height: 1px;
	-webkit-box-shadow: 0 2px 18px 18px rgba(0, 0, 0, .48);
	-moz-box-shadow: 0 2px 18px 18px rgba(0, 0, 0, .48);
	box-shadow: 0 2px 18px 18px rgba(0, 0, 0, .48);
	-webkit-transition: all .2s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	-ms-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}

#_hj-f5b2a1eb-9b07_feedback #_hj-f5b2a1eb-9b07_feedback_minimized:hover ._hj-f5b2a1eb-9b07_hotjar_buddy:after
	{
	-webkit-box-shadow: 0 2px 18px 18px rgba(0, 0, 0, .65);
	-moz-box-shadow: 0 2px 18px 18px rgba(0, 0, 0, .65);
	box-shadow: 0 2px 18px 18px rgba(0, 0, 0, .65);
}

#_hj-f5b2a1eb-9b07_feedback ._hj-f5b2a1eb-9b07_feedback_minimized_message
	{
	opacity: 0;
	pointer-events: none;
	position: absolute;
	bottom: 11px;
	padding: 12px 15px;
	width: 180px;
	text-align: center;
	font-size: 12px !important;
	cursor: pointer;
	background: #ffffff;
	-webkit-box-shadow: 0 2px 18px 0 rgba(0, 0, 0, .3);
	-moz-box-shadow: 0 2px 18px 0 rgba(0, 0, 0, .3);
	box-shadow: 0 2px 18px 0 rgba(0, 0, 0, .3);
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

#_hj-f5b2a1eb-9b07_feedback ._hj-f5b2a1eb-9b07_feedback_minimized_message:before
	{
	content: "";
	width: 1px;
	height: 1px;
	position: absolute;
	bottom: 13px;
	border-top: 6px solid transparent;
	border-bottom: 6px solid transparent;
}

#_hj-f5b2a1eb-9b07_feedback ._hj-f5b2a1eb-9b07_feedback_minimized_message ._hj-f5b2a1eb-9b07_feedback_minimized_message_close
	{
	opacity: 0;
	position: absolute;
	top: -9px;
	right: -9px;
	width: 21px;
	height: 21px;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	font-size: 11px;
	line-height: 21px !important;
	text-align: center;
	cursor: pointer;
	background-color: #3c3d60;
	color: #ffffff;
}

#_hj-f5b2a1eb-9b07_feedback #_hj-f5b2a1eb-9b07_feedback_minimized_message:hover ._hj-f5b2a1eb-9b07_feedback_minimized_message_close
	{
	opacity: 1;
}

#_hj-f5b2a1eb-9b07_feedback ._hj-f5b2a1eb-9b07_feedback_minimized_message span
	{
	display: none !important;
	color: #333333 !important;
}

#_hj-f5b2a1eb-9b07_feedback ._hj-f5b2a1eb-9b07_feedback_minimized_message[data-message="initial"]>#_hj-f5b2a1eb-9b07_feedback_minimized_text_initial,
	#_hj-f5b2a1eb-9b07_feedback ._hj-f5b2a1eb-9b07_feedback_minimized_message[data-message="thankyou"]>#_hj-f5b2a1eb-9b07_feedback_minimized_text_thankyou
	{
	display: block !important;
}

#_hj-f5b2a1eb-9b07_feedback #_hj-f5b2a1eb-9b07_feedback_minimized:hover ._hj-f5b2a1eb-9b07_feedback_minimized_message
	{
	-webkit-box-shadow: 0 2px 24px 0 rgba(0, 0, 0, .33);
	-moz-box-shadow: 0 2px 24px 0 rgba(0, 0, 0, .33);
	box-shadow: 0 2px 24px 0 rgba(0, 0, 0, .33);
} /* MIDDLE LEFT + MIDDLE RIGHT */
#_hj-f5b2a1eb-9b07_feedback ._hj-f5b2a1eb-9b07_feedback_minimized_label
	{
	position: relative;
	width: 40px;
	padding: 12px 14px 12px 12px;
	background: #3c3d60;
	cursor: pointer;
	-webkit-transition: -webkit-box-shadow 0.1s ease-in-out;
	-moz-transition: -moz-box-shadow 0.1s ease-in-out;
	-o-transition: -o-box-shadow 0.1s ease-in-out;
	-ms-transition: -ms-box-shadow 0.1s ease-in-out;
	transition: box-shadow 0.1s ease-in-out;
	-webkit-box-sizing: border-box !important;
	-moz-box-sizing: border-box !important;
	box-sizing: border-box !important;
}

#_hj-f5b2a1eb-9b07_feedback ._hj-f5b2a1eb-9b07_feedback_minimized_label:hover
	{
	-webkit-box-shadow: 0 0 35px 2px rgba(0, 0, 0, .24);
	-moz-box-shadow: 0 0 35px 2px rgba(0, 0, 0, .24);
	box-shadow: 0 0 35px 2px rgba(0, 0, 0, .24);
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_left"] ._hj-f5b2a1eb-9b07_feedback_minimized_label
	{
	left: -2px;
	border-radius: 0 3px 3px 0;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_left"] ._hj-f5b2a1eb-9b07_feedback_minimized_label:hover
	{
	left: 0;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_right"] ._hj-f5b2a1eb-9b07_feedback_minimized_label
	{
	right: -2px;
	border-radius: 3px 0 0 3px;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_right"] ._hj-f5b2a1eb-9b07_feedback_minimized_label:hover
	{
	right: 0;
}

#_hj-f5b2a1eb-9b07_feedback ._hj-f5b2a1eb-9b07_feedback_minimized_label ._hj-f5b2a1eb-9b07_feedback_minimized_label_text
	{
	color: #ffffff;
	display: inline-block !important;
	overflow-wrap: normal !important;
	word-break: normal !important;
	word-wrap: normal !important;
	white-space: nowrap !important;
	filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
	cursor: pointer;
	-webkit-writing-mode: vertical-lr;
	-moz-writing-mode: vertical-lr;
	-ms-writing-mode: tb-rl;
	-o-writing-mode: vertical-lr;
	writing-mode: vertical-lr;
	-webkit-transform: rotate(180deg);
	-moz-transform: rotate(180deg);
	-ms-transform: rotate(180deg);
	-o-transform: rotate(180deg);
	transform: rotate(180deg);
}
	/* Orientational text in certain languages needs further customization as it would otherwise read "upside down". */
#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_ja ._hj-f5b2a1eb-9b07_feedback_minimized_label
	{
	padding-top: 86px;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_zh ._hj-f5b2a1eb-9b07_feedback_minimized_label
	{
	padding-top: 26px;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_ja ._hj-f5b2a1eb-9b07_feedback_minimized_label ._hj-f5b2a1eb-9b07_feedback_minimized_label_text,
	#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_zh ._hj-f5b2a1eb-9b07_feedback_minimized_label ._hj-f5b2a1eb-9b07_feedback_minimized_label_text
	{
	display: block !important;
	-webkit-writing-mode: initial;
	-moz-writing-mode: initial;
	-ms-writing-mode: initial;
	-o-writing-mode: initial;
	writing-mode: initial;
	-webkit-transform: rotate(270deg);
	-moz-transform: rotate(270deg);
	-ms-transform: rotate(270deg);
	-o-transform: rotate(270deg);
	transform: rotate(270deg);
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_zh_TW ._hj-f5b2a1eb-9b07_feedback_minimized_label ._hj-f5b2a1eb-9b07_feedback_minimized_label_text
	{
	-webkit-transform: none;
	-moz-transform: none;
	-ms-transform: none;
	-o-transform: none;
	transform: none;
}

#_hj-f5b2a1eb-9b07_feedback ._hj-f5b2a1eb-9b07_feedback_minimized_label ._hj-f5b2a1eb-9b07_icon_emotion_default
	{
	display: inline-block !important;
	margin: 10px 0 0 -3px;
	font-size: 14px;
}

#_hj-f5b2a1eb-9b07_feedback ._hj-f5b2a1eb-9b07_feedback_minimized_label ._hj-f5b2a1eb-9b07_icon_emotion_default .path1:before
	{
	color: #ffffff !important;
}

#_hj-f5b2a1eb-9b07_feedback ._hj-f5b2a1eb-9b07_feedback_minimized_label ._hj-f5b2a1eb-9b07_icon_emotion_default .path2:before
	{
	color: #3c3d60 !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="bottom_right"] #_hj-f5b2a1eb-9b07_feedback_minimized
	{
	bottom: 20px;
	right: 30px;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="bottom_right"] ._hj-f5b2a1eb-9b07_feedback_minimized_label
	{
	display: none !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="bottom_right"] ._hj-f5b2a1eb-9b07_hotjar_buddy
	{
	right: 0;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="bottom_right"] #_hj-f5b2a1eb-9b07_feedback_open_close,
	#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="bottom_right"] #_hj-f5b2a1eb-9b07_feedback_open
	{
	right: 30px;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="bottom_left"] #_hj-f5b2a1eb-9b07_feedback_minimized
	{
	bottom: 20px;
	left: 30px;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="bottom_left"] ._hj-f5b2a1eb-9b07_feedback_minimized_label
	{
	display: none !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="bottom_left"] ._hj-f5b2a1eb-9b07_hotjar_buddy
	{
	left: 0;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="bottom_left"] #_hj-f5b2a1eb-9b07_feedback_open_close,
	#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="bottom_left"] #_hj-f5b2a1eb-9b07_feedback_open
	{
	left: 37px;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="bottom_right"] ._hj-f5b2a1eb-9b07_feedback_minimized_message
	{
	right: 62px;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="bottom_right"] ._hj-f5b2a1eb-9b07_feedback_minimized_message:before,
	#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_right"] ._hj-f5b2a1eb-9b07_feedback_minimized_message:before
	{
	right: -7px;
	border-left: 7px solid white;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="bottom_left"] ._hj-f5b2a1eb-9b07_feedback_minimized_message
	{
	left: 62px;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="bottom_left"] ._hj-f5b2a1eb-9b07_feedback_minimized_message:before,
	#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_left"] ._hj-f5b2a1eb-9b07_feedback_minimized_message:before
	{
	left: -7px;
	border-right: 7px solid white;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_left"] #_hj-f5b2a1eb-9b07_feedback_open_close,
	#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_right"] #_hj-f5b2a1eb-9b07_feedback_open_close
	{
	display: none;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_left"] #_hj-f5b2a1eb-9b07_feedback_open_close_phone,
	#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_right"] #_hj-f5b2a1eb-9b07_feedback_open_close_phone
	{
	display: block;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_left"] #_hj-f5b2a1eb-9b07_feedback_open,
	#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_left"] #_hj-f5b2a1eb-9b07_feedback_open.fade,
	#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_right"] #_hj-f5b2a1eb-9b07_feedback_open,
	#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_right"] #_hj-f5b2a1eb-9b07_feedback_open.fade
	{
	bottom: 229px;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_left"] ._hj-f5b2a1eb-9b07_hotjar_buddy,
	#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_right"] ._hj-f5b2a1eb-9b07_hotjar_buddy
	{
	display: none !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_left"] ._hj-f5b2a1eb-9b07_feedback_minimized_message,
	#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_right"] ._hj-f5b2a1eb-9b07_feedback_minimized_message
	{
	top: 50%;
	bottom: auto;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_left"] #_hj-f5b2a1eb-9b07_feedback_minimized
	{
	bottom: 329px;
	left: 0;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_left"] ._hj-f5b2a1eb-9b07_feedback_minimized_message
	{
	left: 52px;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_right"] #_hj-f5b2a1eb-9b07_feedback_minimized
	{
	bottom: 329px;
	right: 0;
}

#_hj-f5b2a1eb-9b07_feedback[data-minimized-position="middle_right"] ._hj-f5b2a1eb-9b07_feedback_minimized_message
	{
	right: 52px;
}
	/************************                     * OPEN STATE                    *************************/
#_hj-f5b2a1eb-9b07_feedback_open_close {
	opacity: 0;
	pointer-events: none;
	position: fixed;
	z-index: 10;
	bottom: 33px;
	width: 44px;
	height: 37px;
	font-size: 20px;
	text-align: center !important;
	cursor: pointer;
	background-color: #3c3d60 !important;
	color: #ffffff !important;
	padding-left: 1px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-box-shadow: 0 2px 10px 1px rgba(0, 0, 0, .18);
	-moz-box-shadow: 0 2px 10px 1px rgba(0, 0, 0, .18);
	box-shadow: 0 2px 10px 1px rgba(0, 0, 0, .18);
}

#_hj-f5b2a1eb-9b07_feedback_open_close_phone {
	display: none;
	font-size: 18px;
	text-align: center;
	cursor: pointer;
	background-color: #3c3d60;
	color: #ffffff;
	width: 36px;
	height: 36px;
	z-index: 11;
	right: 20px;
	top: -17px;
	position: absolute;
	border-radius: 50%;
}

#_hj-f5b2a1eb-9b07_feedback_open_close span,
	#_hj-f5b2a1eb-9b07_feedback_open_close_phone span {
	line-height: 36px !important;
}

#_hj-f5b2a1eb-9b07_feedback #_hj-f5b2a1eb-9b07_feedback_open {
	opacity: 0;
	pointer-events: none;
	position: absolute;
	z-index: 10;
	width: 320px;
	bottom: 84px;
	right: 30px;
	background: #ffffff;
	-webkit-box-shadow: 0 6px 100px 0 rgba(0, 0, 0, .35) !important;
	-moz-box-shadow: 0 6px 100px 0 rgba(0, 0, 0, .35) !important;
	box-shadow: 0 6px 100px 0 rgba(0, 0, 0, .35) !important;
}

#_hj-f5b2a1eb-9b07_feedback #_hj-f5b2a1eb-9b07_feedback_open.fade {
	opacity: 1;
	bottom: 92px;
	pointer-events: all;
}

#_hj-f5b2a1eb-9b07_feedback #_hj-f5b2a1eb-9b07_feedback_open [data-state]
	{
	display: none;
} /* Widget content (emotion + comment + email) */
#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_emotion_content {
	margin-top: 30px;
	margin-bottom: 50px;
}

#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_emotion_content._hj-f5b2a1eb-9b07_emotion_type_star
	{
	margin-bottom: 40px;
}

#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_emotion_content ._hj-f5b2a1eb-9b07_emotion_option
	{
	position: relative;
	float: left !important;
	bottom: -50px;
	opacity: 0;
	width: 20%;
	text-align: center;
	font-size: 26px;
	cursor: pointer;
}

#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_emotion_content ._hj-f5b2a1eb-9b07_emotion_option.fade
	{
	bottom: 0;
	opacity: 1;
	font-size: 30px;
}

#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_emotion_content ._hj-f5b2a1eb-9b07_emotion_option.fadeTransition
	{
	-webkit-transition: all .3s cubic-bezier(0.175, 0.885, 0.320, 1);
	-webkit-transition: all .3s cubic-bezier(0.175, 0.885, 0.320, 1.350);
	-moz-transition: all .3s cubic-bezier(0.175, 0.885, 0.320, 1.350);
	-o-transition: all .3s cubic-bezier(0.175, 0.885, 0.320, 1.350);
	transition: all .3s cubic-bezier(0.175, 0.885, 0.320, 1.350);
}

#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_emotion_content [data-emotion-option="1"].fadeTransition
	{
	-webkit-transition-delay: .1s;
	-moz-transition-delay: .1s;
	-o-transition-delay: .1s;
	-ms-transition-delay: .1s;
	transition-delay: .1s;
}

#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_emotion_content [data-emotion-option="2"].fadeTransition
	{
	-webkit-transition-delay: .175s;
	-moz-transition-delay: .175s;
	-o-transition-delay: .175s;
	-ms-transition-delay: .175s;
	transition-delay: .175s;
}

#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_emotion_content [data-emotion-option="3"].fadeTransition
	{
	-webkit-transition-delay: .250s;
	-moz-transition-delay: .250s;
	-o-transition-delay: .250s;
	-ms-transition-delay: .250s;
	transition-delay: .250s;
}

#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_emotion_content [data-emotion-option="4"].fadeTransition
	{
	-webkit-transition-delay: .325s;
	-moz-transition-delay: .325s;
	-o-transition-delay: .325s;
	-ms-transition-delay: .325s;
	transition-delay: .325s;
}

#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_emotion_content ._hj-f5b2a1eb-9b07_emotion_text
	{
	position: absolute;
	font-size: 12px;
	color: #999;
	text-align: center;
	top: 47px;
	left: 0;
	right: 0;
	opacity: 0;
}

#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_emotion_content._hj-f5b2a1eb-9b07_emotion_type_default ._hj-f5b2a1eb-9b07_emotion_text
	{
	padding-left: 6px;
}

#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_emotion_content._hj-f5b2a1eb-9b07_emotion_type_star ._hj-f5b2a1eb-9b07_emotion_text
	{
	display: none;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1 ._hj-f5b2a1eb-9b07_emotion_content:hover ._hj-f5b2a1eb-9b07_emotion_option
	{
	opacity: .5
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1 ._hj-f5b2a1eb-9b07_emotion_content ._hj-f5b2a1eb-9b07_emotion_option:hover
	{
	opacity: 1;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1 ._hj-f5b2a1eb-9b07_emotion_content ._hj-f5b2a1eb-9b07_emotion_option:hover ._hj-f5b2a1eb-9b07_emotion_text
	{
	opacity: 1;
	top: 42px;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1 ._hj-f5b2a1eb-9b07_emotion_comment_holder
	{
	position: relative;
	display: none;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1 ._hj-f5b2a1eb-9b07_emotion_comment_footer
	{
	display: none;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1 ._hj-f5b2a1eb-9b07_emotion_comment_holder:before
	{
	content: "";
	width: 1px;
	height: 1px;
	position: absolute;
	left: auto;
	top: -6px;
	border-left: 4px solid transparent;
	border-right: 4px solid transparent;
	border-bottom: 5px solid rgba(0, 0, 0, .1);
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen] ._hj-f5b2a1eb-9b07_emotion_comment_footer
	{
	display: block;
	padding: 5px 8px 10px 8px;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen] ._hj-f5b2a1eb-9b07_emotion_comment_footer a
	{
	color: #333333;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1 ._hj-f5b2a1eb-9b07_emotion_comment_footer:empty
	{
	display: none;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen] ._hj-f5b2a1eb-9b07_emotion_comment_holder
	{
	display: block;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen] ._hj-f5b2a1eb-9b07_emotion_text
	{
	display: none;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen] ._hj-f5b2a1eb-9b07_icon_emotion_default
	{
	font-size: 26px;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen="0"] ._hj-f5b2a1eb-9b07_emotion_comment_holder:before
	{
	left: 8.5%;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen="1"] ._hj-f5b2a1eb-9b07_emotion_comment_holder:before
	{
	left: 28.5%;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen="2"] ._hj-f5b2a1eb-9b07_emotion_comment_holder:before
	{
	left: 48.5%;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen="3"] ._hj-f5b2a1eb-9b07_emotion_comment_holder:before
	{
	left: 68.5%;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen="4"] ._hj-f5b2a1eb-9b07_emotion_comment_holder:before
	{
	left: 88.5%;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen] ._hj-f5b2a1eb-9b07_emotion_option
	{
	opacity: .5
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen] ._hj-f5b2a1eb-9b07_emotion_option ._hj-f5b2a1eb-9b07_icon_emotion_smiley,
	#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen] ._hj-f5b2a1eb-9b07_emotion_option ._hj-f5b2a1eb-9b07_icon_emotion_default .path1:before
	{
	color: #cccccc;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen] ._hj-f5b2a1eb-9b07_emotion_type_star ._hj-f5b2a1eb-9b07_emotion_option,
	#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen] ._hj-f5b2a1eb-9b07_emotion_option[data-emotion-active]
	{
	opacity: 1
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen] ._hj-f5b2a1eb-9b07_emotion_option[data-emotion-active] ._hj-f5b2a1eb-9b07_icon_emotion_smiley
	{
	color: #3c3d60;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen] ._hj-f5b2a1eb-9b07_emotion_option[data-emotion-active] ._hj-f5b2a1eb-9b07_icon_emotion_default
	{
	font-size: 26px;
}

#_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen] ._hj-f5b2a1eb-9b07_emotion_option[data-emotion-active] ._hj-f5b2a1eb-9b07_icon_emotion_default .path1:before
	{
	color: #ffd902;
}

#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_toolset_actions {
	margin: -3px -12px 12px -12px;
	background: #eaeaeb !important;
	padding: 10px 20px;
}

#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_toolset_actions>div
	{
	font-size: 22px;
	opacity: .75;
	cursor: pointer;
	display: inline-block;
	position: relative;
}

#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_toolset_actions>div._hj-f5b2a1eb-9b07_toolset_action_active
	{
	color: #3c3d60;
	opacity: 1;
}

#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_toolset_actions>div:hover
	{
	opacity: 1;
}

#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_toolset_actions>div>._hj-f5b2a1eb-9b07_toolset_tooltip
	{
	background: black;
	color: white;
	font-size: 12px;
	padding: 8px 12px;
	border-radius: 3px;
	position: absolute;
	left: 40px;
	top: -4px;
	width: 195px;
	opacity: 0;
	pointer-events: none;
}

#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_toolset_actions>div>._hj-f5b2a1eb-9b07_toolset_tooltip:before
	{
	content: "";
	width: 1px;
	height: 1px;
	position: absolute;
	left: -6px;
	top: 10px;
	border-top: 4px solid transparent;
	border-bottom: 4px solid transparent;
	border-right: 5px solid black;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_rtl #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_toolset_actions>div>._hj-f5b2a1eb-9b07_toolset_tooltip
	{
	left: auto;
	right: 40px;
	top: -4px;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget._hj-f5b2a1eb-9b07_rtl #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_toolset_actions>div>._hj-f5b2a1eb-9b07_toolset_tooltip:before
	{
	left: auto;
	right: -6px;
	border-right: 0;
	border-left: 5px solid black;
}

#_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_toolset_actions>div:hover>._hj-f5b2a1eb-9b07_toolset_tooltip
	{
	opacity: 1;
} /* Overlay + dimmers + highlighters */
#_hj-f5b2a1eb-9b07_feedback ._hj-f5b2a1eb-9b07_feedback_content_dimmer {
	opacity: 0;
	background: black;
	position: fixed;
	z-index: -1;
	-webkit-transition: opacity .2s ease-in-out;
	-moz-transition: opacity .2s ease-in-out;
	-o-transition: opacity .2s ease-in-out;
	-ms-transition: opacity .2s ease-in-out;
	transition: opacity .2s ease-in-out;
}

#_hj-f5b2a1eb-9b07_feedback_content_highlighter {
	display: none;
	border: 4px dashed #ffd902;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	position: fixed;
	z-index: -1;
	-webkit-box-sizing: initial !important;
	-moz-box-sizing: initial !important;
	box-sizing: initial !important;
	-webkit-transition: border .2s linear;
	-moz-transition: border .2s ease-in-out;
	-o-transition: border .2s ease-in-out;
	-ms-transition: border .2s ease-in-out;
	transition: border .2s ease-in-out;
}

#_hj-f5b2a1eb-9b07_feedback_content_highlighter #_hj-f5b2a1eb-9b07_feedback_content_highlighter_close
	{
	display: none;
	font-size: 12px;
	text-align: center;
	cursor: pointer;
	background-color: #3c3d60;
	color: #ffffff;
	z-index: 11;
	right: -12px;
	top: -13px;
	position: absolute;
	border-radius: 50%;
	padding: 5px 7px 3px 7px;
} /* SCREENSHOT + ELEMENT SELECTION */ /* Page highlight - ENABLED */
#_hj-f5b2a1eb-9b07_feedback_page_highlight {
	position: fixed;
	pointer-events: none;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	z-index: 5;
}

#_hj-f5b2a1eb-9b07_feedback_page_highlight>._hj-f5b2a1eb-9b07_feedback_page_highlight_line
	{
	opacity: 0;
	position: absolute;
	background: #3c3d60
}

#_hj-f5b2a1eb-9b07_feedback_page_highlight>#_hj-f5b2a1eb-9b07_feedback_page_highlight_line_top
	{
	top: 0;
	left: 0;
	right: 0;
	height: 4px;
}

#_hj-f5b2a1eb-9b07_feedback_page_highlight>#_hj-f5b2a1eb-9b07_feedback_page_highlight_line_right
	{
	top: 0;
	bottom: 0;
	right: 0;
	width: 4px;
}

#_hj-f5b2a1eb-9b07_feedback_page_highlight>#_hj-f5b2a1eb-9b07_feedback_page_highlight_line_bottom
	{
	bottom: 0;
	left: 0;
	right: 0;
	height: 4px;
}

#_hj-f5b2a1eb-9b07_feedback_page_highlight>#_hj-f5b2a1eb-9b07_feedback_page_highlight_line_left
	{
	top: 0;
	left: 0;
	bottom: 0;
	width: 4px;
} /* Page highlight - TOP MESSAGE */
#_hj-f5b2a1eb-9b07_feedback_page_highlight>#_hj-f5b2a1eb-9b07_feedback_top_message_select
	{
	opacity: 0;
	position: fixed;
	top: -4px;
	left: 50%;
	width: 260px;
	margin-left: -130px;
	padding: 23px 0 19px 0;
	text-align: center;
	font-size: 13px;
	-webkit-border-radius: 0 0 10px 10px;
	-moz-border-radius: 0 0 10px 10px;
	border-radius: 0 0 10px 10px;
	background-color: #ffd902;
	color: #3c3c3c;
	-webkit-box-shadow: 0 2px 25px 3px rgba(0, 0, 0, .3);
	-moz-box-shadow: 0 2px 25px 3px rgba(0, 0, 0, .3);
	box-shadow: 0 2px 25px 3px rgba(0, 0, 0, .3);
}

#_hj-f5b2a1eb-9b07_feedback_page_highlight>#_hj-f5b2a1eb-9b07_feedback_top_message_select
	{
	
}

#_hj-f5b2a1eb-9b07_feedback_page_highlight>#_hj-f5b2a1eb-9b07_feedback_top_message_select:before,
	#_hj-f5b2a1eb-9b07_feedback_page_highlight>#_hj-f5b2a1eb-9b07_feedback_top_message_select:after
	{
	content: "";
	display: block;
	width: 55px;
	height: 50px;
	background-color: #3c3d60;
	position: absolute;
	top: 0;
	z-index: -1;
}

#_hj-f5b2a1eb-9b07_feedback_page_highlight>#_hj-f5b2a1eb-9b07_feedback_top_message_select:before
	{
	left: -9px;
	-webkit-transform: skewX(20deg);
	-moz-transform: skewX(20deg);
	-ms-transform: skewX(20deg);
	transform: skewX(20deg);
}

#_hj-f5b2a1eb-9b07_feedback_page_highlight>#_hj-f5b2a1eb-9b07_feedback_top_message_select:after
	{
	right: -9px;
	-webkit-transform: skewX(-20deg);
	-moz-transform: skewX(-20deg);
	-ms-transform: skewX(-20deg);
	transform: skewX(-20deg);
}

#_hj-f5b2a1eb-9b07_feedback_page_highlight>#_hj-f5b2a1eb-9b07_feedback_top_message_select #_hj-f5b2a1eb-9b07_feedback_top_message_select_close
	{
	position: absolute;
	right: 13px;
	top: 21px;
	color: #3c3c3c;
	text-decoration: none;
	cursor: pointer;
	height: 19px;
	width: 19px;
	padding: 3px 0 0 1px;
	border-radius: 50%;
	background: transparent;
	-webkit-box-sizing: border-box !important;
	-moz-box-sizing: border-box !important;
	box-sizing: border-box !important;
}

#_hj-f5b2a1eb-9b07_feedback_page_highlight>#_hj-f5b2a1eb-9b07_feedback_top_message_select #_hj-f5b2a1eb-9b07_feedback_top_message_select_close:hover
	{
	background: rgba(0, 0, 0, .2);
}
	/************************                     * OLD WIDGETS CSS OVERRIDES                    *************************/
[data-hotjar-cursor-pointer], [data-hotjar-cursor-pointer] * {
	cursor: pointer !important;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget,
	#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget *,
	#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_content ._hj-f5b2a1eb-9b07_widget_input_field
	{
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget p {
	color: #333333 !important;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_primary,
	#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_primary:hover,
	#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_primary:focus,
	#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_primary:active
	{
	background: #3c3d60 !important;
	color: #ffffff !important;
	font-weight: normal !important;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_clear
	{
	color: #aaaaaa !important;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_clear:hover,
	#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_clear:focus,
	#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_clear:active
	{
	color: #666666 !important;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_disabled,
	#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_disabled:hover,
	#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_disabled:focus,
	#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_btn_disabled:active
	{
	background: #cccccc !important;
	color: #333333 !important;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_title
	{
	padding: 30px !important;
	cursor: default;
	font-size: 17px;
	font-weight: normal !important;
	line-height: normal !important;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_title a
	{
	color: inherit !important;
	text-decoration: underline !important;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_content ._hj-f5b2a1eb-9b07_input_field
	{
	border: 0 !important;
	background: #eaeaeb !important;
	color: #454A55 !important;
	padding: 12px 20px !important;
	margin-left: -12px;
	margin-right: -12px;
	margin-bottom: 10px;
	width: 320px;
	-webkit-box-shadow: none !important;
	-moz-box-shadow: none !important;
	box-shadow: none !important;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_content textarea._hj-f5b2a1eb-9b07_input_field
	{
	height: 105px !important;
	line-height: 18px !important;
	margin-bottom: 0;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_content input._hj-f5b2a1eb-9b07_input_field
	{
	height: 46px; ! important;
	text-align: center;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_icon-select-element:before
	{
	color: #454A55 !important;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer
	{
	border-top: 0 !important;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_left
	{
	padding: 9px 0 20px 20px;
	color: #333333;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_left a
	{
	color: #333333;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_left span
	{
	color: #f4364c;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_right
	{
	display: none;
	padding-top: 0;
	border-top: 0 !important;
}

#_hj-f5b2a1eb-9b07_feedback._hj-f5b2a1eb-9b07_widget ._hj-f5b2a1eb-9b07_widget_footer._hj-f5b2a1eb-9b07_widget_legal ._hj-f5b2a1eb-9b07_pull_right
	{
	display: block;
	padding-top: 0;
	border-top: 0 !important;
}
	/************************                     * STATE MODIFICATIONS                    *************************/
#_hj-f5b2a1eb-9b07_feedback[data-state="minimized"] {
	width: 80px;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="minimized"] #_hj-f5b2a1eb-9b07_feedback_minimized
	{
	display: block;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="minimized"][data-show-message] {
	width: 280px;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="minimized"][data-show-message] ._hj-f5b2a1eb-9b07_feedback_minimized_message
	{
	pointer-events: all;
	opacity: 1;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="minimized"][data-minimized-position="bottom_right"][data-show-message] ._hj-f5b2a1eb-9b07_feedback_minimized_message
	{
	right: 70px;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="minimized"][data-minimized-position="bottom_left"][data-show-message] ._hj-f5b2a1eb-9b07_feedback_minimized_message
	{
	left: 70px;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="minimized"][data-minimized-position="middle_right"][data-show-message] ._hj-f5b2a1eb-9b07_feedback_minimized_message
	{
	right: 60px;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="minimized"][data-minimized-position="middle_left"][data-show-message] ._hj-f5b2a1eb-9b07_feedback_minimized_message
	{
	left: 60px;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="minimized"] ._hj-f5b2a1eb-9b07_feedback_content_dimmer,
	#_hj-f5b2a1eb-9b07_feedback[data-state="minimized"] #_hj-f5b2a1eb-9b07_feedback_content_highlighter
	{
	display: none;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="emotion"] {
	width: 320px;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="emotion"] #_hj-f5b2a1eb-9b07_feedback_open_close
	{
	opacity: 1;
	pointer-events: all;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="emotion"] #_hj-f5b2a1eb-9b07_feedback_open [data-state="emotion"]
	{
	display: block;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="emotion"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_left
	{
	padding-top: 0;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="emotion"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_btn_clear
	{
	display: none;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="emotion"] #_hj-f5b2a1eb-9b07_state-1 p._hj-f5b2a1eb-9b07_widget_title
	{
	padding-top: 40px !important;
	padding-bottom: 0 !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="comment"] #_hj-f5b2a1eb-9b07_feedback_open_close
	{
	opacity: 1;
	pointer-events: all;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="comment"] #_hj-f5b2a1eb-9b07_feedback_open [data-state="emotion"]
	{
	display: block;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="comment"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_emotion_content
	{
	margin-bottom: 15px;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="comment"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_right
	{
	display: block;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="comment"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_btn_clear
	{
	display: none;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="comment"] #_hj-f5b2a1eb-9b07_state-1 p._hj-f5b2a1eb-9b07_widget_title
	{
	display: none;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="email"] #_hj-f5b2a1eb-9b07_feedback_open [data-state="email"]
	{
	display: block;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="email"] #_hj-f5b2a1eb-9b07_feedback_open_close
	{
	opacity: 1;
	pointer-events: all;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="email"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_left
	{
	display: none;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="email"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_right
	{
	display: block;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="consent"] #_hj-f5b2a1eb-9b07_feedback_open [data-state="consent"]
	{
	display: block;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="consent"] #_hj-f5b2a1eb-9b07_feedback_open [data-state="consent"] ._hj-f5b2a1eb-9b07_consent_message_text
	{
	text-align: center;
	padding: 0 14px;
	color: #666666 !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="consent"] #_hj-f5b2a1eb-9b07_feedback_open [data-state="consent"] ._hj-f5b2a1eb-9b07_consent_message_text a
	{
	color: #666666 !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="consent"] #_hj-f5b2a1eb-9b07_feedback_open [data-state="consent"] ._hj-f5b2a1eb-9b07_consent_actions
	{
	margin-bottom: 30px;
	text-align: center;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="consent"] #_hj-f5b2a1eb-9b07_feedback_open [data-state="consent"] ._hj-f5b2a1eb-9b07_consent_actions button
	{
	font-size: 18px !important;
	margin: 20px 5px 0 5px !important;
	padding: 7px 10px !important;
	width: 50px !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="consent"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_left
	{
	display: none;
}

#_hj-f5b2a1eb-9b07_feedback[data-state="consent"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_more_info_link,
	#_hj-f5b2a1eb-9b07_feedback[data-state="consent"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_more_info_link:hover,
	#_hj-f5b2a1eb-9b07_feedback[data-state="consent"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_more_info_link:focus,
	#_hj-f5b2a1eb-9b07_feedback[data-state="consent"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_more_info_link:visited,
	#_hj-f5b2a1eb-9b07_feedback[data-state="consent"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_more_info_link:active
	{
	color: #333 !important;
	text-decoration: underline;
}

#_hj-f5b2a1eb-9b07_feedback[data-screenshot] {
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	width: 100% !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-screenshot="element"] {
	pointer-events: none;
}

#_hj-f5b2a1eb-9b07_feedback[data-screenshot="element"] #_hj-f5b2a1eb-9b07_feedback_top_message_select #_hj-f5b2a1eb-9b07_feedback_top_message_select_close
	{
	pointer-events: all;
}

#_hj-f5b2a1eb-9b07_feedback[data-screenshot="element"] #_hj-f5b2a1eb-9b07_feedback_open_close
	{
	display: none !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-screenshot="element"] #_hj-f5b2a1eb-9b07_feedback_open
	{
	display: none !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-screenshot="element"] ._hj-f5b2a1eb-9b07_feedback_content_dimmer
	{
	opacity: .45;
}

#_hj-f5b2a1eb-9b07_feedback[data-screenshot="element"] #_hj-f5b2a1eb-9b07_feedback_content_highlighter
	{
	display: block;
}

#_hj-f5b2a1eb-9b07_feedback[data-screenshot="element"] #_hj-f5b2a1eb-9b07_feedback_page_highlight>#_hj-f5b2a1eb-9b07_feedback_top_message_select
	{
	opacity: 1;
}

#_hj-f5b2a1eb-9b07_feedback[data-screenshot="element"] #_hj-f5b2a1eb-9b07_feedback_page_highlight>._hj-f5b2a1eb-9b07_feedback_page_highlight_line
	{
	opacity: 1;
}

#_hj-f5b2a1eb-9b07_feedback[data-screenshot="element"] #_hj-f5b2a1eb-9b07_feedback_page_highlight>#_hj-f5b2a1eb-9b07_feedback_top_message_select:before,
	#_hj-f5b2a1eb-9b07_feedback[data-screenshot="element"] #_hj-f5b2a1eb-9b07_feedback_page_highlight>#_hj-f5b2a1eb-9b07_feedback_top_message_select:after
	{
	background: #ffd902 !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-screenshot="element"] #_hj-f5b2a1eb-9b07_feedback_page_highlight>._hj-f5b2a1eb-9b07_feedback_page_highlight_line
	{
	background: #ffd902 !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-screenshot="elementSelected"] ._hj-f5b2a1eb-9b07_feedback_content_dimmer
	{
	opacity: .45;
}

#_hj-f5b2a1eb-9b07_feedback[data-screenshot="elementSelected"] #_hj-f5b2a1eb-9b07_feedback_content_highlighter
	{
	display: block;
	pointer-events: all;
	cursor: pointer;
	border-style: solid;
	border-color: #3c3d60 !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-screenshot="elementSelected"] #_hj-f5b2a1eb-9b07_feedback_content_highlighter:before
	{
	content: "Change";
	position: absolute;
	background: #3c3d60;
	color: #ffffff;
	bottom: -32px;
	right: -4px;
	padding: 8px 12px;
	border-radius: 0 0 3px 3px;
	font-size: 12px;
}

#_hj-f5b2a1eb-9b07_feedback[data-screenshot="elementSelected"] #_hj-f5b2a1eb-9b07_feedback_content_highlighter_close
	{
	display: block;
}
	/************************                     * DEVICE ADAPTATIONS                    *************************/
#_hj-f5b2a1eb-9b07_feedback[data-device="desktop"] [data-show-for="phone"],
	#_hj-f5b2a1eb-9b07_feedback[data-device="desktop"] [data-show-for="tablet"],
	#_hj-f5b2a1eb-9b07_feedback[data-device="tablet"] [data-show-for="desktop"],
	#_hj-f5b2a1eb-9b07_feedback[data-device="tablet"] [data-show-for="phone"],
	#_hj-f5b2a1eb-9b07_feedback[data-device="phone"] [data-show-for="desktop"],
	#_hj-f5b2a1eb-9b07_feedback[data-device="phone"] [data-show-for="tablet"],
	#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"] [data-show-for="desktop"],
	#_hj-f5b2a1eb-9b07_feedback[data-viewmode="desktop"] [data-show-for="touch"]
	{
	display: none !important;
}
	/************************                     * DESKTOP VIEWMODE ADAPTATIONS                     *************************/
#_hj-f5b2a1eb-9b07_feedback[data-viewmode="desktop"][data-minimized-position="middle_left"] #_hj-f5b2a1eb-9b07_feedback_minimized
	{
	bottom: 329px;
	left: 0;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="desktop"][data-minimized-position="middle_left"] ._hj-f5b2a1eb-9b07_feedback_minimized_message
	{
	left: 52px;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="desktop"][data-minimized-position="middle_left"] #_hj-f5b2a1eb-9b07_feedback_open
	{
	left: 22px;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="desktop"][data-minimized-position="middle_left"] #_hj-f5b2a1eb-9b07_feedback_open.fade
	{
	left: 37px;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="desktop"][data-minimized-position="middle_right"] #_hj-f5b2a1eb-9b07_feedback_minimized
	{
	bottom: 329px;
	right: 0;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="desktop"][data-minimized-position="middle_right"] ._hj-f5b2a1eb-9b07_feedback_minimized_message
	{
	right: 52px;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="desktop"][data-minimized-position="middle_right"] #_hj-f5b2a1eb-9b07_feedback_open
	{
	right: 15px;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="desktop"][data-minimized-position="middle_right"] #_hj-f5b2a1eb-9b07_feedback_open.fade
	{
	right: 30px;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="desktop"] #_hj-f5b2a1eb-9b07_feedback_open_close_phone
	{
	font-size: 15px;
	width: 27px;
	height: 27px;
	top: -13px;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="desktop"] #_hj-f5b2a1eb-9b07_feedback_open_close_phone span
	{
	line-height: 27px !important;
}
	/************************                     * TOUCH VIEWMODE ADAPTATIONS (Tablets / Phones)                    *************************/
#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"][data-state="emotion"],
	#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"][data-state="comment"],
	#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"][data-state="email"],
	#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"][data-state="consent"]
	{
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	width: 100%;
	height: 100%;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"] ._hj-f5b2a1eb-9b07_feedback_minimized_message ._hj-f5b2a1eb-9b07_feedback_minimized_message_close
	{
	opacity: 1 !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"] #_hj-f5b2a1eb-9b07_feedback_open_close
	{
	display: none;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"] #_hj-f5b2a1eb-9b07_feedback_open_close_phone
	{
	display: block;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"] ._hj-f5b2a1eb-9b07_widget_content textarea._hj-f5b2a1eb-9b07_input_field,
	#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"] ._hj-f5b2a1eb-9b07_widget_content input._hj-f5b2a1eb-9b07_input_field
	{
	font-size: 17px !important;
	margin: 0;
	width: 100%;
	border-radius: 4px 4px 0 0;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"] ._hj-f5b2a1eb-9b07_widget_content textarea._hj-f5b2a1eb-9b07_input_field
	{
	line-height: 1.4em !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"] ._hj-f5b2a1eb-9b07_widget_content input._hj-f5b2a1eb-9b07_input_field
	{
	line-height: normal !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"][data-state="comment"] #_hj-f5b2a1eb-9b07_feedback_open,
	#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"][data-state="email"] #_hj-f5b2a1eb-9b07_feedback_open,
	#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"][data-state="consent"] #_hj-f5b2a1eb-9b07_feedback_open
	{
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	margin-left: 0 !important;
	border-radius: 0;
	width: 100%;
	height: 100%;
	overflow: auto;
	-webkit-transition-duration: 0s;
	-moz-transition-duration: 0s;
	transition-duration: 0s;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_toolset_actions
	{
	margin: -4px 0 0 0;
	border-radius: 0 0 4px 4px;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"][data-state="comment"] ._hj-f5b2a1eb-9b07_widget_title,
	#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"][data-state="email"] ._hj-f5b2a1eb-9b07_widget_title,
	#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"][data-state="consent"] ._hj-f5b2a1eb-9b07_widget_title
	{
	display: block !important;
	padding: 35px 50px !important;
	font-size: 18px;
	border-bottom: 1px solid #eaeaeb;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"][data-state="comment"] ._hj-f5b2a1eb-9b07_widget_content,
	#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"][data-state="email"] ._hj-f5b2a1eb-9b07_widget_content,
	#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"][data-state="consent"] ._hj-f5b2a1eb-9b07_widget_content
	{
	padding: 30px;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"][data-state="comment"] #_hj-f5b2a1eb-9b07_feedback_open_close_phone,
	#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"][data-state="email"] #_hj-f5b2a1eb-9b07_feedback_open_close_phone,
	#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"][data-state="consent"] #_hj-f5b2a1eb-9b07_feedback_open_close_phone
	{
	top: 10px;
	background: transparent;
	color: #333333;
	right: 10px;
	font-size: 22px;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"][data-state="consent"] ._hj-f5b2a1eb-9b07_consent_message_text
	{
	font-size: 16px;
}

#_hj-f5b2a1eb-9b07_feedback[data-viewmode="touch"] #_hj-f5b2a1eb-9b07_feedback_page_highlight>#_hj-f5b2a1eb-9b07_feedback_top_message_select #_hj-f5b2a1eb-9b07_feedback_top_message_select_close
	{
	top: 16px;
	right: 5px;
	height: 27px;
	width: 27px;
	padding: 4px 0 0 2px;
	font-size: 18px;
}
	/************************                     * TABLET SPECIFIC                    *************************/
#_hj-f5b2a1eb-9b07_feedback[data-device="tablet"] #_hj-f5b2a1eb-9b07_feedback_open
	{
	bottom: 0;
	left: 50%;
	width: 380px;
	margin-left: -190px;
}

#_hj-f5b2a1eb-9b07_feedback[data-device="tablet"][data-state="emotion"] #_hj-f5b2a1eb-9b07_feedback_open
	{
	bottom: 20px;
}

#_hj-f5b2a1eb-9b07_feedback[data-device="tablet"][data-state="comment"] ._hj-f5b2a1eb-9b07_widget_title,
	#_hj-f5b2a1eb-9b07_feedback[data-device="tablet"][data-state="email"] ._hj-f5b2a1eb-9b07_widget_title,
	#_hj-f5b2a1eb-9b07_feedback[data-device="tablet"][data-state="consent"] ._hj-f5b2a1eb-9b07_widget_title
	{
	font-size: 26px;
	padding: 40px 50px !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-device="tablet"][data-state="comment"] ._hj-f5b2a1eb-9b07_widget_content,
	#_hj-f5b2a1eb-9b07_feedback[data-device="tablet"][data-state="email"] ._hj-f5b2a1eb-9b07_widget_content,
	#_hj-f5b2a1eb-9b07_feedback[data-device="tablet"][data-state="consent"] ._hj-f5b2a1eb-9b07_widget_content
	{
	padding: 40px 60px;
}

#_hj-f5b2a1eb-9b07_feedback[data-device="tablet"][data-state="comment"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_emotion_content
	{
	height: 58px;
	margin-top: 10px;
	margin-bottom: 40px;
}

#_hj-f5b2a1eb-9b07_feedback[data-device="tablet"] #_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen] [data-emotion-option] ._hj-f5b2a1eb-9b07_icon
	{
	height: 40px;
	min-width: 40px;
	font-size: 40px;
	background-size: 40px;
}

#_hj-f5b2a1eb-9b07_feedback[data-device="tablet"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_emotion_comment_holder:before
	{
	display: none !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-device="tablet"] ._hj-f5b2a1eb-9b07_widget_content textarea._hj-f5b2a1eb-9b07_input_field
	{
	height: 180px !important;
	font-size: 22px !important;
	padding: 20px !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-device="tablet"] ._hj-f5b2a1eb-9b07_widget_content input._hj-f5b2a1eb-9b07_input_field
	{
	height: 80px !important;
	font-size: 22px !important;
	padding: 20px !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-device="tablet"] ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_left
	{
	font-size: 14px;
	padding: 22px 0 20px 8%;
}

#_hj-f5b2a1eb-9b07_feedback[data-device="tablet"] ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_right
	{
	padding: 0 8% 30px 0;
}

#_hj-f5b2a1eb-9b07_feedback[data-device="tablet"] ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_right button
	{
	font-size: 22px !important;
	padding: 14px 28px !important;
}
	/************************                     * PHONE SPECIFIC                    *************************/
#_hj-f5b2a1eb-9b07_feedback[data-device="phone"] #_hj-f5b2a1eb-9b07_feedback_open
	{
	bottom: 0;
	left: 20px;
	right: 20px;
	width: auto;
	margin-left: 0;
}

#_hj-f5b2a1eb-9b07_feedback[data-device="phone"][data-state="emotion"] #_hj-f5b2a1eb-9b07_feedback_open
	{
	bottom: 20px;
}

@media ( min-width :421px) {
	#_hj-f5b2a1eb-9b07_feedback[data-viewmode="phone"][data-state="emotion"] #_hj-f5b2a1eb-9b07_feedback_open
		{
		left: 50%;
		width: 300px;
		margin-left: -150px;
	}
}

#_hj-f5b2a1eb-9b07_feedback[data-device="phone"][data-state="comment"] #_hj-f5b2a1eb-9b07_feedback_open ._hj-f5b2a1eb-9b07_emotion_content
	{
	margin-top: 10px;
	margin-bottom: 50px;
}

#_hj-f5b2a1eb-9b07_feedback[data-device="phone"] ._hj-f5b2a1eb-9b07_widget_content textarea._hj-f5b2a1eb-9b07_input_field
	{
	height: 110px !important;
	padding: 15px !important;
}

#_hj-f5b2a1eb-9b07_feedback[data-device="phone"] #_hj-f5b2a1eb-9b07_feedback_open #_hj-f5b2a1eb-9b07_state-1[data-emotion-chosen] [data-emotion-active] ._hj-f5b2a1eb-9b07_emotion_text
	{
	display: block !important;
	opacity: 1;
	top: 34px;
	line-height: 12px;
}

#_hj-f5b2a1eb-9b07_feedback[data-device="phone"] ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_left
	{
	padding: 18px 0 20px 30px;
}

#_hj-f5b2a1eb-9b07_feedback[data-device="phone"] ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_right
	{
	padding: 0 30px 30px 0;
}

#_hj-f5b2a1eb-9b07_feedback[data-device="phone"] ._hj-f5b2a1eb-9b07_widget_footer ._hj-f5b2a1eb-9b07_pull_right button
	{
	font-size: 18px !important;
	padding: 12px 20px !important;
}
</style>
			<div id="_hj-f5b2a1eb-9b07_feedback"
				class="_hj-f5b2a1eb-9b07_widget _hj-f5b2a1eb-9b07_ltr _hj-f5b2a1eb-9b07_en"
				data-state="minimized" data-minimized-position="middle_right"
				data-device="desktop" data-viewmode="desktop">
				<!-- Minimized State -->
				<div id="_hj-f5b2a1eb-9b07_feedback_minimized">
					<div class="_hj-f5b2a1eb-9b07_feedback_minimized_label">
						<div class="_hj-f5b2a1eb-9b07_feedback_minimized_label_text">
							Feedback</div>
						<div
							class="_hj-f5b2a1eb-9b07_icon _hj-f5b2a1eb-9b07_icon_emotion_default"
							data-emotion-score="3">
							<span class="path1"></span><span class="path2"></span>
						</div>
					</div>
					<div
						class="_hj-f5b2a1eb-9b07_hotjar_buddy _hj-f5b2a1eb-9b07_icon _hj-f5b2a1eb-9b07_icon_emotion_default _hj-f5b2a1eb-9b07_bottom_position_launcher"
						data-emotion-score="3">
						<span class="path1"></span><span class="path2"></span>
					</div>
					<div id="_hj-f5b2a1eb-9b07_feedback_minimized_message"
						class="_hj-f5b2a1eb-9b07_feedback_minimized_message _hj-f5b2a1eb-9b07_transition _hj-f5b2a1eb-9b07_rounded_corners">
						<a
							class="_hj-f5b2a1eb-9b07_feedback_minimized_message_close _hj-f5b2a1eb-9b07_link_no_underline _hj-f5b2a1eb-9b07_icon _hj-f5b2a1eb-9b07_icon-x _hj-f5b2a1eb-9b07_transition"></a>
						<span id="_hj-f5b2a1eb-9b07_feedback_minimized_text_initial"
							class="_hj-f5b2a1eb-9b07_wordwrap">Help us improve by sharing
							your feedback.</span> <span
							id="_hj-f5b2a1eb-9b07_feedback_minimized_text_thankyou"
							class="_hj-f5b2a1eb-9b07_wordwrap">Thank you for sharing your
							feedback with us!</span>
					</div>
				</div>
				<!-- Opened State -->
				<a id="_hj-f5b2a1eb-9b07_feedback_open_close"> <span
					class="_hj-f5b2a1eb-9b07_link_no_underline _hj-f5b2a1eb-9b07_icon _hj-f5b2a1eb-9b07_icon-x"></span>
				</a>
				<div id="_hj-f5b2a1eb-9b07_feedback_open"
					class="_hj-f5b2a1eb-9b07_rounded_corners _hj-f5b2a1eb-9b07_transition">
					<a id="_hj-f5b2a1eb-9b07_feedback_open_close_phone"> <span
						class="_hj-f5b2a1eb-9b07_link_no_underline _hj-f5b2a1eb-9b07_icon _hj-f5b2a1eb-9b07_icon-x"></span>
					</a>
					<!-- STEP 1: EMOTION -->
					<div id="_hj-f5b2a1eb-9b07_state-1" data-state="emotion">
						<p class="_hj-f5b2a1eb-9b07_widget_title">How would you rate your
							experience?</p>
						<div class="_hj-f5b2a1eb-9b07_widget_content">
							<div
								class="_hj-f5b2a1eb-9b07_emotion_content _hj-f5b2a1eb-9b07_emotion_type_default">
								<div class="_hj-f5b2a1eb-9b07_emotion_option"
									data-bind="emotion" data-emotion-option="0">
									<span
										class="_hj-f5b2a1eb-9b07_icon _hj-f5b2a1eb-9b07_icon_emotion_default"
										data-emotion-score="0"> <span class="path1"></span><span
										class="path2"></span>
									</span> <span
										class="_hj-f5b2a1eb-9b07_emotion_text _hj-f5b2a1eb-9b07_transition">Hate</span>
								</div>
								<div class="_hj-f5b2a1eb-9b07_emotion_option"
									data-bind="emotion" data-emotion-option="1">
									<span
										class="_hj-f5b2a1eb-9b07_icon _hj-f5b2a1eb-9b07_icon_emotion_default"
										data-emotion-score="1"> <span class="path1"></span><span
										class="path2"></span>
									</span> <span
										class="_hj-f5b2a1eb-9b07_emotion_text _hj-f5b2a1eb-9b07_transition">Dislike</span>
								</div>
								<div class="_hj-f5b2a1eb-9b07_emotion_option"
									data-bind="emotion" data-emotion-option="2">
									<span
										class="_hj-f5b2a1eb-9b07_icon _hj-f5b2a1eb-9b07_icon_emotion_default"
										data-emotion-score="2"> <span class="path1"></span><span
										class="path2"></span>
									</span> <span
										class="_hj-f5b2a1eb-9b07_emotion_text _hj-f5b2a1eb-9b07_transition">Neutral</span>
								</div>
								<div class="_hj-f5b2a1eb-9b07_emotion_option"
									data-bind="emotion" data-emotion-option="3">
									<span
										class="_hj-f5b2a1eb-9b07_icon _hj-f5b2a1eb-9b07_icon_emotion_default"
										data-emotion-score="3"> <span class="path1"></span><span
										class="path2"></span>
									</span> <span
										class="_hj-f5b2a1eb-9b07_emotion_text _hj-f5b2a1eb-9b07_transition">Like</span>
								</div>
								<div class="_hj-f5b2a1eb-9b07_emotion_option"
									data-bind="emotion" data-emotion-option="4">
									<span
										class="_hj-f5b2a1eb-9b07_icon _hj-f5b2a1eb-9b07_icon_emotion_default"
										data-emotion-score="4"> <span class="path1"></span><span
										class="path2"></span>
									</span> <span
										class="_hj-f5b2a1eb-9b07_emotion_text _hj-f5b2a1eb-9b07_transition">Love</span>
								</div>
								<div class="_hj-f5b2a1eb-9b07_clear_both"></div>
							</div>
							<div class="_hj-f5b2a1eb-9b07_emotion_comment_holder">
								<textarea maxlength="1000" class="_hj-f5b2a1eb-9b07_input_field"
									id="_hj-f5b2a1eb-9b07_emotion_comment"
									name="_hj-f5b2a1eb-9b07_emotion_comment"
									placeholder="Tell us about your experience..." rows="3"
									data-bind="comment"></textarea>
								<div class="_hj-f5b2a1eb-9b07_toolset_actions">
									<div id="_hj-f5b2a1eb-9b07_toolset_action_select"
										class="_hj-f5b2a1eb-9b07_transition">
										<span
											class="_hj-f5b2a1eb-9b07_icon _hj-f5b2a1eb-9b07_icon-select-element"></span>
										<div
											class="_hj-f5b2a1eb-9b07_toolset_tooltip _hj-f5b2a1eb-9b07_transition">Select
											an element on the page.</div>
									</div>
								</div>
							</div>
							<div class="_hj-f5b2a1eb-9b07_emotion_comment_footer"></div>
						</div>
					</div>
					<!-- STEP 2: EMAIL -->
					<div id="_hj-f5b2a1eb-9b07_state-2" data-state="email">
						<p class="_hj-f5b2a1eb-9b07_widget_title">false</p>
						<div class="_hj-f5b2a1eb-9b07_widget_content">
							<input maxlength="255" class="_hj-f5b2a1eb-9b07_input_field"
								type="email" id="_hj-f5b2a1eb-9b07_email"
								name="_hj-f5b2a1eb-9b07_email" placeholder="email@domain.com"
								data-bind="email">
						</div>
					</div>
					<!-- STEP 3: THANK YOU AND CONSENT -->
					<div id="_hj-f5b2a1eb-9b07_state-3" data-state="consent">
						<p class="_hj-f5b2a1eb-9b07_widget_title">Thank you for sharing
							your feedback with us!</p>
						<div class="_hj-f5b2a1eb-9b07_widget_content">
							<p class="_hj-f5b2a1eb-9b07_consent_message_text">
								Connecting your feedback with data related to your visits
								(device-specific, usage data, cookies, behavior and
								interactions) will help us improve faster. Do you give us your
								consent to do so for your previous and future visits?&nbsp;<a
									class="_hj-f5b2a1eb-9b07_more_info_link"
									href="https://www.hotjarconsent.com/" target="_blank"
									rel="noopener">More information</a>
							</p>
							<div class="_hj-f5b2a1eb-9b07_consent_actions">
								<button
									class="_hj-f5b2a1eb-9b07_btn_primary _hj-f5b2a1eb-9b07_rounded_corners"
									data-consent="false" type="button">
									<i class="_hj-f5b2a1eb-9b07_icon _hj-f5b2a1eb-9b07_icon-x"></i>
								</button>
								<button
									class="_hj-f5b2a1eb-9b07_btn_primary _hj-f5b2a1eb-9b07_rounded_corners"
									data-consent="true" type="button">
									<i class="_hj-f5b2a1eb-9b07_icon _hj-f5b2a1eb-9b07_icon-ok"></i>
								</button>
							</div>
						</div>
					</div>
					<!-- FOOTER -->
					<div class="_hj-f5b2a1eb-9b07_widget_footer">
						<div id="_hj-f5b2a1eb-9b07_hotjar_branding"
							class="_hj-f5b2a1eb-9b07_pull_left">
							<span
								class="_hj-f5b2a1eb-9b07_link_no_underline _hj-f5b2a1eb-9b07_icon _hj-f5b2a1eb-9b07_icon-hotjar"></span>
							Not using <a
								href="https://www.hotjar.com/incoming-feedback?utm_source=client&amp;utm_medium=incoming_feedback&amp;utm_campaign=insights"
								target="_blank">Hotjar</a> yet?
						</div>
						<div class="_hj-f5b2a1eb-9b07_pull_right">
							<button type="button" id="_hj-f5b2a1eb-9b07_action_skip"
								class="_hj-f5b2a1eb-9b07_btn_clear _hj-f5b2a1eb-9b07_rounded_corners _hj-f5b2a1eb-9b07_transition">Skip</button>
							<button type="button" id="_hj-f5b2a1eb-9b07_action_submit"
								class="_hj-f5b2a1eb-9b07_btn_primary _hj-f5b2a1eb-9b07_rounded_corners _hj-f5b2a1eb-9b07_transition _hj-f5b2a1eb-9b07_shadow _hj-f5b2a1eb-9b07_btn_disabled">Send</button>
						</div>
						<div class="_hj-f5b2a1eb-9b07_clear_both"></div>
					</div>
				</div>
				<!-- PAGE HIGHLIGHTER -->
				<div id="_hj-f5b2a1eb-9b07_feedback_page_highlight"
					class="_hj-f5b2a1eb-9b07_feedback_selection_ignore">
					<div
						class="_hj-f5b2a1eb-9b07_feedback_page_highlight_line _hj-f5b2a1eb-9b07_transition"
						id="_hj-f5b2a1eb-9b07_feedback_page_highlight_line_top"></div>
					<div
						class="_hj-f5b2a1eb-9b07_feedback_page_highlight_line _hj-f5b2a1eb-9b07_transition"
						id="_hj-f5b2a1eb-9b07_feedback_page_highlight_line_right"></div>
					<div
						class="_hj-f5b2a1eb-9b07_feedback_page_highlight_line _hj-f5b2a1eb-9b07_transition"
						id="_hj-f5b2a1eb-9b07_feedback_page_highlight_line_bottom"></div>
					<div
						class="_hj-f5b2a1eb-9b07_feedback_page_highlight_line _hj-f5b2a1eb-9b07_transition"
						id="_hj-f5b2a1eb-9b07_feedback_page_highlight_line_left"></div>
					<div id="_hj-f5b2a1eb-9b07_feedback_top_message_select">
						Select an element on the page. <a
							id="_hj-f5b2a1eb-9b07_feedback_top_message_select_close"
							class="_hj-f5b2a1eb-9b07_feedback_selection_ignore _hj-f5b2a1eb-9b07_transition">
							<span
							class="_hj-f5b2a1eb-9b07_icon _hj-f5b2a1eb-9b07_icon-x _hj-f5b2a1eb-9b07_feedback_selection_ignore"></span>
						</a>
					</div>
				</div>
				<!-- DIMMERS (OVERLAY) + ELEMENT HIGHLIGHTER -->
				<div class="_hj-f5b2a1eb-9b07_feedback_content_dimmer"
					id="_hj-f5b2a1eb-9b07_feedback_content_dimmer_top"
					data-show-for="desktop"></div>
				<div class="_hj-f5b2a1eb-9b07_feedback_content_dimmer"
					id="_hj-f5b2a1eb-9b07_feedback_content_dimmer_right"
					data-show-for="desktop"></div>
				<div class="_hj-f5b2a1eb-9b07_feedback_content_dimmer"
					id="_hj-f5b2a1eb-9b07_feedback_content_dimmer_bottom"
					data-show-for="desktop"></div>
				<div class="_hj-f5b2a1eb-9b07_feedback_content_dimmer"
					id="_hj-f5b2a1eb-9b07_feedback_content_dimmer_left"
					data-show-for="desktop"></div>
				<div id="_hj-f5b2a1eb-9b07_feedback_content_highlighter"
					data-show-for="desktop">
					<a id="_hj-f5b2a1eb-9b07_feedback_content_highlighter_close"> <span
						class="_hj-f5b2a1eb-9b07_icon _hj-f5b2a1eb-9b07_icon-x _hj-f5b2a1eb-9b07_feedback_selection_ignore"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div id="free_vpn_container">
		<div class="free-vpn_wrap">
			<div class="free-vpn_rate-popup">
				<div class="free-vpn_close-btn">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						viewBox="0 0 512 512" style="enable-background: new 0 0 512 512;"
						xml:space="preserve">                            <g>                                <g>                                    <path
							fill="#afafaf"
							d="M505.943,6.058c-8.077-8.077-21.172-8.077-29.249,0L6.058,476.693c-8.077,8.077-8.077,21.172,0,29.249                                        C10.096,509.982,15.39,512,20.683,512c5.293,0,10.586-2.019,14.625-6.059L505.943,35.306                                        C514.019,27.23,514.019,14.135,505.943,6.058z"></path>                                </g>                            </g>                            <g>                                <g>                                    <path
							fill="#afafaf"
							d="M505.942,476.694L35.306,6.059c-8.076-8.077-21.172-8.077-29.248,0c-8.077,8.076-8.077,21.171,0,29.248l470.636,470.636                                        c4.038,4.039,9.332,6.058,14.625,6.058c5.293,0,10.587-2.019,14.624-6.057C514.018,497.866,514.018,484.771,505.942,476.694z"></path>                                </g>                            </g>                        </svg>
				</div>
				<div class="free-vpn_logo"></div>
				<div class="free-vpn_title">Free VPN</div>
				<div class="free-vpn_text">Enjoyed our app? Give us 5 stars!</div>
				<div class="free-vpn_stars">
					<svg xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
						id="Capa_1" x="0px" y="0px" width="512px" height="512px"
						viewBox="0 0 46.354 46.354"
						style="enable-background: new 0 0 46.354 46.354;"
						xml:space="preserve">
						<g>
						<g>                            <path
							d="M21.57,2.049c0.303-0.612,0.927-1,1.609-1c0.682,0,1.307,0.388,1.609,1l5.771,11.695c0.261,0.529,0.767,0.896,1.352,0.981   L44.817,16.6c0.677,0.098,1.237,0.572,1.448,1.221c0.211,0.649,0.035,1.363-0.454,1.839l-9.338,9.104   c-0.423,0.412-0.616,1.006-0.517,1.588l2.204,12.855c0.114,0.674-0.161,1.354-0.715,1.756c-0.553,0.4-1.284,0.453-1.89,0.137   l-11.544-6.07c-0.522-0.275-1.147-0.275-1.67,0l-11.544,6.069c-0.604,0.317-1.337,0.265-1.89-0.136   c-0.553-0.401-0.829-1.082-0.714-1.756l2.204-12.855c0.1-0.582-0.094-1.176-0.517-1.588L0.542,19.66   c-0.489-0.477-0.665-1.19-0.454-1.839c0.211-0.649,0.772-1.123,1.449-1.221l12.908-1.875c0.584-0.085,1.09-0.452,1.351-0.982   L21.57,2.049z"
							data-original="#000000" class="active-path"
							data-old_color="#000000" fill="#FFD325"></path>                        </g></g> </svg>
					<svg xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
						id="Capa_1" x="0px" y="0px" width="512px" height="512px"
						viewBox="0 0 46.354 46.354"
						style="enable-background: new 0 0 46.354 46.354;"
						xml:space="preserve">
						<g>
						<g>                            <path
							d="M21.57,2.049c0.303-0.612,0.927-1,1.609-1c0.682,0,1.307,0.388,1.609,1l5.771,11.695c0.261,0.529,0.767,0.896,1.352,0.981   L44.817,16.6c0.677,0.098,1.237,0.572,1.448,1.221c0.211,0.649,0.035,1.363-0.454,1.839l-9.338,9.104   c-0.423,0.412-0.616,1.006-0.517,1.588l2.204,12.855c0.114,0.674-0.161,1.354-0.715,1.756c-0.553,0.4-1.284,0.453-1.89,0.137   l-11.544-6.07c-0.522-0.275-1.147-0.275-1.67,0l-11.544,6.069c-0.604,0.317-1.337,0.265-1.89-0.136   c-0.553-0.401-0.829-1.082-0.714-1.756l2.204-12.855c0.1-0.582-0.094-1.176-0.517-1.588L0.542,19.66   c-0.489-0.477-0.665-1.19-0.454-1.839c0.211-0.649,0.772-1.123,1.449-1.221l12.908-1.875c0.584-0.085,1.09-0.452,1.351-0.982   L21.57,2.049z"
							data-original="#000000" class="active-path"
							data-old_color="#000000" fill="#FFD325"></path>                        </g></g> </svg>
					<svg xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
						id="Capa_1" x="0px" y="0px" width="512px" height="512px"
						viewBox="0 0 46.354 46.354"
						style="enable-background: new 0 0 46.354 46.354;"
						xml:space="preserve">
						<g>
						<g>                            <path
							d="M21.57,2.049c0.303-0.612,0.927-1,1.609-1c0.682,0,1.307,0.388,1.609,1l5.771,11.695c0.261,0.529,0.767,0.896,1.352,0.981   L44.817,16.6c0.677,0.098,1.237,0.572,1.448,1.221c0.211,0.649,0.035,1.363-0.454,1.839l-9.338,9.104   c-0.423,0.412-0.616,1.006-0.517,1.588l2.204,12.855c0.114,0.674-0.161,1.354-0.715,1.756c-0.553,0.4-1.284,0.453-1.89,0.137   l-11.544-6.07c-0.522-0.275-1.147-0.275-1.67,0l-11.544,6.069c-0.604,0.317-1.337,0.265-1.89-0.136   c-0.553-0.401-0.829-1.082-0.714-1.756l2.204-12.855c0.1-0.582-0.094-1.176-0.517-1.588L0.542,19.66   c-0.489-0.477-0.665-1.19-0.454-1.839c0.211-0.649,0.772-1.123,1.449-1.221l12.908-1.875c0.584-0.085,1.09-0.452,1.351-0.982   L21.57,2.049z"
							data-original="#000000" class="active-path"
							data-old_color="#000000" fill="#FFD325"></path>                        </g></g> </svg>
					<svg xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
						id="Capa_1" x="0px" y="0px" width="512px" height="512px"
						viewBox="0 0 46.354 46.354"
						style="enable-background: new 0 0 46.354 46.354;"
						xml:space="preserve">
						<g>
						<g>                            <path
							d="M21.57,2.049c0.303-0.612,0.927-1,1.609-1c0.682,0,1.307,0.388,1.609,1l5.771,11.695c0.261,0.529,0.767,0.896,1.352,0.981   L44.817,16.6c0.677,0.098,1.237,0.572,1.448,1.221c0.211,0.649,0.035,1.363-0.454,1.839l-9.338,9.104   c-0.423,0.412-0.616,1.006-0.517,1.588l2.204,12.855c0.114,0.674-0.161,1.354-0.715,1.756c-0.553,0.4-1.284,0.453-1.89,0.137   l-11.544-6.07c-0.522-0.275-1.147-0.275-1.67,0l-11.544,6.069c-0.604,0.317-1.337,0.265-1.89-0.136   c-0.553-0.401-0.829-1.082-0.714-1.756l2.204-12.855c0.1-0.582-0.094-1.176-0.517-1.588L0.542,19.66   c-0.489-0.477-0.665-1.19-0.454-1.839c0.211-0.649,0.772-1.123,1.449-1.221l12.908-1.875c0.584-0.085,1.09-0.452,1.351-0.982   L21.57,2.049z"
							data-original="#000000" class="active-path"
							data-old_color="#000000" fill="#FFD325"></path>                        </g></g> </svg>
					<svg xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
						id="Capa_1" x="0px" y="0px" width="512px" height="512px"
						viewBox="0 0 46.354 46.354"
						style="enable-background: new 0 0 46.354 46.354;"
						xml:space="preserve">
						<g>
						<g>                            <path
							d="M21.57,2.049c0.303-0.612,0.927-1,1.609-1c0.682,0,1.307,0.388,1.609,1l5.771,11.695c0.261,0.529,0.767,0.896,1.352,0.981   L44.817,16.6c0.677,0.098,1.237,0.572,1.448,1.221c0.211,0.649,0.035,1.363-0.454,1.839l-9.338,9.104   c-0.423,0.412-0.616,1.006-0.517,1.588l2.204,12.855c0.114,0.674-0.161,1.354-0.715,1.756c-0.553,0.4-1.284,0.453-1.89,0.137   l-11.544-6.07c-0.522-0.275-1.147-0.275-1.67,0l-11.544,6.069c-0.604,0.317-1.337,0.265-1.89-0.136   c-0.553-0.401-0.829-1.082-0.714-1.756l2.204-12.855c0.1-0.582-0.094-1.176-0.517-1.588L0.542,19.66   c-0.489-0.477-0.665-1.19-0.454-1.839c0.211-0.649,0.772-1.123,1.449-1.221l12.908-1.875c0.584-0.085,1.09-0.452,1.351-0.982   L21.57,2.049z"
							data-original="#000000" class="active-path"
							data-old_color="#000000" fill="#FFD325"></path>                        </g></g> </svg>
				</div>
				<a class="free-vpn_rate-btn" target="_blank"
					href="https://chrome.google.com/webstore/detail/free-vpn-the-fastest-vpn/nkomfibbgccdjcahcpleidblgknecfhh/reviews">Rate
					VPN</a>
			</div>
		</div>
	</div>
	<script>window.__vidChanged = function(state){if(state === 1) {document.body.dispatchEvent(new Event('vidChanged'))}}
if(document.querySelector('#movie_player')){document.querySelector('#movie_player').addEventListener('onStateChange', '__vidChanged');}</script>
</body>
<iframe id="google_esf" name="google_esf"
	src="./rvcongty_files/zrt_lookup.html"
	data-ad-client="ca-pub-4277948410104697" style="display: none;"></iframe>
</html>