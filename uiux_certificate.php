<!DOCTYPE html>
<html lang="en">

<?php

include "connect.php";
if (isset($_POST['newregistration'])) {
    $mobile = $_POST['mobile'];
    $mobile_num = $_POST['mobile'];
    $mobile_num = trim($mobile_num);

    $querry = "select * from participated where mobile = '$mobile_num'";
    $result = mysqli_query($conn, $querry);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Your Certificate is ready to download')</script>";
        echo "<script>window.open('certificates/" . $mobile_num . ".png','_self')</script>";
        // make this certificate auto downlode

    } else {
        echo "<script>alert('Seems you are not a participant of UI/UX Workshop. Contact CampusOnline @ 7337339376')</script>";
        // echo "<script>window.open('index.html','_self')</script>";
    }
}

?>


<head>
    <meta charset="utf-8">
    <title>Certificate - UIUX </title>
    <link rel="shortcut icon" href="assets/onepage/img/cup.png">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


    <link rel="shortcut icon" href="favicon.ico">

    <!-- Fonts START -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Pathway+Gothic+One|PT+Sans+Narrow:400+700|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
    <!-- Fonts END -->
    <!-- Global styles BEGIN -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Global styles END -->
    <!-- Page level plugin styles BEGIN -->
    <link href="assets/pages/css/animate.css" rel="stylesheet">
    <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="scratch/test.css">



    <!-- Page level plugin styles END -->
    <!-- Theme styles BEGIN -->
    <link href="assets/pages/css/components.css" rel="stylesheet">
    <link href="assets/pages/css/slider.css" rel="stylesheet">
    <link href="assets/onepage/css/style.css" rel="stylesheet">
    <link href="assets/onepage/css/style-responsive.css" rel="stylesheet">
    <link href="assets/onepage/css/themes/red.css" rel="stylesheet" id="style-color">
    <link href="assets/onepage/css/custom.css" rel="stylesheet">
    <script src='https://www.hCaptcha.com/1/api.js' async defer></script>

    <!-- Theme styles END -->


    <style type='text/css'>
        .blink {
            animation: blink-animation 3s steps(5, start) infinite;
            -webkit-animation: blink-animation 3s steps(5, start) infinite;
        }

        @keyframes blink-animation {
            to {
                visibility: hidden;
            }
        }

        @-webkit-keyframes blink-animation {
            to {
                visibility: hidden;
            }
        }
    </style>
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
</head>
<!--DOC: menu-always-on-top class to the body element to set menu on top -->

<body class="menu-always-on-top">


    <!-- BEGIN STYLE CUSTOMIZER -->
<div class="color-panel">
		<div class="color-mode-icons icon-color"><a href='uiux_participated.php' style='color:#FFF'>Participant list</a></div>
        <!-- <div class="color-mode-icons icon-color-close"></div> -->
</div>

    <!-- END BEGIN STYLE CUSTOMIZER -->

    <!-- Header BEGIN -->
    <div class="header header-mobi-ext">
        <div class="container">
            <div class="row">
                <!-- Logo BEGIN -->
                <div class="col-md-2 col-sm-2">
                    <a href="index.php"><img class="site-logo"  src="assets/onepage/img/campusonline_logo.png" alt=""></a>
                </div>
                <!-- Logo END -->
                <!-- Navigation BEGIN -->
                <div class="col-md-10 pull-right">
                    <ul class="header-navigation">
                        <li><a href="index.php"><strong style='color:#C91E3E;'>SRKR CampusOnline</strong></a></li>
                    </ul>
                </div>
                <!-- Navigation END -->
            </div>
            <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        </div>
    </div>
    <!-- Header END -->

    <!-- About block BEGIN -->
    <div class="about-block content content-center" id="about">
        <div class="container">

            <br>
            <h3><strong><b>SRKR CampusOnline UI/UX workshop</b></strong></h3>

            <div class="col-md-4">

                <h3><strong>Download Your Certificate </strong><br></h3>
                <h3 id="error_register"><strong></strong><br></h3>

                <form class="contact-form" id='reg1' method='post' action='#'>
                    <input type="text" name='mobile' id="name" placeholder="Your Mobile Number" class="form-control" autocomplete="off" autofocus>

                    <input type="submit" name="newregistration" class="button" style='background-color:#C91E3E;color:#ffff;font-weight:bold;padding:5px;' value="Download Now" id="regbutton">

                </form>

            </div>

            <img src="assets/onepage/img/purplelane.jpg" alt="">

        </div>
    </div>
    <!-- About block END -->


    <?php include "footer.php"; ?>

    <script>
        jQuery(document).ready(function() {
            Layout.init();
        });
    </script>
    <!-- Global js END -->
    <script src="assets/onepage/scripts/bootbox.min.js" type="text/javascript"></script><!-- pop up -->



</body>

</html>