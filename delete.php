	<?php
	session_start();
	include "db.php";
	if(isset($_SESSION["uid"])){

		$user_id = $_SESSION["uid"];
		var_dump($user_id);
	if(isset(  $_SESSION["p_id"] )){
		$p_id = $_SESSION["p_id"];
		var_dump($pid);
                       
// if (isset($_POST["removeItemFromCart"])) {
// 	$remove_id = $_POST["$p_id"];
// 	var_dump($remove_id);
// 		$sql = "DELETE FROM cart WHERE p_id = '.$remove_id.' AND user_id = '$user_id'";
// 		}
// 	if(mysqli_query($conn,$sql)){
// 		echo "<div class='alert alert-danger'>
// 						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
// 						<b>Product is removed from cart</b>
// 				</div>";
// 		exit();
// 	}




	
	if (isset($_POST['removeItemFromCart'])) {
		$sql = "DELETE FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
		echo "delete";
	}
	if(mysqli_query($conn,$sql)){
		echo "<div class='alert alert-danger'iss='alert' aria-label='close'>&times;</a>
						<b>Product is removed from cart</b>
						<a href='#' class='close' data-dism
				</div>";
			
			
				header("location:cart1.php");
				
			
	
}

}
}

?>


