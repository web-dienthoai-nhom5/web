
<body>

  <h1>Xoá nhiều sản phẩm</h1>

  <table>
    <thead>
      <tr>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Chọn</th>
      </tr>
    </thead>
    <tbody>
      <?php
      for ($i = 0; $i < count($products); $i++) {
        echo "<tr>";
        echo "<td>" . $products[$i]["name"] . "</td>";
        echo "<td>" . $products[$i]["price"] . "</td>";
        echo "<td><input type=\"checkbox\" name=\"products[]\" value=\"" . $products[$i]["id"] . "\"></td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>

  <form action="delete-products.php" method="post">
    <button type="submit">Xoá</button>
  </form>

</body>


<?php


// Lấy ID của các sản phẩm được chọn
$products = $_POST["products"];

// Kết nối với cơ sở dữ liệu
$conn = new mysqli("localhost", "root", "", "my_database");

// Xoá các sản phẩm được chọn
foreach ($products as $product_id) {
  $sql = "DELETE FROM products WHERE id='$product_id'";
  $conn->query($sql);
}

// Đóng kết nối
$conn->close();

// Thông báo thành công
echo "Xoá sản phẩm thành công";

?>