  <form method="POST" action="<?php echo $servername ?>/quan-tri/them-cong-ty" enctype="multipart/form-data">
  <div class="form-group">
    <label>Tên công ty</label>
    <input type="text" class="form-control" id="ten-cong-ty" name="ten-cong-ty"  aria-describedby="emailHelp" placeholder="Enter Tên Công Ty" onblur="blurTenCongTy()">
  </div>
  <div class="form-group">
    <label>Slug công ty</label>
    <input type="text" class="form-control" id="slug-cong-ty" name="slug-cong-ty" placeholder="Slug công ty" readonly>
  </div>
   <div class="form-group">
    <label>logo công ty</label>
    <input type="file" class="form-control" id="logo-cong-ty" name="logo-cong-ty" placeholder="logo công ty" accept="image/x-png,image/gif,image/jpeg">
  </div>
  <div class="form-group">
    <label>Ngành nghề</label>
    <input type="text" class="form-control" id="nganh-nghe" name="nganh-nghe" placeholder="Ngành nghề">
  </div>
  <div class="form-group">
    <label>Nhân viên</label>
    <input type="text" class="form-control" id="nhan-vien" name="nhan-vien" placeholder="Nhân viên">
  </div>
   <div class="form-group">
    <label>Địa chỉ</label>
    <input type="text" class="form-control" id="dia-chi" name="dia-chi" placeholder="Địa chỉ">
  </div>
   <div class="form-group">
    <label>Link Review công ty</label>
    <input type="text" class="form-control" id="link-review" name="link-review" placeholder="Link Review">
  </div>
   <div class="form-group">
    <label>Link Page</label>
    <input type="text" class="form-control" id="link-page" name="link-page" placeholder="Link Page ReviewCongty"><br>
    <input type="text" class="form-control" id="tu-page" name="tu-page" placeholder="Từ page reviewcongty"><br>
    <input type="text" class="form-control" id="den-page" name="den-page" placeholder="Đến Page ReviewCongty">
  </div>
  <span id="mess-return"></span>
  <button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
  <button type="button" name="btn-get" class="btn btn-primary" onclick="getDuLieu()">Get URL</button>
  <button type="button" name="btn-get" class="btn btn-primary" onclick="getDuLieuPage()">Get Page</button>
</form>