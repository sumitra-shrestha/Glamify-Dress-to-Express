<!DOCTYPE html>
<html>

<?php
include_once "includes/header.php";
?>

<body>
    <div class="container">
        <?php
        include "includes/navigation.php";
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
            <?php include 'action/product-retrive.php'; ?>
        </div>
        <?php
        include "includes/footer.php";
        ?>
    </div>
</body>

</html>