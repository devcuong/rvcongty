<style>
.wrap {
	margin: 10px;
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
			<h3 class="card-header">TÌM KIẾM</h3>
			<div class="wrap">
			<form action="<?php echo $servername ?>/tim-kiem/news" method="post" style="width:100%">
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