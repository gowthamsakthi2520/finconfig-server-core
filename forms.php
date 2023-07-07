<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <div class="col-12 mb-xl-20 form_success"></div>
    <form id="contact_form" class="form-style-2 form-style-3" action="javascript:grecaptcha.reset(clientId2);">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-preappend"><i class="fas fa-user"></i></span>
                        <input type="hidden" id="type" value="">
                        <input type="text" id="name" name="name" class="form-control name_validate" required
                            data-error="Enter the Name" placeholder="Full Name" />
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-preappend"><i class="fas fa-envelope"></i></span>
                        <input type="email" id="email" name="email" class="form-control" required
                            data-error="Enter the Email" placeholder="Email Address" />
                        <div class="help-block with-errors text-danger"></div>
                        <span class="text-danger email_error"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-preappend"><i class="fas fa-phone-alt"></i></span>
                        <input type="text" id="phone" name="phone" class="form-control" minlength="10" maxlength="10"
                            required data-error="Enter the Number" placeholder="Phone Number"
                            onkeypress="return isNumber(event)" />
                        <div class="help-block with-errors text-danger"></div>
                        <div class="text-danger" id="contact_num_validate"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div id="example1"></div>
                <div class="form-group">
                    <!-- <div class="input-group">
                        g-recaptcha
                        <div class="form-group g-recaptcha" data-sitekey="6Lcxk7cmAAAAAHb5BUNWbFC8tOtZQKIAaPX4uZWu">
                        </div>
                    </div> -->
                    <div class="text-danger captcha_error"></div>
                </div>
            </div>



            <div class="col-md-12">
                <button type="submit" class="btn-first btn-submit full-width">
                    Book Apply Today
                </button>
            </div>
        </div>
    </form>




</body>

</html>