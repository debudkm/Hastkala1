<?php
session_start();

include "db.php";

 if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password =$_POST ['password'];
    $conpassword =$_POST['con_password'];
    
     $password = ($password);
     $conpassword = md5($conpassword);
    
  
    $sql = "SELECT user_id FROM register WHERE email = '$email' LIMIT 1" ;
  $check_query = mysqli_query($conn,$sql);
  $count_email = mysqli_num_rows($check_query);
  if($count_email > 0){
    echo 
    "<center><b><h3><span style='color:red;'> Email Address you entered is already in use try another Email Address</span></h3></b></center>";
    
  
  } else {

   
      $sql= "INSERT INTO register (name, email, mobile, password, conpassword) VALUES ('$name','$email','$mobile','$password','$conpassword')";
      $run_query = mysqli_query($conn,$sql);
      $_SESSION["uid"] = $email;

    {
      header("Location:http://localhost/hastkala2/index.php");
    }
}
}
?>   
 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.register-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 10;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #ffa500;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #ffa500;
}
.form .message {
  margin: 15px 0 0;
  color: #000000;
  font-size: 12px;
}
.form .message a {
  color: #ffa500;
  text-decoration: none;
}
/*.form .register-form {
  width: 273px;
  padding: 8% 0 0;
  margin: auto;*/
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 100px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #FFFFFF;
  /*background-image: url("background.jpg");*/
  background-repeat: no-repeat;
  background-size: cover;
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
#logo
{
  margin: 2% 41% 0 41%;
  width:18%;
}

</style>
</head>
<body>

<img id="logo" src="hastkala1.png">
<div class="login-page">
  <div class="form">
    <form class="register-form" action="connect2.php" method="post">
      <input type="text" name="name" placeholder="name" required="required" />
      <input type="email" name="email" placeholder="email address" required="required" />
     <input type="tel" id="mobile" name="mobile" minlength="10" maxlength="10"   placeholder="Mobile Number" pattern="[0-9]*"  required title="Mobile no. should be 10 digits"/>
      <input type="password" name="password" placeholder="password"  id="password" pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,}" required title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
      <input type="password" name="con_password" placeholder="Confirm Password" id="confirm_password"  pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
      <button type="submit" name="submit" value="submit">Create Account</button>
      <p class="message">Already registered? <a href="login page.php">Sign In</a></p>
    </form>
    </div>
</div>
<script type="text/javascript">
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>


</body>
</html>

