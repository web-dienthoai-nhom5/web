<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <!-- Add your CSS stylesheets or styles here -->
</head>
<body>
    <header>
        <h1>Giỏ hàng</h1>
    </header>
    
    <div class="container">
        <h2>Thông tin đơn hàng</h2>
        <table border="1">
            <tr>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Màu sắc</th>
                <th>RAM</th>
                <!-- Add more columns as needed -->
            </tr>
            <?php
            // Retrieve product information from the query string
            $productName = $_GET['name'];
            $productPrice = $_GET['price'];
            $productQuantity = $_GET['quantity'];
            $productColor = $_GET['color'];
            $productRam = $_GET['ram'];

            // Display product information in a table row
            echo "<tr>";
            echo "<td>$productName</td>";
            echo "<td>$productPrice</td>";
            echo "<td>$productQuantity</td>";
            echo "<td>$productColor</td>";
            echo "<td>$productRam</td>";
            // Add more columns as needed
            echo "</tr>";
            ?>
        </table>

        <div>
            <!-- Add total price, checkout button, etc. based on your requirements -->
            <p>Tổng cộng: <?php echo $productPrice * $productQuantity; ?></p>
            <button onclick="checkout()">Thanh toán</button>
        </div>
    </div>

    <!-- Add your JavaScript scripts here -->
    <script>
        function checkout() {
            // Implement your checkout logic, e.g., redirect to a payment page
            alert("Redirecting to payment page...");
        }
    </script>
    <div class="support-table">
        <h2><b>Tổng đài hỗ trợ (Miễn phí gọi)</b></h2>
        <table class="contact-table">
            <tr>
                <td><i class="fas fa-exclamation-circle"></i> Khiếu nại:</td>
                <td>1800.1063 (8:00 - 21:30)</td>
            </tr>
            <tr>
                <td><i class="fas fa-wrench"></i> Bảo hành:</td>
                <td>1800.1065 (8:00 - 21:00)</td>
            </tr>
            <tr>
                <td><i class="fab fa-facebook"></i> Liên hệ trực tuyến</td>
                <td>TiTan shop (24/24)</td>
            </tr>
        </table>
    </div>
</body>
</html>