<?php require_once "schedulecall.php" ?>
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
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" /> -->

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
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/whdph_logo.png" />
                <span>WHD PH</span>
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
                        <a class="getstarted scrollto" href="contact-us.php">Contact US</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>

        <!-- Modal -->
        <div class="modal fade" id="schedule_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content" style="border:10px solid #4154f1;">
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
                                    <h4 class="modal-title mt-3" id="schedule_title" style="color:#4154f1">Schedule A Call</h4>
                                    <hr class="mb-4" style="height: 3px;color: #4154f1;background-color: #4154f1;opacity: 1;">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group mb-4">
                                            <label for="scheduleInputEmail">Email address</label>
                                            <input type="email" class="form-control" name="email" id="scheduleInputEmail" aria-describedby="emailHelp" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" placeholder="Enter email">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="scheduleInputName">Name</label>
                                            <input type="text" class="form-control" name="name" id="scheduleInputName" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" placeholder="Name">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="scheduleInputPhone">Phone Number</label>
                                            <input type="tel" class="form-control" name="message" id="scheduleInputPhone" value="<?php echo !empty($postData['message'])?$postData['message']:''; ?>" placeholder="Phone Number">
                                        </div>
                                        <!-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div> -->
                                        <!-- <button type="submit" class="btn btn-primary" > Submit</button> -->
                                        <input type="submit" name="submit" class="btn btn-primary" style="background-color: #4154f1;border-color: #4154f1;" value="SUBMIT">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn" style="text-align:center; color:white;background-color: #4154f1;position:fixed;display: inline-block; bottom: 0; z-index: 9999;" data-toggle="modal" data-target="#schedule_modal">Schedule A Call</button>

        <a href="">
            <img src="assets/img/whatsapp_logo.png" id="wa" style="position: fixed;z-index: 9999; bottom: 0; right: 60px; height: 11%;">
        </a>
        <!-- Modal -->
    </header>
    <!-- End Header -->
    <header class="header0">
        <div class="container container-xl d-flex align-items-start justify-content-left">
            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/whdph_logo.png" />
                <span>WHD PH</span>
            </a>
        </div>


    </header>

    <!-- schedule button -->


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">



        <div class="container">

            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">
                        You Can Become An Author
                    </h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">
                        We feel humbled by the love and support our authors have given in our journey so far by recommending us to their friends and coming back to us themselves. We thank each one of you and are committed to keep delivering value to each project
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Read More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/book-icon-138 (1).png" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row gx-0">
                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="alight-content-center">
                            <h3 id="Head1">About Us</h3>
                            <p id="aboutcontent">
                                WHD PH is a global self-publishing platform that aims at encouraging writers and helping their ideas shape into a tangible form. Our aim is to provide aspiring writers a space to sell their book globally by converting their ideas and stories into books..
                            </p>
                            <!-- <p>
                                Dr Syed initiated to mix of various full and piece meal services like designing a book cover, editing, publishing, organising book events, social media management for authors among other services..
                            </p> -->
                            <!-- <div class="text-center text-lg-start">
                                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div> -->
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/whdph_logo.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->
        <!-- about founder section starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <img id="founderimg" alt="image" src="assets/img/founder.jpg">
                    <br>
                </div>
                <div class="col-lg-8">
                    <h2 id="Head1">ABOUT Founder</h2>
                    <p id="aboutcontent">
                        Dr.Abdul Basit Syed, is a British Indian Global Peace Activist, Writer and Entrepreneur living in Croydon, U.K. He holds senior positions in various global organisations. He is accredited with Peace, Education, Trade harmony initiatives globally. His
                        services to humanity has its history of nearly two decades.
                    </p>
                    <p id="aboutcontent">
                        He was born in Tamil Nadu, India and migrated in his early teens to U.K. He was inspired by his grandfather PKS Kattuwa Mohaiyadeen an Indian Freedom Fighter, was well known for his social activities and community services.
                    </p>

                    <p id="aboutcontent">
                        He initiated to mix of various full and piece meal services like designing a book cover, editing, publishing, organising book events, social media management for authors among other service
                    </p>

                    <div class="social text-center ">



                        <a href="https://www.facebook.com/abdulsyedibrahim" target="_blank" class="btn-social btn-facebook"><i id="aboutfb" class="fa fa-facebook"></i></a>

                        <a href="https://www.instagram.com/abdulbasitsyed7/?igshid=1v0kvltbcmeu4" target="_blank" class="btn-social btn-instagram"><i id="aboutinsta" class="fa fa-instagram"></i></a>

                        <a href="https://www.linkedin.com/in/abdul-basit-syed-88762b163/" target="_blank" class="btn-social btn-linkedin"><i id="aboutlinkedin" class="fa fa-linkedin"></i></a>

                        <a href="https://twitter.com/abdulbasit4777" target="_blank" class="btn-social btn-twitter"><i id="abouttwitter" class="fa fa-twitter"></i></a>


                    </div>



                </div>








                <!-- about founder section stops -->
                <!-- ======= Counts Section ======= -->
                <section id="counts" class="counts">
                    <div class="container" data-aos="fade-up">
                        <div class="row gy-4">
                            <div class="col-lg-3 col-md-6">
                                <div class="count-box">
                                    <i class="bi bi-emoji-smile"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                                        <p>Happy Clients</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="count-box">
                                    <i class="bi bi-journal-richtext"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                                        <p>Projects</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="count-box">
                                    <i class="bi bi-headset"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                                        <p>Hours Of Support</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="count-box">
                                    <i class="bi bi-people"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                                        <p>Hard Workers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Counts Section -->
                <!-- ======= Services Section ======= -->
                <section id="services" class="services">
                    <div class="container">

                        <div class="section-title">
                            <h2>Services</h2>
                            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis
                                commodi quidem hic quas.</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                    <h4><a href="">Lorem Ipsum</a></h4>
                                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-file"></i></div>
                                    <h4><a href="">Sed ut perspiciatis</a></h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                                    <h4><a href="">Magni Dolores</a></h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-world"></i></div>
                                    <h4><a href="">Nemo Enim</a></h4>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-slideshow"></i></div>
                                    <h4><a href="">Dele cardo</a></h4>
                                    <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-arch"></i></div>
                                    <h4><a href="">Divera don</a></h4>
                                    <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </section>
                <!-- End Services Section -->
                <!-- ======= F.A.Q Section ======= -->
                <section id="faq" class="faq">
                    <div class="container" data-aos="fade-up">
                        <header class="section-header">
                            <h2>F.A.Q</h2>
                            <p>Frequently Asked Questions</p>
                        </header>

                        <div class="row">
                            <div class="col-lg-6">
                                <!-- F.A.Q List 1-->
                                <div class="accordion accordion-flush" id="faqlist1">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                      Non consectetur a erat nam at lectus urna duis?
                    </button>
                                        </h2>
                                        <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                            <div class="accordion-body">
                                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                      Feugiat scelerisque varius morbi enim nunc faucibus a
                      pellentesque?
                    </button>
                                        </h2>
                                        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                            <div class="accordion-body">
                                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                                cursus turpis massa tincidunt dui.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                      Dolor sit amet consectetur adipiscing elit pellentesque
                      habitant morbi?
                    </button>
                                        </h2>
                                        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                            <div class="accordion-body">
                                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                                molestie at elementum eu facilisis sed odio morbi quis
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <!-- F.A.Q List 2-->
                                <div class="accordion accordion-flush" id="faqlist2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                      Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                    </button>
                                        </h2>
                                        <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                            <div class="accordion-body">
                                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                                cursus turpis massa tincidunt dui.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                      Tempus quam pellentesque nec nam aliquam sem et tortor
                      consequat?
                    </button>
                                        </h2>
                                        <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                            <div class="accordion-body">
                                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                      Varius vel pharetra vel turpis nunc eget lorem dolor?
                    </button>
                                        </h2>
                                        <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                            <div class="accordion-body">
                                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque
                                                diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End F.A.Q Section -->
                <!-- ======= Pricing Section ======= -->
                <section id="pricing" class="pricing">

                    <div class="container" data-aos="fade-up">

                        <header class="section-header">
                            <h2>Pricing</h2>
                            <p>Check our Pricing</p>
                        </header>

                        <div class="row gy-4" data-aos="fade-left">

                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                <div class="box">
                                    <h3 style="color: #07d5c0;">Free Plan</h3>
                                    <!-- <div class="price"><sup>$</sup>0<span> / mo</span></div> -->
                                    <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
                                    <ul>
                                        <li>Aida dere</li>
                                        <li>Nec feugiat nisl</li>
                                        <li>Nulla at volutpat dola</li>
                                        <li class="na">Pharetra massa</li>
                                        <li class="na">Massa ultricies mi</li>
                                    </ul>
                                    <a href="packages.html" class="btn-buy">Know More</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                                <div class="box">
                                    <span class="featured">Featured</span>
                                    <h3 style="color: #65c600;">Starter Plan</h3>
                                    <!-- <div class="price"><sup>$</sup>19<span> / mo</span></div> -->
                                    <img src="assets/img/pricing-starter.png" class="img-fluid" alt="">
                                    <ul>
                                        <li>Aida dere</li>
                                        <li>Nec feugiat nisl</li>
                                        <li>Nulla at volutpat dola</li>
                                        <li>Pharetra massa</li>
                                        <li class="na">Massa ultricies mi</li>
                                    </ul>
                                    <a href="packages.html" class="btn-buy">Know More</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                                <div class="box">
                                    <h3 style="color: #ff901c;">Business Plan</h3>
                                    <!-- <div class="price"><sup>$</sup>29<span> / mo</span></div> -->
                                    <img src="assets/img/pricing-business.png" class="img-fluid" alt="">
                                    <ul>
                                        <li>Aida dere</li>
                                        <li>Nec feugiat nisl</li>
                                        <li>Nulla at volutpat dola</li>
                                        <li>Pharetra massa</li>
                                        <li>Massa ultricies mi</li>
                                    </ul>
                                    <a href="packages.html" class="btn-buy">Know More</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>
                <!-- End Pricing Section -->
                <!-- ======= Testimonials Section ======= -->
                <section id="testimonials" class="testimonials">

                    <div class="container" data-aos="fade-up">

                        <header class="section-header">
                            <h2>Testimonials</h2>
                            <p>What they are saying about us</p>
                        </header>

                        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                        <p>
                                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                        </p>
                                        <div class="profile mt-auto">
                                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                            <h3>Saul Goodman</h3>
                                            <h4>Ceo &amp; Founder</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                        <p>
                                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                        </p>
                                        <div class="profile mt-auto">
                                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                            <h3>Sara Wilsson</h3>
                                            <h4>Designer</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                        <p>
                                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                        </p>
                                        <div class="profile mt-auto">
                                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                            <h3>Jena Karlis</h3>
                                            <h4>Store Owner</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                        <p>
                                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                        </p>
                                        <div class="profile mt-auto">
                                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                            <h3>Matt Brandon</h3>
                                            <h4>Freelancer</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                        <p>
                                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                        </p>
                                        <div class="profile mt-auto">
                                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                            <h3>John Larson</h3>
                                            <h4>Entrepreneur</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- End testimonial item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>

                </section>
                <!-- End Testimonials Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <footer>

            <div class="container-fluid">
                <div class="row" style=" background-color: rgb(253, 255, 255);text-align: center;">
                    <div class="col-sm-4 col-lg-4 col-md-12  my-auto shadow p-4 mb-4">
                        <img src="img/loc1.png" height="40px">
                        <h4 class="text-body">Address</h4>
                        <p class="text-black-50">the place of whdph</p>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-12  my-auto shadow p-4 mb-4">
                        <img src="img/call.png" height="40px">
                        <h4 class="text-body">Phone</h4>
                        <p class="text-black-50">9988776655</p>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-12  my-auto shadow p-4 mb-4">
                        <img src="img/mail.png" height="40px">
                        <h4 class="text-body">Mail</h4>
                        <p class="text-black-50">sample123@gmail.com</p>
                    </div>
                </div>

            </div>

        </footer>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>WHD Publication</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">Designed by <a href="">Le Brand Tech</a></div>
      </div>
    </footer>
    <!-- End Footer -->

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
  </body>
</html>