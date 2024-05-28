<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning </title>
    <link rel="stylesheet" href="Asserts/css/bootstrap.min.css">
    <script src="Asserts/js/bootstrap.min.js"></script>
    <link href="bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Asserts/css/font_awosome_icon.css">
</head>
<script src="Asserts/js/font_awesome.js" > </script>
<body>
    <!-- Header -->
    
    <?php
    include("header.php");
    ?>

    <!-- Banner Image With Content -->

    <div class="container-fluid bg-container">
      <p id="greet">Welcome To Smart Loop</p>
      <h1 id="Home_banner_h1">Best E-Learning <br> Online Education</h1>
      <p id="Home_banner_text">SmartLoop offers a seamless online learning experience, empowering students to engage with interactive courses tailored to their needs. With a user-friendly interface and diverse content library, learners can access high-quality educational resources anytime, anywhere. </p>
      <button type="button" class="btn btn-outline-dark btn-lg Home_banner_btn" onclick="window.location.href='courses.php'">Apply Now</button>
    </div>

<!-- 4 Boxed In the bottm of Banner Image -->

    <div class="container-fluid">
      <div class="row three-div">
        <div class="col-lg-3 col-md-6  col-sm-12  home_div1 text-center">
          <i class="fa-solid fa-person-chalkboard  fa-4x icon"></i>
          <h3 class="four_div_h3">Special Education</h3>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
        </div>
        <div class="col-lg-3 col-md-6  col-sm-12 home_div2 text-center">
          <i class="fa-solid fa-book-open  fa-4x icon"></i>
          <h3 class="four_div_h3">Book & Library</h3>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
        </div>
        <div class="col-lg-3 col-md-6  col-sm-12 home_div3 text-center">
          <i class="fa-solid fa-school  fa-4x icon"></i>
          <h3 class="four_div_h3">Sport Clubs</h3>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
        </div>
        <div class="col-lg-3 col-md-6  col-sm-12 home_div4 text-center">
          <i class="fa-solid fa-graduation-cap  fa-4x icon"></i>
          <h3 class="four_div_h3">Certified Teachers</h3>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
        </div>
      </div>
      </div>
    </div>

      <!-- Benefit of Online Class  -->


    <div class="container home_benefit_online">
      <div class="row">
        <div class="col-lg-6 col-md-4 col-sm-12 home_benefit_online1">
        </div>


        <div class="col-lg-6 col-md-8 col-sm-12 home_benefit_online2">
          <p class="home_benefit_online2_p">LEARN ANYTHING</p>
          <h2>Benefits About Online <br> Learning Expertise</h2>


          <div class="home_three_benefits_div row iocn_benefits">
            <div class="col-md-3"> 
              <i class="fa-solid fa-laptop fa-4x iocn_benefits_icon"></i>
            </div>
            <div class="col-md-9">
              <h3 class="icon_benefits_h3">Online Courses</h3>
              <p class="icon_benefits_p">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>


          <div class="home_three_benefits_div row iocn_benefits">
            <div class="col-md-3"> 
              <i class="fa-solid fa-award fa-4x iocn_benefits_icon"></i>
            </div>
            <div class="col-md-9">
              <h3 class="icon_benefits_h3">Earn A Certificates</h3>
              <p class="icon_benefits_p">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>

          <div class="home_three_benefits_div row iocn_benefits">
            <div class="col-md-3"> 
              <i class="fa-solid fa-medal fa-4x iocn_benefits_icon"></i>
            </div>
            <div class="col-md-9">
              <h3 class="icon_benefits_h3">Learn with Expert</h3>
              <p class="icon_benefits_p">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
            </div>
        </div>
      </div>
    </div>

    <!-- Courses Headings-->

    <?php
      include("our_courses.php");
    ?>

    <!-- More Button -->
    <div class="home_course_btn">
      <button type="button" class="btn btn-outline-dark btn-lg home_other_courses_btn" onclick="window.location.href='courses.php'">Other Courses</button>
    </div>
    <!-- ----- -->

     <!-- Certified teachers heading-->
     <div class="home_testimonial_heading text-center">
      <p class="home_testimonial_p">
        OUR STAFF
      </p>

      <div>
        <h3>Certified Teachers</h3>
      </div>

      <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
    </div> 
   
     <?php
      include("our_staff.php");
    ?>

    <!-- Testimonial Headings-->

    <div class="home_testimonial_heading text-center">
      <p class="home_testimonial_p">
        TESTIMONIAL
      </p>

      <div>
        <h3>Our Successful Students</h3>
      </div>
    </div>


    <!-- Testimonial -->

    <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="Asserts/images/testimonial_image_1.webp" class="d-block w-100 home_testimonial_image" alt="...">
          <div class="carousel-caption d-none d-md-block testmonial_image_text">
            <h5>Abdul Rehman Ali</h5>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="Asserts/images/testimonial_image_2.webp" class="d-block w-100 home_testimonial_image" alt="...">
          <div class="carousel-caption d-none d-md-block testmonial_image_text">
            <h5>Zara Chaudhary</h5>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Asserts/images/testimonial_image_3.webp" class="d-block w-100 home_testimonial_image" alt="...">
          <div class="carousel-caption d-none d-md-block testmonial_image_text">
            <h5>Arshiya Khan</h5>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Recent Blogs Heading -->
   
    <div class="home_testimonial_heading text-center">
      <p class="home_testimonial_p">
        Read Me
      </p>

      <div>
        <h3>Recent Blogs</h3>
      </div>

      <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
    </div>

    <!-- Recent Blogs -->

    <div class="container home_three_recent_blog">
      <div class="row py-5">
    
        <div class="col-md-6 col-lg-4 mb-4"> 
          <div class="card">
            <img src="Asserts/images/homeBanner.webp" class="card-img-top" alt="...">
            <div class="card-body certified_blog_title">
              <h5 class="card-title">What is Digital Marketing?</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary home_blog_read_btn">Read More</a>
            </div>
          </div>
        </div>
    
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card">
            <img src="Asserts/images/homeBanner.webp" class="card-img-top" alt="...">
            <div class="card-body certified_blog_title">
              <h5 class="card-title">Role of AI in future?</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary home_blog_read_btn">Read More</a>
            </div>
          </div>
        </div>
    
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card">
            <img src="Asserts/images/homeBanner.webp" class="card-img-top" alt="...">
            <div class="card-body certified_blog_title">
              <h5 class="card-title">Why Python is important?</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary home_blog_read_btn">Read More</a>
            </div>
          </div>
        </div>
    
      </div>
    </div>


     <!-- More Button -->
    <div class="home_blog_btn">
      <button type="button" class="btn btn-outline-dark btn-lg home_other_blogs_btn" onclick="window.location.href='blogs.php'">Other Blogs</button>
    </div>


    <!-- footer -->
    
    <?php
    include("footer.php");
    ?>


</body>
</html>