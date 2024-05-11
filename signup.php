<?php
require("connection.php");

if (isset($_POST['first_name']))
{

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];

    $q = "INSERT INTO users (firstname, lastname, email, phone, password, dt) VALUES ('$first_name', '$last_name', '$email', '$phone', '$pass',current_timestamp())";

    mysqli_query($con, $q);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link href="Asserts/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="Asserts/js/bootstrap.min.js"></script>
    <script src="Asserts/js/jquery-3.7.1.min.js">
    </script>
</head>
 <script src="Asserts/js/lottie.min.js"></script>
<body>
  <!-- Header  -->
  <?php
    include("header.php");
    ?>

    <!-- form  -->
   
    <div class="container signup_heading">
    </div>

    <div class="container divider form">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div id="animation"></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
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
                        <p>Already have an account? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Animation logic
    <script>
      var animation = bodymovin.loadAnimation({
          container: document.getElementById('animation'),
          renderer: 'svg',
          loop: true,
          autoplay: true,
          path: 'Asserts/Animation/animation.json'
      });
 
      document.getElementById('signup-form').addEventListener('submit', function(event) {
          event.preventDefault();
          var formData = new FormData(this);
          for (var pair of formData.entries()) {
              console.log(pair[0] + ': ' + pair[1]);
          }
      });
  </script> -->

    <!-- footer -->
    <?php
    include("footer.php");
    ?>
   

   <!-- Animation logic -->
   <script>
      var animation = bodymovin.loadAnimation({
          container: document.getElementById('animation'),
          renderer: 'svg',
          loop: true,
          autoplay: true,
          path: 'Asserts/Animation/animation.json'
      });
 
    //   document.getElementById('signup-form').addEventListener('submit', function(event) {
    //       event.preventDefault();
    //       var formData = new FormData(this);
    //       for (var pair of formData.entries()) {
    //           console.log(pair[0] + ': ' + pair[1]);
    //       }
    //   });
  </script>
</body>
<!-- <script> -->

 <!-- //  document.getElementById('signup-form').addEventListener('submit', function(event) {
 //      event.preventDefault();
 //      var formData = new FormData(this);
 //      for (var pairs of formData.entries()) {
 //          console.log(pair[0] + ': ' + pair[1]);
 //      }
 //  }
 //  ); -->
<!-- </script> -->
</html>
