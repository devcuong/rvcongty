<form method="POST"
	action="<?php echo $servername ?>/quan-tri/them-video"
	enctype="multipart/form-data">
	<div class="form-group">
		<label>Tiêu đề video</label> <input type="text" class="form-control"
			id="tieu-de-video" name="tieu-de-video"
			placeholder="Enter Tiêu đề video" onblur="blurTieuDeVideo()">
	</div>
	<div class="form-group">
		<label>Slug video</label> <input type="text" class="form-control"
			id="slug-video" name="slug-video" placeholder="Slug video"
			readonly>
	</div>
	<div class="form-group">
		<label>Playlist</label>
		<div class="custom-select" style="width: 200px;">
			<select name="playlist-video" id="playlist-video">
			<?php while ($row = mysqli_fetch_array($data["ListPlaylist"])) {?>
				<option value="<?php echo $row["id"] ?>"><?php echo $row["tenplaylist"] ?></option>
				<?php } ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label>url video</label> <input type="text" class="form-control"
			id="url-video" name="url-video" placeholder="Url Video">
	</div>
	<div class="form-group">
		<label>time duration</label> <input type="text" class="form-control"
			id="time-duration" name="time-duration" placeholder="Time Duration">
	</div>
	<button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
</form>