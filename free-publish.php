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
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap5.min.css">
    <link rel="stylesheet" href="assets/css/form.css">
</head>

<body>
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