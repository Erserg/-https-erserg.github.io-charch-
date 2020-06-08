<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Style Css-->
    <link rel="stylesheet" href="style.css">


    <!-- bxSlider Javascript file -->

    <!-- bxSlider CSS file -->
    <link href="jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="jquery.bxslider/jquery.bxslider.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
</head>
<body>
<!-- HEADER START-->
<div class="col-md-12 bg_img">
    <!--<img src="images/sky_bg.jpg">-->
    <div class="container">
        <div class="col-md-4 logo">
            <img src="images/CHURCH.png" class="img-responsive">
        </div>
        <div class="col-md-8 top_menu">
            <div class=" menu_links ">
                <nav class="navbar navbar-default">
                    <div class=" menu_links">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed no_padding" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- links Start-->
                        <div class=".bottom_menu navbar-collapse no_padding" id="bs-example-navbar-collapse-1">
                            <ul class="nav links navbar-nav">

                                <li><a href="index.php" class="active">Home</a></li>
                                <li><a href="about_us.php">About us </a></li>
                                <li><a href="contact_us.php">Contact us</a></li>
                                <li><a href="register.php">Register</a></li>
                                <li><a href="#">Login</a></li>




                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </div>
</div>
<!-- HEADER END-->

<!--CONTACT US CONTENT START-->

<div class="container  contact_us">
    <h1>Login</h1>
</div>

<div class="container">
    <div class="col-md-12 login_box">

            <div class="img_box">
                <img src="images/Drawing-(64).png" class="img-responsive">
            </div>
            <div class="login_form_box">
                <?php

                require_once("./include/fgcontactform.php");
                require_once("./include/captcha-creator.php");

                $formproc = new FGContactForm();
                $captcha = new FGCaptchaCreator('scaptcha');

                $formproc->EnableCaptcha($captcha);

                //1. Add your email address here.
                //You can add more than one receipients.
                $formproc->AddRecipient('tests@html-form-guide.com'); //<<---Put your email address here


                //2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
                // and put it here
                $formproc->SetFormRandomKey('CnRrspl1FyEylUj');


                if(isset($_POST['submitted']))
                {
                    if($formproc->ProcessForm())
                    {
                        $formproc->RedirectToURL("thank-you.php");
                    }
                }
                ?>


                <!-- Form Code Start -->
            <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8' class="form_box">
                    <fieldset >


                <input type='hidden'  name='submitted' id='submitted' value='1'/>
                <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
                <input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

                <!--    <div class='short_explanation'>* required fields</div>-->

                        <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                <div class='col-md-12'>
                    <label for='phone' >User Name:</label><br/>
                    <input type='text' name='phone' id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="15" /><br/>
                    <span id='contactus_phone_errorloc' class='error'></span>
                </div>
                <div class='col-md-12'>
                    <label for='message' >Password:</label><br/>
                    <input type="password" name="psw" class="pass" id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="15" /><br/>
                    <span id='contactus_phone_errorloc' class='error'></span>
                </div>

                <div class='col-md-12' style="margin-top: 20px; ">
                    <input type='submit' name='Submit' value='Submit' />
                </div>

                <input type="checkbox" name="vehicle" value="Bike" class="remember_checbox" >Remember Me



                    </fieldset>
            </form>

            </div>

    </div>
</div>


<!--FOOTER START-->

<div class="col-md-12 footer_div" style="margin-top: 80px;">
    <div class="col-md-8 top_menu">
        <div class=" menu_links ">
            <!--<nav class="navbar navbar-default">
                <div class=" menu_links">
                    <!-- Brand and toggle get grouped for better mobile display -->
            <!--<div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed no_padding" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- links Start-->
            <!--<div class=".bottom_menu navbar-collapse no_padding" id="bs-example-navbar-collapse-1">-->
            <ul class="nav links navbar-nav">

                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">About us </a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">Login</a></li>




            </ul>


        </div>
    </div>

</div>



<!--FOOTER END-->


</body>
</html>