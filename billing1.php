<?php
include "db.php";
SESSION_start();
 


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <style type="text/css">
		
body 
{
  font-family: serif;
  font-size: 17px;
  padding: 8px;
}



input[type=text]
 {
  width: 70%;
  display:block;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  border-color: orange;
}

input[type=tel]
 {
  width: 70%;
  display:block;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  border-color: orange;
}

input[type=number]
 {
  width: 70%;
  display:block;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  border-color: orange;
}


label
 {
  margin-bottom: 10px;
  display: block;
}




/*.btn
 {
  background-color: #FF8C00;
  color: white;
  display: block;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 20%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
*/
/*.btn:hover {
  background-color: #FF4500;
}
*/
p{
	margin-left: 50px;
}

	</style>
</head>


<body>

		
	<h2>
		Delivery Address
	</h2>
	<form action="billing1.php" method="post">
		<label>
			Full name <input type="text" name="name" placeholder="full name" required="required">
		</label>

	<div>
		<label>
			Mobile number <input type="tel" name="mobile" minlength ="10" maxlength="10" placeholder="mobile no." pattern="[0-9]*" required title="Mobile no. should be 10 digits">
		</label>
	</div>

	<div>
		<label>
			Pincode <input type="number" name="pincode" placeholder="pincode" required="required">
		</label>
	</div>

	<div>
		<label>
			Flat, House no., Building, Appartment <input type="text" name="address_1" placeholder="Address" required="required">
		</label>
	</div>

	<div>
		<label>
			Area, Colony, Street, Sector, Village <input type="text" name="address_2" placeholder="Address" required="required">
		</label>
	</div>

	<div>
		<label>
			landmark <input type="text" name="landmark" placeholder="Address" required="required">
		</label>
	</div>

	<div>
		<label>
			Town/city <input type="text" name="city" placeholder="eg Vallabh Vidyanagar" required="required">
		</label>
	</div>

	<div>
		<label>
			State <input type="text" name="state" placeholder="eg. Gujarat" required="required">
		</label>
	</div>

	<div>
		
			<input type="checkbox" checked="checked" name="cod" required="required"> Cash on delivery
		
	</div>

	<br>

	<div>
		
		  
		 <center><button class="btn btn-success cart" type="submit" name="submit" value="submit">Submit</button>
		</center>	
	</div>
</form>

  					<form action="billing1.php" method="post">
                               
                   <br>
                   <center><button class="btn btn-danger cart" type="submit" name="back" value="back">Go Back To Cart</button>
                   </center>
                   </form>



</body>
</html>

<?php
{
	{
  if (isset($_POST['back']))
                                {
                                    header("location:cart1.php");
                                }


  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $pincode =$_POST ['pincode'];
    $address_1 =$_POST['address_1'];
    $address_2 =$_POST['address_2'];
    $landmark =$_POST['landmark'];
    $city =$_POST['city'];
    $state =$_POST['state'];

    if(is_numeric($mobile))
    {
    	if(isset($_SESSION['uid']))
    	{
    		$email= $_SESSION["uid"];

    
 $sql= "INSERT INTO billing (name, email, mobile, pincode, address_1, address_2, landmark, city, state) VALUES ('$name', '$email', '$mobile','$pincode','$address_1','$address_2','$landmark','$city','$state')";
  $run_query=mysqli_query($conn,$sql);
   $_SESSION["uid"] = $email;
   {
   	header("location:invoice.php");
   }

  }
}
  else{
  	$err="mobile number should be numeric!!";
  }  
      
  
  }
  

}
}
?>