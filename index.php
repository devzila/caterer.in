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
    <?php include_once("inc/nav.php") ?>
    <!-- Hero Start -->
    <div class="container-fluid bg-light py-6 my-6 mt-0">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-7 col-md-12">
            <small
              class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated bounceInDown"
              >Welcome to Chandigarh Caterer</small
            >
            <h1 class="display-1 mb-4 animated bounceInDown">
              <span class="text-primary">Chandigarh</span>Caterer For Your Dream
              Event
            </h1>
            <a
              href="contact.php"
              class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft"
              >Book Now</a
            >
            <!-- <a
              href=""
              class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 animated bounceInLeft"
              >Know More</a -->
            
          </div>
          <div class="col-lg-5 col-md-12">
            <img
              src="img/hero.png"
              class="img-fluid rounded animated zoomIn"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <!-- Hero End -->


   <?php include_once("inc/about.php") ?>
   <?php include_once("inc/fact.php") ?>
  
   <?php include_once("inc/service.php") ?>

    <!-- Events Start -->
    <div class="container-fluid event py-6">
      <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
          <small
            class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3"
            >Latest Events</small
          >
          <h1 class="display-5 mb-5">
            Our Social & Professional Events Gallery
          </h1>
        </div>
        <div class="tab-class text-center">
          <ul
            class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp"
            data-wow-delay="0.1s"
          >
            <li class="nav-item p-2">
              <a
                class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active"
                data-bs-toggle="pill"
                href="#tab-1"
              >
                <span class="text-dark" style="width: 150px">All Events</span>
              </a>
            </li>
            <li class="nav-item p-2">
              <a
                class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill"
                data-bs-toggle="pill"
                href="#tab-2"
              >
                <span class="text-dark" style="width: 150px">Wedding</span>
              </a>
            </li>
            <li class="nav-item p-2">
              <a
                class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill"
                data-bs-toggle="pill"
                href="#tab-3"
              >
                <span class="text-dark" style="width: 150px">Corporate</span>
              </a>
            </li>
            <li class="nav-item p-2">
              <a
                class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill"
                data-bs-toggle="pill"
                href="#tab-4"
              >
                <span class="text-dark" style="width: 150px">Events</span>
              </a>
            </li>
            <li class="nav-item p-2">
              <a
                class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill"
                data-bs-toggle="pill"
                href="#tab-5"
              >
                <span class="text-dark" style="width: 150px">Academic</span>
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="row g-4">
                    <div
                      class="col-md-6 col-lg-3 wow bounceInUp"
                      data-wow-delay="0.1s"
                    >
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/wedding1.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Wedding</h4>
                          <a
                            href="img/wedding1a.jpg"
                            data-lightbox="event-1"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 col-lg-3 wow bounceInUp"
                      data-wow-delay="0.3s"
                    >
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/corporate1.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Corporate</h4>
                          <a
                            href="img/corporate1a.jpg"
                            data-lightbox="event-2"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 col-lg-3 wow bounceInUp"
                      data-wow-delay="0.5s"
                    >
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/wedding2.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Wedding</h4>
                          <a
                            href="img/wedding2a.jpg"
                            data-lightbox="event-3"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 col-lg-3 wow bounceInUp"
                      data-wow-delay="0.7s"
                    >
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/event1.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Events</h4>
                          <a
                            href="img/event1a.jpg"
                            data-lightbox="event-4"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 col-lg-3 wow bounceInUp"
                      data-wow-delay="0.1s"
                    >
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/academic1.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Academic</h4>
                          <a
                            href="img/academic1a.jpg"
                            data-lightbox="event-5"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 col-lg-3 wow bounceInUp"
                      data-wow-delay="0.3s"
                    >
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/wedding3.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Wedding</h4>
                          <a
                            href="img/wedding3a.jpg"
                            data-lightbox="event-6"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 col-lg-3 wow bounceInUp"
                      data-wow-delay="0.5s"
                    >
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/academic2.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Academic</h4>
                          <a
                            href="img/academic2a.jpg"
                            data-lightbox="event-7"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 col-lg-3 wow bounceInUp"
                      data-wow-delay="0.7s"
                    >
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/corporate3.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Corporate</h4>
                          <a
                            href="img/corporate3a.jpg"
                            data-lightbox="event-17"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-2" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/wedding1.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Wedding</h4>
                          <a
                            href="img/wedding1a.jpg"
                            data-lightbox="event-8"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/wedding2.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Wedding</h4>
                          <a
                            href="img/wedding2a.jpg"
                            data-lightbox="event-8"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/wedding3.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Wedding</h4>
                          <a
                            href="img/wedding3a.jpg"
                            data-lightbox="event-8"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/wedding4.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Wedding</h4>
                          <a
                            href="img/wedding4a.jpg"
                            data-lightbox="event-9"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-3" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/corporate1.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Corporate</h4>
                          <a
                            href="img/corporate1a.jpg"
                            data-lightbox="event-10"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/corporate2.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Corporate</h4>
                          <a
                            href="img/corporate2a.jpg"
                            data-lightbox="event-11"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/corporate3.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Corporate</h4>
                          <a
                            href="img/corporate3a.jpg"
                            data-lightbox="event-11"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/corporate4.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Corporate</h4>
                          <a
                            href="img/corporate4a.jpg"
                            data-lightbox="event-11"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-4" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/event1.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Events</h4>
                          <a
                            href="img/event1a.jpg"
                            data-lightbox="event-12"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/event2.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Events</h4>
                          <a
                            href="img/event2a.jpg"
                            data-lightbox="event-13"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-5" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/academic1.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Academic</h4>
                          <a
                            href="img/academic1a.jpg"
                            data-lightbox="event-14"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/academic2.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Academic</h4>
                          <a
                            href="img/academic2a.jpg"
                            data-lightbox="event-15"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/academic3.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Academic</h4>
                          <a
                            href="img/academic3a.jpg"
                            data-lightbox="event-15"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Events End -->

    <!-- Menu Start -->
    <!-- <div class="container-fluid menu bg-light py-6 my-6">
      
      <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
          <small
            class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3"
            >Our Menu</small
          >
          <h1 class="display-5 mb-5">Most Popular Food in the North India</h1>
        </div>
        <div class="tab-class text-center">
          <ul
            class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp"
            data-wow-delay="0.1s"
          >
            <li class="nav-item p-2">
              <a
                class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill active"
                data-bs-toggle="pill"
                href="#tab-6"
              >
                <span class="text-dark" style="width: 150px">Starter</span>
              </a>
            </li>
            <li class="nav-item p-2">
              <a
                class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill"
                data-bs-toggle="pill"
                href="#tab-7"
              >
                <span class="text-dark" style="width: 150px">Main Course</span>
              </a>
            </li>
            <li class="nav-item p-2">
              <a
                class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill"
                data-bs-toggle="pill"
                href="#tab-8"
              >
                <span class="text-dark" style="width: 150px">Beverage</span>
              </a>
            </li>
            <li class="nav-item p-2">
              <a
                class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill"
                data-bs-toggle="pill"
                href="#tab-9"
              >
                <span class="text-dark" style="width: 150px">Dessert</span>
              </a>Sabudana Tikki
            </li>
            <li class="nav-item p-2">
              <a
                class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill"
                data-bs-toggle="pill"
                href="#tab-10"
              >
                <span class="text-dark" style="width: 150px">South Indian Spl.</span>
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div id="tab-6" class="tab-pane fade show p-0 active">
              <div class="row g-4">
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-01.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Paneer Tikka</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                      Paneer tikka is an Indian dish made from chunks of paneer/ chhena marinated in spices and grilled in a tandoor. It is a vegetarian alternative to chicken tikka and other meat dishes. 
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.2s">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-02.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Veg Kebab</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                      It is made with plenty of leafy greens and veggies like spinach, coriander leaves, green peas, potatoes and Indian spices.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.3s">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-03.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Mushroom Tikka</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                      Tandoori mushroom tikka is a super flavorful & delicious Indian appetizer made by grilling mushrooms in air fryer, oven or direct fire.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.4s">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-04.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Paneer Pakoda</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                      That has a lovely crispy texture with a moist, soft paneer from within. Mainly made with Paneer and gram flour.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.5s">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-05.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Veg Chowmein</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                      Vegetable Chow Mein made with celery, broccoli, cabbage, carrots, and bean sprouts mixed with chow mein noodles in a savory sauce.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.6s">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-06.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Veg. Manchurian</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                      Manchurian is a class of Indian Chinese dish made by roughly chopping and deep-frying ingredients such as chicken, cauliflower, prawns, fish, mutton, and paneer, and then sautéeing them in a sauce flavored with soy sauce.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.7s">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-07.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Spring Roll</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                      Spring rolls are rolled appetizers or dim sum commonly found in Chinese and Southeast Asian cuisines. The kind of wrapper, fillings, and cooking technique used.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.8s">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-08.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>French Fries</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                      They are prepared by cutting potatoes into even strips, drying them, and frying them, usually in a deep fryer.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-7" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-01.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Paneer Butter Masala</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Paneer Butter Masala, also known as butter paneer is a rich & creamy curry made with paneer, spices, onions, tomatoes, cashews and butter. 
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-03.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Palak Paneer</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                      Palak paneer or palak chhena is an Indian dish consisting of chhena or paneer in a thick paste made from puréed spinach.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-05.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Dal Makhani</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                      Dal makhani is a dish originating in Punjab region. A relatively modern variation of traditional lentil dishes, it is made with urad dal and other pulses, and includes butter and cream. 
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-07.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Matar Paneer</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                      Matar paneer, also known as matar paneer, muttar paneer, and mutter paneer, is a modern restaurant-style and vegetarian punjabi dish consisting of peas and paneer in a tomato-based sauce, spiced with garam masala.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-08.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Dal Tadka</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                      Dal tadka is a comforting, flavorful & hearty Indian dish. This flavorsome & delicious homemade dal tadka rivals any Indian restaurant!
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-03.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Kadai Paneer</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                      Kadai Paneer is a spicy, warming, flavorful and super delicious dish made by cooking paneer & bell peppers in a fragrant, fresh ground spice Powder.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-02.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Malai Kofta</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                      Malai Kofta is a delicious dish of fried balls of potato and paneer in a rich and creamy mild gravy made with sweet onions and tomatoes.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-01.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Shahi Paneer</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                      Shahi paneer or Paneer Rajwadi or Chhena Rajwadi or Raajsi Chhena is a preparation of chhena or paneer, native to the Indian subcontinent, consisting of a thick gravy of cream, tomatoes and Indian spices.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-8" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-01.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Crispy water</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-02.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Juice</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-03.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Orange</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-04.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Apple Juice</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-05.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Banana</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-06.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Sweet Water</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-07.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Hot Coffee</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-08.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Sweet Potato</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-9" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-06.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Sabudana Tikki</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-07.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Crispy</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-09.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Pizza</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-02.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Bacon</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-03.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Chicken</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-05.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Blooming</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-07.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Sweet</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-09.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Argentinian</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-10" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-06.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Sabudana Tikki</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-07.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Crispy</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-09.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Pizza</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-02.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Bacon</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-03.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Chicken</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-05.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Blooming</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-07.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Sweet</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="menu-item d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid rounded-circle"
                      src="img/menu-09.jpg"
                      alt=""
                    />
                    <div class="w-100 d-flex flex-column text-start ps-4">
                      <div
                        class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2"
                      >
                        <h4>Argentinian</h4>
                        <h4 class="text-primary"></h4>
                      </div>
                      <p class="mb-0">
                        Consectetur adipiscing elit sed dwso eiusmod tempor
                        incididunt ut labore.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Menu End -->

    <?php include_once("inc/book.php") ?>

    <!-- Team Start -->
    <!-- <div class="container-fluid team py-6">
      <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
          <small
            class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3"
            >Our Team</small
          >
          <h1 class="display-5 mb-5">We have experienced chef Team</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.1s">
            <div class="team-item rounded">
              <img class="img-fluid rounded-top" src="img/team-1.jpg" alt="" />
              <div class="team-content text-center py-3 bg-dark rounded-bottom">
                <h4 class="text-primary">Henry</h4>
                <p class="text-white mb-0">Decoration Chef</p>
              </div>
              <div
                class="team-icon d-flex flex-column justify-content-center m-4"
              >
                <a
                  class="share btn btn-primary btn-md-square rounded-circle mb-2"
                  href=""
                  ><i class="fas fa-share-alt"></i
                ></a>
                <a
                  class="share-link btn btn-primary btn-md-square rounded-circle mb-2"
                  href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="share-link btn btn-primary btn-md-square rounded-circle mb-2"
                  href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="share-link btn btn-primary btn-md-square rounded-circle mb-2"
                  href=""
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.3s">
            <div class="team-item rounded">
              <img class="img-fluid rounded-top" src="img/team-2.jpg" alt="" />
              <div class="team-content text-center py-3 bg-dark rounded-bottom">
                <h4 class="text-primary">Rakesh Sharma</h4>
                <p class="text-white mb-0">Executive Chef</p>
              </div>
              <div
                class="team-icon d-flex flex-column justify-content-center m-4"
              >
                <a
                  class="share btn btn-primary btn-md-square rounded-circle mb-2"
                  href=""
                  ><i class="fas fa-share-alt"></i
                ></a>
                <a
                  class="share-link btn btn-primary btn-md-square rounded-circle mb-2"
                  href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="share-link btn btn-primary btn-md-square rounded-circle mb-2"
                  href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="share-link btn btn-primary btn-md-square rounded-circle mb-2"
                  href=""
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.5s">
            <div class="team-item rounded">
              <img class="img-fluid rounded-top" src="img/team-3.jpg" alt="" />
              <div class="team-content text-center py-3 bg-dark rounded-bottom">
                <h4 class="text-primary">Vikas Kumar</h4>
                <p class="text-white mb-0">Kitchen Porter</p>
              </div>
              <div
                class="team-icon d-flex flex-column justify-content-center m-4"
              >
                <a
                  class="share btn btn-primary btn-md-square rounded-circle mb-2"
                  href=""
                  ><i class="fas fa-share-alt"></i
                ></a>
                <a
                  class="share-link btn btn-primary btn-md-square rounded-circle mb-2"
                  href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="share-link btn btn-primary btn-md-square rounded-circle mb-2"
                  href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="share-link btn btn-primary btn-md-square rounded-circle mb-2"
                  href=""
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.7s">
            <div class="team-item rounded">
              <img class="img-fluid rounded-top" src="img/team-4.jpg" alt="" />
              <div class="team-content text-center py-3 bg-dark rounded-bottom">
                <h4 class="text-primary">Rameshwar Dayal</h4>
                <p class="text-white mb-0">Head Chef</p>
              </div>
              <div
                class="team-icon d-flex flex-column justify-content-center m-4"
              >
                <a
                  class="share btn btn-primary btn-md-square rounded-circle mb-2"
                  href=""
                  ><i class="fas fa-share-alt"></i
                ></a>
                <a
                  class="share-link btn btn-primary btn-md-square rounded-circle mb-2"
                  href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="share-link btn btn-primary btn-md-square rounded-circle mb-2"
                  href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="share-link btn btn-primary btn-md-square rounded-circle mb-2"
                  href=""
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Team End -->

  <?php include_once("inc/testimonial.php") ?>

    <!-- Blog Start -->
    <div class="container-fluid blog py-6">
      <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
          <small
            class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3"
            >Our Blog</small
          >
          <h1 class="display-5 mb-5">Be First Who Read News</h1>
        </div>
        <div class="row gx-4 justify-content-center">
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
            <div class="blog-item">
              <div class="overflow-hidden rounded">
                <img src="img/blog-1.jpg" class="img-fluid w-100" alt="" />
              </div>
              <div class="blog-content mx-4 d-flex rounded bg-light">
                <div class="text-dark bg-primary rounded-start">
                  <div
                    class="h-100 p-3 d-flex flex-column justify-content-center text-center"
                  >
                    <p class="fw-bold mb-0">15</p>
                    <p class="fw-bold mb-0">Jan.</p>
                  </div>
                </div>
                <a href="#" class="h5 lh-base my-auto h-100 p-3"
                  >Enjoy and celebrate the joy of food..</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.3s">
            <div class="blog-item">
              <div class="overflow-hidden rounded">
                <img src="img/blog-2.jpg" class="img-fluid w-100" alt="" />
              </div>
              <div class="blog-content mx-4 d-flex rounded bg-light">
                <div class="text-dark bg-primary rounded-start">
                  <div
                    class="h-100 p-3 d-flex flex-column justify-content-center text-center"
                  >
                    <p class="fw-bold mb-0">22</p>
                    <p class="fw-bold mb-0">Jan.</p>
                  </div>
                </div>
                <a href="#" class="h5 lh-base my-auto h-100 p-3"
                  >Healthy recipes made for every day life..</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.5s">
            <div class="blog-item">
              <div class="overflow-hidden rounded">
                <img src="img/blog-3.jpg" class="img-fluid w-100" alt="" />
              </div>
              <div class="blog-content mx-4 d-flex rounded bg-light">
                <div class="text-dark bg-primary rounded-start">
                  <div
                    class="h-100 p-3 d-flex flex-column justify-content-center text-center"
                  >
                    <p class="fw-bold mb-0">07</p>
                    <p class="fw-bold mb-0">Feb.</p>
                  </div>
                </div>
                <a href="#" class="h5 lh-base my-auto h-100 p-3"
                  >Finger-licking spicy Indian food recipes..</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Blog End -->
    <?php include_once("inc/footer.php") ?>
    <?php include_once("inc/copyright.php") ?>
  </body>
</html>
