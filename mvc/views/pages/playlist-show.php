<style>
body {
	background: #222 !important;
}

.video-main-content {
	width: 100%;
	margin-bottom: 20px;
}

.video-main-iframe {
	margin-bottom: 10px;
	height: 465px;
}

@media screen and (max-width: 769px) {
	.video-main-iframe {
		height: 315px;
	}
	.player-col, .playlist-col {
		padding: 0px;
	}
	.video-main-content .video-title, .video-main-content .video-info{
		padding-left: 0.75rem;
		padding-right: 0.75rem;
    }
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

.video-main-content .video-title {
	font-size: 130%;
	font-weight: 500;
	color: #fff;
	padding-top: 0px;
	text-transform: uppercase;
}

.playlist-container {
	background-color: #111;
	max-height: 530px;
}

.container-scroll {
	overflow: auto;
}

.playlist-container .video-main-more-list-header {
	background-color: #111;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-orient: vertical;
	-webkit-box-direction: normal;
	-ms-flex-direction: column;
	flex-direction: column;
	-webkit-box-align: start;
	-ms-flex-align: start;
	align-items: flex-start;
	padding: 10px 30px;
	margin-bottom: 10px;
}

.playlist-container .video-list-vertical .video-item {
	border-top: 0px;
	width: 100%;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-orient: horizontal;
	-webkit-box-direction: normal;
	-ms-flex-direction: row;
	flex-direction: row;
	padding: 0px;
	padding-left: 20px;
	position: relative;
}

.playlist-container .video-list-vertical .video-item .video-img {
	width: 100px;
	height: calc(100px * 9/ 16);
	margin-right: 10px;
	margin-bottom: 0px;
}

.video-item.playing::before {
	position: absolute;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
	left: 0px;
	content: "";
	width: 0px;
	height: 0px;
	border: 7px solid transparent;
	border-left-width: 13px;
	border-left-color: #999;
}

.video-item .video-time {
	position: absolute;
	bottom: 5px;
	left: 60px;
	background-color: rgba(0, 0, 0, 0.8);
	border-radius: 3px;
	padding: 2px 5px;
	color: #fff;
	font-weight: 500;
	font-size: 90%;
}

.video-item .media-body {
	width: 100%;
}

.video-item .title {
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
	color: #fff;
}

.video-info {
	color: #999;
}

.video-item

 

.video-info

 

.video-info-item


:not

 

(
:last-child

 

)
{
margin-right


:

 

20
px


;
}
.video-item .video-info .video-info-item {
	font-size: 90%;
	color: #666;
	position: relative;
}

.dark-mode .video-info .video-info-item:not (:first-child )::after {
	background-color: #999;
}

.mb-2 {
	margin-bottom: 0.5rem !important;
}

.playlist-container .video-main-more-list-header .title {
	color: #fff;
	font-size: 120%;
}

.sticky-top {
	position: -webkit-sticky;
	position: sticky;
	top: 0;
	z-index: 1020;
}

/* width */
::-webkit-scrollbar {
	width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
	background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
	background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
	background: #555;
}

.breadcrumb a {
	align-items: center;
	color: #fff;
	display: flex;
	justify-content: center;
	padding: 0 .75em;
}

.breadcrumb ul li.is-active a {
	color: #fff;
}

.breadcrumb a:hover {
    color: #e86b1f;
}

.video-info-item i {
	margin-right: 3px;
}
</style>
<section id="divCenter" class="video-container">
<?php $currentVideoId = -1;
      $indexVideo = 0;
?>
<?php while ($row = mysqli_fetch_array($data["Playlist"])){ 
    $currentVideoId = $row["id"];
    if($indexVideo == 0){
?>
	<nav class="breadcrumb m-b-10 m-t-10" aria-label="breadcrumbs">
		<ul>
			<li><a href="<?php echo $servername ?>"> <span class="icon is-small">
						<i class="fas fa-home" aria-hidden="true"></i>
				</span> <span>Trang chủ</span>
			</a></li>
			<li><a href="<?php echo $servername ?>/videos/"><span>Videos</span> </a></li>
			<li class="is-active"><a href="#"> <span><?php echo $row["tieudevideo"]?></span>
			</a></li>
		</ul>
	</nav>
	<div class="container">
		<div class="video-main ng-scope" id="video-main">
			<div class="columns">
				<div class="column is-two-thirds player-col">
					<div class="video-main-content">
						<div class="video-main-iframe">
							<div class="embed-responsive embed-responsive-16by9"
								compile="stringHTMLIframe">
								<iframe width="560" height="315"
									src="https://www.youtube.com/embed/<?php echo $row["videoid"] ?>"
									frameborder="0"
									allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
									allowfullscreen></iframe>
							</div>
						</div>
						<h1 class="video-title ng-binding"><?php echo $row["tieudevideo"] ?></h1>
						<div class="video-info">
							<span class="mr-auto ng-binding"><?php echo $row["luotxem"] ?> lượt xem</span>
						</div>
					</div>
				</div>
				<div class="column playlist-col">
					<div
						class="video-main-more-list playlist-container container-scroll mb-5">
						<div class="video-main-more-list-header sticky-top">
							<div class="d-flex mb-2">
								<span class="title ng-binding"><?php echo $data["Title"] ?></span>
							</div>
						</div>
						<div class="video-list video-list-vertical">
						<?php while ($row2 = mysqli_fetch_array($data["Playlist2"])) {?>
							<div ng-repeat="item in listPlaylistVideo"
								class="video-item media <?php if($row2["id"] == $currentVideoId) echo "playing" ?>">
								<a class="video-img"
									href="<?php echo $servername ?>/videos/<?php echo $row2["slugvideo"] ?>-<?php echo $row2["id"] ?>"
									title="<?php echo $row2["tieudevideo"] ?>"> <img
									ng-src="https://img.youtube.com/vi/<?php echo $row2["videoid"]; ?>/hqdefault.jpg"
									alt="<?php echo $row2["tieudevideo"] ?>"
									src="https://img.youtube.com/vi/<?php echo $row2["videoid"]; ?>/hqdefault.jpg">
									<span class="video-time ng-binding ng-scope"><?php echo $row2["thoiluong"]; ?></span>
								</a>
								<div class="media-body">
									<h3 class="title">
										<a class="ng-binding"
											href="<?php echo $servername ?>/videos/<?php echo $row2["slugvideo"] ?>-<?php echo $row2["id"] ?>"><?php echo $row2["tieudevideo"] ?></a>
									</h3>
									<div class="video-info">
										<span class="video-info-item ng-binding ng-scope"><i
											class="fa fa-eye"></i><?php echo $row2["luotxem"] ?> lượt xem</span>
										<span class="video-info-item ng-binding ng-scope"><?php
        $date = date_create($row2["thoigian"]);
        echo date_format($date, "d/m/Y");
        ?></span>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $indexVideo++;?>
	<?php } ?>
	<?php } ?>
</section>
