
<form method="POST"
	action="<?php echo $servername ?>/quan-tri/them-tin-tuc"
	enctype="multipart/form-data">
	<div class="form-group">
		<label>Tiêu đề tin tức</label> <input type="text" class="form-control"
			id="tieu-de-tin-tuc" name="tieu-de-tin-tuc"
			placeholder="Enter Tiêu đề tin tức" onblur="blurTieuDeTinTuc()">
	</div>
	<div class="form-group">
		<label>Slug tin tức</label> <input type="text" class="form-control"
			id="slug-tin-tuc" name="slug-tin-tuc" placeholder="Slug tin tức"
			readonly>
	</div>
	<div class="form-group">
		<label>Mô tả ngắn</label>
		<textarea class="form-control" id="mo-ta-ngan" name="mo-ta-ngan"
			placeholder="Mô tả ngắn" onblur="blurMoTaNgan()"></textarea>
		<span id="error-description"> Có: ? Từ</span>
	</div>
	<div class="form-group">
		<label>hình ảnh tin</label> <input type="file" class="form-control"
			id="thumbnail" name="thumbnail" placeholder="thumbnail"
			accept="image/x-png,image/gif,image/jpeg">
	</div>
	<div class="form-group">
		<label>nội dung tin</label>
		<textarea class="form-control" id="noi-dung-tin" name="noi-dung-tin"
			placeholder="Nội dung tin"></textarea>
		<script>
                CKEDITOR.replace( 'noi-dung-tin',{
                    enterMode: CKEDITOR.ENTER_BR,
                    shiftEnterMode: CKEDITOR.ENTER_BR,
                    language: 'vi'
                 } );
        </script>
	</div>
	<div class="form-group">
		<label>Nguồn Tin</label> <input type="text" class="form-control"
			id="nguon-tin" name="nguon-tin" placeholder="Nguồn tin">
	</div>
	<div class="form-group">
		<label>Web Nguồn Tin</label> <input type="text" class="form-control"
			id="web-nguon-tin" name="web-nguon-tin" placeholder="Website Nguồn tin">
	</div>
	<div class="form-group">
		<label>Loại tin</label>
		<div class="custom-select" style="width: 200px;">
			<select name="loai-tin" id="loai-tin">
				<option value="NORMAL">NORMAL</option>
				<option value="HR">HR</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label>Tag</label>
		<input name="tag-news" id="tag-news" class="form-control">
	</div>
	<div class="form-group">
		<label>Link Review công ty</label> <input type="text"
			class="form-control" id="link-review" name="link-review"
			placeholder="Link Review">
	</div>
	<div class="form-group">
		<label>Link Page</label> <input type="text" class="form-control"
			id="link-page" name="link-page" placeholder="Link Page ReviewCongty">
	</div>
	<span id="mess-return"></span>
	<button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
</form>