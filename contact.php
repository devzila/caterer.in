<!DOCTYPE html>
<html lang="en">
  <?php include_once("inc/head.php") ?>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->
        <?php include_once("inc/nav.php") ?>

        <!-- Contact Start -->
        <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="p-5 bg-light rounded contact-form">
                    <div class="row g-4">
                        <div class="col-12">
                            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Get in touch</small>
                            <h1 class="display-5 mb-0">Contact Us For Any Queries!</h1>
                        </div>
                        <div class="col-md-6 col-lg-7">
                            <p class="mb-4">Fill the form below and we will get back to you within 1-2 hours</p>
                            <form>
                                <input type="text" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Your Name">
                                <input type="email" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Enter Your Email">
                                <textarea class="w-100 form-control mb-4 p-3 border-primary bg-light" rows="4" cols="10" placeholder="Your Message"></textarea>
                                <button class="w-100 btn btn-primary form-control p-3 border-primary bg-primary rounded-pill" type="submit">Submit Now</button>
                            </form>
                        </div>
                        <div class="col-md-6 col-lg-5">
                            <div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                    <div class="">
                                        <h4>Address</h4>
                                        <p>SCO - 91, 2nd Floor, Sector -5, Panchkula</p>
                                    </div>
                                </div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                                    <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                    <div class="">
                                        <h4>Mail Us</h4>
                                        <p class="mb-2">info@chandigarhcaterer.in</p>
                                        <p class="mb-0">support@chandigarhcaterer.in</p>
                                    </div>
                                </div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded">
                                    <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div class="">
                                        <h4>Telephone</h4>
                                        <p class="mb-2">9898989898</p>
                                        <p class="mb-0">9898989898</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        <?php include_once("inc/footer.php") ?>
        <?php include_once("inc/copyright.php") ?>
    </body>
</html>
