<?php require_once "contact.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>WHD publishing - Index</title>
    <meta content="" name="description" />

    <meta content="" name="keywords" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="footerfiles/css/my.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header_1" class="header1 fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/whdph_logo.png" />
    
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <a class="nav-link scrollto" href="self-publishing.html">Self Publishing</a
              >
            </li>
            <li>
              <a class="nav-link scrollto" href="packages.html">Packages</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="free-publish.PHP">Free Publish
              </a>
                    </li>
                    <li><a href="publishing-process.html">Publishing Process</a></li>
                    <li>
                        <a class="nav-link scrollto" href="books.html">Books</a>
                    </li>
                    <li>
                        <a class="getstarted scrollto active" href="contact-us.php">Contact US</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>

        <a href="">
            <img src="assets/img/whatsapp_logo.png" id="wa" style="position: fixed;z-index: 9999; bottom: 0; right: 60px; height: 11%;">
        </a>
        <!-- Modal -->
    </header>
    <br>
    <!-- End Header -->
    <!-- <header class="header0">
        <div class="container container-xl d-flex align-items-start justify-content-left">
            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/whdph_logo.png" />
                <span>WHD PH</span>
            </a>
        </div>


    </header> -->

    <!-- schedule button -->



                    <!-- ======= Contact Section ======= -->
                    <section id="contact" class="contact">
                        <div class="container" data-aos="fade-up">
                            <header class="section-header">
                                <h2>Contact</h2>
                                <div class="text-center">
            <h6 class="underline" style="color: #6e6e6e; font-size: 25px;">
                <strong>CONTACT US</strong><br />
            </h6>

        </div>
                            </header>
    
                            <div class="row gy-4">
                                <div class="col-lg-6">
                                    <div class="row gy-4">
                                        <div class="col-md-6">
                                            <div class="info-box">
                                                <i class="bi bi-geo-alt"></i>
                                                <h3>Address</h3>
                                                <p>A108 Adam Street,<br />New York, NY 535022</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-box">
                                                <i class="bi bi-telephone"></i>
                                                <h3>Call Us</h3>
                                                <p>+1 5589 55488 55<br />+1 6678 254445 41</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-box">
                                                <i class="bi bi-envelope"></i>
                                                <h3>Email Us</h3>
                                                <p>info@example.com<br />contact@example.com</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-box">
                                                <i class="bi bi-clock"></i>
                                                <h3>Open Hours</h3>
                                                <p>Monday - Friday<br />9:00AM - 05:00PM</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-lg-6">
                                    <form action="" method="post" enctype="multipart/form-data" class="php-email-form">
                                        <div class="row gy-4">
                                            <div class="col-md-6">
                                                <input type="text" name="name" class="form-control" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" placeholder="Your Name" required />
                                            </div>
    
                                            <div class="col-md-6">
                                                <input type="email" class="form-control" name="email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" placeholder="Your Email" required />
                                            </div>
    
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="subject" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>" placeholder="Subject" required />
                                            </div>
    
                                            <div class="col-md-12">
                                                <textarea class="form-control" name="message" value="<?php echo !empty($postData['message'])?$postData['message']:''; ?>" rows="6" placeholder="Message" required></textarea>
                                            </div>
    
                                            <div class="col-md-12 text-center">
                                                <div class="loading">Loading</div>
                                                <div class="error-message"></div>
                                                <div class="sent-message">
                                                    Your message has been sent. Thank you!
                                                </div>
    
                                                <input type="submit" name="submit" class="btn btn-primary submit-now" value="SUBMIT">
                                                <!-- <button type="submit">Send Message</button> -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Contact Section -->

    <!-- address --> 
<div class="container">
    <ul class="address row text-center">
      <li class="col-sm-4"><i class="slide-bottom fa fa-map-marker"></i>
        <h4 class="slide-bottom">Address</h4>
        <p class="slide-bottom">Lorem ipsum dolor sit amet.</p>
      </li>
      <li class="col-sm-4"><i class="slide-bottom fa fa-phone"></i>
        <h4 class="slide-bottom">Phone</h4>
        <p class="slide-bottom">604-788-1832</p>
      </li>
      <li class="col-sm-4"><i class="slide-bottom fa fa-envelope"></i>
        <h4 class="slide-bottom">Email</h4>
        <p class="slide-bottom">info@sitename.com</p>
      </li>
    </ul>
  </div>
  
  <!--address end-->
  <!--site-footer-->
<footer class="site-footer section-spacing">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          
          
          <!--social-->
          
          <ul class="social">
            <li><a  href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
          </ul>
          
          <!--social end--> 
          
          <small>&copy; Copyright Book. All Rights Reserved.</small>
          <p><a href="#" data-toggle="modal" data-target="#privacy">Privacy</a> | <a href="#" data-toggle="modal" data-target="#terms">Terms of Use</a></p>
          
          <!-- Privacy Modal -->
          <div class="modal fade" id="privacy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-privacy" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel-privacy">Privacy</h4>
                </div>
                
              </div>
            </div>
          </div>
          <!-- Privacy Modal end --> 
          
          <!-- Terms of Use Modal -->
          <div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-terms" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel-terms">Terms of Use</h4>
                </div>
                
              </div>
            </div>
          </div>
          <!-- Terms of Use Modal end --> 
          
        </div>
      </div>
    </div>
  </footer>
  <!--site-footer end-->

<a
  href="#"
  class="back-to-top d-flex align-items-center justify-content-center"
  ><i class="bi bi-arrow-up-short"></i
></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

<!-- bootstrap js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<!-- footer -->
<script src="footerfiles/js/scripts.min.js"></script> 
    <script src="footerfiles/js/jquery.ajaxchimp.min.js"></script> 
    <script src="footerfiles/js/main.js"></script>
</body>
</html>