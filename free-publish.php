<?php if(!empty($statusMsg)){ ?>
<p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
<?php } ?>
<?php require_once "submit.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>WHD upload form</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/form.css">
</head>

<body>
    <header id="header" class="header1 fixed-top">
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
    <section class="getintouch">
        <div class="container modern-form">
            <div class="text-center">
                <h6 style="color: #212529;font-size: 25px;"><strong>AUTHOR REGISTRATION FORM</strong><br></h6>
            </div>
            <hr class="modern-form__hr">
            <div class="modern-form__form-container">
                <form method="post" id="book-form" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col col-contact">
                            <div class="form-group modern-form__form-group--padding-r"><input type="text" name="name"
                                    class="form-control"
                                    value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>"
                                    placeholder="Name" required="">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-contact">
                            <div class="form-group modern-form__form-group--padding-l"><input type="email" name="email"
                                    class="form-control"
                                    value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>"
                                    placeholder="Email address" required="">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="form-row">
                        <div class="col col-contact">
                            <div class="form-group modern-form__form-group--padding-r"><input type="text" name="message"
                                    class="form-control"
                                    value="<?php echo !empty($postData['message'])?$postData['message']:''; ?>"
                                    placeholder="Contact Number" required="">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-contact">
                            <div class="form-group modern-form__form-group--padding-l"><input type="text" name="subject"
                                    class="form-control"
                                    value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>"
                                    placeholder="Book Title" required="">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <br />
                    <div class="form-row">
                        <div class="col col-contact">
                            <div class="form-group modern-form__form-group--padding-r"><label>Upload Your Book
                                    Here</label>
                                <!-- <input id="fullbook" class="form-control-file" type="file" name="attachment"> -->
                                <input type="file" name="attach[]" multiple />
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col col-contact">
                            <div class="form-group modern-form__form-group--padding-l"><label>Upload Cover Page
                                    Here</label><input id="bookfront" class="form-control-file" type="file" name="frontattachment">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="form-row">
                        <div class="col text-center">
                            <!-- <button class="btn btn-primary submit-now" type="submit">UPLOAD AND
                                PUBLISH</button> -->
                            <input type="submit" name="submit" class="btn btn-primary submit-now" value="SUBMIT">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap5.min.js"></script>

</body>

</html>