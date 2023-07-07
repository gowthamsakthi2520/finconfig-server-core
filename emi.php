<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="#">
  <meta name="description" content="FIN CONFIG is one of the first of global virtual banking services, which, in fact, was created as a mobile application from an organization that is not a bank, but promotes its services as banking, relying on legal and processing support Partner bank.">
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
  <!-- Start Main Body -->
  <div class="main-body">
    <!-- Start Header -->
    <?php include 'header.php'; ?>
    <!-- Start Subheader -->
    <div class="sub-header emi p-relative">
      <div class="overlay overlay-bg-black"></div>
      <div class="pattern"></div>
      <div class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="sub-header-content p-relative">
                <h1 class="text-custom-white lh-default fw-600">E M I</h1>
                <ul class="custom">
                  <li> <a href="index.html" class="text-custom-white">Home</a>
                  </li>
                  <li class="text-custom-white active">EMI</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Subheader -->
    <!-- Start Contact -->
    <div class="emi-calculater container my-5">
      <div class="">
        <div class="row">
          <div class="col-md-8 bg-gray-card">
            <div id="checking" class="col-md-12">success<span id="set_value"></span></div>
            <div class="col-md-12">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label d-flex justify-content-between emi-amount">
                  <span class="loan-head">Total Amount</span>
                  <span class="badge bg-success">
                    <span>₹</span> <span class="value1">100000</span>
                    <!--<span>L</span>--></span>
                </label>
                <div class="range">

                  <!-- <input type="range" min="10000" max="10000000" value="10000" id="amount" class="w-100" /> -->
                   <input type="text" id="amount" min="10000" max="10000000" class="form-control" value="100000" onkeypress="return isNumber(event)" placeholder="00.00">
                </div>
                <!-- <input
                  type="number"
                  class="form-control"
                  id="amount2"
                  placeholder="00.00"               
                /> -->
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label d-flex justify-content-between emi-amount">
                  <span class="loan-head">Rate of interest (p.a)</span>

                  <span class="badge bg-success ">
                    <span class="value2">5.50</span> <span>%</span></span>
                  </span>

                </label>
                <div class="range">
                  <!-- <input type="range" step="0.1" min="0" max="50" value="5.5" id="interest" class="w-100" /> -->
                  <input type="text" id="interest" class="form-control" min="0" max="50"  value="5.5" placeholder="%" onkeypress="return isNumber(event)">
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label d-flex justify-content-between emi-amount">
                  <span class="loan-head">Loan tenure</span>
                  <span class="badge bg-success">
                    <span class="value3">10</span> <span>Yr</span></span>
                </label>
                <div class="range">
                  <!-- <input type="range" min="1" step="0.1" max="50" value="10" id="years" class="w-100" /> -->
                  <input type="text" id="years" class="form-control" value="10" max="1" max="50" placeholder="Years" onkeypress="return isNumber(event)">
                </div>
              </div>

              <div class="loan mt-5">
                <div class="row">
                  <div class="col-lg-6">
                    <h4 class="loan-heading" style="color: #013878;">Loan Value</h4>
                    <table class="total-table" style="border: none">
                      <tr class="">
                        <td colspan="1" rowspan="1" class="clrSubText" style="
                      padding-left: 10px;
                      padding-top: 10px;
                      padding-bottom: 10px;
                    ">
                          Loan amount
                        </td>
                        <td colspan="1" rowspan="1" class="fw500 right-align loan-value" style="
                      padding-right: 0px;
                      padding-top: 10px;
                      padding-bottom: 10px;
                      width:170px;
                    ">
                          ₹ <span class="loan-amount">100000</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td colspan="1" rowspan="1" class="clrSubText" style="
                      padding-left: 10px;
                      padding-top: 10px;
                      padding-bottom: 10px;
                    ">
                          Annual interest rate
                        </td>
                        <td colspan="1" rowspan="1" class="fw500 right-align loan-value" style="
                      padding-right: 0px;
                      padding-top: 10px;
                      padding-bottom: 10px;
                    ">
                          <span class="pamount">5.50</span><span>%</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td colspan="1" rowspan="1" class="clrSubText" style="
                      padding-left: 10px;
                      padding-top: 10px;
                      padding-bottom: 10px;
                    ">
                          Loan period in years
                        </td>
                        <td colspan="1" rowspan="1" class="fw500 right-align loan-value" style="
                      padding-right: 0px;
                      padding-top: 10px;
                      padding-bottom: 10px;
                    ">
                          <span class="loanyear">10</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td colspan="1" rowspan="1" class="clrSubText" style="
                      padding-left: 10px;
                      padding-top: 10px;
                      padding-bottom: 10px;
                    ">
                          Start date of loan
                        </td>
                        <td colspan="1" rowspan="1" class="fw500 right-align loan-value" style="
                      padding-right: 0px;
                      padding-top: 10px;
                      padding-bottom: 10px;
                    ">
                          <span>
                            <?php echo date('d/m/y'); ?>
                          </span>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="col-lg-6">
                    <h4 class="loan-heading" style="color: #013878;">Loan Summary</h4>
                    <table class="total-table" style="border: none">
                      <tr class="">
                        <td colspan="1" rowspan="1" class="clrSubText" style="
                      padding-left: 10px;
                      padding-top: 10px;
                      padding-bottom: 10px;
                    ">
                          Monthly payment
                        </td>
                        <td colspan="1" rowspan="1" class="fw500 right-align loan-value" style="
                      padding-right: 0px;
                      padding-top: 10px;
                      padding-bottom: 10px;width:170px;
                    ">
                          ₹<span class="emical">1085.26</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td colspan="1" rowspan="1" class="clrSubText" style="
                      padding-left: 10px;
                      padding-top: 10px;
                      padding-bottom: 10px;
                    ">
                          Number of payments
                        </td>
                        <td colspan="1" rowspan="1" class="fw500 right-align loan-value" style="
                      padding-right: 0px;
                      padding-top: 10px;
                      padding-bottom: 10px;
                    ">
                          <span class="total-payment">120</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td colspan="1" rowspan="1" class="clrSubText" style="
                      padding-left: 10px;
                      padding-top: 10px;
                      padding-bottom: 10px;
                    ">
                          Total interest
                        </td>
                        <td colspan="1" rowspan="1" class="fw500 right-align loan-value" style="
                      padding-right: 0px;
                      padding-top: 10px;
                      padding-bottom: 10px;
                    ">
                          ₹<span class="total-interest">30231.53</span>

                        </td>
                      </tr>
                      <tr class="">
                        <td colspan="1" rowspan="1" class="clrSubText" style="
                      padding-left: 10px;
                      padding-top: 10px;
                      padding-bottom: 10px;
                    ">
                          Total cost of loan
                        </td>
                        <td colspan="1" rowspan="1" class="fw500 right-align loan-value" style="
                      padding-right: 0px;
                      padding-top: 10px;
                      padding-bottom: 10px;
                    ">
                          ₹<span class="totalloanamount">130231.53</span>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-4 mt-4">
            <div class="card" style="width: 18rem">
              <img src="assets/images/emi/emi-cal.webp" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title text-center">Invest the way you want</h5>

                <p class="card-text text-center">
                  Join millions of Indians who trust and love Groww
                </p>

                <a href="#" class="btn btn-success w-100">Explore</a>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
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
  <script src="assets/js/form.js"></script>
  <!-- /Place all Scripts Here -->
</body>

</html>