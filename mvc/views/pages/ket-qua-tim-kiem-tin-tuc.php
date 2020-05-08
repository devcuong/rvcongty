<style>
.news-item {
    border: 1px solid #71bf44;
    padding-left: 10px;
}
.news {
    margin-bottom: .625rem;
}
.news .news-title {
    font-family: 'Anton', sans-serif;
    font-size: 125%;
    font-weight: 400;
    display: block;
    margin-bottom: .25rem;
}
.news .news-title a {
    color: #e86b1f;
    font-weight: 600;
}
.news .news-posted{
    color: #888;
    font-size: 80%;
    margin-bottom: .5rem;
}
.news .news-posted span{
    margin-right: 5px;
}
.news-posted .origin {
    color: #FF9800;
}
.origin a {
    color: #71bf44;
}
.news-posted i, .news .news-posted i, .news-right .news-posted i {
    margin-right: 3px;
}
.news .news-img {
    width: 250px;
    margin-right: .625rem;
}
.news .news-img>img {
    max-width: 100%;
}
.news .news-desc {
    font-weight: 400;
}
.news .news-desc {
    color: #555;
    margin-bottom: 0;
}
</style>
<div class="columns">
	<div class="column is-two-thirds">
		<p class="title-news">KẾT QUẢ - TÌM THẤY <?php echo mysqli_num_rows ( $data["AllKetQua"] );?> KẾT QUẢ PHÙ HỢP</p>
<?php while ($AllKetQua = mysqli_fetch_array($data["AllKetQua"])){ ?>
<div class="news box-border news-item">
			<h2 class="news-title">
				<a target="_self" title="<?php echo $AllKetQua["tieude"] ?>"
					href="<?php echo $servername ?>/companies-news/<?php echo $AllKetQua["slugtieude"] ?>-<?php echo $AllKetQua["id"] ?>"><?php echo $AllKetQua["tieude"] ?></a>
			</h2>
			<p class="news-posted">
				<span class="origin"><a title="Autopro"
					href="https://dailyxe.com.vn/autopro-autopro.com.vn-1w.html"><?php echo $AllKetQua["nguon"] ?></a></span>
				<span><i class="fa fa-eye"></i><?php echo $AllKetQua["luotxem"] ?></span>
			</p>
			<div class="media">
				<a class="news-img"
					href="<?php echo $servername ?>/companies-news/<?php echo $AllKetQua["slugtieude"] ?>-<?php echo $NewsStartup["id"] ?>">
					<img class="lazy-loading-image loaded" style="width: 100%"
					src="<?php echo $servername ?>/mvc/public/asset/news/<?php echo $AllKetQua["thumbnail"]?>"
					alt="<?php echo $AllKetQua["tieude"] ?>">
				</a>
				<div class="media-body">
					<h4 class="news-desc"><?php echo $AllKetQua["motangan"] ?></h4>
				</div>
			</div>
		</div>
<?php } ?>
</div>
</div>