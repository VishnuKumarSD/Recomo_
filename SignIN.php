


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
                <a href="SignUP.html" style="padding-top: 38px;font-size: small;text-decoration: none;color: aliceblue;">Don't have an <br> account ?</a>
            </div>
        </nav>

        <div class="title">
            <div class="container-boxOfSignIN">
                <h3 style="padding-top: 21px;padding-left: 28px;">Sign In</h3>

             <form id="signInForm" action="HomePage.php" method="POST"> <!-- Added the form tag -->  
                <div class="form">
                    <input type="email" placeholder="Email" style="padding-left: 5px;" name="email">
                    <input type="password" placeholder="Password" style="padding-left: 5px;" name="password">
                    <input type="submit" value="Sign In" style="font-size: small;" name="submit">
                    <input type="checkbox">
                    <label style="font-size: small;">Remember me</label>
                    <a style="font-size: small;" href="#">Need help?</a>
                </div>
             </form>  
                <div class="content-signIN">
                    <h3>New to Netflix? <a href="SignUP.html">Sign up now.</a> </h3> <br>
                    <h4>This page is protected by Google reCAPTCHA <br> ensure you're not a bot. Learn more.</h4>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
session_start();

include("database.php"); // Make sure this file contains your database connection logic

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pass = $_POST["password"];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($pass == $row["password"]) { // You may want to hash the password and compare hashes
            // Successful login logic here
            echo "Login successful!";
            header("Location: HomePage.php");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with this email.";
    }

    $stmt->close();
}
?>

