<?php
require("connection.php");

if (isset($_POST['first_name']))
{

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];

    // $sql = "INSERT INTO users (`firstname`, `lastname`, `email`, `phone`, `password`, `dt`) VALUES ('$first_name', '$last_name', '$email', '$phone', '$pass', current_timestamp())";

$q = "INSERT INTO users (firstname, lastname, email, phone, password, dt) VALUES ('$first_name', '$last_name', '$email', '$phone', '$pass',current_timestamp())";

mysqli_query($con, $q);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="login-form" id="signup-form" action="signup.php" method = "post">
                    <h2>  Sign Up for an Account</h2>
                    <div class="form-group">
                        <label for="first-name">First Name:</label>
                        <input type="text" id="first-name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name:</label>
                        <input type="text" id="last-name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="text" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password:</label>
                        <input type="password" id="confirm_password" name="confirm-password" required>
                    </div>
                    <div class="form-group">
                
                        <button type="submit" name="submit_btn">Sign Up</button>
                    </div>
                    <div class="form-group">
                        <p>Already have an account? <a href="login.html">Login</a></p>
                    </div>
                </form>
</body>
</html>