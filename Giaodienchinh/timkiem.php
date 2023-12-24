<?php
include "connect.php"; // Include your database connection file

if (isset($_GET['query'])) {
    $search_query = $_GET['query'];

    // Use prepared statements to prevent SQL injection
    $stmt = $mysqli->prepare("SELECT * FROM chitietsanpham WHERE Tensp LIKE ?");
    $search_query = "%" . $search_query . "%";
    $stmt->bind_param("s", $search_query);
    $stmt->execute();
    $result = $stmt->get_result();

    // Display the search results
    echo '<div align="center">';
    echo '<h1 align="center">Kết quả tìm kiếm</h1>';
    echo '<table border="0" cellpadding="2px" width="600px">';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td><img src="' . $row['Hinhanh'] . '"></td>';
        echo '<td>';
        echo '<b>' . $row['Tensp'] . '</b><br />';
        echo 'Giá: <big style="color:green">$' . $row['Gia'] . '</big><br /><br />';
        echo '<form method="POST" action="giohang.php">';
        echo '<input type="hidden" name="product_id" value="' . $row['Masanpham'] . '">';
        echo '<input type="submit" value="Mua Ngay">';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td colspan="2"><hr size="1" /></td>';
        echo '</tr>';
    }
    echo '</table>';
    echo '</div>';

    $stmt->close();
} else {
    echo "No search query provided.";
}
?>
