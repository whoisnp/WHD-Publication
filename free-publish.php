<?php require_once "submit.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>WHD publishing - Free Publish</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap5.min.css" />
    <link href="assets_1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets_1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/form.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link href="footerfiles/css/my.css" rel="stylesheet">
</head>
<style>
    .btn-upload {
        border-radius: 50px;
        transition: 0.5s;
        color: #356aac;
        border: 1px solid #356aac;
        transition: 0.3s;
        box-shadow: 0px 5px 30px rgba(65, 84, 241, 0.4);
    }
    
    .btn-upload:hover {
        background: #356aac;
        color: #fff;
    }
</style>

<body>
    <header id="header" class="header1 fixed-top">
        <div class="
          container-fluid container-xl
          d-flex
          align-items-center
          justify-content-between
        ">
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
              <a class="nav-link scrollto" href="packages.html">Packages</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto active" href="free-publish.php">Quick Publish
              </a>
                    </li>
                    <li><a href="publishing-process.html">Publishing Steps</a></li>
                    <li>
                        <a class="nav-link scrollto" href="books.html">Books</a>
                    </li>
                    <li>
                        <a class="getstarted scrollto" href="contact-us.php">Contact us</a
              >
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>

      <!-- Modal -->
      <div
        class="modal fade"
        id="schedule_modal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-dialog-centered modal-lg"
          role="document"
        >
          <div class="modal-content" style="border: 10px solid #4154f1">
            <div class="modal-header border-0">
              <h5 class="modal-title"></h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <br />
                    <br />
                    <img
                      class=""
                      src="./assets/img/scheduleCall.jpeg"
                      alt="about"
                      width="100%"
                      height="auto"
                    />
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <h4
                      class="modal-title mt-3"
                      id="schedule_title"
                      style="color: #4154f1"
                    >
                      Schedule A Call
                    </h4>
                    <hr
                      class="mb-4"
                      style="
                        height: 3px;
                        color: #4154f1;
                        background-color: #4154f1;
                        opacity: 1;
                      "
                    />
                    <form method="post" enctype="multipart/form-data">
                      <div class="form-group mb-4">
                        <label for="scheduleInputEmail">Email address</label>
                        <input
                          type="email"
                          class="form-control"
                          name="email"
                          id="scheduleInputEmail"
                          aria-describedby="emailHelp"
                          value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>"
                          placeholder="Enter email"
                        />
                      </div>
                      <div class="form-group mb-4">
                        <label for="scheduleInputName">Name</label>
                        <input
                          type="text"
                          class="form-control"
                          name="name"
                          id="scheduleInputName"
                          value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>"
                          placeholder="Name"
                        />
                      </div>
                      <div class="form-group mb-4">
                        <label for="scheduleInputPhone">Phone Number</label>
                        <input
                          type="tel"
                          class="form-control"
                          name="message"
                          id="scheduleInputPhone"
                          value="<?php echo !empty($postData['message'])?$postData['message']:''; ?>"
                          placeholder="Phone Number"
                        />
                      </div>
                      <!-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div> -->
                      <!-- <button type="submit" class="btn btn-primary" > Submit</button> -->
                      <input
                        type="submit"
                        name="submit"
                        class="btn btn-primary"
                        style="background-color: #4154f1; border-color: #4154f1"
                        value="SUBMIT"
                      />
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button
        class="btn"
        style="
          text-align: center;
          color: white;
          background-color: #4154f1;
          position: fixed;
          display: inline-block;
          bottom: 0;
          z-index: 9999;
        "
        data-toggle="modal"
        data-target="#schedule_modal"
      >
        Schedule A Call
      </button>

      <a href="https://wa.me/917358541277">
        <img
          src="assets/img/whatsapp_logo.png"
          id="wa"
          style="
            position: fixed;
            z-index: 9999;
            bottom: 0;
            right: 60px;
            height: 11%;
          "
        />
      </a>
                        <!-- Modal -->
    </header>
    <br>
    <br>
    <section class="getintouch">
        <div class="container modern-form">
            <div class="text-center">
                <h6 style="color: #6e6e6e; font-size: 25px">
                    <strong>PUBLISH YOUR OWN BOOK AT ZERO COST</strong>
                    <hr class="modern-form__hr" />
                </h6>
                <p> If you have your Manuscript and Cover Design ready, you can become a Author.<br> Fill in the details below and we will publish your book at no cost in 15 days.</p>
            </div>
            <div class="modern-form__form-container" style="padding-top: 20px;">
                <!-- <form method="" id="book-form"> -->
                <div class="container">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2">
                                <!-- <div class="dropdown">
                                        <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            Title
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Mr.</a></li>
                                            <li><a class="dropdown-item" href="#">Mrs.</a></li>
                                            <li><a class="dropdown-item" href="#">Miss</a></li>
                                            <li><a class="dropdown-item" href="#">Ms.</a></li>
                                        </ul>
                                        
                                    </div> -->
                                <select class="form-control" id="sel1">
                                  <option value=""disabled selected hidden>Title</option>
                    <option>Mr.</option>
                    <option>Mrs.</option>
                    <option>Miss.</option>
                    <option>Dr.</option>
                  </select>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="name" placeholder="Enter Your Name" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address" />
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" id="number" placeholder="Contact Number" />
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="BookTitle" placeholder="Book Title" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="country" placeholder="Country" />
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-6">
                                <label for="customFile">Upload Your Book Here</label>
                                <input type="file" class="form-control" id="customFile" />
                            </div>
                            <div class="col-md-6">
                                <label for="formFileMultiple">Upload Cover Page Here</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p id="uploading"></p>
                                <progress value="0" max="100" id="progress"></progress>
                            </div>
                            <div class="col-md-6">
                                <p id="uploading2"></p>
                                <progress value="0" max="100" id="progress2"></progress>
                            </div>
                        </div>
                        <br />
                        <br />
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-6 text-center justify-content-start">
                                <button class="btn btn-upload" id="upload0">Upload</button>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6 text-center justify-content-end">
                                <button class="btn btn-upload" id="upload2">Upload</button>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-upload" id="upload">Send</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- </form> -->
            </div>
        </div>
    </section>
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
                        <li><a href="https://plus.google.com/" target="_blank"><i class="bi bi-instagram"></i></a></li>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap5.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <!-- footer -->
    <script src="footerfiles/js/scripts.min.js"></script>
    <script src="footerfiles/js/jquery.ajaxchimp.min.js"></script>
    <script src="footerfiles/js/main.js"></script>

    <!-- bootstrap js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.6.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/8.6.0/firebase-storage.js"></script>

    <script>
        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyAQa9sqI2iUpTXMdnQzDkYtqkv8oOfbTyE",
            authDomain: "whd-publication.firebaseapp.com",
            projectId: "whd-publication",
            storageBucket: "whd-publication.appspot.com",
            messagingSenderId: "72199742776",
            appId: "1:72199742776:web:f9ac0480dbf95e996c4dcd",
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        var files = [];
        var bookfiles = [];
        var bookfilesUrl = [];
        document
            .getElementById("customFile")
            .addEventListener("change", function(e) {
                bookfiles = e.target.files;
                for (let i = 0; i < bookfiles.length; i++) {
                    console.log(bookfiles[i]);
                }
            });
        document
            .getElementById("formFileMultiple")
            .addEventListener("change", function(e) {
                files = e.target.files;
                for (let i = 0; i < files.length; i++) {
                    console.log(files[i]);
                }
            });

        document.getElementById("upload").addEventListener("click", function() {
            //checks if files are selected
            if (files.length != 0 || bookfiles.length != 0) {
                //Loops through all the selected files
                for (let i = 0; i < bookfiles.length; i++) {
                    //create a storage reference
                    var storage = firebase.storage().ref(bookfiles[i].name);

                    //upload file
                    var upload = storage.put(bookfiles[i]);

                    //update progress bar
                    upload.on(
                        "state_changed",
                        function progress(snapshot) {
                            var percentage =
                                (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                            document.getElementById("progress").value = percentage;
                        },

                        function error(error) {
                            alert("error uploading file", error);
                        },

                        function complete() {
                            document.getElementById(
                                "uploading"
                            ).innerHTML += `${bookfiles[i].name} upoaded <br />`;
                            getFileUrl(`${bookfiles[i].name}`);
                        }
                    );
                }
                for (let i = 0; i < files.length; i++) {
                    //create a storage reference
                    var storage = firebase.storage().ref(files[i].name);

                    //upload file
                    var upload = storage.put(files[i]);

                    //update progress bar
                    upload.on(
                        "state_changed",
                        function progress(snapshot) {
                            var percentage =
                                (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                            document.getElementById("progress2").value = percentage;
                        },

                        function error(error) {
                            alert("error uploading file", error);
                        },

                        function complete() {
                            document.getElementById(
                                "uploading2"
                            ).innerHTML += `${files[i].name} upoaded <br />`;
                            getFileUrl(`${files[i].name}`);
                        }
                    );
                }
            } else {
                alert("No file chosen");
            }
            // ajaxFuntion(filesUrl,bookfilesUrl)
        });
        document.getElementById("send").addEventListener("click", function() {
            ajaxFuntion();
        });

        function getFileUrl(filename) {
            //create a storage reference
            var storage = firebase.storage().ref(filename);

            //get file url
            storage
                .getDownloadURL()
                .then(function(url) {
                    console.log(url);
                    bookfilesUrl.push(url);
                })
                .catch(function(error) {
                    console.log("error encountered", error);
                });
        }

        function ajaxFuntion() {
            var prefix = document.getElementById("sel1").value;
            var name = document.getElementById("name").value;
            var email = document.getElementById("exampleInputEmail1").value;
            var cno = document.getElementById("number").value;
            var BookTitle = document.getElementById("BookTitle").value;
            var country = document.getElementById("country").value;
            console.log(prefix, name, email, cno, BookTitle, country);
            $.ajax({
                type: "POST",
                url: "test.php",
                data: {
                    bookUrls: bookfilesUrl,
                    prefix: prefix,
                    name: name,
                    email: email,
                    cno: cno,
                    BookTitle: BookTitle,
                    country: country,
                },
                success: function(response) {
                    // $('#result').html(response);
                    // alert(response)
                },
            });
            alert(bookfilesUrl);
        }
        // ajaxFuntion()
    </script>
</body>

</html>