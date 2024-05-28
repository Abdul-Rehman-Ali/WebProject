<?php
    require("connection.php");
    $q = "select * from users order by user_id";
    $res = mysqli_query($con, $q);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Side</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body>
        <h1 class="text-center py-3">Welcome To SmartLoop</h1>
        <h2 class="text-center">Our Users</h2>
      <table class="table table-bordered">
        <tr>
          <td> <b>User Id</b></td>
          <td><b>User Name</b></td>
          <td><b>Email</b></td>
          <td><b>Phone</b></td>
          <td><b>Date</b></td>
        </tr>


        <?php
      
      if(mysqli_num_rows($res)>0) {
        
        while($arr=mysqli_fetch_assoc($res)){

          ?>
          
          <tr>
            <td> <?php echo $arr['user_id']; ?> </td>
            <td><?php echo $arr['username']; ?></td>
            <td><?php echo $arr['email']; ?></td>
            <td><?php echo $arr['password']; ?></td>
            <td><?php echo $arr['dt']; ?></td>
            
          </tr>
          <?php
          
        }
        
    }
      
            ?>

      </table>


    
  </body>
</html>

<?php
  include("admin_courses.php");
  include("admin_staff.php");
?>