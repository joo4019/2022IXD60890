<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	
	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

	<script>
		query({type:'products_all'}).then(d=>{
			$(".productlist").html(listItemTemplate(d.result))
		});
	</script>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	<div class="content">
		<div class="container">
			<h2>Product List</h2>
	      
			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Products">
				</form>
			</div>
			<div class="form-control ">
				<div class="card soft">
					<div class="display-flex flex-wrap">
						<div class="flex-stretch display-flex">
							<div class="flex-none category-button">
								<button data-filter="category" data-value="" type="button" class="form-button">All</button>
							</div>
							<div class="flex-none category-button">
								<button data-filter="category" data-value="bowl" type="button" class="form-button">Bowl</button>
							</div>
							<div class="flex-none category-button">
								<button data-filter="category" data-value="cup" type="button" class="form-button">Cup</button>
							</div>
							<div class="flex-none category-button">
								<button data-filter="category" data-value="plate" type="button" class="form-button">Plate</button>
							</div>
						</div>
						<div class="flex-none">
							<div class="form-select">
								<select class="js-sort">
									<option value="1">Newest</option>
									<option value="2">Oldest</option>
									<option value="3">Least Expensive</option>
									<option value="4">Most Expensive</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class='productlist grid gap'></div>
		</div>
	</div>		


</body>
</html>

