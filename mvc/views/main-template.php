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

<meta property="og:url" content="https://rvcongty.com">
<link rel="canonical" href="https://rvcongty.com/">

<meta property="og:image"
	content="https://reviewcongty.com/images/banner.jpg">
<meta property="og:locale" content="vi_VN">
<meta property="og:site_name" content="Review Công ty">
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
	href="<?php echo $servername ?>/mvc/public/css/bulma.min.css">
<link href="<?php echo $servername ?>/mvc/public/css/css" rel="stylesheet">
<link rel="stylesheet" as="style" crossorigin="anonymous"
	href="<?php echo $servername ?>/mvc/public/css/jquery-ui.min.css">
<link rel="preload stylesheet" as="style" crossorigin="anonymous"
    href="https://cdnjs.cloudflare.com/ajax/libs/JavaScript-autoComplete/1.0.4/auto-complete.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $servername ?>/mvc/public/css/style.css" />
<link rel="preload stylesheet" as="style" crossorigin="anonymous"
    href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo $servername ?>/mvc/public/js/timeago.locales.min.js"></script>
<script type="text/javascript" src="<?php echo $servername ?>/mvc/public/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo $servername ?>/mvc/public/js/config.js"></script>   
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
	background-image: linear-gradient(to top, #e6e9f0 0%, #eef1f5 100%);
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
<script type="text/javascript" async="" src="<?php echo $servername ?>/mvc/public/js/js"></script>
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
    color: #000!important;
	border: none;
}

</style>
</head>

<body>
	<nav class="main-nav navbar" role="navigation"
		aria-label="main navigation">
		<div class="container">
			<div class="logo" data-no-instant="">
				<a href="<?php echo $servername ?>"> <img class="logo__img"
					src="https://reviewcongty.com/images/logo/logo_transparent.png" alt="">
				</a>
				<h1 class="logo__header has-text-white is-size-5">
					<a href="<?php echo $servername ?>"> RV Công ty </a>
				</h1>
			</div>
		</div>
	</nav>


	<div class="container main-container"
		style="height: auto !important; min-height: 0px !important;">
		<?php require_once "./mvc/views/pages/" . $data["Page"] . ".php"?>
	</div>


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
                    url: SiteName+"/tim-kiem/cong-ty/",
                    dataType: "json",
                    data: {
                    	tencongty: e.term
                    },
                    success: function(e) {
                        t($.map(e, function(e) {
                            var t = SiteName+"/cong-ty/" + e.slugcongty + "-" + e.id + "/";
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
            alert(search);
            const re = new RegExp("(" + search.split(' ').join('|') + ")", "gi");
            var normalLabel =  item.label;
            var boldLabel = normalLabel.replace(re, "<b>"+item.term+"</b>");
            $span.append(boldLabel);
            $childDiv.append($figure).append($span);    

            return $childDiv.appendTo(div);
          };
        
    });
    </script>
</body>
</html>