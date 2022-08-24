<!DOCTYPE html>
<html lang="en">
<?php include("components/header.php");?>

<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
  </div>
  <!-- Spinner End -->

  <!-- Topbar Start -->
 <?php require('components/sections/common/navbar.php') ?>
  <!-- Navbar End -->

  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner" style="height: 85vh !important;">
        <div class="carousel-item">
          <img class="w-100" src="img/carousel-1.jpg" alt="Image" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <h1 class="display-3 text-dark mb-4 animated slideInDown">
                    Our Services
                  </h1>
                  <p class="fs-5 text-body mb-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, veritatis magnam exercitationem obcaecati pariatur fugiat labore illum praesentium quidem dolor
                  </p>
                  <a href="./about.php" class="btn btn-primary py-3 px-5">Know More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item active">
          <img class="w-100" src="img/carousel-2.jpg" alt="Image" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <h3>Welcome To</h3>
                  <h1 class="display-3 text-dark mb-4 animated slideInDown">
                    Reach Here
                  </h1>
                  <p class="fs-5 text-body mb-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, eaque facilis. Unde ratione tenetur laborum commodi, perspiciatis error velit rem at neque optio, aliquid ipsum! Nobis possimus aperiam sequi sunt.
                  </p>
                  <a href="/contact.php" class="btn bg--primary text-white py-3 px-5">Contact us</a>
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

  <!-- About Start -->
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
             Our Experience
            </h1>
            <p class="fs-5 text-primary mb-4">
              Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet
              lorem sit clita duo justo erat amet
            </p>
            <p class="mb-4">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
              Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
              sed stet lorem sit clita duo justo magna dolore erat amet
            </p>
            <div class="border-top mt-4 pt-4">
              <div class="d-flex align-items-center">
                <img class="flex-shrink-0 rounded-circle me-3" src="img/profile.jpg" alt="" />
                <h5 class="mb-0">Call Us: +012 345 6789</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Facts Start -->
  <div class="container-fluid  overflow-hidden my-5 px-lg-0">
    <div class="container facts px-lg-0">
      <div class="row g-0 mx-lg-0 ">
        <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
          <div class="h-100 px-4 ps-lg-0">
            <h1 class="text-white mb-4">Our Happy Client</h1>
            <p class="text-light mb-5">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
              Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
              sed stet lorem sit clita duo justo magna dolore erat amet
            </p>
            <a href="" class="align-self-start btn btn-light py-3 px-5">More Details</a>
          </div>
        </div>
        <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
          <div class="h-100 px-4 pe-lg-0">
            <div class="row g-5 mx-auto">
              <div class="col-12 mx-auto text-center">
                <h1 class="display-5" data-toggle="counter-up" style="font-size: 5rem;">356</h1>
                <p class="fs-5 text-primary">Happy Clients</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Facts End -->

  <!-- Features Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <h1 class="display-6 mb-5 text--color">Few Reasons Why People Choosing Us!</h1>
          <p class="mb-4">
            Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
            diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
            lorem sit clita duo justo magna dolore erat amet
          </p>
          <div class="row g-3">
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
              <div class="bg-light rounded h-100 p-3">
                <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                  <img class="align-self-center mb-3" src="img/icon/icon-06-primary.png" alt="" />
                  <h5 class="mb-0">Security</h5>
                </div>
              </div>
            </div>
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
              <div class="bg-light rounded h-100 p-3">
                <div class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                  <img class="align-self-center mb-3" src="img/icon/icon-03-primary.png" alt="" />
                  <h5 class="mb-0">Safty</h5>
                </div>
              </div>
            </div>
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
              <div class="bg-light rounded h-100 p-3">
                <div class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                  <img class="align-self-center mb-3" src="img/icon/icon-04-primary.png" alt="" />
                  <h5 class="mb-0">Trust</h5>
                </div>
              </div>
            </div>
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
              <div class="bg-light rounded h-100 p-3">
                <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                  <img class="align-self-center mb-3" src="img/icon/icon-07-primary.png" alt="" />
                  <h5 class="mb-0">Values</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px">
            <img class="position-absolute w-100 h-100" src="img/feature.jpg" alt="" style="object-fit: cover" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Features End -->

  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto" style="max-width: 500px">
        <h1 class="display-6 mb-5 text--color">
          We Provide Services Like
        </h1>
      </div>
      <div class="row g-4 justify-content-center">
     
        <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="service-item rounded h-100 p-5">
            <div class="d-flex align-items-center ms-n5 mb-4">
              <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                <img class="img-fluid" src="img/icon/icon-05-light.png" alt="" />
              </div>
              <h4 class="mb-0">Home Service </h4>
            </div>
            <p class="mb-4">
              Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
              sit clita duo justo erat amet
            </p>
            <a class="btn btn-light px-3" href="home.php">Read More</a>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item rounded h-100 p-5">
            <div class="d-flex align-items-center ms-n5 mb-4">
              <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                <img class="img-fluid" src="img/icon/icon-07-light.png" alt="" />
              </div>
              <h4 class="mb-0">Consultant Services</h4>
            </div>
            <p class="mb-4">
              Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
              sit clita duo justo erat amet
            </p>
            <a class="btn btn-light px-3" href="consaltant.php">Read More</a>
          </div>
        </div>
       
      </div>
    </div>
  </div>
  <!-- Service End -->

  <!-- Appointment Start -->
  <div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
          <h1 class="display-6 text-white mb-5 text-primary">
            We're Award Winning Service Company
          </h1>
          <p class="text-white mb-5">
            Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
            stet lorem sit clita duo justo magna dolore erat amet. Tempor erat
            elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
            diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
            clita duo justo magna.
          </p>
          <div class="bg-white rounded p-3">
            <div class="d-flex align-items-center bg--primary rounded p-3">
              <img class="flex-shrink-0 rounded-circle me-3" src="img/profile.jpg" alt="" />
              <h5 class="text-white mb-0">Call Us: +012 345 6789</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
          <div class="bg-white rounded p-5">
            <form>
            <div class="row g-3">
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="gname"
                        placeholder="Gurdian Name"
                      />
                      <label for="gname">Your Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="email"
                        class="form-control"
                        id="gmail"
                        placeholder="Gurdian Email"
                      />
                      <label for="gmail">Your Email</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="cname"
                        placeholder="Child Name"
                      />
                      <label for="cname">Your Mobile</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="cage"
                        placeholder="Child Age"
                      />
                      <label for="cage">Service Type</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea
                        class="form-control"
                        placeholder="Leave a message here"
                        id="message"
                        style="height: 80px"
                      ></textarea>
                      <label for="message">Message</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary py-3 px-5" type="submit">
                      Get Appointment
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
 
  <!-- Testimonial Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto" style="max-width: 500px">
        <h1 class="display-6 text-primary mb-5">What They Say About There Success Story</h1>
      </div>
      <div class="row g-5">
        <div class="col-lg-3 d-none d-lg-block">
          <div class="testimonial-left h-100">
            <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="" />
            <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="" />
            <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="" />
          </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
          <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item text-center">
              <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-2.jpg" alt="" />
              <p class="fs-5">
                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                et labore et tempor diam tempor erat.
              </p>
              <h5>Durgesh Panday</h5>
              <span>Lead Manager</span>
            </div>
            <div class="testimonial-item text-center">
              <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-2.jpg" alt="" />
              <p class="fs-5">
                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                et labore et tempor diam tempor erat.
              </p>
              <h5>Shalil jaiswar</h5>
              <span>Software developer</span>
            </div>
            <div class="testimonial-item text-center">
              <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-3.jpg" alt="" />
              <p class="fs-5">
                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                et labore et tempor diam tempor erat.
              </p>
              <h5>Junad Memon</h5>
              <span>Software developer</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 d-none d-lg-block">
          <div class="testimonial-right h-100">
            <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="" />
            <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="" />
            <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial End -->

  <!-- Footer Start -->
  <?php require('components/sections/common/footer.php')  ?>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <?php require('components/scripts.php')  ?>
</body>

</html>