<x-admin-layout>
    <x-slot name="header">
        <!-- <h1 class="font-semibold"> {{ __('Admin') }} </h1> -->
    </x-slot>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Folio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Folio - v4.7.0
  * Template URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo"><img src="/assets/img/logo.png" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use an text logo -->
      <!-- <h1 class="logo"><a href="index.html">Folio</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link  scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link  scrollto" href="#journal">Project</a></li>
          <li><a class="nav-link  scrollto" href="{{ url('posts') }}">Go To CRUD</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection">
      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-4 ">
            <div class="div-img-bg">
              <div class="about-img">
                <img src="/assets/img/danusorn.jpg" class="img-responsive" alt="me">
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="about-descr">

              <p class="p-heading">SOFTWARE ENGINEER INTERNSHIP</p>
              <p class="separator">My name is Danusorn Thongruang. I'm a third-year student. Thammasat University</p>
              <div class="row">
              <div class="col-lg-6 mt-3">
                <ul>
                  <li><i class="bi bi-calendar-date"></i> <strong>Birthday:</strong> <span>06 June 2000</span></li>
                  <li><i class="bi bi bi-github "></i> <strong>Github:</strong> <span>https://github.com/Danusorn6643</span></li>
                  <li><i class="bi bi-phone-vibrate"></i> <strong>Phone:</strong> <span>+66 973430501</span></li>
                  <li><i class="bi bi-building"></i> <strong>City:</strong> <span>Surin City</span></li>
                </ul>
              </div>
              <div class="col-lg-6 mt-3">
                <ul>
                  <li><i class="bi bi-person-fill"></i> <strong>Age:</strong> <span>21</span></li>
                  <li><i class="bi bi-book-half"></i> <strong>Degree:</strong> <span>B.ENG in software Engineering</span></li>
                  <li><i class="bi bi-envelope-open"></i> <strong>Email:</strong> <span>danusorn.tho@dome.tu.ac.th</span></li>
                  <li><i class="bi bi-person-workspace "></i> <strong>Work:</strong> <span>Studying</span></li>
                </ul>
              </div>
            </div>

            </div>

          </div>
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <div id="services">
      <div class="container">

        <div class="services-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-briefcase"></i>
                <span>CODING LANGUAGES</span>
                <p class="separator">PYTHON, JAVASCRIPT, CSS, JAVA, HTML</p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-card-checklist"></i>
                <span>FRAMEWORK</span>
                <p class="separator">LARAVEL, REACT, REACT NATIVE</p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-bar-chart"></i>
                <span>SOFT SKILL</span>
                <p class="separator">Teamwork, Problem Solving, Growth Mindset, Flexibility, Fast learner</p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-binoculars"></i>
                <span>EDUCATION</span>
                <p class="separator">HIGH SCHOOL CERTIFICATE SIRINDHORN SCHOOL YEAR 2013 - 2019
                                    B.ENG IN SOFTWARE ENGINEERING OF THAMMASAT UNIVERSITY YEAR 2019 - PRESENT
                </p>
              </div>
            </div><!-- End testimonial item -->

            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </div><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>My Portfolio</h2>
        </div>
      </div>

      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Mobile App</li>
              <li data-filter=".filter-card">App</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="/assets/img/mocapp2.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mobile App 1</h4>
              <p>MOC App</p>
              <a href="/assets/img/mocapp2.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="MOC App"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="/assets/img/hompital4.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 1</h4>
              <p>Hompital</p>
              <a href="/assets/img/hompital4.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Hompital"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="/assets/img/mocapp3.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mobile App 2</h4>
              <p>MOC App</p>
              <a href="/assets/img/mocapp3.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="MOC App"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="/assets/img/faceRe.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App</h4>
              <p>Face Recognition</p>
              <a href="/assets/img/faceRe.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Face Recognition"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="/assets/img/hompital3.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Hompital</p>
              <a href="/assets/img/hompital3.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Hompital"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="/assets/img/hark2.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mobile App 3</h4>
              <p>Hark Bor Nub Lub Garn</p>
              <a href="/assets/img/hark2.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Hark Bor Nub Lub Garn"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Portfolio Section -->

    <!-- ======= Journal Section ======= -->
    <div id="journal" class="text-left paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>WORK EXPERIENCE</h2>
        </div>
      </div>

      <div class="container">
        <div class="journal-block">
          <div class="row">

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="blog-single.html"><img src="/assets/img/hark2.png" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="blog-single.html">PROJECT Hark Bor Nub Lub Garn</a></h4>
                  <p class="separator">It is an app used to calculate food costs. 
                                    Use it to divide meals with a group of friends and have simple games to play.
                  </p>

                </div>

              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="blog-single.html"><img src="/assets/img/faceRe.jpg" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="blog-single.html">PROJECT E-KYC</a></h4>
                  <p class="separator">This is a project that will scan faces and photo cards on student ID cards. to
                                        check whether they are the same person or not

                  </p>

                </div>

              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="blog-single.html"><img src="/assets/img/hompital.png" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="blog-single.html">PROJECT HOMPITAL</a></h4>
                  <p class="separator">is a project aboute web application to use for check the symptoms of covid-19
                                        that show the level of the patien and recommending for home Isolation
                                        My role in project is Front-end developer
                  </p>

                </div>

              </div>
            </div>

          </div>
        </div>
      </div>

    </div><!-- End Journal Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="paddsection">
      <div class="container">
        <div class="contact-block1">
          <div class="row">

            <div class="col-lg-6">
              <div class="contact-contact">

                <h2 class="mb-30">Contact us</h2>

                <ul class="contact-details">
                  <li><span>Thammasat University</span></li>
                  <li><span>Surin, Thailand</span></li>
                  <li><span>+66 973430501</span></li>
                  <li><span>danusorn.tho@dome.tu.ac.th</span></li>
                </ul>

              </div>
            </div>

            <div class="col-lg-6">
              <form action="/forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row gy-3">

                  <div class="col-lg-6">
                    <div class="form-group contact-block1">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>

                  <div class="mt-0">
                    <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">

        <ul class="list-unstyled">
        <li><a href="https://www.facebook.com/danusorn.thongruang"><i class="bi bi-facebook"></i></a></li>
          <li><a href="https://twitter.com/Lykn14"><i class="bi bi-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/ma_n_engja/"><i class="bi bi-instagram"></i></a></li>
          <li><a href="https://github.com/Danusorn6643"><i class="bi bi-github"></i></a></li>
          <li><a href="https://line.me/ti/p/RUKg_e4xKa"><i class="bi bi-line"></i></a></li>
          
        </ul>

      </div>

      

      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Folio
      -->
        Designed by <a href="https://bootstrapmade.com/">Man Danusorn</a>
      </div>

    </div>
  </div><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/typed.js/typed.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>
</x-admin-layout>