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
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="w-100" src="img\banners\home-assist.png" alt="Image" />
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
                    <img class="w-100" src="img\banners\home-assist.png" alt="Image" />
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




    <!-- ----------- -->
    <div class="container  my-5">
        <div class="row g-4 justify-content-between mt-5 rounded ">
            <div class="col-12 d-lg-flex justify-content-between align-items-center ">
                <div class="col-12 col-lg-6  home-service-img wow fadeIn mb-3" data-wow-delay="0.1s">
                    <img src="./img/hiring-cleaning-services.png" alt="" class="img-fluid py-1 py-sm-3 px-1">
                </div>
                <div class="col-12 col-lg-6  my-5 px-5">
                    <p class="text--color text-uppercase display-6">HOME ASSIST SERVICE</p>
                    <p>A helpful hand for all your domestic help! Find the experienced home care service givers
                    </p>
                    <ul class="list-group mt-4 ms-1 ms-sm-2">
                        <li class="list-group-item">Mopping & Sweeping</li>
                        <li class="list-group-item">Washing Vessels</li>
                        <li class="list-group-item">Laundry and Drying</li>
                        <li class="list-group-item">Dusting & Cleaning</li>
                        <li class="list-group-item">Bathroom Cleaning</li>

                    </ul>
                    <p class="mt-4 text--color fs-4 ms-2" style="font-family:'futurabold';">Choose from a pool of Evaluated caregivers 
                        who,</p>
                    <ul class="list-group mt-1 ms-1 ms-sm-2">
                        <li class="list-group-item">Learn quickly and execute it in chores </li>
                        <li class="list-group-item">Are trustworthy enough to know basic values </li>
                        <li class="list-group-item">Committed to offering end-to-end service </li>
                        <li class="list-group-item">And flexible to take responsibility as required </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="my-5">

            <h2 class="text-center text--color text-uppercase"> Pay as required! Starting from INR 250* per hour!</h2>
            <p class="text-center"> A reliable source to support you with Home and healthy living<br>
               

            </p>



            <div class="row g-3 justify-content-center my-2 bg-transparent " yt3le="overflow-x: hidden !important;">

                <div class="col-lg-3 col-md-6" style="height: 18rem !important;">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary bg-white  rounded-end me-4">
                                <img class="img-fluid"
                                    src="https://reachhere.in/public/dist/front/assets/img/reach-icon-logo.svg"
                                    alt="" />
                            </div>
                            <div>
                                <h1 style="color: #E95197;">₹300</h1>
                                <p class="text-center fw-bold fs-5 text-capitalize">Per 1 Hour</p>
                            </div>
                        </div>
                        <div>
                            <a class="btn btn-light px-3 text-center w-100" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">Book Now</a>
                            <p class="mt-3 text-center">
                                Extra ₹250 Per Hour
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" style="height: 18rem !important;">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary bg-white  rounded-end me-4">
                                <img class="img-fluid"
                                    src="https://reachhere.in/public/dist/front/assets/img/reach-icon-logo.svg"
                                    alt="" />
                            </div>
                            <div>
                                <h1 style="color: #E95197;">₹550</h1>
                                <p class="text-center fw-bold fs-5">Per 2 Hours</p>

                            </div>
                        </div>
                        <div>
                            <a class="btn btn-light px-3 text-center w-100" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">Book Now</a>
                            <p class="mt-3 text-center">
                                Extra ₹250 Per Hour
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" style="height: 18rem !important;">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary bg-white  rounded-end me-4">
                                <img class="img-fluid"
                                    src="https://reachhere.in/public/dist/front/assets/img/reach-icon-logo.svg"
                                    alt="" />
                            </div>
                            <div>
                                <h1 style="color: #E95197;">₹800</h1>
                                <p class="text-center fw-bold fs-5">Per 3 Hours</p>

                            </div>
                        </div>
                        <div>
                            <a class="btn btn-light px-3 text-center w-100" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">Book Now</a>
                            <p class="mt-3 text-center">
                                Extra ₹250 Per Hour
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" style="height: 18rem !important;">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary bg-white  rounded-end me-4">
                                <img class="img-fluid"
                                    src="https://reachhere.in/public/dist/front/assets/img/reach-icon-logo.svg"
                                    alt="" />
                            </div>
                            <div>
                                <h1 style="color: #E95197;">₹1000</h1>
                                <p class="text-center fw-bold fs-5">Per 4 Hours</p>

                            </div>
                        </div>
                        <div>
                            <a class="btn btn-light px-3 text-center w-100" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">Book Now</a>
                            <p class="mt-3 text-center">
                                Extra ₹250 Per Hour
                            </p>
                        </div>
                    </div>
                </div>
                <p class="text-center"> The decision whether to accept the extension completely lies with the
                    Company.<br>
                    Read our <a href="terms-conditions.php" class="fst-italic text-danger">terms & conditions*</a> </p>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Get In Touch With Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                                            <option>HOME ASSIST</option>
                                            <option>CHILD ASSIST</option>
                                            <option>SENIOR ASSIST</option>
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
                                    <input type="text" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" id="cname" placeholder="Mobile Number" />
                                    <label for="cname"> Mobile Number</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" pattern="[0-9]{6}" class="form-control" id="cage" placeholder="Child Age" />
                                    <label for="cage">Pincode</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="cage" onfocus="this.showPicker()" placeholder="Date" />
                                    <label for="cage">Date</label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-floating">
                                    <input type="time" class="form-control" id="cage" onfocus="this.showPicker()" placeholder="Start Time" />
                                    <label for="cage">Start Time</label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-floating">
                                    <input type="time" class="form-control" id="cage" onfocus="this.showPicker()" placeholder="End Time" />
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
                        </div>
                    </form>
                    <div class="modal-footer">

                        <div class="col-12">
                            <button class="btn bg--primary text-white py-3 px-5 m-auto d-flex justify-content-center"
                                type="submit">
                                SUBMIT
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- Appointment Start -->
    <div class="container-fluid appointment mt-5 py-5 wow fadeIn" data-wow-delay="0.1s" id="contactform">
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
                                                <option>HOME ASSIST</option>
                                                <option>CHILD ASSIST</option>
                                                <option>SENIOR ASSIST</option>
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
                                        <input type="text"
                                         pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" id="cname"
                                            placeholder="Mobile Number" />
                                        <label for="cname"> Mobile Number</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" pattern="[0-9]{6}" class="form-control" id="cage" placeholder="Pincode" />
                                        <label for="cage">Pincode</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" onfocus="this.showPicker()" id="cage" placeholder="Date" />
                                        <label for="cage">Date</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="time" class="form-control" onfocus="this.showPicker()" id="cage" placeholder="Start Time" />
                                        <label for="cage">Start Time</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="time" class="form-control" onfocus="this.showPicker()" id="cage" placeholder="End Time" />
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
    <?php require('components/sections/common/footer.php')  ?>
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
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <?php require('components/scripts.php')  ?>
</body>

</html>