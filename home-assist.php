<!DOCTYPE html>
<html lang="en">
<?php $page = 'home-assist';
include("components/header.php"); ?>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <?php require('components/sections/common/navbar.php') ?>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-0 mb-sm-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="w-100" src="img\home-assist.webp" alt="Image" />
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
                    <img class="w-100" src="img\home-assist.webp" alt="Image" />
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
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next" style="width: 5rem;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->




    <!-- ----------- -->
    <div class="container  my-0 my-sm-3">
        <div class="row g-4 justify-content-between mt-0 mt-sm-5 rounded ">
            <div class="col-12 d-lg-flex justify-content-between align-items-center ">
                <div class="col-12 col-lg-6  home-service-img wow fadeIn mb-0 mb-sm-3 d-none d-md-block" data-wow-delay="0.1s">
                    <img src="img/hiring-cleaning-services.webp" alt="" class="img-fluid py-1 py-sm-3 px-1">
                </div>
                <div class="col-12 col-lg-6  my-0 my-sm-3 px-5">
                    <h1 class="text--color text-uppercase ">HOME ASSIST SERVICE</h1>
                    <p>A helpful hand for all your domestic help! Find the experienced home care service givers
                    </p>
                    <ul class="list-group mt-4 ms-1 ms-sm-2">
                        <li class="list-group-item">Mopping & Sweeping</li>
                        <li class="list-group-item">Washing Vessels</li>
                        <li class="list-group-item">Laundry and Drying</li>
                        <li class="list-group-item">Dusting & Cleaning</li>
                        <li class="list-group-item">Bathroom Cleaning</li>

                    </ul>
                    <p class="mt-4 text--color fs-5 fw-bold ">Choose from a pool of
                        experienced home service providers.

                        Who,
                    </p>
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
                                <img class="img-fluid" src="img/reach-icon-logo copy 4.svg" alt="" />
                            </div>
                            <div>
                                <h1 style="color: #E95197;">₹300</h1>
                                <p class="text-center fw-bold fs-5 text-capitalize">Per 1 Hour</p>
                            </div>
                        </div>
                        <div>
                            <a class="btn btn-light px-3 text-center w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</a>
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
                                <img class="img-fluid" src="img/reach-icon-logo copy 4.svg" alt="" />
                            </div>
                            <div>
                                <h1 style="color: #E95197;">₹550</h1>
                                <p class="text-center fw-bold fs-5">Per 2 Hours</p>

                            </div>
                        </div>
                        <div>
                            <a class="btn btn-light px-3 text-center w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</a>
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
                                <img class="img-fluid" src="img/reach-icon-logo copy 4.svg" alt="" />
                            </div>
                            <div>
                                <h1 style="color: #E95197;">₹800</h1>
                                <p class="text-center fw-bold fs-5">Per 3 Hours</p>

                            </div>
                        </div>
                        <div>
                            <a class="btn btn-light px-3 text-center w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</a>
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
                                <img class="img-fluid" src="img/reach-icon-logo copy 4.svg" alt="" />
                            </div>
                            <div>
                                <h1 style="color: #E95197;">₹1000</h1>
                                <p class="text-center fw-bold fs-5">Per 4 Hours</p>

                            </div>
                        </div>
                        <div>
                            <a class="btn btn-light px-3 text-center w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</a>
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
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                        <input type="text" class="form-control" id="gname" placeholder="First Name" required/>
                                        <label for="gname">First Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                    <div class="form-group">
                                            <select class="form-control text-capitalize" id="exampleFormControlSelect1" required>
                                                <option value="">Section Types...</option>
                                                <option value="home-assist">Home Assist</option>
                                                <option value="child-assist">Child Assist</option>
                                                <option value="senior-assist">Senior Assist</option>
                                                <option value="hr-consulting-services">HR Consulant Services</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-6">

                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="gname" placeholder="Last Name"
                                            required />
                                        <label for="gname">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="gmail" placeholder="Email Address"
                                            required />
                                        <label for="gmail"> Email Address</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control"
                                            id="cname" placeholder="Mobile Number" required />
                                        <label for="cname"> Mobile Number</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" pattern="[0-9]{6}" class="form-control" id="cage"
                                            placeholder="Child Age" required />
                                        <label for="cage">Pincode</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" onfocus="this.showPicker()" id="cage"
                                            placeholder="Date" min="1920-01-01" max="2022-01-01" required />
                                        <label for="cage">Date</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="time" class="form-control" onfocus="this.showPicker()" id="cage"
                                            placeholder="Start Time" required />
                                        <label for="cage">Start Time</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="time" class="form-control" onfocus="this.showPicker()" id="cage"
                                            placeholder="End Time" required />
                                        <label for="cage">End Time</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message"
                                            style="height: 80px" required></textarea>
                                        <label for="message">Address</label>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="modal-footer">
                                
                                <div class="col-12">
                                    <button class="btn bg--primary text-white py-3 px-5 m-auto d-flex justify-content-center" type="submit">
                                        SUBMIT
                                    </button>
                                </form>
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
                    <div class="bg-white rounded p-3 p-sm-5">
                    <form>
                            <div class="row g-3">
                                <div class="col-sm-6">

                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="gname" placeholder="First Name" required/>
                                        <label for="gname">First Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                    <div class="form-group">
                                            <select class="form-control text-capitalize" id="exampleFormControlSelect1" required>
                                                <option value="">Section Types...</option>
                                                <option value="home-assist">Home Assist</option>
                                                <option value="child-assist">Child Assist</option>
                                                <option value="senior-assist">Senior Assist</option>
                                                <option value="hr-consulting-services">HR Consulant Services</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-6">

                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="gname" placeholder="Last Name"
                                            required />
                                        <label for="gname">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="gmail" placeholder="Email Address"
                                            required />
                                        <label for="gmail"> Email Address</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control"
                                            id="cname" placeholder="Mobile Number" required />
                                        <label for="cname"> Mobile Number</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" pattern="[0-9]{6}" class="form-control" id="cage"
                                            placeholder="Child Age" required />
                                        <label for="cage">Pincode</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" onfocus="this.showPicker()" id="cage"
                                            placeholder="Date" min="1920-01-01" max="2022-01-01" required />
                                        <label for="cage">Date</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="time" class="form-control" onfocus="this.showPicker()" id="cage"
                                            placeholder="Start Time" required />
                                        <label for="cage">Start Time</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="time" class="form-control" onfocus="this.showPicker()" id="cage"
                                            placeholder="End Time" required />
                                        <label for="cage">End Time</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message"
                                            style="height: 80px" required></textarea>
                                        <label for="message">Address</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn bg--primary text-white py-3 px-5 m-auto d-block d-sm-inline"
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <?php require('components/scripts.php')  ?>
</body>

</html>