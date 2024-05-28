<?php
    // Include the database connection file
    require('connection.php');

    // Query to fetch data from the 'courses' table
    $sql = "SELECT * FROM courses LIMIT 8"; // Fetch only 8 records
    $result = $con->query($sql);
?>

<!-- Centered container with equal spacing on both sides -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="home_course text-center">
                <p class="home_course_p">
                    OUR COURSES
                </p>

                <div>
                    <h3>Explore Our Popular Online Courses</h3>
                </div>

                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
    </div>

    <!-- cards Courses -->
    <div class="row">
        <div class="col-lg-12">
            <div class="container-fluide home_courses">
                <div class="row home_offer_courses">
                    <?php
                        // Check if there are any rows returned from the query
                        if ($result->num_rows > 0) {
                            // Loop through each row of data
                            while($row = $result->fetch_assoc()) {
                                echo '<div class="card home_courses col-lg-3 col-md-6" style="width: 18rem;">';
                                echo '<img src="' . $row["image"] . '" class="card-img-top" alt="Our Courses">';
                                echo '<div class="card-body">';
                                echo '<h5 class="card-title">' . $row["title"] . '</h5>';
                                echo '<p class="card-text">' . $row["description"] . '</p>';
                                echo '<a href="' . $row["link"] . '" class="btn btn-primary home_course_enroll_btn">Enroll Now</a>';
                                echo '</div>';
                                echo '</div>';
                            }
                        } else {
                            // If no rows are returned, display a message
                            echo "No courses available.";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
