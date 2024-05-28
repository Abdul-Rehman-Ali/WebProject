<?php
require("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers</title>
    <link href="Asserts/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Asserts/css/font_awosome_icon.css">
    <script src="Asserts/js/bootstrap.min.js"></script>
    <script src="Asserts/js/jquery-3.7.1.min.js"></script>
    <script src="Asserts/js/lottie.min.js"></script>
    <script src="Asserts/js/font_awesome.js"></script>
</head>
<body>

    <!-- Certified teachers -->
    <div class="container-fluid px-6 certified_teacher text-center py-3px">
        <div class="row">
            <?php
            // Fetch teachers from the database
            $sql = "SELECT * FROM staff";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-6 col-lg-3 mb-4">';
                    echo '<img src="'.$row['image'].'" class="card-img-top" alt="...">';
                    echo '<div class="card-body certified_teacher_name">';
                    echo '<h3>'.$row['name'].'</h3>';
                    echo '<span>'.$row['position'].'</span>';
                    echo '<p class="card-text">'.$row['description'].'</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No teachers found.</p>';
            }
            ?>
        </div>
    </div>


</html>
