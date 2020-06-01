<form method="POST"
	action="<?php echo $servername ?>/quan-tri/them-video"
	enctype="multipart/form-data">
	<div class="form-group">
		<label>Tiêu đề video</label> <input type="text" class="form-control"
			id="tieu-de-video" name="tieu-de-playlist"
			placeholder="Enter Tiêu đề video" onblur="blurTieuDeVideo()">
	</div>
	<div class="form-group">
		<label>Slug video</label> <input type="text" class="form-control"
			id="slug-video" name="slug-video" placeholder="Slug playlist"
			readonly>
	</div>
	<div class="form-group">
		<label>Playlist</label>
		<div class="custom-select" style="width: 200px;">
			<select name="playlist-video" id="playlist-video">
			<?php while () {?>
				<option value="volvo">Volvo</option>
				<?php } ?>
			</select>
		</div>
	</div>
	<button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
</form>