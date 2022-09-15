<?php
session_start();
include 'db/dbconnect.php';

if(isset($_POST['submit'])) {
    $email = htmlspecialchars( $_POST['email'] );

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $url = "http://localhost/ncl/reset.php?email=$email";
        $message = "<div>
        <p>Dear ".$row['name'].".</p>
        <p>To reset your password please follow this link bellow</p>
        <a href='$url'>Rest Password</a>
        <br>
        <br>
        <p>Best Regards.</p>
        </div>";
        
        if(mail($email, 'Reset Password', $message)) {
            echo "<div style='font-size:18px;font-weight:bold;' class='alert alert-success'> تم ارسال رسالة تغيير كلمة المرور الى بريدك الالكتروني </div>";
        }
        
    }else {
        echo "<div style='font-size:18px;font-weight:bold;' class='alert alert-danger'> البريد الالكتروني غير موجود </div>";

    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <title>No Child Labor</title>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/signup.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body>
    <!-- start preloader -->
    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!-- end preloader -->
    <div class="tp-login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" class="tp-accountWrapper" action="">
                        <div class="tp-accountInfo">
                            <div class="tp-accountInfoHeader">
                                <a href="index.php"><img src="assets/images/logo3.png" style="width:220px ;height:100px" alt=""></a>
                                <a class="tp-accountBtn" href="register.php">
                                    Create Account
                                </a>
                            </div>
                            <div class="image">
                                <img src="assets/images/login.svg" alt="">
                            </div>
                            <div class="back-home">
                                <a class="tp-accountBtn" href="index.php">
                                    Back To Home
                                </a>
                            </div>
                        </div>
                        <div class="tp-accountForm form-style">
                            <div class="fromTitle">
                                <h2>Reset Password</h2>
                                <p>Sign into your pages account</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <label>Email</label>
                                    <input type="text" id="email" name="email" placeholder="Your email here..">
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <button type="submit" name="submit" class="tp-accountBtn">Resend Password</button>
                                </div>
                            </div>
                            <p class="subText">Don't have an account? <a href="register.php">Create free account</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>

</html>