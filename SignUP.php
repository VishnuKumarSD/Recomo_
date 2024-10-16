<?php 
   include("database.php");

   if(isset($_POST['signup'])){
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM users WHERE email = '$email'";
      $result = mysqli_QUERY($conn,$sql);
      $num = mysqli_num_rows($result);

      if($num > 0){
         echo '<script>alert("Email already exists!")</script>';
      }
      else{
        $sql = "INSERT INTO users(email,password) VALUES('$email','$password')";
        mysqli_query($conn,$sql);
        header("location:HomePage.php");
      }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="SignUP.css">
    <title> Watch TV Shows Online, Watch Movies Online</title>
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
                <button><a href="SignIN.php">Sign In</a></button>
            </div>
        </nav>

        <div class="title">
            <div class="content">
                <h1>Unlimited movies, TV shows and more.</h1>
                <h2>Watch anywhere. Cancel anytime.</h2>
                <form action="SignUP.php" method="POST">
                    <h3>Ready to watch? Enter your email to create or restart your membership.</h3>
                    <div class="email">
                        <input type="email" name="email" placeholder="Email address">
                        <input type="password" name="password" placeholder="password">
                        <button type="submit" name="signup">Get Started  ></a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>