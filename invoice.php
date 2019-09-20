<?php

session_start();
include "db.php";
{
        if (isset($_POST['back']))
                                {
                                    header("location:cart1.php");
                                }
        if (isset($_POST['Edit']))
                                {
                                    header("location:billing1.php");
                                }
                                       
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invoice</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    

</head>
<body>




                	<?php
                	if(isset($_SESSION["uid"])){

					$email = $_SESSION["uid"];
                    
                	$q = "SELECT name,mobile,pincode,address_1,address_2,landmark,city,state FROM billing where email='$email'";
                	
                    $result = mysqli_query($conn, $q);

                	while($rows=mysqli_fetch_assoc($result)){
                		  $name =$rows ['name'];
    					  $mobile = $rows['mobile'];
    					  $pincode =$rows ['pincode'];
   						  $address_1 =$rows['address_1'];
   						  $address_2 =$rows['address_2'];
   						  $landmark =$rows['landmark'];
 					      $city =$rows['city'];
   						  $state =$rows['state'];}
   						  
              	?>
                    <h2>Your delivery details</h2>
					<p><b>Name:- </b><?php echo $name;?></p>
                    <p><b>Mobile no:- </b><?php echo $mobile;?></p>
                    <p><b>Pincode:- </b><?php echo $pincode;?></p>
                    <p><b>Address:- </b><?php echo $address_1;?></p>
                    <p><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </b><?php echo $address_2;?></p>
                    <p><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        </b><?php echo $landmark;?></p>
                    <p><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        </b><?php echo $city;?></p>
                    <p><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        </b><?php echo $state;?></p>
                    <p><b>Payment Mode:- </b>Cash On Delivery</p>
                    <form action="invoice.php" method="POST">
                    
                    
                               
                                
                                <button class="btn btn-danger cart" type="submit" name="Edit" value="Edit">Edit Details</button>
                                
                    </form>
                      

        




                    <?php
                          
                                            

                       
                        if (isset($_POST['submit']))
                        {   
                             $sql = "SELECT * FROM cart where user_id='$email' ";
                                    //var_dump($sql);
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
                           
                                
                                 while($rows = mysqli_fetch_assoc($ru_query)) {
                                            
                                            $p_img = $rows["product_image"];
                                            $p_desc = $rows["product_desc"]; }
                                        


                        $a = "INSERT  INTO orders(user_id, p_id, qty, price, product_image, p_name ,product_desc ) values('$email','$p_id','$qty','$price','$p_img','$pname','$p_desc' )";
                            $result = mysqli_query($conn,$a);

                                        }}


                                        

                                        

                             //var_dump($a);
                          

                     
                            $sql = "DELETE FROM cart Where user_id = '$_SESSION[uid]' ";
                            if( mysqli_query($conn, $sql));
                            
                            {
                            header("location:index.php");
                            }
                         }
                    
                    
                    ?>


<div class="container-fluid">
    
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <h1>Cart Checkout</h1>
                        <hr/>
                            <table border="1">

                          
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
                                              
                                               </div></td>   
                                               <td><div class="col-md-2" ><img src="<?php echo "product_image/$product_image";?>"/> </td></div>
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

                                <form action="invoice.php" method="post">
                                <br>
                                <button class="btn btn-success cart "  type="submit" name="submit" value="Buy">Proceed To Buy</button><br>
                                <br>
                                <button class="btn btn-danger cart" type="submit" name="back" value="back"> Make Change In Cart</button>
                                </form>


                    
                <!-- </tr>
            </tbody> -->

            <?php
                    }

                    ?>

       <!--  </table> -->




</body>
</html>