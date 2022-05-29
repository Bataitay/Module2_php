<table class=" table table-bordered table-hover">
      <tr>
          <th>Danh mục</th>
          <th>Tên món</th>
          <th>Giá(vnd)</th>
          <th>Ảnh</th>
      </tr>
      <tbody>
          <?php foreach ($categorybyid   as  $key => $value) : ?>
              <tr>
                  <td><?php echo $value['category_food']; ?></td>
                  <td><?php echo $value['name_food']; ?></td>
                  <td><?php echo $value['price']; ?></td>
                  <td><img src="./imgs/<?= $value->image ?>" width="100px" height="100px"></td>
                  <td>
                        <a href='edit.php? id=<?php echo $value['book_number']; ?>' class='edit_btn'>Sửa</a>
                        <a href='delete.php? id=<?php echo $value['book_number']; ?>' class="del_btn" onclick='return confirm("Bạn chắc chắn muốn xoá?")'>Xóa</a>
              </tr>
              <?php endforeach; ?>
      </tbody>
  </table>