<!DOCTYPE html>
<html>
<?php
include_once "includes/header.php";
include_once 'includes/connection.php'; // Include your database connection file

$productId = $_GET['productId'];

$sql = "SELECT * FROM product where productid = $productId"; // Assuming your table name is 'products'
$result = $con->query($sql);

if ($result->rowCount() > 0) {
	while ($row = $result->fetch()) {
		$name = $row['pname'];
		$imgName = $row['photoname'];
		$description = $row['description'];
		$price = $row['price'];
	}
}

?>

<body>
	<div class="container">
		<?php
		include "includes/navigation.php";
		?>

		<div class="product-display row mt-5 ms-md-2">
			<div class="col-md-5 ">
				<img src="images/products/<?php echo $imgName ?>">
			</div>
			<div class="product-disp-desc col-md-7 px-4">
				<p class="display-3"><?php echo $name ?></p>
				<p class="mb-5"><?php echo $description ?></p>
				<form id="addToCartForm" action="action/addToCart.php?productId=<?php echo $productId ?>" method="POST">
					<input id="submitBtn" class="btn btn-primary" type="submit" value="Add to Cart"
						name="addToCartBtn" />
				</form>
				<button type="button" class="btn btn-primary">Buy</button>
			</div>
		</div>
		<div class="mt-3 ms-md-5 ps-md-5">
			<p class="display-5">User Reviews </p>

			<div>
				<p>User1<span class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span></p>
				<p>The product is great</p>
			</div>
			<div>
				<p>User2<span class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span></p>
				<p>The product is great</p>
			</div>
			<div>
				<p>User3<span class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span></p>
				<p>The product is great</p>
			</div>
			<!-- <h3>Add a Review</h3>
			<div>
				<input type="text" id="newReview" placeholder="Enter your review">
				<button type="button" class="btn btn-primary" onclick="addReview()">Submit</button>
			</div> -->
		</div>
	</div>
</body>

</html>