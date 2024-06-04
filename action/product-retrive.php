<?php
include_once 'includes/connection.php'; // Include your database connection file

// Assuming $conn is your database connection

$sql = "SELECT * FROM product"; // Assuming your table name is 'products'
$result = $con->query($sql);

if ($result->rowCount() > 0) {
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<a href="product.php" class="product col-md-3 d-flex flex-column">';
        echo '<div>';
        echo '<img src="images/products/' . $row['photoname'] . '" alt="' . $row['pname'] . '">';
        echo '</div>';
        echo '<div class="product-desc">';
        echo '<p class="price"><strong>' . $row['category'] . '</strong></p>';
        echo '<p>' . $row['pname'] . '</p>';
        echo '<p><strong>$' . $row['price'] . '</strong></p>';
        echo '</div>';
        echo '</a>';
    }
} else {
    echo "No products available.";
}
