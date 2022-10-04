<!DOCTYPE html>
<html lang="en">
<?php include("components/header.php");?>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->
    <!-- <div class="container-fluid bg-primary text-white py-2 px-0 d-none d-lg-block">
    <div class="row gx-0 align-items-center">
      <div class="col-lg-7 px-5 text-start">
        <div class="h-100 d-inline-flex align-items-center me-4">
          <small class="fa fa-phone-alt me-2"></small>
          <small>+91 7777 80 3030</small>
        </div>
        <div class="h-100 d-inline-flex align-items-center me-4">
          <small class="far fa-envelope-open me-2"></small>
          <small>info@reachhere.in</small>
        </div>
      </div>
      <div class="col-lg-5 px-5 text-end ">
        <div class="h-100 d-inline-flex align-items-center">
          <a class="text-white ms-4" href=""><i class="fab fa-facebook-f"></i></a>
          <a class="text-white ms-4" href=""><i class="fab fa-twitter"></i></a>
          <a class="text-white ms-4" href=""><i class="fab fa-linkedin-in"></i></a>
          <a class="text-white ms-4" href=""><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div> -->
    <!-- Topbar End -->
    <!-- Topbar Start -->
    <!-- <nav class="navbar navbar-expand-lg bg-dark navbar-light sticky-top px-4 px-lg-5">
    <a href="index.php" class="navbar-brand d-flex align-items-center">
      <h1 class="m-0">
        <img class="img-fluid me-3" src="img/logo.png" alt="" />
      </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarCollapse">
      <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
        <a href="index.php" class="nav-item nav-link active">Home</a>
        <a href="about.php" class="nav-item nav-link">About Us</a>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
          <div class="dropdown-menu bg-light border-0 m-0">

            <a href="senior-assist.php" class="dropdown-item">Senior Service</a>
            <a href="child-assist.php" class="dropdown-item">Child  Service</a>
            <a href="home-assist.php" class="dropdown-item">Home Service</a>

          </div>
        </div>
        <a href="work.php" class="nav-item nav-link">Work</a>

        <a href="contact.php" class="nav-item nav-link">Contact Us</a>
      </div>
    </div>
    <a href="contact.php" class="btn btn-light text--color fw-bold px-3 d-none d-lg-block">Enquiry</a>
  </nav> -->
    <?php require('components/sections/common/navbar.php') ?>
    <!-- Navbar End -->

    <!-- Carousel Start -->
   
    <!-- Carousel End -->
<div class="container terms-conditions">
    <h1 class="text-center my-2">Privacy Policy</h1>
    <p>Will be updated soon</p>
</div>



    <!-- ----------- -->
    
    <!-- Appointment End -->
    <style>
    .home-service-img {
        height: 30rem !important;
        overflow: hidden;
    }

    .home-service-img img {
        background-position: center center !important;
        background-size: contain !important;
        background-repeat: no-repeat;



    }
    </style>
    <?php require('components/sections/common/footer.php')  ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    
    <?php require('components/scripts.php')  ?>
</body>

</html>