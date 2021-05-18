<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHD publishing - Packages</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="footerfiles/css/my.css" rel="stylesheet">
    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <style>
        @media screen and (min-width:800px) {
            .h1_packages {
                text-transform: uppercase;
                text-align: center;
            }
            .empty_space {
                display: block;
                height: 50px;
            }
            #table-responsive {
                margin: 0px 45px 0px 45px;
                z-index: 50;
            }
            .table-bordered thead td,
            .table-bordered thead th {
                border-width: 4px;
                border-color: white;
            }
            .table-bordered td,
            .table-bordered th {
                border-width: 4px;
                border-color: white;
                background-color: #ccd9e8;
                vertical-align: middle;
                text-align: center;
            }
            .included {
                background-color: #356aac !important;
                color: white;
            }
            .table_small{
                display: none;
            }
        }
        
        @media screen and (max-width:799px) {
            .h1_packages {
                text-transform: uppercase;
                text-align: center;
            }
            .empty_space {
                display: block;
                height: 50px;
            }
            #table-responsive {
                margin: auto;
                padding: 10px;
            }
            .table-bordered thead td,
            .table-bordered thead th {
                border-width: 4px;
                border-color: white;
            }
            .table-bordered td,
            .table-bordered th {
                border-width: 4px;
                border-color: white;
                background-color: #ccd9e8;
                vertical-align: middle;
                text-align: center;
            }
            .included {
                background-color: #356aac !important;
                color: white;
            }
            .table_large {
                display: none;
            }
        }
    </style>
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
              <a class="nav-link scrollto active" href="packages.php">Author Kit</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="free-publish.php">Quick Publish
              </a>
                    </li>
                    <li><a href="publishing-process.php">Publishing steps</a></li>
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
                                    <img class="" src="./assets/img/whdph_logo1.png" alt="about" width="100%" height="auto">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                    <h4 class="modal-title mt-3" id="schedule_title" style="color:#356aac">Schedule A Call</h4>
                                    <hr class="mb-4" style="height: 3px;color: #356aac;background-color: #356aac;opacity: 1;">
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
                                        <div class="form-group mb-4">
                                            <label for="scheduleInputPhone">Country</label>
                                            <input type="text" class="form-control" name="country" id="scheduleInputcountry" value="<?php echo !empty($postData['country'])?$postData['country']:''; ?>" placeholder="Enter Country">
                                        </div>
                                        <!-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div> -->
                                        <!-- <button type="submit" class="btn btn-primary" > Submit</button> -->
                                         <input type="submit" name="submit" class="btn btn-buy" style="background-color: #ffffff;border-color: #4154f1; color:#356aac; border-radius:50px; font-weight:600;" onMouseOver="this.style.color='white';this.style.backgroundColor='#356aac'"onMouseOut="this.style.color='#356aac';this.style.backgroundColor='white'" value="SUBMIT">










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
    <br>
    <br>
    <br>
    <br>
    <span class="empty_space"></span>
    <div class="container" data-aos="fade-up">
        <!-- Feature Icons -->
        <div class="text-center">
            <h6 class="underline" style="color: #6e6e6e; font-size: 25px;">
                <strong>BOOK PUBLISHING PACKAGES</strong><br />
            </h6>

        </div>
        <span class="empty_space"></span>
        <div class="table-responsive-sm table-responsive-md table_small" id="table-responsive">
            <table class="table table-hover table-bordered" data-aos="fade-up">
                <thead>
                    <tr>
                        <th style="color:white; background-color: #356aac;">AuthorKits</th>
                        <th style="color:white; background-color: #356aac;">Chipher
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="color:white; background-color: #356aac;">Price</th>
                        <th style="color:white; background-color: #356aac;">0</th>
                    </tr>
                    <tr>
                        <td>Book Cover Design</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Design Revision</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Digital Proof</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Author Book Copies</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>ISBN + Barcode</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Govt Copyrights</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Page Formatting</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Formatting Revision</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Book Cover Type</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Add'nl Author Copies</td>
                        <td>Print Cost</td>
                    </tr>
                    <tr>
                        <td>Proof Reading</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>E-Book Formatting</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>E-Book Publishing</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Non-Exclusive Contract</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Promotional Materials</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Book Website</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Individual Customer Support</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Press Release</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Online Book Launch</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Social Media Initial Setup</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Marketing Collaterals</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Shipping Charges</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Author Profit</td>
                        <td>100%</td>
                    </tr>
                    <tr>
                        <td>WHD PH Membership</td>
                        <td class="Included">Included</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class=" table-responsive-sm table-responsive-md table_small" id="table-responsive">
            <table class="table table-hover table-bordered" data-aos="fade-up">
                <thead>
                    <tr>
                        <th style="color:white; background-color: #356aac;">AuthorKits</th>
                        <th style="color:white; background-color: #356aac;">Standard
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="color:white; background-color: #356aac;">Price</th>
                        <th style="color:white; background-color: #356aac;">Ask Us</th>
                    </tr>
                    <tr>
                        <td>Book Cover Design</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Design Revision</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Digital Proof</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Author Book Copies</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>ISBN + Barcode</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Govt Copyrights</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Page Formatting</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Formatting Revision</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Book Cover Type</td>
                        <td>Paperback</td>
                    </tr>
                    <tr>
                        <td>Add'nl Author Copies</td>
                        <td>Print Cost</td>
                    </tr>
                    <tr>
                        <td>Proof Reading</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>E-Book Formatting</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>E-Book Publishing</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Non-Exclusive Contract</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Promotional Materials</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Book Website</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Individual Customer Support</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Press Release</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Online Book Launch</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Social Media Initial Setup</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Marketing Collaterals</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Shipping Charges</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Author Profit</td>
                        <td>100%</td>
                    </tr>
                    <tr>
                        <td>WHD PH Membership</td>
                        <td class="Included">Included</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class=" table-responsive-sm table-responsive-md table_small" id="table-responsive">
            <table class="table table-hover table-bordered" data-aos="fade-up">
                <thead>
                    <tr>
                        <th style="color:white; background-color: #356aac;">AuthorKits</th>
                        <th style="color:white; background-color: #356aac;">Specialist
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="color:white; background-color: #356aac;">Price</th>
                        <th style="color:white; background-color: #356aac;">Ask Us</th>
                    </tr>
                    <tr>
                        <td>Book Cover Design</td>
                        <td>1 Option</td>
                    </tr>
                    <tr>
                        <td>Design Revision</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Digital Proof</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Author Book Copies</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>ISBN + Barcode</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Govt Copyrights</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Page Formatting</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Formatting Revision</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Book Cover Type</td>
                        <td>Paperback</td>
                    </tr>
                    <tr>
                        <td>Add'nl Author Copies</td>
                        <td>Print Cost</td>
                    </tr>
                    <tr>
                        <td>Proof Reading</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>E-Book Formatting</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>E-Book Publishing</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Non-Exclusive Contract</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Promotional Materials</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Book Website</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Individual Customer Support</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Press Release</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Online Book Launch</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Social Media Initial Setup</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Marketing Collaterals</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Shipping Charges</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Author Profit</td>
                        <td>100%</td>
                    </tr>
                    <tr>
                        <td>WHD PH Membership</td>
                        <td class="Included">Included</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class=" table-responsive-sm table-responsive-md table_small" id="table-responsive">
            <table class="table table-hover table-bordered" data-aos="fade-up">
                <thead>
                    <tr>
                        <th style="color:white; background-color: #356aac;">AuthorKits</th>
                        <th style="color:white; background-color: #356aac;">Expert
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="color:white; background-color: #356aac;">Price</th>
                        <th style="color:white; background-color: #356aac;">Ask Us</th>
                    </tr>
                    <tr>
                        <td>Book Cover Design</td>
                        <td>2 Option</td>
                    </tr>
                    <tr>
                        <td>Design Revision</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Digital Proof</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Author Book Copies</td>
                        <td>250</td>
                    </tr>
                    <tr>
                        <td>ISBN + Barcode</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Govt Copyrights</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Page Formatting</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Formatting Revision</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Book Cover Type</td>
                        <td>Paperback</td>
                    </tr>
                    <tr>
                        <td>Add'nl Author Copies</td>
                        <td>Print Cost</td>
                    </tr>
                    <tr>
                        <td>Proof Reading</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>E-Book Formatting</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>E-Book Publishing</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Non-Exclusive Contract</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Promotional Materials</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Book Website</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Individual Customer Support</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Press Release</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Online Book Launch</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Social Media Initial Setup</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Marketing Collaterals</td>
                        <td>Add-On</td>
                    </tr>
                    <tr>
                        <td>Shipping Charges</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Author Profit</td>
                        <td>100%</td>
                    </tr>
                    <tr>
                        <td>WHD PH Membership</td>
                        <td class="Included">Included</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class=" table-responsive-sm table-responsive-md table_small" id="table-responsive">
            <table class="table table-hover table-bordered" data-aos="fade-up">
                <thead>
                    <tr>
                        <th style="color:white; background-color: #356aac;">AuthorKits</th>
                        <th style="color:white; background-color: #356aac;">Pro Plus
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="color:white; background-color: #356aac;">Price</th>
                        <th style="color:white; background-color: #356aac;">Ask Us</th>
                    </tr>
                    <tr>
                        <td>Book Cover Design</td>
                        <td>3 Option</td>
                    </tr>
                    <tr>
                        <td>Design Revision</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Digital Proof</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Author Book Copies</td>
                        <td>500</td>
                    </tr>
                    <tr>
                        <td>ISBN + Barcode</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Govt Copyrights</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Page Formatting</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Formatting Revision</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Book Cover Type</td>
                        <td>Paperback<br>/Hardcover</td>
                    </tr>
                    <tr>
                        <td>Add'nl Author Copies</td>
                        <td>Print Cost</td>
                    </tr>
                    <tr>
                        <td>Proof Reading</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>E-Book Formatting</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>E-Book Publishing</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Non-Exclusive Contract</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Promotional Materials</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Book Website</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Individual Customer Support</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Press Release</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Online Book Launch</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Social Media Initial Setup</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Marketing Collaterals</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Shipping Charges</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>Author Profit</td>
                        <td>100%</td>
                    </tr>
                    <tr>
                        <td>WHD PH Membership</td>
                        <td class="Included">Included</td>
                    </tr>
                </tbody>
            </table>
        </div>    
        <div class="table-responsive-md table_large" id="table-responsive">
            <table class="table table-hover table-bordered" data-aos="fade-up">
                <thead>
                    <tr>
                        <th style="color:white; background-color: #356aac;">AuthorKits</th>
                        <th style="color:white; background-color: #356aac;">Chipher
                        </th>
                        <th style="color:white; background-color: #356aac;">Standard
                        </th>
                        <th style="color:white; background-color: #356aac;">Specialist
                        </th>
                        <th style="color:white; background-color: #356aac;">Expert
                        </th>
                        <th style="color:white; background-color: #356aac;">Pro Plus
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="color:white; background-color: #356aac;">Price</th>
                        <th style="color:white; background-color: #356aac;" class="tb_content">0</th>
                        <th style="color:white; background-color: #356aac;" class="tb_content">Ask Us</th>
                        <th style="color:white; background-color: #356aac;" class="tb_content">Ask Us</th>
                        <th style="color:white; background-color: #356aac;" class="tb_content">Ask Us</th>
                        <th style="color:white; background-color: #356aac;" class="tb_content">Ask Us</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="Basic editing or copy editing involves an editor going through the manuscript line by line and cleaning up grammatical, phrasing and punctuation errors. *Should the work need a lot of editing, its better to avail the extensive editing service">Book Cover Design<br>
                            </div>
                        </td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">1 Option</td>
                        <td class="tb_content">2 Option</td>
                        <td class="tb_content">3 Option</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="Extensive editing is a collaborative process between the author and the editor. In addition to one round of basic editing, this service includes editorial inputs and work on plot, narrative, thoughtflow, structure characterization, description, etc.">Design Revision<br>
                            </div>
                        </td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">1</td>
                        <td class="tb_content">2</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="A successful book cover needs to make a reader ‘feel’ the manuscript rather than ‘tell’ about it. Let our designers create a cover for your book from pre-set stock images">Digital Proof<br>
                            </div>
                        </td>
                        <td class="tb_content">Add-On</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="An attractive front cover and informative back cover captures the essence of the content within, go a long way in enhancing the saleability of a book. The customized cover designs are developed from the authors brief to achieve their vision of the cover, with creative inputs from our designers to make it work.">Author Book Copies<br>
                            </div>
                        </td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">10</td>
                        <td class="tb_content">50</td>
                        <td class="tb_content">250</td>
                        <td class="tb_content">500</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="For most books we recommend our standard pagination services, where the matter has flowing text with which is essentially called, flow text. The same is pre-standardised to book readers and suit the size and genre of the book.">ISBN + Barcode<br>
                            </div>
                        </td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="For books which need customized page making, if the standard templates dont work out or may have images to be inserted within text.">Govt Copyrights<br>
                            </div>
                        </td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="The final version of the book in PDF format, along with cover pages and inside pages. The book will be a printed version of the same.">Page Formatting<br>
                            </div>
                        </td>
                        <td class="">Add-On</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="The international Standard Book Number (ISBN) is the unique identifier of a published book. An ISBN is assigned to each edition and variation/format (except reprintings) of a book.">Formatting Revision<br>
                            </div>
                        </td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">1</td>
                        <td class="tb_content">2</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="As per most copyright laws globally, if you have created something unique as an art form, you own the copyrights of the same. Once the same is brought to the public domain, it establishes your copyright over the material. While that being the case, one may seek to register her/his copyright with a copyright registering authority as per the laws of your land. The process takes 6-8 months to be completed.">Book Cover Type<br>
                            </div>
                        </td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Paperback</td>
                        <td class="tb_content">Paperback</td>
                        <td class="tb_content">Paperback</td>
                        <td class="tb_content">Paperback<br>/Hardcover</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="The file is converted to all key ebook versions like ePub, mobi, etc to ensure it is enabled for sale on all leading ebook retail platforms.">Add'nl Author Copies<br>
                            </div>
                        </td>
                        <td class="tb_content">Print Cost</td>
                        <td class="tb_content">Print Cost</td>
                        <td class="tb_content">Print Cost</td>
                        <td class="tb_content">Print Cost</td>
                        <td class="tb_content">Print Cost</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="Make your book light, compact and easily transportable by printing it in the paperback format">Proof Reading<br>
                            </div>
                        </td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="The ebook is then listed for sales on various ebook retail platforms with all key details like cover, price, ISBN and other metadata. The listing is partially direct and partially via some distributors for a wider availability.">E-Book Formatting<br>
                            </div>
                        </td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="The paperback books are listed on all key ecommerce retailers. The listing data is checked and validated. The book is now
                    ready to be purchased from these ecommerce sites.">E-Book Publishing<br>
                            </div>
                        </td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="Distribute your book in physical stores across the country.">Non Exclusive Contract<br>
                            </div>
                        </td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="The first copy made by the printer digitally. The same is to ensure the author likes the quality of the paper used both for cover and inside pages.">Promotional Materials<br>
                            </div>
                        </td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="The copies are printed per the package chosen. Mostly printing is done digitally which allows for lower print runs.">Book Website<br>
                            </div>
                        </td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="Where the print run is substantial, we use offset printing. While in cases where the quantity is higher than a few thousands, we use web offset printing technology. This entirely depends on the requirement of the author.">Individual Customer Support<br>
                            </div>
                        </td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="The book is listed on all key Bibliographic<br>
                    databases like Nielsens BookScan &amp; Bowkers to ensure retailers across the globe can easily find access to your work.">Press Release<br>
                            </div>
                        </td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="This enables Google, Amazon, and other book search engines to easily spot your book in search results.">Online Book Launch<br>
                            </div>
                        </td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="“This enables retailers (both paperback and ebooks) to keep a restricted amount of the book available as a sample for readers to browse through.">Social Media Initial Setup<br>
                            </div>
                        </td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="Set up promotional offers for your book on the BSC website to increase your sales. Create discount coupons and share with prospective buyers for a limited time period.">Marketing Collaterals<br>
                            </div>
                        </td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="We will assist the AUTHOR to (1) Send email to his connects, announcing of the release of his book along with the details of the Discount Coupon. (2) Promote Author’s video message on Social Media Handles">Shipping Charges<br>
                            </div>
                        </td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="tb_content">Add-On</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="We will design the marketing collaterals that can be used on Facebook, Twitter, Instagram and Whatsapp.">Author Profit<br>
                            </div>
                        </td>
                        <td class="tb_content">100%</td>
                        <td class="tb_content">100%</td>
                        <td class="tb_content">100%</td>
                        <td class="tb_content">100%</td>
                        <td class="tb_content">100%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" data-toggle="tooltip" data-placement="top" title="Set up your author profile accounts on popular social media platforms like FB, Instagram and Twitter under the guidance of our experts.">WHD PH Membership<br>
                            </div>
                        </td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                        <td class="Included">Included</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="height:2px"></div>
        <!-- <p style="text-align: center;">
            <h5 style="text-align: center;"><i class="fa fa-download" style="color:#356aac;"></i>
                <a href="" style="color: #292929;" onMouseOver="this.style.color='#245993'" onMouseOut="this.style.color='#292929'">Download Details</a></h5>
        </p>
        <p style="text-align: center;">
            Give your book a chance to become the best it can become. Choose from the widest range of professional<br> book publishing and marketing services. Get Published by <strong><a href="">Publishinghouse.com.</a></strong><br><br>
            <button class="btn" style="text-align:center; color:white;background-color: #356aac;">Schedule A Call</button>
        </p> -->

        <!-- address -->
        <div class="container">
            <ul class="address row text-center">
                <li class="col-sm-4"><i class="slide-bottom bi bi-whatsapp"></i>
                    <h4 class="slide-bottom">Whatsapp</h4>
                    <p class="slide-bottom" style="font-weight:300;">=91 735-854-1277</p>
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
    </div>
    <!--address end-->
    <!--site-footer-->
    <footer class="site-footer section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">


                    <!--social-->


                    <!-- <ul class="social">
                        <li><a style="font-size: 15px;padding-top: 10px; " href="https://twitter.com/" target="_blank"><i class="bi bi-twitter"></i></a></li>
                        <li><a style="font-size: 15px;padding-top: 10px;" href="https://www.facebook.com/" target="_blank"><i class="bi bi-facebook"></i></a></li>
                        <li><a style="font-size: 15px;padding-top: 10px;" href="https://instagram.com/" target="_blank"><i class="bi bi-instagram"></i></a></li>
                        <li><a style="font-size: 15px;padding-top: 10px;" href="https://youtube.com/" target="_blank"><i class="bi bi-youtube"></i></a></li>

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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i
  ></a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
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