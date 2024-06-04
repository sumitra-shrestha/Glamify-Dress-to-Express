<?php 
session_start();
include_once '../includes/connection.php';
if (isset($_SESSION['user_id']) && isset($_POST["addToCartBtn"])) {
    $productId = $_GET['productId'];
    $userId = $_SESSION['user_id'];
    try {
        $sql_add_query = "INSERT INTO cart (productid, user_id) VALUES(:productid,:user_id)";
        $stmt = $con->prepare($sql_add_query);
        $stmt->bindParam(':productid', $productId);
        $stmt->bindParam(':user_id', $userId);
        $stmt->execute();
        header("location: ../product.php?productId=$productId");
    } catch (PDOException $e) {
        die("Error: Could not run the query. " . $e->getMessage());
    }
}
