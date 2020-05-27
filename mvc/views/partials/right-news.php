<style>
.wrap {
	margin: 20px;
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
	<h3 class="card-header">Tin tức xem nhiều</h3>
	<div class="card-block">
						<?php
    while ($row = mysqli_fetch_array($data["NewsXemNhieuNhat"])) {
        ?>
		<div class="news-right">
			<div class="media">
				<a class="news-right-img" target="_self"
					title="<?php echo $row["tieude"] ?>"
					href="<?php echo $servername ?>/news/<?php echo $row["slugtieude"] ?>-<?php echo $row["id"] ?>">
					<img class="lazy-loading-image loaded"
					src="<?php echo $servername ?>/mvc/public/asset/news/<?php echo $row["thumbnail"] ?>"
					alt="<?php echo $row["tieude"] ?>"
					data-pin-nopin="true">
				</a>
				<div class="media-body">
					<h3 class="news-right-title">
						<a target="_self"
							title="<?php echo $row["tieude"] ?>"
							href="<?php echo $servername ?>/news/<?php echo $row["slugtieude"] ?>-<?php echo $row["id"] ?>"><?php echo $row["tieude"] ?></a>
					</h3>
					<p class="news-posted">
						<span class="origin"><a title="<?php echo $row["tieude"] ?>"
							href="<?php echo $row["webnguon"] ?>"><?php echo $row["nguon"] ?></a></span>
						<span><i class="fa fa-eye"></i><?php echo $row["luotxem"] ?></span>
					</p>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>