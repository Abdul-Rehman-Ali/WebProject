<?php
require("connection.php");

$q = "SELECT * FROM studentsenroll ORDER BY id";
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
    <h2 class="text-center">Our Enrolled Students</h2>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Enroll Courses</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($res) > 0) {
                    while ($arr = mysqli_fetch_assoc($res)) {
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($arr['id']); ?></td>
                    <td><?php echo htmlspecialchars($arr['username']); ?></td>
                    <td><?php echo htmlspecialchars($arr['email']); ?></td>
                    <td><?php echo htmlspecialchars($arr['selectCourse']); ?></td>
                    <td><?php echo htmlspecialchars($arr['information']); ?></td>
                    <td><?php echo htmlspecialchars($arr['created_at']); ?></td>
                </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>No staff found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
