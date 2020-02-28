  <form method="POST" action="<?php echo $servername ?>/quan-tri/them-cong-ty">
  <div class="form-group">
    <label>Tên công ty</label>
    <input type="text" class="form-control" id="ten-cong-ty" name="ten-cong-ty"  aria-describedby="emailHelp" placeholder="Enter Tên Công Ty">
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
  <button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
</form>