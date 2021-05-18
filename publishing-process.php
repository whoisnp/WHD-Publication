<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>WHD publishing - Publishing Process</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="assets_1/vendor/bootstrap/css/bootstrap5.min.css" rel="stylesheet"> -->
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets_1/css/style.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="footerfiles/css/my.css" rel="stylesheet">



</head>

<body>
    <header id="header" class="header1 fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/whdph_logo.png" />
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <a class="nav-link scrollto" href="self-publishing.html">Book Publishing</a
              >
            </li>
            <li>
              <a class="nav-link scrol/lto" href="packages.php">Author Kit</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="free-publish.php">Quick Publish
              </a>
                    </li>
                    <li><a class="nav-link scrollto active" href="publishing-process.php">Publishing steps</a></li>
                    <li>
                        <a class="nav-link scrollto" href="books.html">Books</a>
                    </li>
                    <li>
                        <a class="getstarted scrollto" href="contact-us.php">Contact</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>


        <a href="https://wa.me/917358541277">
            <img src="assets/img/whatsapp_logo.png" id="wa" style="position: fixed;z-index: 9999; bottom: 0; right: 60px; height: 11%;">
        </a>
        <!-- Modal -->
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Modal -->
    <div class="modal fade" id="schedule_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content" style="border:10px solid #356aac;">
                <div class="modal-header border-0">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <br>
                                <br>
                                <img class="" src="./assets/img/scheduleCall.jpeg" alt="about" width="100%" height="auto">
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <h4 class="modal-title mt-3" id="schedule_title" style="color:#356aac">Schedule A Call</h4>
                                <hr class="mb-4" style="height: 3px;color: #356aac;background-color: #4154f1;opacity: 1;">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group mb-4">
                                        <label for="scheduleInputEmail">Email address</label>
                                        <input type="email" class="form-control" name="email" id="scheduleInputEmail" aria-describedby="emailHelp" value="<?php echo !empty($postData['email']) ? $postData['email'] : ''; ?>" placeholder="Enter email">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="scheduleInputName">Name</label>
                                        <input type="text" class="form-control" name="name" id="scheduleInputName" value="<?php echo !empty($postData['name']) ? $postData['name'] : ''; ?>" placeholder="Name">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="scheduleInputPhone">Phone Number</label>
                                        <input type="tel" class="form-control" name="message" id="scheduleInputPhone" value="<?php echo !empty($postData['message']) ? $postData['message'] : ''; ?>" placeholder="Phone Number">
                                    </div>
                                    <!-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div> -->
                                    <!-- <button type="submit" class="btn btn-primary" > Submit</button> -->
                                    <input type="submit" name="submit" class="btn btn-primary" style="background-color: #356aac;border-color: #4154f1;" value="SUBMIT">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <button class="btn" style="text-align:center; color:white;background-color: #356aac;position:fixed;display: inline-block; bottom: 0; z-index: 9999;" data-toggle="modal" data-target="#schedule_modal">Schedule A Call</button> -->
    <main id="main">
        <div class="text-center">
            <h6 class="underline" style="color: #6e6e6e; font-size: 25px">
                <strong>PUBLISHING STEPS</strong><br />

            </h6>

        </div>


        <!-- ======= Details Section ======= -->
        <section id="details" class="details">
            <!-- <div style="text-align: center;text-decoration: rgb(138, 138, 141);">
                <h1>Publishing Process</h1>
            </div> -->

            <div class="container">

                <div class="row content d-flex justify-content-evenly">

                    <div class="col-lg-5 shadow-lg p-4  bg-body rounded
                    " id="details_row">
                        <div class="row">
                            <div class="col-md-5" data-aos="fade-right">
                                <img id="qw" src="assets_1/img/choose.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-up">
                                <img class="rounded mx-auto d-block" src="assets_1/img/1.png" height=50px width=50px>
                                <h3 class="text-center">Choose your Author Kit & services</h3>


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 shadow-lg p-4  bg-body rounded
" id="details_row">
                        <div class="row">
                            <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                                <img src="assets_1/img/details.png" style="margin-top: 10px;" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-up">
                                <img class="rounded mx-auto d-block" src="assets_1/img/2.png" height==50px width=50px>
                                <h3 class="text-center">Confirm your Quotation</h3>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row content d-flex justify-content-evenly">
                    <div class="col-lg-5 shadow-lg p-4  bg-body rounded
                    " id="details_row">
                        <div class="row">
                            <div class="col-md-5" data-aos="fade-right">
                                <img id="qw" src="assets_1/img/sign.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-up">
                                <img class="rounded mx-auto d-block" src="assets_1/img/3.png" height==50px width=50px>
                                <h3 class="text-center">Sign Agreement</h3>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 shadow-lg p-4  bg-body rounded
                    " id="details_row">
                        <div class="row">
                            <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                                <img src="assets_1/img/selctm.png" style="margin-top: 10px;" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-up">
                                <img class="rounded mx-auto d-block" src="assets_1/img/4.png" height==50px width=50px>
                                <h3 class="text-center">Submit Manuscript</h3>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row content d-flex justify-content-evenly">
                    <div class="col-lg-5 shadow-lg p-4  bg-body rounded
                    " id="details_row">
                        <div class="row">
                            <div class="col-md-5" data-aos="fade-right">
                                <img src="assets_1/img/bookss.png" style="margin-top: 30px;margin-bottom: 20px;" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-up">
                                <img class="rounded mx-auto d-block" src="assets_1/img/5.png" height==50px width=50px>
                                <h3 class="text-center">Book Formatting Done</h3>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 shadow-lg p-4  bg-body rounded
                    " id="details_row">
                        <div class="row">
                            <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                                <img src="assets_1/img/revv.png" style="margin-top: 30px;margin-bottom: 20px;" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-up">
                                <img class="rounded mx-auto d-block" src="assets_1/img/6.png" height==50px width=50px>
                                <h3 class="text-center">Approval of Draft</h3>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row content d-flex justify-content-evenly">
                    <div class="col-lg-5 shadow-lg p-4  bg-body rounded
                    " id="details_row">
                        <div class="row">
                            <div class="col-md-5" data-aos="fade-right">
                                <img src="assets_1/img/printed.png" style="margin-top: 30px;margin-bottom: 20px;" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-7 pt-4" data-aos="fade-up">
                                <img class="rounded mx-auto d-block" src="assets_1/img/7.png" height==50px width=50px>
                                <h3 class="text-center">ISBN Allocation Done</h3>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 shadow-lg p-4  bg-body rounded
                    " id="details_row">
                        <div class="row">
                            <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                                <img src="assets_1/img/market.png" style="margin-top: 30px;margin-bottom: 20px;" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-up">
                                <img class="rounded mx-auto d-block" src="assets_1/img/8.png" height==50px width=50px>
                                <h3 class="text-center">Printed Copies & E-Books</h3>

                            </div>
                        </div>
                    </div>


                    <div class="row content d-flex justify-content-center">

                        <div class="col-lg-6 col-md-12 shadow-lg p-4  bg-body rounded
                    " id="details_row">
                            <div class="row" id="box">
                                <div class="col-md-5" data-aos="fade-right">
                                    <img src="assets_1/img/monitoring.png" style="margin-top: 30px;margin-bottom: 20px;" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-7 pt-4" data-aos="fade-up">
                                    <img class="rounded mx-auto d-block" src="assets_1/img/9.png" height==50px width=50px>
                                    <h3 class="text-center">Getting Sales and Distribution Rights</h3>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>




        </section>
        <!-- End Details Section -->

        <section id="">

            <div class="container" data-aos="fade-up">

                <header class="section-header">

                    <p>Schedule A Call</p>
                </header>

                <div class="row" data-aos="fade-up">
                    <form method="post" enctype="multipart/form-data" class="col-lg-8 offset-lg-2">
                        <div class="form-group mb-4">
                            <label for="scheduleInputName" style="font-size:17px;">Name</label>
                            <input type="text" class="form-control" name="name" id="scheduleInputName" value="<?php echo !empty($postData['name']) ? $postData['name'] : ''; ?>" placeholder="Enter Name" style="font-size:17px;">
                        </div>
                        <div class="form-group mb-4">
                            <label for="scheduleInputName" style="font-size:17px;">Country</label>
                            <input type="text" class="form-control" name="country" id="scheduleInputCountry" value="" placeholder="Enter Country" style="font-size:17px;">
                        </div>
                        <div class="form-group mb-4">
                            <label for="scheduleInputEmail" style="font-size:17px;">Email address</label>
                            <input type="email" class="form-control" name="email" id="scheduleInputEmail" aria-describedby="emailHelp" value="<?php echo !empty($postData['email']) ? $postData['email'] : ''; ?>" placeholder="Enter Email" style="font-size:17px;">
                        </div>
                        <div class="form-group mb-4">
                            <label for="scheduleInputPhone" style="font-size:17px;">Phone Number</label>
                            <input type="tel" class="form-control" name="message" id="scheduleInputPhone" value="<?php echo !empty($postData['message']) ? $postData['message'] : ''; ?>" placeholder="Phone Number" style="font-size:17px;">
                        </div>
                        <div class="text-center">
                            <input type="submit" name="submit" class="btn btn-buy" style="background-color: #ffffff;border-color: #4154f1; color:#356aac; border-radius:50px; font-weight:600;" onMouseOver="this.style.color='white';this.style.backgroundColor='#356aac'" onMouseOut="this.style.color='#356aac';this.style.backgroundColor='white'"
                            value="SUBMIT">
                        </div>
                    </form>
                </div>

            </div>

        </section>

        <!-- ======= Gallery Section ======= -->












    </main>
    <!-- address -->
    <div class="container">
        <ul class="address row text-center">
            <li class="col-sm-4"><i class="slide-bottom bi bi-whatsapp"></i>
                <h4 class="slide-bottom">Whatsapp</h4>
                <p class="slide-bottom" style="font-weight:300;">+91 735-854-1277</p>
            </li>
            <li class="col-sm-4"><i class="slide-bottom bi bi-telephone-fill"></i>
                <h4 class="slide-bottom">Phone</h4>
                <p class="slide-bottom" style="font-weight:300;">+44 794-632-8097</p>
            </li>
            <li class="col-sm-4"><i class="slide-bottom bi bi-envelope-fill"></i>
                <h4 class="slide-bottom">Email</h4>
                <p class="slide-bottom" style="font-weight:300;">publish@whdph.com</p>
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

                    <!-- <ul class="social">
                        <li><a href="https://twitter.com/" target="_blank"><i class="bi bi-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="https://instagram.com/" target="_blank"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="https://youtube.com/" target="_blank"><i class="bi bi-youtube"></i></a></li>

                    </ul> -->

                    <!--social end-->

                    <small>&copy; Copyright WHD Publishing House 2021. All Rights Reserved.</small>
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


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets_1/js/main.js"></script>
    <!-- footer -->
    <script src="footerfiles/js/scripts.min.js"></script>
    <script src="footerfiles/js/jquery.ajaxchimp.min.js"></script>
    <script src="footerfiles/js/main.js"></script>

</body>

</html>