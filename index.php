<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Reduce Food Wastage</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v4.7.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
 
<body>
<?php
        include 'admin/database.php';
        
                $sql_profile=mysqli_query($con,"select * from profile where id='1'");

                while($row_profile=mysqli_fetch_array($sql_profile))
                {
                    $address_line1 = $row_profile['address_line1'];
                    $address_line2 = $row_profile['address_line2'];
                    $contact1 = $row_profile['contact1'];
                    $contact2 = $row_profile['contact2'];
                    $city = $row_profile['city'];
                    $email = $row_profile['email'];
                }
?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="#"><span>RFW</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#donate">Donate</a></li>
          <li><a class="nav-link scrollto" href="#activity">Activity</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="volunteer/login.html">Volunteer</a></li>
              <li><a href="donor/login.html">Donor</a></li>
              
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Welcome to RFW</h1>
      <h2>(RFW - Reduce Food Wastage)</h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3>RFW - Reduce Food Wastage</h3>
              <p>
               Giving a food is not just about make donation, Its about making happieness.
              </p>
              <p>
                If you cannt feed hundread people, then just feed one.
               </p>
              <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Volunteer</h4>
                  <p>Volunteer Can help to people with giving time to system</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Donor</h4>
                  <p>Donor can give food donation and help to other needy people.</p>
                </div>
                <div class="col-md-10 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>RFW - ADMIN</h4>
                  <p>This system reduce the food wastage and use in a useful way, Also this system is provide a platform to donor where they can donates foods.</p>
                  <p> RFW helps donor to donates their remaining food to them which we can use to redistributes to needy peoples. The system wi;; help in easy way to
                    reduce food wastage and use in useful way and also provide donation service for other things.
                  </p>
                </div>
                
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="donate" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Donate</h2>
          <div class="row">
          <div class="col-lg-6">
            <form action="admin/classes/donor_add_a.php" method="post">
              <p><b>Donor</b> Registration</p> <br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>  
              <br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Your Mobile" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="city" id="city" placeholder="Your City" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="username" class="form-control" id="mobile" placeholder="Your Username" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" required>
                </div>
              </div>    
              
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
              </div>
              <div class="my-3">
                
              </div>
              <div class="text-center"><input type="submit" value="Register As Donor"></input></div>
            </form>
          </div>

          <div class="col-lg-6">
            <form action="admin/classes/volunteer_add_a.php" method="post">
              <p><b>Volunteer</b> Registration</p> <br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>  
              <br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Your Mobile" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="city" id="city" placeholder="Your City" required>
                </div>
              </div> 
              <br> 
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="username" class="form-control" id="mobile" placeholder="Your Username" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" ></textarea>
              </div>
              <div class="my-3">
                
              </div>
              <div class="text-center"><input type="submit" value="Register As Volunteer"></input></div>
            </form>  
          </div>
         
        </div>
        <br>
        
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counts Section ======= 
    <section id="counts" class="counts  section-bg">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> consequuntur quae</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
            </div>
          </div>

        </div>

      </div>
    </section> -->

    <!-- ======= Cta Section ======= 
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="activity" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Activity</h2>
          <p>Giving Food is not just about make a donation, Its about making happiness to others.</p>
        </div>
        <!--
        <div class="row" data-aos="fade-in">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>
        -->
        <div class="row portfolio-container" data-aos="fade-up">
        <?php
               

                $sql=mysqli_query($con,"select * from gallery where status='Active'");

                while($row=mysqli_fetch_array($sql))
                {
                    ?>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                            <img src="images/gallery/<?php echo "$row[id]"; ?>.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="images/gallery/<?php echo "$row[id]"; ?>.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                                <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                            </div>
                            </div>
                        </div>
                    <?php
                }

        ?>
          

          

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p><?php echo "$address_line1";  ?>, <?php echo "$address_line2";  ?>, <?php echo "$city";  ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p><?php echo "$email";  ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p><?php echo "$contact1";  ?>,
             <?php echo "$contact2";  ?></p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58956.89215868015!2d72.90971446356464!3d22.54894788051651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e4e7efd0c8885%3A0xa9a0b93c0c4b5215!2sAnand%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1648896249701!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>
          <div class="col-lg-6">
            <form action="#" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="mt-3">
                 <!-- <div class="loading">Loading</div>
                <div class="error-message">Your message has been sent. Thank you!</div>
                 <div class="sent-message"></div> -->
              </div> 
              <div class="text-center" onClick="abc()"><button type="submit">Send Message</button></div>
            </form>

            <script>
              function abc(){
                alert("message sent");
              }

            </script>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="footer-info">
              <h3>Reduce Food Wastage</h3>
              
              <p>
              <?php echo "$address_line1";  ?> <br>
              <?php echo "$address_line2";  ?>, <?php echo "$city";  ?><br><br>
                <strong>Phone:</strong> <?php echo "$contact1";  ?><br>
                <strong>Email:</strong> <?php echo "$email";  ?><br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <!-- <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#about">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#donate">Donate</a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#activity">Activity</a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#contact">Contact</a></li> -->

              <!-- <i class="bx bx-chevron-right"></i>  -->
              <a class="nav-link scrollto active" href="#hero">Home</a>
              <!-- <i class="bx bx-chevron-right"></i>  -->
              <a class="nav-link scrollto" href="#about">About Us</a>
              <!-- <i class="bx bx-chevron-right"></i>  -->
              <a class="nav-link scrollto" href="#donate">Donate</a>
              <!-- <i class="bx bx-chevron-right"></i>  -->
              <a class="nav-link scrollto" href="#activity">Activity</a>
              <!-- <i class="bx bx-chevron-right"></i>  -->
              <a class="nav-link scrollto" href="#contact">Contact</a>


            </ul>
          </div>


          

          <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
           

          </div> -->

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>RFW</span></strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>