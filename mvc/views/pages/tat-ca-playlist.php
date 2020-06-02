<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">tên playlist</th>
      <th scope="col">slug playlist</th>
      <th scope="col">số video</th>
      <th scope="col">thời gian</th>
      <th scope="col">xóa</th>
<!--        <th scope="col">update</th> -->
    </tr>
  </thead>
  <tbody>
  <?php while ($row = mysqli_fetch_array($data["PlaylistTrangHienTai"])){ ?>
       <tr>
          <td><?php echo $row["tenplaylist"] ?></td>
          <td><?php echo $row["slugplaylist"] ?></td>
          <td><?php echo $row["sovideo"] ?></td>
          <td><?php echo $row["thoigian"] ?></td>
          <td><a href="<?php echo $servername ?>/quan-tri/xoa-playlist/<?php echo $row["id"] ?>">X</a></td>
        </tr>
  <?php } ?>
  </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
  <?php for ($i=1; $i<=$data["SoTrang"]; $i++){ ?>
    <li class="page-item <?php if($i == $data["TrangHienTai"]) echo "active" ?>	"><a class="page-link" href="<?php echo $servername ?>/quan-tri/tat-ca-tin-tuc/<?php echo $i ?>"><?php echo $i ?></a></li>
   <?php } ?>
  </ul>
</nav>