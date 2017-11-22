<?php session_start(); ?> 

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Sign In | Bravana - Responsive Website Template</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Responsive Website Template">
        <meta name="author" content="The Develovers">
        <!-- CORE CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/elegant-icons.css" rel="stylesheet" type="text/css">
        <!-- THEME CSS -->
        <link href="assets/css/main.css" rel="stylesheet" type="text/css">
        <link href="assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">

        <!-- GOOGLE FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:700,400,400italic,500' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,300,300italic' rel='stylesheet' type='text/css'>
        <!-- FAVICONS -->
        <link rel="apple-touch-icon" sizes="144x144" href="assets/ico/bravana144.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/ico/bravana114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/ico/bravana72.png">
        <link rel="apple-touch-icon" href="assets/ico/bravana57.png">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
    </head>

    <body>
        <!-- WRAPPER -->
        <div id="wrapper">
            <?php include "header.php"; ?>
            <!-- PAGE CONTENT -->
            <div class="page-content">
                <div class="container">
                    <div class="text-center">
                        <!-- FACEBOOK LOGIN -->
                        <button class="btn btn-lg btn-facebook-login"><i class="fa fa-facebook"></i> Login via Facebook</button>
                        <!-- END FACEBOOK LOGIN -->
                        <p class="lead margin-top-30 margin-bottom-30">OR</p>
                    </div>
                    <!-- SIGN IN FORM -->
                    <div class="well well-form-wrapper center-block">
                        <p class="lead">User your username/email</p>
                        <form class="form-horizontal label-left">
                            <div class="form-group">
                                <label for="signin-username" class="col-sm-3  control-label">Username*</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="signin-username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="col-sm-3  control-label">Password*</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="signin-password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9 col-md-offset-3">
                                    <label class="fancy-checkbox">
                                        <input type="checkbox">
                                        <span>Remember me next time</span>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg center-block"><i class="fa fa-sign-in"></i> SIGN IN</button>
                        </form>
                    </div>

                    <?php
                    include "dbconfig.php";
                    if (isset($_POST["username"]) && isset($_POST["password"])) {
                        $username = $_POST["username"];
                        $password = $_POST["password"];
                        $sql = "select * from XXXXXXX where username='" . $username . "' and password = '" . $password . "'";

                        $result = $conn->query($sql);

                        if ($result->num_rows == 1) {
                            $row = $result->fetch_assoc();
                            echo "<p>Welcome " . $row["firstname"] . "!</p>";
                            $_SESSION["userLogin"] = $row;
                            header('location: index.php');
                        } else {
                            echo '<p>Incorrect User/Pass.</p>';
                        }
                    }
                    ?>




                    <!-- END SIGN IN FORM -->
                </div>
            </div>
            <!-- END PAGE CONTENT -->
            <!-- FOOTER -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="assets/img/logo/bravana-default.png" alt="Bravana logo" class="logo-footer">
                            <br>
                            <br>
                            <p>Proactively aggregate B2B initiatives before extensive channels. Monotonectally extend interactive methods of empowerment through excellent applications.</p>
                            <p>No need to wait, <a href="#">send us a quote</a></p>
                            <br>
                            <address class="contact-info">
                                <p><i class="icon icon_pin_alt ico-styled text-primary"></i> 1234 North Main Street New York, NY 22222</p>
                                <p><i class="icon icon_phone ico-styled text-primary"></i> (1800) 765 - 4321</p>
                                <p><i class="icon icon_mail_alt ico-styled text-primary"></i> <a href="mailto:email@yourdomain.com">email@yourdomain.com</a></p>
                            </address>
                        </div>
                        <div class="col-md-4">
                            <h4 class="footer-heading">LATEST NEWS</h4>
                            <ul class="list-unstyled latest-news-footer">
                                <li class="news-item">
                                    <h5 class="title"><a href="#">Dynamically Pontificate Highly Efficient Vortals</a></h5>
                                    <span>Oct 12, 2015</span>
                                </li>
                                <li class="news-item">
                                    <h5 class="title"><a href="#">Globally pontificate cross-platform resources without turnkey e-commerce</a></h5>
                                    <span>Oct 11, 2015</span>
                                </li>
                                <li class="news-item">
                                    <h5 class="title"><a href="#">Credibly administrate one-to-one e-tailers for diverse value.</a></h5>
                                    <span>Oct 10, 2015</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4 class="footer-heading">GET CONNECTED</h4>
                            <ul class="list-inline social-icons social-icons-small">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <div class="margin-bottom-50"></div>
                            <h4 class="footer-heading">NEWSLETTER</h4>
                            <p>Get the latest update from us by subscribing to our newsletter.</p>
                            <form class="newsletter-form" method="post">
                                <div class="input-group input-group-lg">
                                    <input type="email" class="form-control" name="email" placeholder="youremail@domain.com">
                                    <span class="input-group-btn"><button class="btn btn-primary" type="button"><i class="fa fa-spinner fa-spin"></i><span>SUBSCRIBE</span></button>
                                    </span>
                                </div>
                                <div class="alert"></div>
                            </form>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <p class="copyright-text left">&copy;2017 The Develovers. All Rights Reserved.</p>
                        <nav class="right">
                            <ul class="list-inline">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </footer>
            <!-- END FOOTER -->
            <div class="back-to-top">
                <a href="#top"><i class="fa fa-chevron-up"></i></a>
            </div>
        </div>
        <!-- END WRAPPER -->
        <!-- JAVASCRIPT -->
        <script src="assets/js/jquery-2.1.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins/easing/jquery.easing.min.js"></script>
        <script src="assets/js/bravana.js"></script>

    </body>

</html>
