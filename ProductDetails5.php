<?php
session_start();


include "db.php";


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

		<div class="top-nav-bar">
	<div class="search-box">
		
	<a href="index.php"><img src="hastkala1.png" class="logo"></a>
	<input type="text" placeholder="Search the Categories" class="form-control" size="60">
	<span class="input-group-text"><i class="fa fa-search"></i></span>
	</div>
	<div class="menu-bar">
		<ul>
			<li><a href="yourorder.php">Your orders</li>
			<li><a href="cart1.php"><i class="fa fa-cart-arrow-down"> </i>Cart<span class="badge">0</span></a></li>
			<li><a href="login page.php"><i class="fa fa-user-plus"></i>Sign in</a></li>
			

		</ul>
	</div>
	</div>


		<?php
	if (isset($_POST['back']))
			{
				header("Location:index.php");
			}


			if (isset($_POST['submit'])){

	$p_id = $_POST['ProductID'];
	$qty = $_POST['Quantity'];
    $p_name = $_POST['Product-Name'];
    $p_price = $_POST['Product-price'];


	
    $ip_add = getenv("REMOTE_ADDR");
       
   
      $s ="SELECT * FROM products where product_id='$p_id'";
             $ru_query=mysqli_query($conn,$s);
  
              while($rows = mysqli_fetch_assoc($ru_query)) {
                                            $s = $rows["product_image"];
                                             }

	if(isset($_SESSION["uid"])){

		$user_id = $_SESSION["uid"];
	
										

		  $sql = "SELECT * FROM cart where user_id='$user_id' AND p_id ='$p_id'";
				//var_dump($sql);
		$run_query = mysqli_query($conn,$sql);
								   
		if (mysqli_num_rows($run_query) > 0) {

										echo "
						<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<span style='color:red;'><center><b>Product is already added into the cart Continue Shopping..!</b></center></span>
						</div>
						";
					}
	
		else			

	{

	$sql= "INSERT INTO cart(id, p_id, ip_add, user_id, p_name, qty, p_price, product_image ) VALUES ('$id','$p_id','$ip_add','$user_id','$p_name','$qty','$p_price','$s')";
	
	$run_query=mysqli_query($conn,$sql);
	$_SESSION["pid"] = $p_id;
   	//var_dump($sql);
    
		{
      	
      	header("Location:http://localhost/hastkala2/cart1.php");

    	}

    }
}	else
    {
		header("Location:http://localhost/hastkala2/login page.php");    	
    }

	}

	?>


	<div class="container">
		<div class="row">
			<div class="col-md-5">
				
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="shoe1.png" class="d-block w-100" alt="First slide">
    </div>
    <div class="carousel-item">
      <img src="shoe1.png" class="d-block w-100" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="shoe1.png" class="d-block w-100" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img src="shoe1.png" class="d-block w-100" alt="Third slide">
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
			</div>
			<div class="col-md-7">
				<p class="newarrival text-center">NEW</p>
				<h2>Formal Shoes</h2>
				<p>Product Code:ISRC2018</p>
				<div class="product-bottom text-left">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i></div>
				<p class="price">INR Rs.1300</p>
				<p><b>Availability:</b> In Stock</p>
				<p><b>Condition:</b >New</p>
				<p><b>Brand:</b> XYZ Company</p>

					<form action="ProductDetails5.php" method="post">
					
					<input type="hidden" name="Product-Name" value="Formal Shoes">
					<label>Quantity:</label>
				<input type="number" name="Quantity"  min="1" max="10" value="1" >
					<input type="hidden" name="ProductID" value="3">
					<input type="hidden" name="Product-price" value="1300">
					<br>
					<br>
			    <button class="btn btn-success cart" type="submit" name="submit" value="addtocart">Add to cart</button>


				</form>

			</div>
		</div>
</div>




<!--------------footer------------ -->
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




	
</body>
</html>



