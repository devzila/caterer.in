<!DOCTYPE html>
<html lang="en">
  <?php include_once("inc/head.php") ?>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar start -->
    <div class="container-fluid nav-bar">
      <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg py-4">
          <a href="index.html" class="navbar-brand">
            <h1 class="text-primary fw-bold mb-0">
              Cater<span class="text-dark">Serv</span>
            </h1>
          </a>
          <button
            class="navbar-toggler py-2 px-3"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="fa fa-bars text-primary"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto">
              <a href="index.html" class="nav-item nav-link">Home</a>
              <a href="about.html" class="nav-item nav-link">About</a>
              <a href="service.html" class="nav-item nav-link">Services</a>
              <a href="event.html" class="nav-item nav-link">Events</a>
              <a href="menu.html" class="nav-item nav-link">Menu</a>
              <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle active"
                  data-bs-toggle="dropdown"
                  >Pages</a
                >
                <div class="dropdown-menu bg-light">
                  <a href="book.html" class="dropdown-item">Booking</a>
                  <a href="blog.html" class="dropdown-item">Our Blog</a>
                  <a href="team.html" class="dropdown-item">Our Team</a>
                  <a href="testimonial.html" class="dropdown-item"
                    >Testimonial</a
                  >
                  <a href="404.html" class="dropdown-item active">404 Page</a>
                </div>
              </div>
              <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <button
              class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex"
              data-bs-toggle="modal"
              data-bs-target="#searchModal"
            >
              <i class="fas fa-search"></i>
            </button>
            <a
              href=""
              class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill"
              >Book Now</a
            >
          </div>
        </nav>
      </div>
    </div>
    <!-- Navbar End -->

    <!-- Modal Search Start -->
    <div
      class="modal fade"
      id="searchModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Search by keyword
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body d-flex align-items-center">
            <div class="input-group w-75 mx-auto d-flex">
              <input
                type="search"
                class="form-control bg-transparent p-3"
                placeholder="keywords"
                aria-describedby="search-icon-1"
              />
              <span id="search-icon-1" class="input-group-text p-3"
                ><i class="fa fa-search"></i
              ></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Search End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-light py-6 my-6 mt-0">
      <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4">404 Error</h1>
        <ol
          class="breadcrumb justify-content-center mb-0 animated bounceInDown"
        >
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Pages</a></li>
          <li class="breadcrumb-item text-dark" aria-current="page">
            404 Error
          </li>
        </ol>
      </div>
    </div>
    <!-- Hero End -->

    <!-- 404 Start -->
    <div class="container-fluid py-6 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
            <h1 class="display-1">404</h1>
            <h1 class="mb-4">Page Not Found</h1>
            <p class="mb-4">
              We’re sorry, the page you have looked for does not exist in our
              website! Maybe go to our home page or try to use a search?
            </p>
            <a class="btn btn-primary rounded-pill py-3 px-5" href=""
              >Go Back To Home</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- 404 End -->

    <?php include_once("inc/footer.php") ?>
    <?php include_once("inc/copyright.php") ?>
  </body>
</html>
