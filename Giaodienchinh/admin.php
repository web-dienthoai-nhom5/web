<?php include "header.php"?>

<?php
// Kết nối đến cơ sở dữ liệu (thay đổi thông tin kết nối theo cấu hình của bạn)
include "connect.php";
?>

<body>
<button type="button" onclick="window.location.href=themsp.php">+</button>


    <h1>Trang admin</h1>

    <div class="container">
        

        <h2>Danh sách sản phẩm</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Lấy danh sách sản phẩm từ cơ sở dữ liệu
                    $db = new PDO('mysql:host=localhost;dbname=my_database;charset=utf8', 'root', '');
                    $stmt = $db->query('SELECT * FROM products');

                    // Hiển thị danh sách sản phẩm
                    while ($row = $stmt->fetch()) {
                        echo '<tr>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td>' . $row['name'] . '</td>';
                        echo '<td>' . $row['quantity'] . '</td>';
                        echo '<td>' . $row['price'] . '</td>';
                        echo '<td>' . $row['description'] . '</td>';
                        echo '<td>';
                        echo '<a href="edit.php?id=' . $row['id'] . '">Sửa</a>';
                        echo ' | ';
                        echo '<a href="delete.php?id=' . $row['id'] . '">Xóa</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="script.js"></script>



</body>
<?php include "footer.php"?>