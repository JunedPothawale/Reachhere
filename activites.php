<!DOCTYPE html>
<html lang="en">
<?php include("components/header.php");?>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <?php require('components/sections/common/navbar.php') ?>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">Activites</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Activites</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <p class="display-6 mb-3 text--color">
           ALL Services Types Of We Provide 
</p>
        </div>
        <div class="row g-4 justify-content-start">
          <h3 class="text--color">Home Service</h3>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                <img
                    class="img-fluid"
                    src="img/icon-05-light.webp"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Home Assist</h4>
              </div>
              <p class="mb-4">
              Now, take care of your house the easy way! From home cleaning to plumbing, get the best home services at your fingertips! The platform ensures a trouble-free experience while getting reliable home services per hour.
               <br>
            We are here to help. Want to learn more about our services
              </p>
              <a class="btn btn-light px-3" href="home-assist.php">More Details</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                  <img
                    class="img-fluid"
                    src="img/icon-01-light.webp"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Child Assist</h4>
              </div>
              <p class="mb-4">
              Find trusted babysitters in your town who are empathetic and fun around your kids. With Reach Here, your baby gets the best care and love they need. The platform offers reliable, quick and quality childcare services in your comfort space and time.
           <br> We are here to help. Want to learn more about our services
              </p>
              <a class="btn btn-light px-3" href="child-assist.php">More Details</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
               
                  <img
                    class="img-fluid"
                    src="img/icon-10-light.webp"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Senior Assist</h4>
              </div>
              <p class="mb-4">
              Reach Here lends the support and empathy your elderly loved ones need while you look after the other priorities in your day. The trained professionals cautiously accompany your loved ones while respecting their dignity. From escorting them to pathology or garden to attending them home, our Reachers get you covered right in time.
            <br>
            We are here to help. Want to learn more about our services
              </p>
              <a class="btn btn-light px-3" href="senior-assist.php">More Details</a>
            </div>
          </div>
          <h3 class="text--color">Consultant Service</h3>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                  <img
                    class="img-fluid"
                    src="img/icon-08-light.webp"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">HR recruitment services</h4>
              </div>
              <p class="mb-4">
              Looking for an easy way to improve your HR processes? HR Assist is here to help! Our software makes it simple to track employee performance, manage HR records, and more. Plus, our team of experts is always available to help you get the most out of our software. Contact us today to learn more!
              </p>
              <a class="btn btn-light px-3" href="hr-consultant.php">More Details</a>
            </div>
          </div>
         
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Footer Start -->
    <?php require('components/sections/common/footer.php') ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <?php require('components/scripts.php') ?>
  </body>
</html>
