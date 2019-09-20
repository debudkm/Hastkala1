<?php
session_start();
if(isset($_SESSION["uid"])){

	header("location:profile.php");

}

	
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>HASTKALA</title>
	<link rel="stylesheet" href="style.css?version=2">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="top-nav-bar">
	<div class="search-box" >
		<i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
		<i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>

	<a href="index.php"><img src="hastkala1.png" class="logo"></a>
	<input type="text" placeholder="Search the Categories" id="search_categories" class="form-control" size="60" >
	<span class="input-group-text"><i class="fa fa-search"></i></span>
	</div>
	<div class="menu-bar">
		<ul>
			
			<li><a href="cart1.php"><i class="fa fa-cart-arrow-down"></i>Cart</a></li>
			<li><a href="login page.php"><i class="fa fa-user-plus" ></i>Sign in</a></li>
		</ul>
	</div>
	</div>

	<section class="header">
		<div class="side-menu" id="side-menu">
			<ul>
			<li>New Arrival<i class="fa fa-angle-right"></i>
				<ul>
					<a href="ProductDetails1.php"><li>Designer Jeans</li></a>
					<a href="ProductDetails2.php"><li>Designer Coat</li></a>
					<a href="ProductDetails3.php"><li>Broach</li></a>
					<a href="ProductDetails4.php"><li>Baskets</li></a>
					<a href="ProductDetails5.php"><li>Formal shoes</li></a>
					<a href="ProductDetails6.php"><li>Shoes</li></a>
				</ul>
			</li>

			<li>Shoes<i class="fa fa-angle-right"></i>
				<ul>
					<a href="ProductDetails7.php"><li>Jaipuri Mojdi</li></a>
					<a href="ProductDetails5.php"><li>Fancy Shoes</li></a>
					<a href="ProductDetails8.php"><li>Formal Shoes</li></a>
				</ul>
			</li>
			<li>Decoratives<i class="fa fa-angle-right"></i>	
				<ul>
					<a href="ProductDetails9.php"><li>Royal Glass</li></a>
					<a href="ProductDetails10.php"><li>Royal Painting</li></a>
					<a href="ProductDetails11.php"><li>Decorative Elephants</li></a>
					
				</ul>
			</li>
			<li>Clothes <i class="fa fa-angle-right"></i>
				<ul>
					<a href="ProductDetails1.php"><li>Designer Jeans</li></a>
					<a href="ProductDetails2.php"><li>Designer Coat</li></a>
					
				</ul>
			</li>
			<li>Wooden crafts<i class="fa fa-angle-right"></i>
				<ul>
					<li>Sub Menu-4</li>
					<li>Sub Menu-4</li>
					<li>Sub Menu-4</li>
					<li>Sub Menu-4</li>
				</ul>
			</li>
			<li>Accessories<i class="fa fa-angle-right"></i>
				<ul>
					<li>Sub Menu-4</li>
					<li>Sub Menu-4</li>
					<li>Sub Menu-4</li>
					<li>Sub Menu-4</li>
				</ul>
			</li>
			
			<li>Footwears <i class="fa fa-angle-right"></i>
				<ul>
					<li>Sub Menu-4</li>
					<li>Sub Menu-4</li>
					<li>Sub Menu-4</li>
					<li>Sub Menu-4</li>
				</ul>
			</li>

			</ul>
		</div>
		 </div>
		 <!-- ------------------------------Slider---------------------------------- -->

		 <div class="slider">
		
				
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="handmade1.png" class="d-block w-100" alt="First slide">
    </div>
    <div class="carousel-item">
      <img src="handmade5.png"  class="d-block w-100" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="handmade4.png" class="d-block w-100" alt="Third slide">
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	


	</section>
	<!---Featured Categories-------->
	<section class="New Arrival">
		<div class="container">
			<div class="title-box1">
				<h2>New Arrival</h2>
				
			</div>
			
		</div>
	</section>
	<section class="FeaturedCategories">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				<div class="product-top">
				<a href="ProductDetails1.php"><img src="clothes1.png"></a>
					<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to wishlist">
							<i class="fa fa-heart-o"></i>
						</button>
						<a href="cart1.php">
						<button type="button" class="btn btn-secondary" title="Add to Cart" >
							<i class="fa fa-shopping-cart"></i>
						</button></a>
					</div>
				</div>
								
					<div class="product-bottom text-left">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<h3>Designer Jeans</h3>
					<h5>INR 999rs</h5>
				</div>

				</div>
				<div class="col-md-4">
				<div class="product-top">
				<a href="ProductDetails2.php"><img src="clothes2.png"></a>
					<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to wishlist">
							<i class="fa fa-heart-o"></i>
						</button>
						<a href="cart1.php">
						<button type="button" class="btn btn-secondary" title="Add to Cart" >
							<i class="fa fa-shopping-cart"></i>
						</button></a>
					</div>
				</div>
				
					<div class="product-bottom text-left">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<h3>Designer Coat</h3>
					<h5>INR 1800rs</h5>
				</div>
				</div>
				<div class="col-md-4" >
					<div class="product-top">
					<a href="ProductDetails3.php"><img src="accessories9.png"></a>
					<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to wishlist">
							<i class="fa fa-heart-o"></i>
						</button>
						<a href="cart1.php">
						<button type="button" class="btn btn-secondary" title="Add to Cart" >
							<i class="fa fa-shopping-cart"></i>
						</button></a>
					</div>
				</div>
				

					<div class="product-bottom text-left">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<h3>Broach</h3>
					<h5>INR 200rs</h5>
				</div>
				</div>
				<div class="col-md-4" >
					<div class="product-top">
					<a href="ProductDetails4.php"><img src="handmade2.png"></a>
					<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to wishlist">
							<i class="fa fa-heart-o"></i>
						</button>
						<a href="cart1.php">
						<button type="button" class="btn btn-secondary" title="Add to Cart" >
							<i class="fa fa-shopping-cart"></i>
						</button></a>
					</div>
				</div>
				
					<div class="product-bottom text-left">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<h3>Baskets</h3>
					<h5>INR 999rs</h5>
				</div>
				</div>
				<div class="col-md-4" >
					<div class="product-top">
					<a href="ProductDetails5.php"><img src="shoe1.png"></a>
					<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to wishlist">
							<i class="fa fa-heart-o"></i>
						</button>
						<a href="cart1.php">
						<button type="button" class="btn btn-secondary" title="Add to Cart" >
							<i class="fa fa-shopping-cart"></i>
						</button></a>
					</div>
				</div>
				
					<div class="product-bottom text-left">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<h3>Formal Shoes</h3>
					<h5>INR 1300rs</h5>
				</div>
				</div>
				<div class="col-md-4" >
					<div class="product-top">
					<a href="ProductDetails6.php"><img src="shoe4.png"></a>
					<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to wishlist">
							<i class="fa fa-heart-o"></i>
						</button>
						<a href="cart1.php">
						<button type="button" class="btn btn-secondary" title="Add to Cart" >
							<i class="fa fa-shopping-cart"></i>
						</button></a>
					</div>
				</div>
				
					<div class="product-bottom text-left">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<h3>Shoes</h3>
					<h5>INR 2000rs</h5>
				</div>
				</div>
			</div>
		</div>
	</section>
	<!-- -- -- --------- On Sale Product ---------------->
	<section class="on Sale">
		<div class="container">
			<div class="title-box1">
				<h2>Shoes</h2>
				
			</div>
			
		</div>
	</section>

	<section class="on-sale">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				<div class="product-top">
				<a href="ProductDetails7.php"><img src="shoe3.png"></a>
					<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to wishlist">
							<i class="fa fa-heart-o"></i>
						</button>

						<a href="cart1.php">
						<button type="button" class="btn btn-secondary" title="Add to Cart ">
							<i class="fa fa-shopping-cart"></i>
						</button></a>
					</div>
				</div>
				<div class="product-bottom text-left">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<h3>Jaipuri Mojdi</h3>
					<h5>INR 800rs</h5>
				</div>
			</div>
				<div class="col-md-4">
				<div class="product-top">
				<a href="ProductDetails8.php"><img src="shoe2.png"></a>
					<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to wishlist">
							<i class="fa fa-heart-o"></i>
						</button>
						<a href="cart1.php">
						<button type="button" class="btn btn-secondary" title="Add to Cart" >
							<i class="fa fa-shopping-cart"></i>
						</button></a>
					</div>
				</div>
				<div class="product-bottom text-left">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<h3>Fancy Shoes</h3>
					<h5>INR 1000rs</h5>
				</div>
				</div>

				<div class="col-md-4">
				<div class="product-top">
				<a href="ProductDetails5.php"><img src="shoe1.png"></a>
					<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to wishlist">
							<i class="fa fa-heart-o"></i>
						</button>
						<a href="cart1.php">
						<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class="fa fa-shopping-cart"></i>
						</button></a>
					</div>
					</div>
					<div class="product-bottom text-left">

					<i class="fa fa-star"></i>	
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<h3>Formal Shoes</h3>
					<h5>INR 1300rs</h5>
				</div>
				</div>

			</div>
			
		</div>
	</section>

	<!-- Decoratives -->
	<section class="Decoratives">
		<div class="container">
			<div class="title-box1">
				<h2>Decoratives</h2>
				
			</div>
			
		</div>
		<section class="on-sale">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				<div class="product-top">
				<a href="ProductDetails9.php"><img src="image-4.png"></a>
					<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to wishlist">
							<i class="fa fa-heart-o"></i>
						</button>

						<a href="cart1.php"></a>
						<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class="fa fa-shopping-cart"></i>
						</button></a>
					</div>
				</div>
				<div class="product-bottom text-left">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<h3>Royal Glass</h3>
					<h5>INR 400rs</h5>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-top">
				<a href="ProductDetails10.php"><img src="image-3.png"></a>
					<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to wishlist">
							<i class="fa fa-heart-o"></i>
						</button>
						<a href="cart1.php">
						<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class="fa fa-shopping-cart"></i>
						</button></a>
					</div>
				</div>
				<div class="product-bottom text-left">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<h3>Royal Painting</h3>
					<h5>INR 5000rs</h5>
				</div>
			</div>
				<div class="col-md-4">
				<div class="product-top">
				<a href="ProductDetails11.php"><img src="image-2.png"></a>
					<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to wishlist">
							<i class="fa fa-heart-o"></i>
						</button>
						<a href="cart1.php"><button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class="fa fa-shopping-cart"></i>
						</button></a>
					</div>
				</div>
				<div class="product-bottom text-left">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<h3>Decorative Elephant</h3>
					<h5>INR 900rs</h5>
				</div>
			</div>
		</div>
	</div>
</section>

<!--------- Clothes ------------>
<section class="Clothes">
		<div class="container">
			<div class="title-box1">
				<h2>Clothes</h2>
			</div>
		</div>
	</section>

	</section>
		<section class="on-sale">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				<div class="product-top">
				<a href="ProductDetails1.php"><img src="clothes1.png"></a>
					<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to wishlist">
							<i class="fa fa-heart-o"></i>
						</button>
							<a href="cart1.php"><button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class="fa fa-shopping-cart"></i>
						</button></a>	
					</div>
				</div>
				<div class="product-bottom text-left">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<h3>Designer Jeans</h3>
					<h5>INR 800rs</h5>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-top">
				<a href="ProductDetails2.php"><img src="clothes2.png"></a>
					<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to wishlist">
							<i class="fa fa-heart-o"></i>
						</button>
						<a href="cart1.php"><button type="button" class="btn btn-secondary" title="Add to Cart">
						<i class="fa fa-shopping-cart"></i>
						</button></a>	
					</div>
				</div>
				<div class="product-bottom text-left">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<h3>Designer Coat</h3>
					<h5>INR 1800rs</h5>
				</div>
			</div>
				
		</div>
	</div>
</section>
<!----------- Website Features -------------------->

	<section class="Website-features">
		<div class="container">
			<div class="row">
				<div class="col-md-4 feature-box">
				<img src="100.png">
				<div class="feature-text">
					<p><b>100% original items</b><br> are available at company</p>
				</div>		
				</div>
				<div class="col-md-4 feature-box">
				<img src="return.png">	
				<div class="feature-text">
					<p><b>Return within 30 days</b><br> of receiving your order</p>
				</div>		
				</div>
				<div class="col-md-4 feature-box">
				<img src="free.png">	
				<div class="feature-text">
					<p><b>Get free delivery for every</b><br> order or more than price</p>
				</div>		
				
			</div>
		</div>
				


	</section>
	<!-- Footer -->

<section class="footer">
	<div class="container tex-center">
		<div class="row">
		<div class="col-md-4">
			<h1>Useful Links</h1>
			<p>Privacy Policy</p>
			<p>Terms of Use</p>
			<p>Return Policy</p>
			<p>Discount Coupons</p>	
			</div>

			<div class="col-md-4">
			<h1>Company</h1>
			<p>About us</p>
			<p>Contact us</p>
			<p>Career</p>
			<p>Affilate</p>	
			</div>

			<div class="col-md-4">
			<h1>Follow us on</h1>
			<p><i class="fa fa-facebook-official"></i>Facebook</p>
			<p><i class="fa fa-youtube-play"></i>Youtube</p>
			<p><i class="fa fa-linkedin"></i>Linkedin</p>
			<p><i class="fa fa-instagram"></i>Instagram</p>	
			</div>
			</div>
			<hr>
			<p class="copy-right">@copyrights2019 reserved by Hastkala</p>
		</div>
	</section>

		


	<script>
		function openmenu()
		{
			document.getElementById("side-menu").style.display="block";
			document.getElementById("menu-btn").style.display="none";
			document.getElementById("close-btn").style.display="block";
		}

		function closemenu()
		{
			document.getElementById("side-menu").style.display="none";
			document.getElementById("menu-btn").style.display="block";
			document.getElementById("close-btn").style.display="none ";
		}
	</script>

	 
</body>
</html>
<?php
include "db.php";
if (isset($_POST['search_categories']))
{
	$keyword = $_POST["keyword"];
		$sql = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'";
}


?>
