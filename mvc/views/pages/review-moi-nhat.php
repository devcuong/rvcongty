<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">reviewer</th>
      <th scope="col">rate</th>
      <th scope="col">nội dung</th>
      <th scope="col">công ty</th>
      <th scope="col">thời gian</th>
      <th scope="col">xóa</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row = mysqli_fetch_array($data["ReviewTrangHienTai"])){ ?>
       <tr>
          <td><?php echo $row["id"] ?></td>
          <td><?php echo $row["reviewer"] ?></td>
          <td><?php echo $row["rate"] ?></td>
          <td><?php echo $row["noidung"] ?></td>
          <td><?php echo $row["congty"] ?></td>
          <td><?php echo $row["thoigian"] ?></td>
          <td><a href="<?php echo $servername ?>/quan-tri/xoa-review/<?php echo $row["id"] ?>/<?php echo $row["rate"] ?>/<?php echo $row["congty"] ?>">X</a></td>
        </tr>
  <?php } ?>
  </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
  <?php for ($i=1; $i<=$data["SoTrang"]; $i++){ ?>
    <li class="page-item <?php if($i == $data["TrangHienTai"]) echo "active" ?>	"><a class="page-link" href="<?php echo $servername ?>/quan-tri/review-moi-nhat/<?php echo $i ?>"><?php echo $i ?></a></li>
   <?php } ?>
  </ul>
</nav>
