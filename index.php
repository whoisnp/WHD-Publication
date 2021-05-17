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
    <link href="footerfiles/css/my.css" rel="stylesheet">
</head>


<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flexs">
                <img src="assets/img/whdph_logo.png" />
                <!-- <span>WHD PH</span> -->
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <a class="nav-link scrollto" href="self-publishing.html">Book Publishing</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="packages.html">Packages</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="free-publish.php">Quick Publish
                        </a>
                    </li>
                    <li><a href="publishing-process.html">Publishing Steps</a></li>
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
        <button class="btn" style="text-align:center; color:white;background-color: #356aac;position:fixed;display: inline-block; bottom: 0; z-index: 9999;" data-toggle="modal" data-target="#schedule_modal">Schedule A Call</button>

        <a href="https://wa.me/917358541277">
            <img src="assets/img/whatsapp_logo.png" id="wa" style="position: fixed;z-index: 9999; bottom: 0; right: 60px; height: 11%;">
        </a>
        <!-- Modal -->
    </header>
    <!-- End Header -->
    <header class="header0">
        <div class="overlay"></div>
        <div class="container container-xl d-flex align-items-center justify-content-left ">

            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/whdph_logo1.png" />
                <!-- <span>WHD PH</span> -->
            </a>
        </div>


    </header>

    <!-- schedule button -->


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">

            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up" style="text-align:left;color:#646464;">
                        You Too Can Become An Author
                    </h1>
                    <h2 data-aos="fade-up" data-aos-delay="400" style="text-align:left;">
                        WHD Publishing House aims to support the authors to publish their novel works in the most simplest way. We provide end to end service and global outreach.
                    </h2>
                    <div style="z-index: 99;">
                        <div class="row">
                            <div class="button-box col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center w-100" style="border-radius:64px">
                                    <span>Free Publishing</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>

                            <div class="button-box col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center w-100" style="border-radius:64px">
                                    <span> Author Kits</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                    <!-- button -->
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <!-- <img src="assets/img/book-icon-138.png" class="img-fluid" alt="" /> -->
                    <img src="assets/img/headerbookimage.png" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <!-- <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row gx-0">
                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="alight-content-center">
                            <h2 id="Head1">About Us</h2>
                            <p id="aboutcontent">
                                WHD PH is a global self-publishing platform that aims at encouraging writers and helping their ideas shape into a tangible form. Our aim is to provide aspiring writers a space to sell their book globally by converting their ideas and stories into books..
                            </p> -->
        <!-- <p>
                                Dr Syed initiated to mix of various full and piece meal services like designing a book cover, editing, publishing, organising book events, social media management for authors among other services..
                            </p> -->
        <!-- <div class="text-center text-lg-start">
                                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div> 
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/whdph_logo1.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End About Section -->
        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="195" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Countries</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi-people"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="7520" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Followers</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1125" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Hours Of Support</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Working Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counts Section -->
        <!-- about founder section starts -->
        <!-- <div class="container-fluid">
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
                        
                    </p>

                    <div class="social text-center ">



                        <a href="https://www.facebook.com/abdulsyedibrahim" target="_blank" class="btn-social btn-facebook"><i id="aboutfb" class="fa fa-facebook"></i></a>

                        <a href="https://www.instagram.com/abdulbasitsyed7/?igshid=1v0kvltbcmeu4" target="_blank" class="btn-social btn-instagram"><i id="aboutinsta" class="fa fa-instagram"></i></a>

                        <a href="https://www.linkedin.com/in/abdul-basit-syed-88762b163/" target="_blank" class="btn-social btn-linkedin"><i id="aboutlinkedin" class="fa fa-linkedin"></i></a>

                        <a href="https://twitter.com/abdulbasit4777" target="_blank" class="btn-social btn-twitter"><i id="abouttwitter" class="fa fa-twitter"></i></a>


                    </div>



                </div>



 -->




        <!-- about founder section stops
<!-Author-->

        <section class="author section-spacing" id="Author">
            <div class="container">
                <header class="text-center">
                    <h2 class="hyy"> Message from Chairman's Desk</h2>
                </header>
                <br>
                <div class="row">
                    <div class="slide-left col-md-12 col-lg-5 text-center">
                         <img src="assets/img/founder1.jpg" data-at2x="assets/img/founder2.jpg" alt="author" class="author-img">
                     </div>
                    <div class="col-md-12 col-lg-7">
                        <h4 align="left" class="slide-right">Dr Abdul Basit Syed</h4>
                        <hr class="slide-right">
                        <p id="gfty1" align="left" class="slide-right">Books are our companion which we carry not only in our hands but also in our mind and heart. As a humanitarian, I feel my responsibility to give a platform to the words and thoughts which can support world peace.</p>
                        <p id="gfty1" align="left" class="slide-right"> Hence, I have established this sounded platform WHD Publishing House to be an able companion of not only renowned writes, scholars and journalist but also to the people of common thinking like me. I feel it is the moral duty of each resourceful person to publish a book which can be a friend and guide, as our theme ' Fiat Lux ' (Let light be made)</p>
                        <img src="assets/img/signature1.png" data-at2x="assets/img/signature2.png" alt="signature" class="slide-right signature">

                        <!--social-->
                        <div class="social" align="left">
                            <ul>
                                <li class="slide-right"><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li class="slide-right"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li class="slide-right"><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li class="slide-right"><a href="https://linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!--social end-->

                    </div>
                </div>
            </div>
        </section>

        <!--Author end-->

        <!-- ======= Services Section ======= -->
        <!-- <section id="services" class="services">
                    <div class="container">

   

                        <div class="row">
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                    <h4><a href="">Lorem Ipsum</a></h4>
                                    <p id="gfty1">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-file"></i></div>
                                    <h4><a href="">Sed ut perspiciatis</a></h4>
                                    <p id="gfty1">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                                    <h4><a href="">Magni Dolores</a></h4>
                                    <p id="gfty1">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-world"></i></div>
                                    <h4><a href="">Nemo Enim</a></h4>
                                    <p id="gfty1">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-slideshow"></i></div>
                                    <h4><a href="">Dele cardo</a></h4>
                                    <p id="gfty1">Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-arch"></i></div>
                                    <h4><a href="">Divera don</a></h4>
                                    <p id="gfty1">Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </section> -->
        <!-- End Services Section -->
        <!--features-->

        <section class="features section-spacing text-center" id="Features">
            <div class="container">
                <header>
                    <h2>Specialities</h2>
                    <h3>We have few of our features to stand out from the rest and makes WHD Publishing House your Go-To publishing service provider</h3>
                </header>
                <br>

                <div class="row">
                    <div class="slide-left col-sm-4"> <img src="assets/img/feature-1.png" data-at2x="assets/img/feature-1@2x.png" alt="features">
                        <h4>Global Outreach</h4>
                        <hr>
                        <p>We have our trusted readers and supporters around the world and each book that gets published is assured of a international audience. </p>
                    </div>
                    <div class="slide-top col-sm-4"> <img src="assets/img/feature-2.png" data-at2x="assets/img/feature-2@2x.png" alt="features">
                        <h4>24x7 Round the Clock Service</h4>
                        <hr>
                        <p>Throughout the year, we ensure our team is active and be available for our clients.</p>
                    </div>
                    <div class="slide-right col-sm-4"> <img src="assets/img/feature-3.png" data-at2x="assets/img/feature-3@2x.png" alt="features">
                        <h4>100% Author Share</h4>
                        <hr>
                        <p>We assure all the profits go directly to the author and do not levy any royalties.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="slide-left col-sm-4"> <img src="assets/img/feature-4.png" data-at2x="assets/img/feature-4@2x.png" alt="features">
                        <h4>Customer Discussion</h4>
                        <hr>
                        <p>We provide opportunity for everyone to have a free discussion or consultation with our team to understand more.</p>
                    </div>
                    <div class="slide-top col-sm-4"> <img src="assets/img/feature-5.png" data-at2x="assets/img/feature-5@2x.png" alt="features">
                        <h4>WHD PH Membership</h4>
                        <hr>
                        <p>Once a person becomes a Client with us, they will have an exclusive advantage to become a Member of WHD PH which will have its own benefits.</p>
                    </div>
                    <div class="slide-right col-sm-4"> <img src="assets/img/feature-6.png" data-at2x="assets/img/feature-6@2x.png" alt="features">
                        <h4>Fast Track Publications</h4>
                        <hr>
                        <p>We ensure the books gets ready in the quickest timeframe possible with our exclusive Author Kits.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--features end-->
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
                                        1. What's is the process for me to publish my work?
                                    </button>
                                </h2>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        You can E-mail or WhatsApp us and our team will get in touch with you ASAP. Meanwhile you can look into our website to more about the Author Kit Pricing.

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                        3. Who will hold the copyrights of my work?

                                    </button>
                                </h2>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        It is definitely the Author.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                        5. What is the Author share when the books are Sold?
                                    </button>
                                </h2>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        It is 100% Share. Zero Royalty. We are purely a Publishing Company and only take up services in relation to editing, formatting, designing, printing and primary distribution. The Author can decide on the Post Publishing Sales and Marketing as it is non exclusive.

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                        7. What's the printing cost?
                                    </button>
                                </h2>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        It is purely a Case to Case criteria as this depends on various factors as Page Quality, Colors Indexed, Number of Pages, Binding Type, Dimensions and Number of Copies ordered.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                                        9. What are the available mode of payment?
                                    </button>
                                </h2>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Bank Transfer and Pay Pal
                                        *please contact us personally to check other options
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
                                        2. What are all the documents that are required to submit / signed along?
                                    </button>
                                </h2>
                                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Author ID Proof is mandatory. Also we require the basic details about the book and the Author. Novel Work Declaration and Publishing Agreement are to be signed.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                                        4. How long will it take for the book to be published?
                                    </button>
                                </h2>
                                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Minimum of 7 to 14 days after the Final Manuscript, Final Book Cover Design and Signed Approval are submitted.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                                        6. Can I edit the contents of the book after publishing?
                                    </button>
                                </h2>
                                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Ofcourse yes, but it has to be revised into a new edition
                                        .
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-4">
                                        8. Will there be any hidden charges?
                                    </button>
                                </h2>
                                <div id="faq2-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Absolutely No. The prices depends on the package the Author chooses with us. Any additional services asked might incur extra cost that will definitely be intimated to the Author before processing.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-5">
                                        10. What are the payment terms?
                                    </button>
                                </h2>
                                <div id="faq2-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        If a Priced Author Kit is chosen, then 50 % advance to be paid while the work begins, 40 % after finalizing the Manuscript before ISBN is applied and the balance 10% after the work is published.
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

                        <div class="box" style="padding-top:0px">
                            <div class="row text-center" style="background:#356aac;color:white">
                                <h3 style="padding-top:30px;">Cipher kit</h3>
                             
                            </div>

                            <!-- <div class="price"><sup>$</sup>0<span> / mo</span></div> -->



                            <ul>
                                <li>ISBN</li>
                                <li class="na">Author Copies</li>
                                <li class="na">Content Revisions</li>
                                <li class="na">Online Book Launch</li>
                                <li class="na">Social Media Setup</li>
                               
                            </ul>
                            <a href="packages.html" class="btn-buy">Know More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">

                        <div class="box" style="padding-top:0px">
                            <div class="row text-center" style="background:#356aac;color:white">
                                <h3 style="padding-top:30px;">Standard Kit</h3>
                                
                            </div>

                            <!-- <h3 style="color: #07d5c0;margin-top:8px;">Free Plan</h3> -->
                            <!-- <div class="price"><sup>$</sup>0<span> / mo</span></div> -->



                            <ul>
                            <li>ISBN</li>
                                <li>Author Copies</li>
                                <li class="na">Content Revisions</li>

                                <li class="na">Online Book Launch</li>
                                <li class="na">Social Media Setup</li>
                            </ul>
                            <a href="packages.html" class="btn-buy">Know More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">

                        <div class="box" style="padding-top:0px">
                            <div class="row text-center" style="background:#356aac;color:white">
                                <h3 style="padding-top:30px;">Specialist Kit</h3>
                            </div>

                            <!-- <div class="price"><sup>$</sup>0<span> / mo</span></div> -->



                            <ul>
                            <li>ISBN</li>
                                <li>Author Copies</li>
                                <li>Content Revisions</li>

                                <li class="na">Online Book Launch</li>
                                <li class="na">Social Media Setup</li>                         </ul>
                            <a href="packages.html" class="btn-buy">Know More</a>
                        </div>
                    </div>
                    <div class="row gy-4 justify-content-evenly" data-aos="fade-left">
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">

                            <div class="box" style="padding-top:0px">
                                <div class="row text-center" style="background:#356aac;color:white">
                                    <h3 style="padding-top:30px;">Expert Kit</h3>
                                    
                                </div>

                                <!-- <div class="price"><sup>$</sup>0<span> / mo</span></div> -->



                                <ul>
                                <li>ISBN</li>
                                <li>Author Copies</li>
                                <li>Content Revisions</li>

                                <li>Online Book Launch</li>
                                <li class="na">Social Media Setup</li>
                                </ul>
                                <a href="packages.html" class="btn-buy">Know More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">

                            <div class="box" style="padding-top:0px">
                                <div class="row text-center" style="background:#356aac;color:white">
                                    <h3 style="padding-top:30px;">Pro Plus Kit</h3>
                                   
                                </div>

                                
                                <!-- <div class="price"><sup>$</sup>0<span> / mo</span></div> -->



                                <ul>

                                <li>ISBN</li>
                                <li>Author Copies</li>
                                <li>Content Revisions</li>

                                <li>Social Media Setup</li>
                                <li>Online Book L                                </ul>
                                <a href="packages.html" class="btn-buy">Know More</a>
                            </div>
                        </div>
                    </div>
                   
                        
                    
                </div>


        </section>
        <!-- End Pricing Section -->
        <section id="">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Have A Discussion With Our Team</h2>
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
                        <br>
                        <div class="form-group mb-4">
                            <label for="scheduleInputEmail" style="font-size:17px;">Email address</label>
                            <input type="email" class="form-control" name="email" id="scheduleInputEmail" aria-describedby="emailHelp" value="<?php echo !empty($postData['email']) ? $postData['email'] : ''; ?>" placeholder="Enter Email" style="font-size:17px;">
                        </div>
                        <br>
                        <div class="form-group mb-4">
                            <label for="scheduleInputPhone" style="font-size:17px;">Phone Number</label>
                            <input type="tel" class="form-control" name="message" id="scheduleInputPhone" value="<?php echo !empty($postData['message']) ? $postData['message'] : ''; ?>" placeholder="Phone Number" style="font-size:17px;">
                        </div>
                        <br>
                        <input type="submit" name="submit" class="btn btn-buy" style="background-color: #ffffff;border-color: #4154f1; color:#356aac; border-radius:50px; font-weight:600;" onMouseOver="this.style.color='white';this.style.backgroundColor='#356aac'" onMouseOut="this.style.color='#356aac';this.style.backgroundColor='white'" value="SUBMIT">
                    </form>
                </div>

            </div>

        </section>
        <!-- end of free Consultancy -->
        <!-- ======= Testimonials Section ======= -->
        <!-- <section id="testimonials" class="testimonials">

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
                                </div> -->
        <!-- End testimonial item -->

        <!-- <div class="swiper-slide">
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
                                </div> -->
        <!-- End testimonial item -->

        <!-- <div class="swiper-slide">
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
                                </div> -->
        <!-- End testimonial item -->

        <!-- <div class="swiper-slide">
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
                                </div> -->
        <!-- End testimonial item -->

        <!-- <div class="swiper-slide">
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
                                </div> -->
        <!-- End testimonial item -->

        <!-- </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>

                </section> -->
        <!-- End Testimonials Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= 
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
    End Footer -->



    <!-- address -->
    <div class="container">
        <ul class="address row text-center">
            <li class="col-sm-4"><i class="slide-bottom bi bi-whatsapp"></i>
                <h4 class="slide-bottom">Whatsapp</h4>
                <p class="slide-bottom" style="font-weight:300;">735-854-1277</p>
            </li>
            <li class="col-sm-4"><i class="slide-bottom bi bi-telephone-fill"></i>
                <h4 class="slide-bottom">Phone</h4>
                <p class="slide-bottom" style="font-weight:300;">+44 7946 328097</p>
            </li>
            <li class="col-sm-4"><i class="slide-bottom bi bi-envelope-fill"></i>
                <h4 class="slide-bottom">Email</h4>
                <p class="slide-bottom" style="font-weight:300;">info@sitename.com</p>
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
                        <li><a href="https://plus.google.com/" target="_blank"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="https://youtube.com/" target="_blank"><i class="bi bi-youtube"></i></a></li>
                        
                    </ul> -->

                    <!--social end-->

                    <small>&copy; Copyright WHDPH. All Rights Reserved.</small>
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