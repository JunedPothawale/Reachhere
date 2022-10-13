<div class="container-fluid bg-primary text-white py-2 px-0 d-none d-lg-block">
    <div class="row gx-0 align-items-center">
      <div class="col-lg-7 px-5 text-start">
        <div class="h-100 d-inline-flex align-items-center me-4">
        <a href="tel:+919322243019" class="text-light"><small class="fa fa-phone-alt me-2"></small>
          <small>+91 9322 243 019</small></a>
        </div>
        <div class="h-100 d-inline-flex align-items-center me-4">
         
        </div>
       
      </div>
      <div class="col-lg-5 px-5 text-end ">
        <div class="h-100 d-inline-flex align-items-center">
        <small class="far fa-envelope-open me-2"></small>
        <a href="mailto:info@reachhere.in" class="text-light"><small>info@reachhere.in</small></a>
          <a class="text-white ms-4" href="https://www.facebook.com/profile.php?id=100076146793455"><i class="fab fa-facebook-f"></i></a>
          <a class="text-white ms-4" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
          <a class="text-white ms-4" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
          <a class="text-white ms-4" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></i></a>

        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-dark navbar-light sticky-top px-4 px-lg-5">
    <a href="index.php" class="navbar-brand d-flex align-items-center">
      <h1 class="m-0">
        <img class="img-fluid me-3" src="img/logo.webp" alt="" />
      </h1>
    </a>
    <button type="button" class="navbar-toggler text-light mt-1" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <i class="bi bi-list text-light fs-1"></i>
    </button>
    <div class="collapse navbar-collapse " id="navbarCollapse">
      <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
        <a href="index.php" class="nav-item nav-link <?php if($page == 'home'){echo 'active';}?>">Home</a>
        <a href="home-assist.php" class="nav-item nav-link <?php if($page == 'home-assist'){echo 'active';}?>">Home Assist</a>
        <a href="child-assist.php" class="nav-item nav-link <?php if($page == 'child-assist'){echo 'active';}?>">Child Assist</a>
        <a href="senior-assist.php" class="nav-item nav-link <?php if($page == 'senior-assist'){echo 'active';}?>">Senior Assist</a>
        
        
        <!-- <a href="activites.php" class="nav-item nav-link">Activites</a> -->
        <a href="about.php" class="nav-item nav-link <?php if($page == 'about'){echo 'active';}?>">About Us</a>

        <a href="contact.php" class="nav-item nav-link <?php if($page == 'contact'){echo 'active';}?>">Contact Us</a>
      </div>
    </div>
    <a href="contact.php" class="btn btn-light text--color fw-bold px-3 d-none d-lg-block">Enquiry</a>
  </nav>