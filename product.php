<!DOCTYPE html>
<html>
<?php include_once "includes/header.php";
?>

<body>
	<?php
	include "includes/navigation.php";
	?>
	<div class="container">
		<div class="product-display row mt-5 ms-md-2">
			<div class="col-md-5 ms-md-3 ps-md-5 ps-4">
				<img src="images/products/3.jpg">
			</div>
			<div class="product-disp-desc col-md-7 px-4">
				<p class="display-3">Oversize Tshirt</p>
				<p class="mb-5">Oversize tshirt with half sleeves and button cuffs. Regular fit for comfortable wear. Available in a range of classic and trendy colors, finding your perfect match is a breeze. Treat yourself to unparalleled comfort and style with our Oversized T-Shirt – because sometimes, bigger really is better.</p>
				<button type="button" class="btn btn-primary">Add to Cart</button>
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
			<h3>Add a Review</h3>
			<div>
				<input type="text" id="newReview" placeholder="Enter your review">
				<button type="button" class="btn btn-primary" onclick="addReview()">Submit</button>
			</div>
		</div>
	</div>
</body>

</html>
