<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">tiêu đề</th>
      <th scope="col">slug tiêu đề</th>
      <th scope="col">thumbnail</th>
      <th scope="col">tag news</th>
      <th scope="col">xóa</th>
       <th scope="col">update</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row = mysqli_fetch_array($data["NewsTrangHienTai"])){ ?>
       <tr>
          <td><?php echo $row["tieude"] ?></td>
          <td><?php echo $row["slugtieude"] ?></td>
          <td><?php echo $row["thumbnail"] ?></td>
          <td><?php echo $row["tagnews"] ?></td>
          <td><a href="<?php echo $servername ?>/quan-tri/xoa-news/<?php echo $row["id"] ?>">X</a></td>
          <td><a href="<?php echo $servername ?>/quan-tri/cap-nhat-news/<?php echo $row["id"]?>">Update</a></td>
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
