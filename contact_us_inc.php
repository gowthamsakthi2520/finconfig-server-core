<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply Now</button> -->
    <!-- form start -->
    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><span style="color: #fff;">Contact Us</span>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-12 mb-xl-20 form_success"></div>
                                <form id="contact_us_form" action="javascript:alert(grecaptcha.getResponse(clientId1));" enctype="multipart/form-data">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Full Name</label>
                                                <input type="hidden" id="contact_us_form_type" name="ctype" value="">
                                                <input type="text" id="cname" name="name" class="form-control" required
                                                    data-error="Enter the Name">
                                                <div class="help-block with-errors text-danger"></div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cphone" class="text-left">Phone No</label>
                                                <input type="text" id="cphone" name="phone" class="form-control"
                                                    minlength="10" maxlength="10" required data-error="Enter the Phone"
                                                    onkeypress="return isNumber(event)">
                                                <div class="help-block with-errors text-danger"></div>
                                                <div class="text-danger" id="validate_number"></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="text-left">Email Address</label>
                                                <input type="email" id="cemail" name="email" class="form-control"
                                                    required data-error="Enter the Email">
                                                <div class="help-block with-errors text-danger"></div>
                                                <span class="text-danger email_error_inc"></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="text-left">Message</label>
                                                <textarea rows="5" id="cmessage" name="message" class="form-control"
                                                    required data-error="Enter the Message"></textarea>
                                                <div class="help-block with-errors text-danger"></div>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div id="example2"></div>
                                          <!--  g-recaptcha
                                            <div class="form-group g-recaptcha"
                                                data-sitekey="6LezOb0mAAAAAKHOhfXz3ePv11_yOBrNHYE55S99"></div>-->
                                            <div class="text-danger captcha_error"></div>
                                        </div> 

                                        <!-- <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">Submit</button>

                                        </div> -->
                                    </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary modal-btn" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
        <!-- form end -->


</body>

</html>