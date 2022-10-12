<!DOCTYPE html>
<html lang="en">
<?php $php = 'hr-consulting'; include("components/header.php");?>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <?php require('components/sections/common/navbar2.php') ?>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="w-100" src="img/banners/HR-Recuritment.png" alt="Image" />
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
                    <img class="w-100" src="img\banners\HR-Recuritment.png" alt="Image" />
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
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev"
                style="width: 5rem;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next"
                style="width: 5rem;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
    <div class="container-xxl py-3">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp d-none d-sm-block" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden rounded ps-sm-5 pt-sm-5 h-100"
                        style="min-height: 400px">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" alt=""
                            style="object-fit: cover" />
                        <div class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3 d-none d-sm-block"
                            style="width: 200px; height: 200px">
                            <div
                                class="d-flex flex-column justify-content-center text-center bg--primary rounded h-100 p-3">
                                <h1 class="text-white mb-0">25</h1>
                                <h2 class="text-white">Years</h2>
                                <h5 class="text-white mb-0">Experience</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="fs-1 mb-5 text--color text-capitalize">
                            Recruiting Solutions From Reach Here
                        </h1>
                        <p class="fs-5 text-primary mb-4 text-capitalize">
                            Get the Support You Need with Professional Hr Services!
                        </p>
                        <p class="mb-4">
                            In order for a corporation to succeed, the human resources department is essential. As a
                            result, it's crucial to identify qualified candidates to fill openings in your human
                            resources department. Reachers is a great partner to assist you in doing this. Whether
                            you're looking for HR generalists, experts in compensation and benefits, change management
                            specialists, or your next HR director, we have the broad network and in-depth knowledge to
                            help you find the perfect match <br><br>
                            With their expertise in human resources, many of our recruitment consultants are able to
                            quickly identify the key positions that need to be filled as well as the people who are best
                            suited to fill them. We can aid in your search for mid- to senior-level employees from HR
                            Managers to Directors.
                        </p>

                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 rounded-circle me-3" src="img/profile.jpg" alt="" />
                                <a href="tel:+912322243019"> <h5 class="mb-0">Call Us:+91 9322 243 019</h5></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-3">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px">
                <h1 class="display-6 mb-3 text--color text-center">
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
                            <h4 class="mb-0 text-capitalize">Right Jobs, Right People </h4>
                        </div>
                        <p class="mb-4">
                            We understand your hiring philosophy and are perfectly placed to undertake all your
                            recruitment and staffing needs.
                        </p>
                        <!-- <a class="btn btn-light px-3" href="home.php">Read More</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-07-light.png" alt="" />
                            </div>
                            <h4 class="mb-0 text-capitalize">Right method to Assess</h4>
                        </div>
                        <p class="mb-4">
                            Companies trust recruiting agencies in India like us to evaluate candidates scientifically
                            using advanced data sciences and assess organizational culture fitment to identify top
                            talent.
                        </p>
                        <!-- <a class="btn btn-light px-3" href="consaltant.php">Read More</a> -->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-07-light.png" alt="" />
                            </div>
                            <h4 class="mb-0 text-capitalize">Attracting the best Talent</h4>
                        </div>
                        <p class="mb-4">
                            We understand the role context and advertise in online and offline channels to attract the
                            best talent
                        </p>
                        <!-- <a class="btn btn-light px-3" href="consaltant.php">Read More</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-07-light.png" alt="" />
                            </div>
                            <h4 class="mb-0 text-capitalize">Learning & Development</h4>
                        </div>
                        <p class="mb-4">
                        <ul class="text-capitalize">
                            <li>Universal Competency Model</li>
                            <li> Training and Workshops</li>
                            <li>Leadership Development</li>
                        </ul>
                        </p>
                        <!-- <a class="btn btn-light px-3" href="consaltant.php">Read More</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-07-light.png" alt="" />
                            </div>
                            <h4 class="mb-0">Reseach and consulting</h4>
                        </div>
                        <p class="mb-4">
                            Insights and advice on global market and talent strategies for growth and expansion
                        </p>
                        <!-- <a class="btn btn-light px-3" href="consaltant.php">Read More</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-07-light.png" alt="" />
                            </div>
                            <h4 class="mb-0 text-capitalize">Career Transitions</h4>
                        </div>
                        <p class="mb-4">
                            Smooth employee transitions with counseling,search advisory and outplacement support
                        </p>
                        <!-- <a class="btn btn-light px-3" href="consaltant.php">Read More</a> -->
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
    <!-- <div class="container-xxl py-5">
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
  </div> -->
    <!-- Features End -->

    <!-- Service Start -->

    <!-- Service End -->

    <!-- Appointment Start -->
    <div class="container-fluid appointment my-0 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5 text-capitalize">
                <!-- <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
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
        </div> -->
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded p-1 p-sm-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-sm-6">

                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="gname" placeholder="Gurdian Name" />
                                        <label for="gname">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <div class="form-group">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Select</option>
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
                                        <input type="email" class="form-control" id="gmail"
                                            placeholder="Email Address" />
                                        <label for="gmail"> Email Address</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control"
                                            id="cname" placeholder="Mobile Number" />
                                        <label for="cname"> Mobile Number</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" pattern="[0-9]{6}" class="form-control" id="cage"
                                            placeholder="Child Age" />
                                        <label for="cage">Pincode</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" onfocus="this.showPicker()" id="cage"
                                            placeholder="Date" />
                                        <label for="cage">Date</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="time" class="form-control" onfocus="this.showPicker()" id="cage"
                                            placeholder="Start Time" />
                                        <label for="cage">Start Time</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="time" class="form-control" onfocus="this.showPicker()" id="cage"
                                            placeholder="End Time" />
                                        <label for="cage">End Time</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message"
                                            style="height: 80px"></textarea>
                                        <label for="message">Address</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn bg--primary text-white py-3 px-5 d-block m-auto d-sm-inline"
                                        type="submit">
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
    <!-- <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto" style="max-width: 500px">
        <h1 class="display-6 mb-5 text-primary">Meet Our Professional Team Members</h1>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item rounded">
            <img class="img-fluid" src="img\team-4.jpg" alt="" />
            <div class="text-center p-4">
              <h5>Durgesh Panday</h5>
              <span>Lead Manager</span>
            </div>
            <div class="team-text text-center bg-white p-4">
            <h5>Durgesh Panday</h5>
              <span>Lead Manager</span>
              <div class="d-flex justify-content-center">
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="team-item rounded">
            <img class="img-fluid" src="img\team-4.jpg" alt="" />
            <div class="text-center p-4">
              <h5>Junad Memon</h5>
              <span>Software developer</span>
            </div>
            <div class="team-text text-center bg-white p-4">
            <h5>Junad Memon</h5>
              <span>Software developer</span>
              <div class="d-flex justify-content-center">
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="team-item rounded">
            <img class="img-fluid" src="img\team-4.jpg" alt="" />
            <div class="text-center p-4">
            <h5>Ranjeet Poojari</h5>
              <span>Software developer</span>
            </div>
            <div class="team-text text-center bg-white p-4">
            <h5>Ranjeet Poojari</h5>
              <span>Software developer</span>
              <div class="d-flex justify-content-center">
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
          <div class="team-item rounded">
            <img class="img-fluid" src="img\team-4.jpg" alt="" />
            <div class="text-center p-4">
            <h5>Shalil jaiswar </h5>
              <p>Software developer</p>
            </div>
            <div class="team-text text-center bg-white p-4">
            <h5>Shalil jaiswar </h5>
              <p>Software developer</p>
              <div class="d-flex justify-content-center">
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
    <!-- Team End -->

    <!-- Testimonial Start -->
    <!-- <div class="container-xxl py-5">

        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px">
                <h1 class="display-6 text-primary mb-5">Our Clients</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 d-none d-lg-block">

                </div>
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel-client">
                        <div class="testimonial-item text-center client">
                            <img class="img-fluid  mx-auto mb-4" src="img\images.png" alt="" />

                        </div>
                        <div class="testimonial-item text-center client">
                            <img class="img-fluid  mx-auto mb-4" src="img\images (1).jfif" alt="" />

                        </div>
                        <div class="testimonial-item text-center client">
                            <img class="img-fluid mx-auto mb-4" src="img\images.jfif" alt="" />

                        </div>
                        <div class="testimonial-item text-center client">
                            <img class="img-fluid  mx-auto mb-4" src="img\images.png" alt="" />

                        </div>
                        <div class="testimonial-item text-center client">
                            <img class="img-fluid  mx-auto mb-4" src="img\images (1).jfif" alt="" />

                        </div>
                        <div class="testimonial-item text-center client">
                            <img class="img-fluid mx-auto mb-4" src="img\images.jfif" alt="" />

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> -->
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <?php require('components/sections/common/footer2.php')  ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>

    <?php require('components/scripts.php')  ?>
</body>

</html>