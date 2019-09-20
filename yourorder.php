<?php
session_start();
include "db.php";
	if (isset($_POST['back']))
			{
				header("Location:index.php");
			}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>HASTKALA</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style>
			table tr td {padding:10px;}
		</style>
</head>
<body>
	<div class="top-nav-bar">
	<div class="search-box" >
		<i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
		<i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>

	<a href="index.php"><img src="hastkala1.png" class="logo"></a>
</div>
</div>
<p><br/></p>
	<p><br/></p>
	<p><br/></p>
					
					
	<div class="container-fluid">
	
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>Customer Order details</h1>
						<hr/>
							<table border="1">
        										<tr>
								
								<th>Product Image</th>
								<th>Product Name</th>
								<th>Quantity</th>
								<th> Product Price</th>
								<th>Product Description<th>
								</tr> 	


						<?php						
								if(isset($_SESSION["uid"])){
								$email=$_SESSION["uid"];
								
							
								
								$sql = "SELECT * FROM orders where user_id='$email'  ";
								  // var_dump($sql);
								  $run_query = mysqli_query($conn,$sql);
								   
									if (mysqli_num_rows($run_query) > 0) {
    								// output data of each row
    									while($rows = mysqli_fetch_assoc($run_query)) {
        									$p_id= $rows["p_id"];
        									$pname = $rows["p_name"];
        									$qty = $rows["qty"];
        									$price = $rows["price"];
        									$p_desc = $rows["product_desc"]; 
        									$product_image = $rows["product_image"];?>
        								
        									<tr>
        										</div></td>   
											   <td><div class="col-md-2" ><img src="<?php echo "product_image/$product_image";?>"/> </div></td>
        										
        										<td><?php echo $pname; ?></td>
        										<td><?php echo $qty; ?></td>
        										<td><?php echo $price; ?></td>
        										<td><?php echo $p_desc; ?></td>
        									</tr>
        									

    									<?php 
    									}
										}	
									}				
									?>

						

								</table>	


								 	<form action="yourorder.php" method="post">
								<br>
			    				<button class="btn btn-danger cart" type="submit" name="back" value="back">Go Back</button>
			    				</form>




									<hr/>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>