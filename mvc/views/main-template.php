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
<script type="text/javascript" src="<?php echo $servername ?>/mvc/public/js/timeago.locales.min.js"></script>
<link rel="preload stylesheet" as="style" crossorigin="anonymous"
	href="<?php echo $servername ?>/mvc/public/css/bulma.min.css">
<link href="<?php echo $servername ?>/mvc/public/css/css" rel="stylesheet">
<link rel="preload stylesheet" as="style" crossorigin="anonymous"
	href="https://cdnjs.cloudflare.com/ajax/libs/JavaScript-autoComplete/1.0.4/auto-complete.min.css"
	integrity="sha256-GHbWr7miG/WXEsrIb47MsX3KBJa9FTyi5ZMYr4XDHAQ=">
<link rel="stylesheet" type="text/css" href="<?php echo $servername ?>/mvc/public/css/style.css" />
<link rel="preload stylesheet" as="style" crossorigin="anonymous"
    href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   
<style type="text/css" id="less:stylesheets-style">
@media screen and (min-width: 769px) {
	.columns{
        display: flex;
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
	background: #fafafa;
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
		height: 220px;
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
    bottom: 80px;
    left: calc((100vw - 800px)/2);
    width: 800px;
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
}

.companies {
    background-color: #fafafa;
    color: #4a4a4a;
    max-width: 100%;
    position: relative;
    padding: 0.3rem 0 0 0;
}
.tabs{
	border: 1px solid #A8E4FC !important;
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
	background: #F5FCFF;
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
		</div>
	</div>
	 <script type="text/javascript">
	 var nodes = document.querySelectorAll(".needs_to_be_rendered");
	 timeago.render(nodes, "vi"), timeago.cancel();
    </script>
</body>
</html>