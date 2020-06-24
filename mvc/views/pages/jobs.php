<link href="https://fonts.googleapis.com/css?family=Lato:400,600,700"
	rel="stylesheet" />
<link href="<?php echo $servername ?>/mvc/public/css/search.css"
	rel="stylesheet" />
<style>
.job-list {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;
}

.job-wraper {
	flex-shrink: 0;
	height: 100%;
	position: relative;
	width: 20%;
	padding-left: 10px;
	padding-right: 10px;
	margin-bottom: 20px;
	border-top: 0px !important;
	margin-top: 0px !important;
	padding-top: 1rem;
	display: -ms-flexbox;
	display: -webkit-box;
	display: flex;
	-ms-flex-align: start;
	-webkit-box-align: start;
	align-items: flex-start;
}

.job-wraper .job-item:hover {
	box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.1)
}

.job-wraper .job-item {
	width: 100%;
	border: 1px solid #e4e4e4;
}

@media screen and (max-width: 769px) {
	.job-wraper {
		width: 100%;
	}
}

@media ( min-width : 768px) and (max-width: 1024px) {
	.job-wraper {
		width: 50%;
	}
}

.job-item .job-image {
	position: relative;
	display: flex;
	justify-content: center;
}

.job-item .bg-image {
	width: 100%;
	height: 100px;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}

.job-item .content {
	color: #333;
	padding: 12px;
	font-size: 13px;
	line-height: 20px;
}

.job-item .job-image>a {
	display: flex;
	justify-content: center;
	width: 100%;
}

.job-item .content-item {
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	margin-bottom: 2px;
}

.job-item .heading {
	font-size: 15px;
	font-weight: 600;
	height: 40px;
	overflow: hidden;
	line-height: 18px;
	letter-spacing: normal;
	margin-bottom: 0;
	text-transform: none;
}

.job-item .content-item-company {
	color: #333;
	font-weight: 600;
}

.job-item .content-item-location {
	color: #666;
}

.job-item .salary {
	color: #f7941d;
	font-weight: 500;
	font-size: inherit;
	line-height: 19px;
	text-decoration: none;
}

.job-item .salary a {
	color: inherit;
}

.all-ribbon {
	position: absolute;
	top: 0;
	left: 0px;
	filter: drop-shadow(2px 0px 1px rgba(0, 0, 0, 0.5));
}

.ribbon-product {
	background: rgba(255, 255, 255, 1);
	min-height: 50px;
}

.ribbon-end {
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 20px 100px 0 0;
	border-color: rgba(255, 255, 255, 1) transparent transparent transparent;
}
.s009 form .inner-form .basic-search{
	display: flex;
}
.basic-search .input-search{
	width: 40% !important;
}
.basic-search .select-location{
	width: 20% !important;
}
.basic-search .select-category{
	width: 20% !important;
}
</style>
<script>
$(document).ready(function(){
  $("#hide-search").click(function(){
    $("#advanced-search-section").hide();
    $("#hide-search").hide();
    $("#show-search").show();
  });
  $("#show-search").click(function(){
    $("#advanced-search-section").show();
    $("#show-search").hide();
    $("#hide-search").show();
  });
});
</script>
<div class="job-container">
	<div class="s009">
		<form>
			<div class="inner-form">
				<div class="basic-search">
					<div class="input-field input-search">
						<input id="search" type="text" placeholder="Type Keywords" />
						<div class="icon-wrap">
							<svg class="svg-inline--fa fa-search fa-w-16" fill="#ccc"
								aria-hidden="true" data-prefix="fas" data-icon="search"
								role="img" xmlns="http://www.w3.org/2000/svg"
								viewBox="0 0 512 512">
                  <path
									d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                </svg>
						</div>
					</div>
					<div class="input-field select-location">
							<div class="input-select">
								<select data-trigger="" name="choices-single-defaul">
									<option placeholder="" value="">Accessories</option>
									<option>Subject b</option>
									<option>Subject c</option>
								</select>
							</div>
						</div>
						<div class="input-field select-category">
							<div class="input-select">
								<select data-trigger="" name="choices-single-defaul">
									<option placeholder="" value="">Accessories</option>
									<option>Subject b</option>
									<option>Subject c</option>
								</select>
							</div>
						</div>
				</div>
				<div class="advance-search">
					<div class="row">
						<div class="input-field">
							<div class="input-select">
								<select data-trigger="" name="choices-single-defaul">
									<option placeholder="" value="">Accessories</option>
									<option>Subject b</option>
									<option>Subject c</option>
								</select>
							</div>
						</div>
						<div class="input-field">
							<div class="input-select">
								<select data-trigger="" name="choices-single-defaul">
									<option placeholder="" value="">Color</option>
									<option>Subject b</option>
									<option>Subject c</option>
								</select>
							</div>
						</div>
						<div class="input-field">
							<div class="input-select">
								<select data-trigger="" name="choices-single-defaul">
									<option placeholder="" value="">Size</option>
									<option>Subject b</option>
									<option>Subject c</option>
								</select>
							</div>
						</div>
						<div class="input-field">
							<div class="group-btn">
								<button class="btn-search">SEARCH</button>
							</div>
						</div>
					</div>
					<div class="row third">
						<div class="input-field">
							<div class="result-count">
								<a id="show-search">Chọn tìm kiếm nâng cao</a> <a
									id="hide-search">Ẩn tìm kiếm nâng cao</a>
							</div>

						</div>
					</div>
					<div class="row second" id="advanced-search-section">
						<div class="input-field">
							<div class="input-select">
								<select data-trigger="" name="choices-single-defaul">
									<option placeholder="" value="">Sale</option>
									<option>Subject b</option>
									<option>Subject c</option>
								</select>
							</div>
						</div>
						<div class="input-field">
							<div class="input-select">
								<select data-trigger="" name="choices-single-defaul">
									<option placeholder="" value="">Time</option>
									<option>Last time</option>
									<option>Today</option>
									<option>This week</option>
									<option>This month</option>
									<option>This year</option>
								</select>
							</div>
						</div>
						<div class="input-field">
							<div class="input-select">
								<select data-trigger="" name="choices-single-defaul">
									<option placeholder="" value="">Type</option>
									<option>Subject b</option>
									<option>Subject c</option>
								</select>
							</div>
						</div>
					</div>

				</div>
			</div>
		</form>
		<script src="<?php echo $servername ?>/mvc/public/js/choices.js"></script>
		<script>
      const customSelects = document.querySelectorAll("select");
      const deleteBtn = document.getElementById('delete')
      const choices = new Choices('select',
      {
        searchEnabled: false,
        itemSelectText: '',
        removeItemButton: true,
      });
      deleteBtn.addEventListener("click", function(e)
      {
        e.preventDefault()
        const deleteAll = document.querySelectorAll('.choices__button')
        for (let i = 0; i < deleteAll.length; i++)
        {
          deleteAll[i].click();
        }
      });
    </script>
	</div>
	<div class="job-list">
		<div class="job-wraper">
			<div class="job-item">
				<div class="job-image">
					<a href="#" title="Construction Manager" target="_blank"><div
							class="bg-image" role="img"
							aria-label="Jotun Paints (Vietnam) Co., Ltd. tuyển dụng - Tìm việc mới nhất, lương thưởng hấp dẫn."
							style="background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(216, 216, 216, 0) 34%, rgba(0, 0, 0, 0) 66%, rgba(0, 0, 0, 0.1) 100%), url(&quot;<?php echo $servername ?>/mvc/public/images/banner-jobs.png&quot;);"></div>
					</a>
				</div>
				<div class="content">
					<div class="job-desc">
						<div class="heading">
							<a href="#" title="Construction Manager" target="_blank">Construction
								Manager</a>
						</div>
						<div class="content-item content-item-company"
							title="Jotun Paints (Vietnam) Co., Ltd.">Jotun Paints (Vietnam)
							Co., Ltd.</div>
						<div class="content-item content-item-location"
							title="Bình Dương, Hồ Chí Minh">Bình Dương, Hồ Chí Minh</div>
						<div class="content-item">
							<div class="salary">
								<a href="#" title="Đăng nhập để xem lương">Đăng nhập để xem
									lương</a>
							</div>
						</div>
						<div class="content-action">
							<div class="content-item content-item-expiredDate"
								title="Hết hạn trong 17 ngày">Hết hạn trong 17 ngày</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="job-wraper">
			<div class="job-item">
				<div class="job-image">
					<a href="#" title="Construction Manager" target="_blank"><div
							class="bg-image" role="img"
							aria-label="Jotun Paints (Vietnam) Co., Ltd. tuyển dụng - Tìm việc mới nhất, lương thưởng hấp dẫn."
							style="background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(216, 216, 216, 0) 34%, rgba(0, 0, 0, 0) 66%, rgba(0, 0, 0, 0.1) 100%), url(&quot;<?php echo $servername ?>/mvc/public/images/banner-jobs.png&quot;);"></div>
					</a>
					<div class="all-ribbon">
						<div class="ribbon-product">
							<span><img
								src="https://cdn.dailyxe.com.vn/image/ford-viet-nam-33523j1.jpg"
								alt="" class="ribbon-logo"></span>
						</div>
						<div class="ribbon-end">
							<!--day la shape khong co content-->
						</div>
					</div>
				</div>
				<div class="content">
					<div class="job-desc">
						<div class="heading">
							<a href="#" title="Construction Manager" target="_blank">Construction
								Manager</a>
						</div>
						<div class="content-item content-item-company"
							title="Jotun Paints (Vietnam) Co., Ltd.">Jotun Paints (Vietnam)
							Co., Ltd.</div>
						<div class="content-item content-item-location"
							title="Bình Dương, Hồ Chí Minh">Bình Dương, Hồ Chí Minh</div>
						<div class="content-item">
							<div class="salary">
								<a href="#" title="Đăng nhập để xem lương">Đăng nhập để xem
									lương</a>
							</div>
						</div>
						<div class="content-action">
							<div class="content-item content-item-expiredDate"
								title="Hết hạn trong 17 ngày">Hết hạn trong 17 ngày</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="job-wraper">
			<div class="job-item">
				<div class="job-image">
					<a href="#" title="Construction Manager" target="_blank"><div
							class="bg-image" role="img"
							aria-label="Jotun Paints (Vietnam) Co., Ltd. tuyển dụng - Tìm việc mới nhất, lương thưởng hấp dẫn."
							style="background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(216, 216, 216, 0) 34%, rgba(0, 0, 0, 0) 66%, rgba(0, 0, 0, 0.1) 100%), url(&quot;<?php echo $servername ?>/mvc/public/images/banner-jobs.png&quot;);"></div>
					</a>
				</div>
				<div class="content">
					<div class="job-desc">
						<div class="heading">
							<a href="#" title="Construction Manager" target="_blank">Construction
								Manager</a>
						</div>
						<div class="content-item content-item-company"
							title="Jotun Paints (Vietnam) Co., Ltd.">Jotun Paints (Vietnam)
							Co., Ltd.</div>
						<div class="content-item content-item-location"
							title="Bình Dương, Hồ Chí Minh">Bình Dương, Hồ Chí Minh</div>
						<div class="content-item">
							<div class="salary">
								<a href="#" title="Đăng nhập để xem lương">Đăng nhập để xem
									lương</a>
							</div>
						</div>
						<div class="content-action">
							<div class="content-item content-item-expiredDate"
								title="Hết hạn trong 17 ngày">Hết hạn trong 17 ngày</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="job-wraper">
			<div class="job-item">
				<div class="job-image">
					<a href="#" title="Construction Manager" target="_blank"><div
							class="bg-image" role="img"
							aria-label="Jotun Paints (Vietnam) Co., Ltd. tuyển dụng - Tìm việc mới nhất, lương thưởng hấp dẫn."
							style="background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(216, 216, 216, 0) 34%, rgba(0, 0, 0, 0) 66%, rgba(0, 0, 0, 0.1) 100%), url(&quot;<?php echo $servername ?>/mvc/public/images/banner-jobs.png&quot;);"></div>
					</a>
				</div>
				<div class="content">
					<div class="job-desc">
						<div class="heading">
							<a href="#" title="Construction Manager" target="_blank">Construction
								Manager</a>
						</div>
						<div class="content-item content-item-company"
							title="Jotun Paints (Vietnam) Co., Ltd.">Jotun Paints (Vietnam)
							Co., Ltd.</div>
						<div class="content-item content-item-location"
							title="Bình Dương, Hồ Chí Minh">Bình Dương, Hồ Chí Minh</div>
						<div class="content-item">
							<div class="salary">
								<a href="#" title="Đăng nhập để xem lương">Đăng nhập để xem
									lương</a>
							</div>
						</div>
						<div class="content-action">
							<div class="content-item content-item-expiredDate"
								title="Hết hạn trong 17 ngày">Hết hạn trong 17 ngày</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="job-wraper">
			<div class="job-item">
				<div class="job-image">
					<a href="#" title="Construction Manager" target="_blank"><div
							class="bg-image" role="img"
							aria-label="Jotun Paints (Vietnam) Co., Ltd. tuyển dụng - Tìm việc mới nhất, lương thưởng hấp dẫn."
							style="background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(216, 216, 216, 0) 34%, rgba(0, 0, 0, 0) 66%, rgba(0, 0, 0, 0.1) 100%), url(&quot;<?php echo $servername ?>/mvc/public/images/banner-jobs.png&quot;);"></div>
					</a>
				</div>
				<div class="content">
					<div class="job-desc">
						<div class="heading">
							<a href="#" title="Construction Manager" target="_blank">Construction
								Manager</a>
						</div>
						<div class="content-item content-item-company"
							title="Jotun Paints (Vietnam) Co., Ltd.">Jotun Paints (Vietnam)
							Co., Ltd.</div>
						<div class="content-item content-item-location"
							title="Bình Dương, Hồ Chí Minh">Bình Dương, Hồ Chí Minh</div>
						<div class="content-item">
							<div class="salary">
								<a href="#" title="Đăng nhập để xem lương">Đăng nhập để xem
									lương</a>
							</div>
						</div>
						<div class="content-action">
							<div class="content-item content-item-expiredDate"
								title="Hết hạn trong 17 ngày">Hết hạn trong 17 ngày</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="job-wraper">
			<div class="job-item">
				<div class="job-image">
					<a href="#" title="Construction Manager" target="_blank"><div
							class="bg-image" role="img"
							aria-label="Jotun Paints (Vietnam) Co., Ltd. tuyển dụng - Tìm việc mới nhất, lương thưởng hấp dẫn."
							style="background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(216, 216, 216, 0) 34%, rgba(0, 0, 0, 0) 66%, rgba(0, 0, 0, 0.1) 100%), url(&quot;<?php echo $servername ?>/mvc/public/images/banner-jobs.png&quot;);"></div>
					</a>
				</div>
				<div class="content">
					<div class="job-desc">
						<div class="heading">
							<a href="#" title="Construction Manager" target="_blank">Construction
								Manager</a>
						</div>
						<div class="content-item content-item-company"
							title="Jotun Paints (Vietnam) Co., Ltd.">Jotun Paints (Vietnam)
							Co., Ltd.</div>
						<div class="content-item content-item-location"
							title="Bình Dương, Hồ Chí Minh">Bình Dương, Hồ Chí Minh</div>
						<div class="content-item">
							<div class="salary">
								<a href="#" title="Đăng nhập để xem lương">Đăng nhập để xem
									lương</a>
							</div>
						</div>
						<div class="content-action">
							<div class="content-item content-item-expiredDate"
								title="Hết hạn trong 17 ngày">Hết hạn trong 17 ngày</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>