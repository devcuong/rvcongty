<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Tên công ty</th>
      <th scope="col">Slug công ty</th>
      <th scope="col">logo</th>
      <th scope="col">ngành nghề</th>
      <th scope="col">nhân viên</th>
      <th scope="col">địa chỉ</th>
      <th scope="col">xóa</th>
       <th scope="col">update slug</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row = mysqli_fetch_array($data["CongTyTrangHienTai"])){ ?>
       <tr>
          <td><?php echo $row["tencongty"] ?></td>
          <td><?php echo $row["slugcongty"] ?></td>
          <td><?php echo $row["logo"] ?></td>
          <td><?php echo $row["nganhnghe"] ?></td>
          <td><?php echo $row["nhanvien"] ?></td>
          <td><?php echo $row["diachi"] ?></td>
          <td><a href="<?php echo $servername ?>/quan-tri/xoa-cong-ty/<?php echo $row["id"] ?>">X</a></td>
          <td><a href="<?php echo $servername ?>/quan-tri/cap-nhat-slug/<?php echo $row["id"]."/".$row["tencongty"] ?>">Update</a></td>
        </tr>
  <?php } ?>
  </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
  <?php for ($i=1; $i<=$data["SoTrang"]; $i++){ ?>
    <li class="page-item <?php if($i == $data["TrangHienTai"]) echo "active" ?>	"><a class="page-link" href="<?php echo $servername ?>/quan-tri/tat-ca-cong-ty/<?php echo $i ?>"><?php echo $i ?></a></li>
   <?php } ?>
  </ul>
</nav>
