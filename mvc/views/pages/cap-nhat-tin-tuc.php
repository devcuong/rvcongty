<?php while ($row = mysqli_fetch_array($data["News"])){ ?>
<form method="POST"
	action="<?php echo $servername ?>/quan-tri/cap-nhat-news"
	enctype="multipart/form-data">
	<div class="form-group">
		<label>Tiêu đề tin tức</label> <input type="text" class="form-control"
			id="tieu-de-tin-tuc" name="tieu-de-tin-tuc"
			placeholder="Enter Tiêu đề tin tức" onblur="blurTieuDeTinTuc()" value="<?php echo $row["tieude"] ?>">
			<input type="hidden" class="form-control"
			id="id-tin-tuc" name="id-tin-tuc" value="<?php echo $row["id"] ?>" >
	</div>
	<div class="form-group">
		<label>Slug tin tức</label> <input type="text" class="form-control"
			id="slug-tin-tuc" name="slug-tin-tuc" placeholder="Slug tin tức" value="<?php echo $row["slugtieude"] ?>"
			readonly />
	</div>
	<div class="form-group">
		<label>Mô tả ngắn</label>
		<textarea class="form-control" id="mo-ta-ngan" name="mo-ta-ngan"
			placeholder="Mô tả ngắn" onblur="blurMoTaNgan()"><?php echo $row["motangan"] ?></textarea>
		<span id="error-description"> Có: ? Từ</span>
	</div>
	<div class="form-group">
		<label>hình ảnh tin</label> <input type="file" class="form-control"
			id="thumbnail" name="thumbnail" placeholder="thumbnail"
			accept="image/x-png,image/gif,image/jpeg">
		<input type="hidden" class="form-control"
			id="hidden-thumbnail" name="hidden-thumbnail" value="<?php echo $row["thumbnail"] ?>" >
	</div>
	<div class="form-group">
		<label>nội dung tin</label>
		<textarea class="form-control" id="noi-dung-tin" name="noi-dung-tin"
			placeholder="Nội dung tin"><?php echo $row["noidung"] ?></textarea>
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
			id="nguon-tin" name="nguon-tin" placeholder="Nguồn tin" value="<?php echo $row["nguon"] ?>">
	</div>
	<div class="form-group">
		<label>Web Nguồn Tin</label> <input type="text" class="form-control"
			id="web-nguon-tin" name="web-nguon-tin" placeholder="Nguồn tin" value="<?php echo $row["webnguon"] ?>">
	</div>
	<div class="form-group">
		<label>Loại tin</label>
		<div class="custom-select" style="width: 200px;">
			<select name="loai-tin" id="loai-tin">
				<option value="NORMAL" <?php if($row["loainews"] == "NORMAL") echo "selected" ?>>NORMAL</option>
				<option value="HR" <?php if($row["loainews"] == "HR") echo "selected" ?>>HR</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label>Tag</label>
		<input name="tag-news" id="tag-news" class="form-control" value="<?php echo $row["tagnews"] ?>">
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
<?php } ?>