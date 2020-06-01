<form method="POST"
	action="<?php echo $servername ?>/quan-tri/them-playlist"
	enctype="multipart/form-data">
	<div class="form-group">
		<label>Tiêu đề playlist</label> <input type="text" class="form-control"
			id="tieu-de-playlist" name="tieu-de-playlist"
			placeholder="Enter Tiêu đề playlist" onblur="blurTieuDePlaylist()">
	</div>
	<div class="form-group">
		<label>Slug playlist</label> <input type="text" class="form-control"
			id="slug-playlist" name="slug-playlist" placeholder="Slug playlist"
			readonly>
	</div>
	<button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
</form>