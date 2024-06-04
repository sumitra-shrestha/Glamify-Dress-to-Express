<?php
include_once 'includes/connection.php';
$sql = "SELECT pname AS product_name, productid, category, price, photoname FROM product order by productid desc limit 4"; // Limiting to 4 results
$result = $con->query($sql);
if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<a href='product.php?productId=". $row['productid']."' class='border border-light rounded-3 mb-2 featured d-flex'>";
        echo "<div class='me-4'>";
        echo "<img src='images/products/" . $row["photoname"] . "' alt=''>";
        echo "</div>";
        echo "<div>";
        echo "<p><strong>" . $row["product_name"] . "</strong></p>";
        echo "<p>" . $row["category"] . "</p>";
        echo "<p><span class='price'>$" . $row["price"] . "</span></p>";
        echo "</div>";
        echo "</a>";
    }
} else {
    echo "0 results";
}

