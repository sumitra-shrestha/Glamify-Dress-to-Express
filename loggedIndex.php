<!DOCTYPE html>
<html>

<?php
include 'includes/session.php';
include_once "includes/header.php";

if (isset($_SESSION['error'])) {
  $error = $_SESSION['error'];
} else {
  $error = '';
}
unset($_SESSION['error']);
?>

<body>
    <div class="container">
        <?php
        include "includes/authenticated-navigation.php";
        ?>

        <div class="mt-3 px-5 row">
            <div class="col-md-4">
                <p>New Arrivals</p>
                <?php include 'action/retrive.php'; ?>
            </div>
            <div class=" col-md-4">
                <p>Trending</p>
                <?php include 'action/retrive-all.php'; ?>
            </div>
            <div class=" col-md-4">
                <p>Top Rated</p>
                <?php include 'action/retrive-new.php'; ?>
            </div>

        </div>
        <div class="row mt-5 px-5">
            <p>Our Products</p>
            <div class="product col-md-3 d-flex flex-column">
                <div>
                    <img src="images/products/2.jpg" alt="">
                </div>
                <div class="product-desc">
                    <p class="price"><strong>Category</strong></p>
                    <p>Product Name</p>
                    <p><strong>$2</strong></p>
                </div>
            </div>
            <div class="product col-md-3 d-flex flex-column">
                <div>
                    <img src="images/products/2.jpg" alt="">
                </div>
                <div class="product-desc">
                    <p class="price"><strong>Category</strong></p>
                    <p>Product Name</p>
                    <p><strong>$2</strong></p>
                </div>
            </div>
            <div class="product col-md-3 d-flex flex-column">
                <div>
                    <img src="images/products/2.jpg" alt="">
                </div>
                <div class="product-desc">
                    <p class="price"><strong>Category</strong></p>
                    <p>Product Name</p>
                    <p><strong>$2</strong></p>
                </div>
            </div>
            <div class="product col-md-3 d-flex flex-column">
                <div>
                    <img src="images/products/2.jpg" alt="">
                </div>

                <div class="product-desc">
                    <p class="price"><strong>Category</strong></p>
                    <p>Product Name</p>
                    <p><strong>$2</strong></p>
                </div>
            </div>
            <div class="product col-md-3 d-flex flex-column">
                <div>
                    <img src="images/products/2.jpg" alt="">
                </div>
                <div class="product-desc">
                    <p class="price"><strong>Category</strong></p>
                    <p>Product Name</p>
                    <p><strong>$2</strong></p>
                </div>
            </div>
            <div class="product col-md-3 d-flex flex-column">
                <div>
                    <img src="images/products/2.jpg" alt="">
                </div>
                <div class="product-desc">
                    <p class="price"><strong>Category</strong></p>
                    <p>Product Name</p>
                    <p><strong>$2</strong></p>
                </div>
            </div>
            <div class="product col-md-3 d-flex flex-column">
                <div>
                    <img src="images/products/2.jpg" alt="">
                </div>
                <div class="product-desc">
                    <p class="price"><strong>Category</strong></p>
                    <p>Product Name</p>
                    <p><strong>$2</strong></p>
                </div>
            </div>
            <div class="product col-md-3 d-flex flex-column">
                <div>
                    <img src="images/products/2.jpg" alt="">
                </div>

                <div class="product-desc">
                    <p class="price"><strong>Category</strong></p>
                    <p>Product Name</p>
                    <p><strong>$2</strong></p>
                </div>
            </div>
        </div>
        <?php
        include "includes/footer.php";
        ?>
    </div>
</body>

</html>