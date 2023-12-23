<?php
include "connect.php"; // Include your database connection file

if (isset($_GET['query'])) {
    $search_query = $_GET['query'];

    // Use prepared statements to prevent SQL injection
    $stmt = $mysqli->prepare("SELECT * FROM your_products_table WHERE tensanpham LIKE ?");
    $search_query = "%" . $search_query . "%";
    $stmt->bind_param("s", $search_query);
    $stmt->execute();
    $result = $stmt->get_result();

    // Display the search results
    while ($row = $result->fetch_assoc()) {
        // Output each result
        echo "<p>{$row['tensanpham']} - Giá: {$row['giasp']}</p>";
    }

    $stmt->close();
} else {
    echo "No search query provided.";
}
?>
