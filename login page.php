 <?php
session_start();
include "db.php";

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = ($_POST['password']);
  
   $sql = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
  $run_query = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($run_query);
  //if user record is available in database then $count will be equal to 1
  if($count == 1){
    if($row=mysqli_fetch_assoc($run_query))
    {
      $email=$row['email'];
      
      $_SESSION['uid'] = $email;

        header("Location:http://localhost/hastkala2/index.php");
      }
    
      }else
      {
        echo "<center><h3><b>Your email & Password is wrong</b></h3></center>";
      }

  
}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 1% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;

  background: #fff;
  border-top:solid 2px  orange;
  border-bottom:solid 2px  orange;
  border-right: solid 2px  orange;
  border-left: solid 2px  orange;

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
.form button:hover.form button:active,.form button:focus {
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
.form .register-form {
  width: 273px;
  padding: 8% 0 0;
  margin: auto;
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
.body {
  background: #FFFFFF; 
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
      
      <form action="login page.php" method="post">
      <input type="email" name="email" placeholder="email address" required="required" />
    <input type="password" name="password" placeholder="password"  id="password"  required="required"/>
      <button type="submit" name="submit" value="login-page">login</button>
      <p class="message">Not registered? <a href="connect2.php">Create an account</a></p>
      <br>
      <br>
    </form>
  </div>
</div>

</body>
</html>

