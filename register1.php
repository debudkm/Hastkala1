<?php
session_start();

include "db.php";
if(isset($_POST['submit'])) {

  $Name = $_POST["Name"];
  $Password = $_POST['Password'];
  $Email = $_POST['Email'];
 
 $query="INSERT INTO `user_info`(`first_name`, `password`, `email`) VALUES ([$Name],[$Password],[$Email])";

  
  {
  if(mysql_query($con,$query))
  {
    echo "<h3>you are successfully login</h3>";
  }
 }
}
?>