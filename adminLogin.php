<?php 
   include("database.php");

   if(isset($_POST['login'])){
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM admin WHERE email = '$email' and password = '$password'";
      $result = mysqli_QUERY($conn,$sql);
      $num = mysqli_num_rows($result);

      if($num > 0){
         echo '<script>alert("Login Success")</script>';
         header("location:admin.php");
      }
      else{
        echo '<script>alert("Email and password not matching")</script>';
      }
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="SignIN.css">
    <title>Netflix India - Watch TV Shows Online, Watch Movies Online</title>
</head>
<body>

    <div class="container">
        <nav class="navbar">
            <div class="left">
                <img src="images/netflix-logo.png" alt="">
            </div>
            <div class="right">
                <select name="language" class="language">
                    <option value="English">English</option>
                    <option value="Hindi">Hindi</option>
                </select>
                <a href="SignUP.php" style="padding-top: 38px;font-size: small;text-decoration: none;color: aliceblue;">Don't have an <br> account ?</a>
            </div>
        </nav>

        <div class="title">
            <div class="container-boxOfSignIN">
                <h3 style="padding-top: 21px;padding-left: 28px;">Admin</h3>

             <form id="signInForm" action="SignIN.php" method="POST"> <!-- Added the form tag -->  
                <div class="form">
                    <input type="email" placeholder="Email" style="padding-left: 5px; font-size: 14px;" name="email">
                    <input type="password" placeholder="Password" style="padding-left: 5px;  font-size: 14px;" name="password">
                    <input type="submit" value="Sign In" style="font-size: small;" name="login">
                    <input type="checkbox">
                    <label style="font-size: small;">Remember me</label>
                    <a style="font-size: small;" href="#">Need help?</a>
                </div>
             </form>  
                <div class="content-signIN">
                    <h3>New to Rocomo? <a href="SignUP.html">Sign up now.</a> </h3> <br>
                    <h4>This page is protected by Google reCAPTCHA <br> ensure you're not a bot. Learn more.</h4>
                </div>
            </div>
        </div>
    </div>
</body>
</html>