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
    <!-- Navbar End -->
<div class="container terms-conditions">
    <p class="text-center my-2 display-6">Privacy Policy</p>
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