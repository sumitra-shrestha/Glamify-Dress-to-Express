<?php
include_once 'includes/connection.php'; // Include your database connection file

$userId = $_SESSION['user_id'];

$sql = "SELECT * FROM cart where user_id = $userId"; // Assuming your table name is 'products'
$result = $con->query($sql);
$productCount = $result->rowCount();
?>

<header>
    <div class="navigation">
        <div class="mt-1 text-center">
            <div class="socialBar d-flex ">
                <div class="col-md- m-auto">
                    <i class="fa-brands fa-square-facebook m-2"></i>
                    <i class="fa-brands fa-square-twitter m-2"></i>
                    <i class="fa-brands fa-square-instagram m-2"></i>
                    <i class="fa-brands fa-tiktok m-2"></i>
                </div>
                <div class="col-md-6">
                    <span>Announcement</span>
                </div>
                <div class="col-md-3 text-right">
                    <a href="logout.php" class=""><i class="fa-solid fa-right-from-bracket" style="padding: 1rem"></i>
                        Log Out</a>
                </div>
            </div>
            <hr />
            <div class="searchBar d-flex">
                <div class="logo col-md-3">
                    <img src="images/logo/logo.png" alt="logo" width="100px" />
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-md">
                        <form class="form-control border-0" action="index.php" method="POST">
                            <input type="text" name="searchQuery" placeholder="Enter the product name to search..."
                                class=" form-control" />
                            <button class="search-btn" name="searchBtn" type="submit"><i
                                    class="fa-solid fa-magnifying-glass input-group-text"></i></button>
                        </form>
                    </div>

                </div>
                <div class="col-md-3 justify-content-right mr-auto ">
                    <a href="#" class=""><i class="fa-regular fa-heart" style="padding: 1rem"></i></a>
                    <a href="#" class=""><i class="fa-solid fa-bag-shopping"
                            style="padding: 0.5rem"></i><?php echo $productCount ?></a>
                </div>
            </div>
            <hr />
            <nav class="navbar navbar-expand-md p-0 justify-content-center">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">HOME </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CATERGORIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MEN'S</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">WOMEN'S </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOT OFFER</a>
                    </li>
                </ul>

            </nav>
        </div>
    </div>
</header>