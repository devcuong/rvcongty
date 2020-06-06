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
<div class="card box-right box-border box-bottom is-hidden-desktop">
	<h3 class="card-header">TÌM KIẾM</h3>
	<div class="wrap">
		<form
			action="<?php echo $servername ?>/tim-kiem/<?php if($data["Page"] == "news" || $data["Page"] == "news-detail" || $data["Page"] == "news" || $data["Page"] == "ket-qua-tim-kiem-tin-tuc") echo "news"; else echo "videos" ?>"
			method="post" style="width: 100%">
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