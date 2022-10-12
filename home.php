<!DOCTYPE html>
<html lang="en">
<?php include("components/header.php");?>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>

    <?php require('components/sections/common/navbar.php') ?>

    <!-- Carousel Start -->
    <div class="container-fluid banner_con">
        <div class="banner_container d-flex justify-content-center">
     
            <div class="banner position-relative">
                <a href="home-assist.php"><img class="w-100" src="img\hiring-cleaning-services.png" alt=""
                        srcset=""></a>

                <div class="banner-container2">
                    Home Assist

                    <ul class="banner-text-container2">
                        Click here to view more details
                    </ul>

                </div>

            </div>
            <div class="banner position-relative">
                <a href="child-assist.php"><img class="w-100" src="img\Babysitting-Mobile.jpg" alt=""
                        srcset=""></a>

                <div class="banner-container2">
                    Child Assist

                    <ul class="banner-text-container2">
                    Click here to view more details
                    </ul>

                </div>

            </div>
            <div class="banner position-relative">
                <a href="senior-assist.php"><img class="w-100" src="img\senior-man-with-helpful-volunteer-in-the-garden-LMJAN27.jpg" alt=""
                        srcset=""></a>

                <div class="banner-container2">
                   Senior Assist

                    <ul class="banner-text-container2">
                    Click here to view more details
                    </ul>

                </div>

            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp d-none d-sm-block" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden rounded ps-sm-5 pt-sm-5 h-100" style="min-height: 400px">
                        <img class="position-absolute w-100 h-100" src="img\banners\All-home-services.png" alt=""
                            style="object-fit: cover" />
                        <div class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3 " style="width: 200px; height: 200px">
                            <div
                                class="d-flex flex-column justify-content-center text-center bg--primary rounded h-100 p-3">
                                <h2 class="text-white mb-0">Legacy of</h2>
                                <h3 class="text-white mb-0">25 +</h3>
                                <h3 class="text-white">Years</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class=" mb-3 text--color text-capitalize">
                            Choose a Service to get Started!
</h1>
                        <p class="fs-5 text-primary mb-4">
                            Home, Child, and Senior Assistance Plans
                        </p>
                        <p class="mb-4">
                            &nbsp;&nbsp;&nbsp;&nbsp; Help around the house and companion is crucial when you want to
                            have a peaceful life while maintaining the dignity of you and your loved ones. Professional
                            assistance is always a bonus in such times. That’s when Reach Here reaches your doorstep
                            with all the assistance you need.
                            <br>
                            All services, a few clicks away.
                        </p>
                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 rounded-circle me-3" src="img/profile.jpg" alt="" />
                                <a href="tel:+917777803030"> <h5 class="mb-0">Call Us:+91 7777 80 3030</h5></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-1">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px">
                <h1 class="mb-5 text--color text-capitalize">
                    Our Offerings
                </h1>
            </div>
            <div class="row g-4 justify-content-center">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">

                    <div class="service-item rounded h-100 p-5 po">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-05-light.png" alt="" />
                            </div>
                            <h4 class="mb-0 text-capitalize">Home Assist</h4>
                        </div>
                        <p class="mb-4 text-style">
                            Now, take care of your house the easy way! From home cleaning to plumbing, get the best home
                            services at your fingertips! The platform ensures a trouble-free experience while getting
                            reliable home services per hour.

                            <br>
                            We are here to help. Want to learn more about our services
                        </p><a class="btn btn-light px-3 position-absolute top-90 start-35" href="home-assist.php">More
                            Details</a>

                        <!-- <a class="btn btn-light px-3" href="home.php">Read More</a> -->
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid"
                                    style="filter: invert(99%) sepia(99%) saturate(0%) hue-rotate(244deg) brightness(107%) contrast(100%);"
                                    src="img\icon\children.png" alt="" />
                            </div>
                            <h4 class="mb-0 text-capitalize">Child Assist</h4>
                        </div>
                        <p class="mb-4 text-style">
                            Find trusted babysitters in your town who are empathetic and fun around your kids. With
                            Reach Here, your baby gets the best care and love they need. The platform offers reliable,
                            quick and quality childcare services in your comfort space and time.

                            <br> We are here to help. Want to learn more about our services
                        </p>
                        <a class="btn btn-light px-3 position-absolute top-90 start-35 text-capitalize" href="child-assist.php">More
                            Details</a>
                        <!-- <a class="btn btn-light px-3" href="consaltant.php">Read More</a> -->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp position-relative" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid"
                                    style="filter: invert(99%) sepia(99%) saturate(0%) hue-rotate(244deg) brightness(107%) contrast(100%);"
                                    src="img\icon\medical-assistance.png" alt="" />
                            </div>
                            <h4 class="mb-0 text-capitalize"> Senior Assist</h4>
                        </div>
                        <p class="mb-4 text-style">
                            Reach Here lends the support and empathy your elderly loved ones need while you look after
                            the other priorities in your day. The trained professionals cautiously accompany your loved
                            ones while respecting their dignity. From escorting them to pathology or garden to attending
                            them home, our Reachers get you covered right in time.

                            <br>
                            We are here to help. Want to learn more about our services
                        </p>
                        <a class="btn btn-light px-3 position-absolute top-90 start-35 text-capitalize" href="senior-assist.php">More
                            Details</a>
                        <!-- <a class="btn btn-light px-3" href="consaltant.php">Read More</a> -->
                    </div>
                </div>



            </div>
        </div>
    </div>
    <div class="container-fluid appointment mt-5 py-5 wow fadeIn" data-wow-delay="0.1s" id="contactform">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded p-3 p-sm-5">
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
                                        <input type="text" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" id="cname"
                                            placeholder="Mobile Number" />
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
                                    <button class="btn bg--primary text-white py-3 px-5 m-auto d-block d-sm-inline" type="submit">
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
    <!-- About Start -->
    <!-- About End -->
    <!-- Facts Start -->
    <!-- Facts End -->
    <!-- Features Start -->
    <!-- Features End -->
    <!-- Client Start -->
    <!-- Client End -->
    <!-- Appointment Start -->
  
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