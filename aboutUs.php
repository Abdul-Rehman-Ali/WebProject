<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning </title>
    <link rel="stylesheet" href="Asserts/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Asserts/css/font_awosome_icon.css">
    <script src="Asserts/js/bootstrap.min.js"></script>
</head>
<script src="Asserts/js/font_awesome.js"> </script>

<body>
    <!-- Header -->
    <?php
    include("header.php");
    ?>

    <!-- video  -->

    <div class="video-container">
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" src="Asserts/videos/about_us.mp4"
            type="video/mp4"></video>
    </div>

    <!-- carousel -->
    <div id="carouselExampleCaptions text-center" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active my_carousels" data-bs-interval="2000">
            <div class="carousel-caption my_carousel_captions">
              <h5>About SmartLoop</h5>
              <p>Welcome to SmartLoop, your go-to destination for online courses and educational resources. At SmartLoop, we believe that education is the key to unlocking potential and achieving success in today's rapidly evolving world. With a commitment to excellence and innovation, we strive to empower learners worldwide to reach their full potential and thrive in an ever-changing landscape. Join us on this journey of discovery, growth, and limitless possibilities.
              </p>
              <div class="home_blog_btn">
                <button type="button" class="btn btn-outline-dark btn-lg about_video_btn" onclick="window.location.href='contactUs.html'">Contact Us</button>
              </div>
            </div>
          </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <div class="container about_content text-center">
       <h2>Skills are the key to unlocking potential</h2>
       <p>Whether you want to learn a new skill, train your teams, or share what you know with the world, you’re in the right place. As a leader in online learning, we’re here to help you achieve your goals and transform your life.</p>
      </div>


      <div class="container about_main_contant text-center">
        <p>Welcome to SmartLoop, your go-to destination for online courses and educational resources. At SmartLoop, we believe that education is the key to unlocking potential and achieving success in today's rapidly evolving world.</p>
        <p>
            Our mission is to provide accessible, high-quality education to learners of all backgrounds. Whether you're a student looking to supplement your classroom learning, a professional seeking to enhance your skills, or someone simply eager to explore new topics, SmartLoop has something for you.</p>
        <p>We offer a diverse range of courses curated by experts in their respective fields. From programming and technology to business management, arts, humanities, and beyond, our extensive catalog ensures that there's something for everyone</p>
        <p>At SmartLoop, we prioritize innovation and excellence. Our platform is designed to be user-friendly, intuitive, and responsive, providing a seamless learning experience across devices. We leverage cutting-edge technology and instructional design principles to deliver engaging, interactive content that fosters deep understanding and retention.</p>
        <p>But SmartLoop is more than just a platform for online courses. We're a community of learners, instructors, and enthusiasts united by a shared passion for learning and growth. Our forums and discussion boards provide opportunities for collaboration, networking, and mentorship, enabling learners to connect with peers and experts from around the globe.</p>
        <p>Transparency, integrity, and inclusivity are at the core of everything we do. We're committed to fostering a safe, supportive learning environment where all individuals feel valued and empowered to reach their full potential.</p>
        <p>Join us on our journey to make learning accessible, engaging, and meaningful for all. Together, let's embrace the endless possibilities that education brings and pave the way for a brighter future.</p>
        <p>Experience the power of knowledge with SmartLoop. Let's learn, grow, and succeed together.</p>
      </div>

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


      <!-- space -->
      <div class="mb-5">
      </div>

      <!-- footer -->

      <?php
    include("footer.php");
    ?>

</body>

      </html>

