<?php
require("connection.php");

$q = "SELECT * FROM users ORDER BY user_id";
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
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($res) > 0) {
                    while ($arr = mysqli_fetch_assoc($res)) {
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($arr['user_id']); ?></td>
                    <td><?php echo htmlspecialchars($arr['username']); ?></td>
                    <td><?php echo htmlspecialchars($arr['email']); ?></td>
                    <td><?php echo htmlspecialchars($arr['password']); ?></td>
                    <td><?php echo htmlspecialchars($arr['dt']); ?></td>
                </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>No users found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Including other admin pages -->
    <?php
    include("admin_courses.php");
    include("admin_staff.php");
    include("admin_enrollS.php");
    ?>
</body>
</html>
