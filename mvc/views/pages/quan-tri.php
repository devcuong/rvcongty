  <form method="POST" action="<?php echo $servername ?>/quan-tri/dang-nhap">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="user-email" name="user-email"  aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="user-password" name="user-password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>