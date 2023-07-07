<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="#">
    <meta name="description"
        content="FIN CONFIG is one of the first of global virtual banking services, which, in fact, was created as a mobile application from an organization that is not a bank, but promotes its services as banking, relying on legal and processing support Partner bank.">
    <title>Finconfig</title>
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="#">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="icon" href="assets/images/fab.png">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Flaticons -->
    <link href="assets/css/font/flaticon.css" rel="stylesheet">
    <link href="assets/font/flaticon.css" rel="stylesheet">
    <!-- Slick Slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Range Slider -->
    <link href="assets/css/ion.rangeSlider.min.css" rel="stylesheet">
    <!-- Datepicker -->
    <link href="assets/css/datepicker.css" rel="stylesheet">
    <!-- magnific popup -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Nice Select -->
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <!-- Animate -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Custom Responsive -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700&display=swap" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- place -->
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Start Main Body -->
    <div class="main-body">
        <!-- Start Header -->
        <?php include 'header.php'; ?>
        <!-- Start Subheader -->
        <div class="sub-header contact p-relative">
            <div class="overlay overlay-bg-black"></div>
            <div class="pattern"></div>
            <div class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="sub-header-content p-relative">
                                <h1 class="text-custom-white lh-default fw-600">Contact Us</h1>
                                <ul class="custom">
                                    <li> <a href="index.html" class="text-custom-white">Home</a>
                                    </li>
                                    <li class="text-custom-white active">Contact Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subheader -->
        <!-- Start Contact -->
        <section class="section-padding bg-gray contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 mb-md-80">
                        <div class="contact-form full-height align-self-center bx-wrapper bg-custom-white">
                            <h4 class="text-custom-black fw-600">Get In Touch</h4>
                            <p class="text-light-white no-margin">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt.</p>
                            <!-- form success -->
                            <div class="col-12 mb-xl-20 form_success"></div>
                            <form id="contact_form" class="form-layout-1 form_validate ajax_submit form_alert"
                                action="#" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="text-left">Full Name</label>
                                            <input type="hidden" value="FinConfig Finance Contact " id="type"
                                                name="type">
                                            <input type="text" id="name" name="name" class="form-control name_validate"
                                                required data-error="Enter the Name">
                                            <div class="help-block with-errors text-danger"></div>
                                      
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="text-left">Phone No</label>
                                            <input type="text" id="phone" name="phone" class="form-control"
                                                minlength="10" maxlength="10" required data-error="Enter the Phone"
                                                onkeypress="return isNumber(event)">
                                            <div class="help-block with-errors text-danger"></div>
                                            <div class="text-danger" id="contact_num_validate"></div>
                                  
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="text-left">Email Address</label>
                                            <input type="email" id="email" name="email" class="form-control" required
                                                data-error="Enter the Email">
                                            <div class="help-block with-errors text-danger"></div>
                                            <span class="text-danger email_error"></span>
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="text-left">Subject</label>
                                            <input type="text" id="subject" name="subject" class="form-control" required
                                                data-error="Enter the Subject">
                                            <div class="help-block with-errors text-danger"></div>
                                        </div>
                                    </div> -->
                                    <div class="col-12 mb-xl-20">
                                        <div class="form-group">
                                            <label class="text-left">Message</label>
                                            <textarea rows="5" id="message" name="message" class="form-control" required
                                                data-error="Enter the Message"></textarea>
                                            <div class="help-block with-errors text-danger"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-xl-20">
                                       
                                        <div class="form-group g-recaptcha"
                                            data-sitekey="6Lcxk7cmAAAAAHb5BUNWbFC8tOtZQKIAaPX4uZWu"></div>
                                        <div class="text-danger captcha_error"></div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn-first btn-submit text-light-blue full-width">Submit</button>
                                        <div class="server_response w-100"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <iframe class="full-width full-height"
                            src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact -->
        <!-- Start Contact Bottom -->
        <section class="section-padding bg-gray contact-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-info bx-wrapper bg-custom-white text-center mb-md-40">
                            <div class="contact-info-wrapper">
                                <div class="icon mb-xl-20"> <i class="flaticon-telephone"></i>
                                </div>
                                <h5 class="text-custom-black fw-600">Phone</h5>
                                <p class="text-light-white">Call Us</p> <a href="#" class="fs-14">+91 73059 61156</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-info bx-wrapper bg-custom-white text-center mb-md-40">
                            <div class="contact-info-wrapper">
                                <div class="icon mb-xl-20"> <i class="flaticon-email"></i>
                                </div>
                                <h5 class="text-custom-black fw-600">Email</h5>
                                <p class="text-light-white">Mail Us</p> <a href="#" class="fs-14">info@finconfig.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-info bx-wrapper bg-custom-white text-center">
                            <div class="contact-info-wrapper">
                                <div class="icon mb-xl-20"> <i class="flaticon-pin"></i>
                                </div>
                                <h5 class="text-custom-black fw-600">Location</h5>
                                <p class="text-light-white">Find Us</p> <a href="#" class="fs-14">View on Google map</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Bottom -->
        <!-- Start Footer -->
        <?php include 'footer.php'; ?>
        <!-- End Footer -->
        <div id="back-top" class="back-top"> <a href="#top"><i class="flaticon-up-arrow"></i></a>
        </div>
    </div>
    <!-- Place all Scripts Here -->
    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/ion.rangeSlider.min.js"></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Datepicker -->
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/datepicker.en.js"></script>
    <!-- Nice Select -->
    <script src="assets/js/jquery.nice-select.js"></script>
    <!-- Steps -->
    <script src="assets/js/jquery-steps.js"></script>
    <!-- Nice Select -->
    <script src="assets/js/particles.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
    <!-- Isotope Gallery -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Wow js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom.js"></script>
    <!-- Contact form -->
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/form_validator.min.js"></script>
    <script src="assets/js/contact_form.js"></script>
    <script src="assets/js/form.js"></script>
    <!-- capctha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- /Place all Scripts Here -->

</body>

</html>