<!DOCTYPE html>
<html lang="en">
<?php include("components/header.php");?>
<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
            <a href="child-assist.php" class="dropdown-item">Child Service</a>
            <a href="home-assist.php" class="dropdown-item">Home Service</a>

          </div>
        </div>
        <a href="work.php" class="nav-item nav-link">Work</a>

        <a href="contact.php" class="nav-item nav-link">Contact Us</a>
      </div>
    </div>
    <a href="contact.php" class="btn btn-light text--color fw-bold px-3 d-none d-lg-block">Enquiry</a>
  </nav> -->
  <!-- Navbar End -->
  <?php require('components/sections/common/navbar.php') ?>

  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item">
          <img class="w-100" src="img\banner3.png" alt="Image" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <h1 class="display-3 text-dark mb-4 animated slideInDown">
                    <!-- Our Services -->
                  </h1>
                  <p class="fs-5 text-body mb-5">
                    <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, veritatis magnam exercitationem obcaecati pariatur fugiat labore illum praesentium quidem dolor -->
                  </p>
                  <!-- <a href="./about.php" class="btn btn-primary py-3 px-5">Know More</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item active">
          <img class="w-100" src="img\banner3.png" alt="Image" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-6">
                    <!-- <h3>Welcome To</h3> -->
                    <h1 class="display-3 text-dark mb-4 animated slideInDown">
                    <!-- Reach Here -->
                  </h1>
                  <p class="fs-5 text-body mb-5">
                    <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, eaque facilis. Unde ratione tenetur laborum commodi, perspiciatis error velit rem at neque optio, aliquid ipsum! Nobis possimus aperiam sequi sunt. -->
                  </p>
                  <!-- <a href="/contact.php" class="btn bg--primary text-white py-3 px-5">Contact us</a> -->
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev" style="width: 5rem;">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next"style="width: 5rem;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Carousel End -->
  <div class="container-xxl py-5">
          <div class="container">
            <div class="row g-5">
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden rounded ps-5 pt-5 h-100" style="min-height: 400px">
                  <img class="position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover" />
                  <div class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3" style="width: 200px; height: 200px">
                    <div class="d-flex flex-column justify-content-center text-center bg--primary rounded h-100 p-3">
                      <h1 class="text-white mb-0">25</h1>
                      <h2 class="text-white">Years</h2>
                      <h5 class="text-white mb-0">Experience</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                  <h1 class="display-6 mb-5 text--color">
                 Home Services From Reach Here
                  </h1>
                  <p class="fs-5 text-primary mb-4">
                  Home, Child, and Senior Assistance Plans
                  </p>
                  <p class="mb-4">
                  Get the peace of mind you need knowing that you and your loved ones have help when you need it most. Our Home, Child, and Senior Assistance plans provide the coverage you need for assistance when you need it <br><br>
                  Plus, our affordable rates make it easy to get the coverage you need. <br>
                
                  </p>
                  <div class="border-top mt-4 pt-4">
                    <div class="d-flex align-items-center">
                      <img class="flex-shrink-0 rounded-circle me-3" src="img/profile.jpg" alt="" />
                      <h5 class="mb-0">Call Us:+91 7777 80 3030</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto" style="max-width: 500px">
        <h1 class="display-6 mb-5 text--color">
        Our Offerings
        </h1>
      </div>
      <div class="row g-4 justify-content-center">
     
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        
          <div class="service-item rounded h-100 p-5">
            <div class="d-flex align-items-center ms-n5 mb-4">
              <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                <img class="img-fluid" src="img/icon/icon-05-light.png" alt="" />
              </div>
              <h4 class="mb-0">Home Assist</h4>
            </div>
            <p class="mb-4">
            Stay safe and independent in your own home with our home assistance service. We provide personalized care and support to help you live comfortably and securely in your own home. <br>
            We are here to help. Want to learn more about our services
            </p><a class="btn btn-light px-3" href="home-assist.php">More Details</a>

            <!-- <a class="btn btn-light px-3" href="home.php">Read More</a> -->
          </div>
       
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item rounded h-100 p-5">
            <div class="d-flex align-items-center ms-n5 mb-4">
              <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                  <img class="img-fluid" style="filter: invert(99%) sepia(99%) saturate(0%) hue-rotate(244deg) brightness(107%) contrast(100%);" src="img\icon\children.png" alt="" />
              </div>
              <h4 class="mb-0">Child Assist</h4>
            </div>
            <p class="mb-4">
            Need help caring for your children? Our Child Assistance program can provide the assistance you need.
           <br> We are here to help. Want to learn more about our services
            </p>
            <a class="btn btn-light px-3"  href="child-assist.php">More Details</a>
            <!-- <a class="btn btn-light px-3" href="consaltant.php">Read More</a> -->
        </div>
        </div>
       
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded h-100 p-5">
            <div class="d-flex align-items-center ms-n5 mb-4">
              <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                <img class="img-fluid" style="filter: invert(99%) sepia(99%) saturate(0%) hue-rotate(244deg) brightness(107%) contrast(100%);" src="img\icon\medical-assistance.png" alt="" />
              </div>
              <h4 class="mb-0"> Senior Assist</h4>
            </div>
            <p class="mb-4">
            Our offer provides the support seniors need to maintain their independence and live with dignity.
            <br>
            We are here to help. Want to learn more about our services
            </p>
            <a class="btn btn-light px-3" href="senior-assist.php">More Details</a>
            <!-- <a class="btn btn-light px-3" href="consaltant.php">Read More</a> -->
          </div>
        </div>
        

       
      </div>
    </div>
  </div>
  <div class="container-fluid appointment mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
          <div class="bg-white rounded p-5 text-center">
            <img src="img\cote.png" alt="" srcset="" class="m-auto">
           <H1 class=" text--color">INDIA'S FIRST PROFESSIONAL COMPANY PROVIDING ASSISTANCE ON DEMAND</H1>
        <p>Reach Here is a unique concept providing assistance through REACHERS (Assistants) on hourly / contract basis for senior assistance, home assistance (domestic help) and child assistance.</p>
        <p>All our Reachers are trained to provide services in professional manner.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About Start -->
  <!-- About End -->

  <!-- Facts Start -->

  <!-- Facts End -->

  <!-- Features Start -->

  <!-- Features End -->

  <!-- Client Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto" style="max-width: 500px">
        <h1 class="display-6 mb-5 text-primary">SUCCESS STORIES</h1>
      </div>
      <div class="row g-4 justify-content-around">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item rounded">
            <img class="img-fluid" src="img\demo.jpeg" alt="" />
            <div class="text-center p-4">
              <h5>Swapnil</h5>
              <span>Mumbai ,India </span>
            </div>
            <div class="team-text text-center bg-white p-4">
            <h5>Swapnil</h5>
              <span>My parents are quite old needed a Reacher to escart them to pathology for sonography .The Reacher was on time and was with my parents from the time they left home for pathology till they returned .Dad was happy that while L could not support. Thank you Reach Here for making our day</span>
              <div class="d-flex justify-content-center">
                <!-- <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="team-item rounded">
            <img class="img-fluid" src="img\demo.jpeg" alt="" />
            <div class="text-center p-4">
              <h5>Gunjan Parikh</h5>
              <span> Khar, Mumbai, India</span>
            </div>
            <div class="team-text text-center bg-white p-4">
            <h5>Gunjan Parikh</h5>
              <span> Reachers reach on demand & that's what Liked about them. I booked their service time as always it has been great experience. </span>
              <div class="d-flex justify-content-center">
                <!-- <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp " data-wow-delay="0.5s">
          <div class="team-item rounded">
            <img class="img-fluid" src="img\demo.jpeg" alt="" />
            <div class="text-center p-4">
            <h5>Jasleen Sachdeva</h5>
              <span>Mumbai ,India</span>
            </div>
            <div class="team-text text-center bg-white p-4 " >
            <h5>Jasleen Sachdeva</h5>
              <span>On hearing of this new concept, we booked for Home Assist service in the month of June for 2 hours and were super happy  with Reacher coming on time and executing the kitchen cleaning and laundary work within time . The behaviour was absolutely profession, will ecommend to families and friends</span>
              <div class="d-flex justify-content-center">
                <!-- <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a> -->
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </div>s
  <!-- Client End -->

  <!-- Appointment Start -->
  <div class="container-fluid appointment mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
          <div class="bg-white rounded p-5">
            <form>
              <div class="row g-3">
              <div class="col-sm-6">
                  
                  <div class="form-floating">
                    <input type="text" class="form-control" id="gname" placeholder="Gurdian Name" />
                    <label for="gname">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                <div class="form-floating">
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>HR Consaltant</option>
                    
                  </select>

                </div>
                </div>

                </div>
                <div class="col-sm-6">
                  
                  <div class="form-floating">
                    <input type="text" class="form-control" id="gname" placeholder="Full Name" />
                    <label for="gname">Full Name</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="gmail" placeholder="Email Address" />
                    <label for="gmail"> Email Address</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="cname" placeholder="Mobile Number" />
                    <label for="cname"> Mobile Number</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="cage" placeholder="Child Age" />
                    <label for="cage">Pincode</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="date" class="form-control" id="cage" placeholder="Date" />
                    <label for="cage">Date</label>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-floating">
                    <input type="time" class="form-control" id="cage" placeholder="Start Time" />
                    <label for="cage">Start Time</label>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-floating">
                    <input type="time" class="form-control" id="cage" placeholder="End Time" />
                    <label for="cage">End Time</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 80px"></textarea>
                    <label for="message">Address</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn bg--primary text-white py-3 px-5" type="submit">
                   SUBMIT
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Appointment End -->

  <!-- Team Start -->
  <!-- Team End -->

  <!-- Footer Start -->
  <?php require('components/sections/common/footer.php')  ?>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <?php require('components/scripts.php')  ?>
</body>

</html>