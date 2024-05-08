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
    
    

    <!-- slider -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Asserts/images/wordpress.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Asserts/images/app_development.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Asserts/images/web_development.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Asserts/images/artificial_intelligence.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Asserts/images/python.webp" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <!-- Courses Headings-->

    <div class="home_course text-center">
      <p class="home_course_p">
        OUR COURSES
      </p>

      <div>
        <h3>Explore Our Popular Online Courses</h3>
      </div>

      <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
    </div>

    <!-- cards Courses -->
<div class="container-fluide home_courses">
  <div class="row home_offer_courses">

    <div class="card home_courses col-lg-3 col-md-6" style="width: 18rem;">
      <img src="Asserts/images/homeBanner.webp" class="card-img-top" alt="Our Courses">
      <div class="card-body">
        <h5 class="card-title">Web Development</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="web_development.html" class="btn btn-primary home_course_enroll_btn">Enroll Now</a>
      </div>
    </div>

    <div class="card home_courses col-lg-3 col-md-6" style="width: 18rem;">
      <img src="Asserts/images/homeBanner.webp" class="card-img-top" alt="Our Courses">
      <div class="card-body">
        <h5 class="card-title">Shopify</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary home_course_enroll_btn">Enroll Now</a>
      </div>
    </div>


    <div class="card home_courses col-lg-3 col-md-6" style="width: 18rem;">
      <img src="Asserts/images/homeBanner.webp" class="card-img-top" alt="Our Courses">
      <div class="card-body">
        <h5 class="card-title">Web Development</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary home_course_enroll_btn">Enroll Now</a>
      </div>
    </div>

    <div class="card home_courses col-lg-3 col-md-6" style="width: 18rem;">
      <img src="Asserts/images/homeBanner.webp" class="card-img-top" alt="Our Courses">
      <div class="card-body">
        <h5 class="card-title">App Development</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary home_course_enroll_btn">Enroll Now</a>
      </div>
    </div>
  </div>
  </div>

 <!-- 2nd Row of Courses -->

  <div class="container-fluide home_courses">
    <div class="row home_offer_courses">
  
      <div class="card home_courses col-lg-3 col-md-6" style="width: 18rem;">
        <img src="Asserts/images/homeBanner.webp" class="card-img-top" alt="Our Courses">
        <div class="card-body">
          <h5 class="card-title">SEO Course</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary home_course_enroll_btn">Enroll Now</a>
        </div>
      </div>
  
      <div class="card home_courses col-lg-3 col-md-6" style="width: 18rem;">
        <img src="Asserts/images/homeBanner.webp" class="card-img-top" alt="Our Courses">
        <div class="card-body">
          <h5 class="card-title">Python Expert</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary home_course_enroll_btn">Enroll Now</a>
        </div>
      </div>
  
  
      <div class="card home_courses col-lg-3 col-md-6" style="width: 18rem;">
        <img src="Asserts/images/homeBanner.webp" class="card-img-top" alt="Our Courses">
        <div class="card-body">
          <h5 class="card-title">Artificial Intelligence</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary home_course_enroll_btn">Enroll Now</a>
        </div>
      </div>
  
      <div class="card home_courses" style="width: 18rem;">
        <img src="Asserts/images/homeBanner.webp" class="card-img-top" alt="Our Courses">
        <div class="card-body">
          <h5 class="card-title">Digital Marketing</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary home_course_enroll_btn">Enroll Now</a>
        </div>
      </div>
    </div>
    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="courses.html">Previous</a></li>
          <li class="page-item"><a class="page-link" href="courses.html">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    <!-- ----- -->


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
      <button type="button" class="btn btn-outline-dark btn-lg home_other_blogs_btn" onclick="window.location.href='blogs.html'">Other Blogs</button>
    </div>


    <!-- footer -->
    <?php
    include("footer.php");
    ?>
</body>
</html>