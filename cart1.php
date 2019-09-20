<?php
include "db.php";
session_start();

// var_dump($_SESSION);
if(!isset($_SESSION["uid"])){
	header("location:login page.php");
}
	
							
						 
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CART!</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
</head>
<body>

	<div class="top-nav-bar">
	<div class="search-box">
		
	<a href="index.php"><img src="hastkala1.png" class="logo" style="width:68%" style="height: 100%"></a>

	</div>
	
	</div>
	<?php
			if (isset($_POST['submit']))
								{
									    if(isset($_SESSION["uid"])){

                                        $email = $_SESSION["uid"];
									$de = "SELECT * FROM cart where user_id='$email'";
								   //var_dump($sql);
								  $r_query = mysqli_query($conn,$de);
								   
									if (mysqli_num_rows($r_query) > 0)
									{
										header("location:billing1.php");

									} 
									else
									{
										echo
										"<div class='alert alert-warning'>
										<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
										<span style='color:red;'><h4><center><b>Add Product To Cart To Continue Shopping..!</b></center></h4></span>
										</div>";
									}
									
									}

								}									
						 		if (isset($_POST['back']))
								{
									header("location:index.php");
								}
								

	?>



	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
	
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>Cart Details</h1>
						<hr/>
							<table border="1">

							<th><b>Action</b></th>
							<th><b>Product Image</th>
							<th><b>Product Name</b></th>
							<th><b>Quantity</b></th>
							<th><b>Product Price</b></th>
						</tr>

					
							<?php 	
								if(isset($_SESSION["uid"])){

										$email = $_SESSION["uid"];
										

								  $sql = "SELECT * FROM cart where user_id='$email'";
								  // var_dump($sql);
								  $run_query = mysqli_query($conn,$sql);
								   
									if (mysqli_num_rows($run_query) > 0) {
    								// output data of each row
    									while($rows = mysqli_fetch_assoc($run_query)) {
        									$p_id= $rows["p_id"];
        									$pname = $rows["p_name"];
        									$qty = $rows["qty"];
        									$price = $rows["p_price"];

        						$s ="SELECT * FROM products where product_id='$p_id'";
                            $ru_query=mysqli_query($conn,$s);
                           	  $_SESSION["p_id"] = $p_id;

                                 while($rows = mysqli_fetch_assoc($ru_query)) {
                                            $product_image = $rows["product_image"];
                                 			 // var_dump($p_img);
                                          }
        								 ?>

        									<tr>
        										<td>        											
								<div class="col-md-2">
									<div class="btn-group">
										 <form action="delete.php" method="post"> 
										 <button  class="btn btn-danger remove" remove_id="$p_id" name="removeItemFromCart" type="submit"><span class="glyphicon glyphicon-trash"></span></button> 
										 <!-- <input type="hidden" name="p_id[]" value="'.$p_id.'"/> -->
										 </form> 
										</div>
										</div></td>   
											    <td>
											   	<br><div class="col-md-3" ><img src="<?php echo "product_image/$product_image";?>"/></div>
											   </td>
        							 			<td><div class="col-md-2" ><?php echo $pname; ?></div></td>
        										<td><div class="col-md-2" ><?php echo $qty; ?></div></td>
        										<td><div class="col-md-2" ><?php echo $price; ?></div></td>
        									
        								<!-- <div class="col-md-2"><input type="text" class="form-control total" value="'.$product_price.'" readonly="readonly"></div> -->
        									</tr>
        						

    									<?php }
										}	
									}else 
										{
    										echo "0 results";
										}


							 ?>
						</table>

 								<div class="Checkout">
								<form action="cart1.php" method="post">
								<br>		
			    				<button class="btn btn-success  "  type="submit" name="submit" value="Checkout">Proceed To Checkout</button><br><br>
			    				<button class="btn btn-danger  " type="submit" name="back" value="Back">Click to GO back </button>
								</form>
								</div>

							
									<hr/>







						</div> 
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
			
		
</body>

</html>

