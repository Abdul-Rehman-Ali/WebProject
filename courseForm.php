<?php
session_start();
require("connection.php");

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $message = $_POST['message'];

    $sql = "INSERT INTO studentsEnroll (username, email, selectCourse, information) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $email, $course, $message);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll Course</title>
    <link href="Asserts/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Asserts/css/font_awosome_icon.css">
    <script src="Asserts/js/bootstrap.min.js"></script>
    <script src="Asserts/js/jquery-3.7.1.min.js"></script>
    <script src="Asserts/js/lottie.min.js"></script>
    <script src="Asserts/js/font_awesome.js"></script>
</head>
<body>
    <!-- Header -->
    <?php include("header.php"); ?>

    <!-- form -->
    <div class="container signup_heading"></div>

    <div class="container divider form">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div id="animation"></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <form class="login-form" action="" method="post">
                    <h2>Enroll Course <span>SmartLoop</span></h2>
                    <div class="form-group">
                        <label for="username">Username *:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email *:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="course">Select Course *:</label>
                        <select id="course" name="course" required>
                            <option value="" disabled selected>Select Course</option>
                            <option value="web_development">Web Development</option>
                            <option value="shopify">Shopify</option>
                            <option value="wordpress">Wordpress</option>
                            <option value="app_development">App Development</option>
                            <option value="seo_course">SEO Course</option>
                            <option value="python">Python</option>
                            <option value="ai">Artificial intelligence</option>
                            <option value="digital_marketing">Digital Marketing</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Additional Information *:</label>
                        <textarea name="message" id="message" cols="55" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include("footer.php"); ?>
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
