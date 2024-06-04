<!DOCTYPE html>
<html>

<?php
session_start();
include_once "includes/header.php";
?>

<body>
    <div class="container">
        <?php
        if (isset($_SESSION['user_id'])) {
            include "includes/authenticated-navigation.php";
        } else {
            include "includes/navigation.php";
        }
        ?>

        <div class="mt-3 px-5 row">
            <?php
            if (isset($_POST['searchQuery'])) {
                echo '<p>Search results</p>';
                echo '<div class="col-md-12 d-flex flex-wrap justify-content-between">';
                include 'action/retrive-all.php';
                echo '</div>';
                unset($_POST['searchQuery']);
            } else {
                echo '<div class="col-md-4">
                <p>New Arrivals</p>';
                include 'action/retrive.php';
                echo '</div>
                <div class=" col-md-4">
                <p>Trending</p>';
                include 'action/retrive-trending.php';
                echo '</div>
                <div class=" col-md-4">
                <p>Top Rated</p>';
                include 'action/retrive-new.php';
                echo '</div> ';
            }
            ?>


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