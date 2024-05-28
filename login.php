<?php
    require('connection.php');

    if(isset($_POST['firstname']))
    {
        $uname= $_POST['firstname'];
        // $ulastname= $_POST['lastname'];
        $pas = $_POST['password'];
        $q="select password from users where username='$uname'";
        $res= mysqli_query($con,$q);
        if(mysqli_num_rows($res)>0) {
            $arr=mysqli_fetch_assoc($res);
            $db_pass= $arr['password'];
            if($db_pass==$pas)
            {
                session_start();
                $_SESSION['userid']=true;
                header('location:index.php');
            }
            else
                echo "login failed";
        }
        else
            echo "Invalid user";

        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="Asserts/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Asserts/css/font_awosome_icon.css">
    <script src="Asserts/js/bootstrap.min.js"></script>
    <script src="Asserts/js/jquery-3.7.1.min.js">
    </script>
 <script src="Asserts/js/lottie.min.js"></script>
  </head>
  <script src="Asserts/js/font_awesome.js" > </script>
<body>
    <!-- Header -->
    <?php
    include("header.php");
    ?>

    <!-- form -->
    <div class="container signup_heading">
    </div>

    <div class="container divider form">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div id="animation"></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <form class="login-form" action="#" method="post">
                    <h2> Login to Your Account</h2>
                    <div class="form-group">
                        <label for="username">Username *:</label>
                        <input type="text" id="firstname" name="firstname" required>
                    </div>
                    <!-- <div class="form-group">
                        <label for="username">Last Name *:</label>
                        <input type="text" id="lastname" name="lastname" required>
                    </div> -->
                    <div class="form-group">
                        <label for="password">Password *:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">Login</button>
                    </div>
                    <div class="form-group">
                        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

     <!-- footer -->
     <?php
    include("footer.php");
    ?>
   
    
</body>
<script>
  // Load the animation
  var animation = bodymovin.loadAnimation({
      container: document.getElementById('animation'),
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path: 'Asserts/Animation/animation.json' // Path to your JSON animation file
  });
</script>
</html>
