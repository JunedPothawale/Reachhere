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
        <h1 class="display-4 animated slideInDown mb-4 text--color">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active " aria-current="page">
              Contact Us
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5">
            It’s okay to ask for help, to Reach Here. We’re with you!

            </h1>
         
            <form>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                    />
                    <label for="name">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      placeholder="Your Email"
                    />
                    <label for="email">Your Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"
                      id="subject"
                      placeholder="Subject"
                    />
                    <label for="subject">Subject</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      class="form-control"
                      placeholder="Leave a message here"
                      id="message"
                      style="height: 100px"
                    ></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary py-3 px-5" type="submit">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div
            class="col-lg-6 wow fadeIn"
            data-wow-delay="0.5s"
            style="min-height: 450px"
          >
         
          <!-- <iframe
            class="position-relative w-100 h-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
            frameborder="0"
            style="min-height: 450px; border: 0"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"
          ></iframe> -->
            <div class="position-relative rounded overflow-hidden h-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.2295922151443!2d72.99458941485231!3d19.14142478705043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c0aa648c87c1%3A0x7e443066362ddcab!2sYashodeep%20Heights%2C%20YASHODEEP%20HEIGHTS%2C%20Amrut%20Dham%2C%20Gothivali%20Village%2C%20Sector%2030%2C%20Rabale%2C%20Navi%20Mumbai%2C%20Maharashtra%20400701%2C%20India!5e0!3m2!1sen!2sbd!4v1661370247227!5m2!1sen!2sbd"  style="min-height: 450px; border: 0"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"  class="position-relative w-100 h-100"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <?php require('components/sections/common/footer.php')  ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <?php require('components/scripts.php')  ?>
  </body>
</html>
