<style>


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