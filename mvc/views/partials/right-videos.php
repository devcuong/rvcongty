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
</style>
<div
	class="video-main-more-list playlist-container container-scroll mb-5">
	<div class="video-main-more-list-header sticky-top">
		<div class="d-flex mb-2">
			<span class="title ng-binding">Video Quản trị nhân lực - TS Võ Việt
				Hằng Có học có hơn - CongTyTop</span>
		</div>
	</div>
	<div class="video-list video-list-vertical">
		<div ng-repeat="item in listPlaylistVideo" class="video-item media ">
			<a class="video-img"
				href="http://localhost/rvcongty/videos/quan-tri-nhan-luc-gioi-thieu-qua-ve-mon-hoc-quan-tri-nhan-luc-7"
				title="Quản trị nhân lực - Giới thiệu qua về môn học quản trị nhân lực">
				<img ng-src="https://img.youtube.com/vi/GIfwA3-QCQE/hqdefault.jpg"
				alt="Quản trị nhân lực - Giới thiệu qua về môn học quản trị nhân lực"
				src="https://img.youtube.com/vi/GIfwA3-QCQE/hqdefault.jpg"> <span
				class="video-time ng-binding ng-scope">35:29</span>
			</a>
			<div class="media-body">
				<h3 class="title">
					<a class="ng-binding"
						href="http://localhost/rvcongty/videos/quan-tri-nhan-luc-gioi-thieu-qua-ve-mon-hoc-quan-tri-nhan-luc-7">Quản
						trị nhân lực - Giới thiệu qua về môn học quản trị nhân lực</a>
				</h3>
				<div class="video-info">
					<span class="video-info-item ng-binding ng-scope"><i
						class="fa fa-eye"></i>25 lượt xem</span> <span
						class="video-info-item ng-binding ng-scope">03/06/2020</span>
				</div>
			</div>
		</div>
		<div ng-repeat="item in listPlaylistVideo" class="video-item media ">
			<a class="video-img"
				href="http://localhost/rvcongty/videos/quan-tri-nhan-luc-bai-1-hoach-dinh-nguon-nhan-luc-8"
				title="Quản trị nhân lực - Bài 1: Hoạch định nguồn nhân lực"> <img
				ng-src="https://img.youtube.com/vi/4OeTSzfIZ28/hqdefault.jpg"
				alt="Quản trị nhân lực - Bài 1: Hoạch định nguồn nhân lực"
				src="https://img.youtube.com/vi/4OeTSzfIZ28/hqdefault.jpg"> <span
				class="video-time ng-binding ng-scope">30:43</span>
			</a>
			<div class="media-body">
				<h3 class="title">
					<a class="ng-binding"
						href="http://localhost/rvcongty/videos/quan-tri-nhan-luc-bai-1-hoach-dinh-nguon-nhan-luc-8">Quản
						trị nhân lực - Bài 1: Hoạch định nguồn nhân lực</a>
				</h3>
				<div class="video-info">
					<span class="video-info-item ng-binding ng-scope"><i
						class="fa fa-eye"></i>12 lượt xem</span> <span
						class="video-info-item ng-binding ng-scope">03/06/2020</span>
				</div>
			</div>
		</div>
		<div ng-repeat="item in listPlaylistVideo"
			class="video-item media playing">
			<a class="video-img"
				href="http://localhost/rvcongty/videos/quan-tri-nhan-luc-bai-2-phan-tich-cong-viec-9"
				title="Quản trị nhân lực - Bài 2: Phân tích công việc"> <img
				ng-src="https://img.youtube.com/vi/2dpoXDgvYjI/hqdefault.jpg"
				alt="Quản trị nhân lực - Bài 2: Phân tích công việc"
				src="https://img.youtube.com/vi/2dpoXDgvYjI/hqdefault.jpg"> <span
				class="video-time ng-binding ng-scope">1:06:16</span>
			</a>
			<div class="media-body">
				<h3 class="title">
					<a class="ng-binding"
						href="http://localhost/rvcongty/videos/quan-tri-nhan-luc-bai-2-phan-tich-cong-viec-9">Quản
						trị nhân lực - Bài 2: Phân tích công việc</a>
				</h3>
				<div class="video-info">
					<span class="video-info-item ng-binding ng-scope"><i
						class="fa fa-eye"></i>15 lượt xem</span> <span
						class="video-info-item ng-binding ng-scope">03/06/2020</span>
				</div>
			</div>
		</div>
		<div ng-repeat="item in listPlaylistVideo" class="video-item media ">
			<a class="video-img"
				href="http://localhost/rvcongty/videos/quan-tri-nhan-luc-bai-3-tuyen-dung-10"
				title="Quản trị nhân lực - Bài 3: Tuyển dụng"> <img
				ng-src="https://img.youtube.com/vi/cKjkIlfnfgE/hqdefault.jpg"
				alt="Quản trị nhân lực - Bài 3: Tuyển dụng"
				src="https://img.youtube.com/vi/cKjkIlfnfgE/hqdefault.jpg"> <span
				class="video-time ng-binding ng-scope">1:44:50</span>
			</a>
			<div class="media-body">
				<h3 class="title">
					<a class="ng-binding"
						href="http://localhost/rvcongty/videos/quan-tri-nhan-luc-bai-3-tuyen-dung-10">Quản
						trị nhân lực - Bài 3: Tuyển dụng</a>
				</h3>
				<div class="video-info">
					<span class="video-info-item ng-binding ng-scope"><i
						class="fa fa-eye"></i>33 lượt xem</span> <span
						class="video-info-item ng-binding ng-scope">03/06/2020</span>
				</div>
			</div>
		</div>
	</div>
</div>