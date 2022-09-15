<?php
session_start();
include('db/dbconnect.php');

if(isset($_POST['submit'])) {
    // echo "isset submit";

    $email = htmlspecialchars( $_POST['email'] );
    $pass = htmlspecialchars( $_POST['pass'] );
    $pass = md5($pass);
    $sql = "SELECT * FROM users WHERE email = '$email' and password = '$pass'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        $url = 'https://mohamednaji.com/ncl/check.php?email='.$email;
        $msg = '
        Click here to confirm login <br> <a href="'.$url.'">Login</a>
        ';
        if(mail($email, 'Login', $msg)) {
            echo "<div class='alert alert-success'>تم ارسال رسالة تاكيد الدخول الي بريدك الالكتروني</div>";
        }
        // if($row['type'] == 'user') {
        //     $_SESSION['user_login'] = $row['name'];
        //     header('location: index.php');
        // }else {
        //     $_SESSION['admin_login'] = $row['name'];
        //     header('location: admin/index.php');
        // }
        
    }else {
        echo "<div style='font-size:18px;font-weight:bold;' class='alert alert-danger'>خطأ في البريد الالكتروني او كلمة المرور</div>";

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
                    <form class="tp-accountWrapper" method="POST">
                        <div class="tp-accountInfo">
                            <div class="tp-accountInfoHeader">
                                <a href="index.php"><img src="assets/images/logo3.png" style="width:220px ;height:100px" alt=""></a>
                                <a class="tp-accountBtn">
                                    <span class="">Log in</span>
                                </a>
                            </div>
                            <div class="image">
                                <img src="assets/images/login.svg" alt="">
                            </div>
                            <div class="back-home">
                                <a class="tp-accountBtn" href="index.php">
                                    <span class="">Back To Home</span>
                                </a>
                            </div>
                        </div>
                        <div class="tp-accountForm form-style">
                            <div class="fromTitle">
                                <h2>Login</h2>
                                <p>Sign into your pages account</p>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <label>Email</label>
                                    <input type="text" id="email" name="email" placeholder="demo@gmail.com">
                                </div>
                      
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label >Password</label>
                                        <input class="pwd6" type="password" placeholder=""  name="pass">
                                    </div>
                                    <span class="input-group-btn">
                                        <button class="btn btn-default reveal6" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
                                    </span>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                  <div  class="check-box-wrap "> 
                                      <div class="forget-btn " >
                                            <a href="forgot.php">Forgot Password?</a>

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                <button type="submit" name="submit" class="tp-accountBtn">Login</button> 
                                </div>
                            </div>
                            <h4 class="or"><span>    </span></h4>
                            <!-- <ul class="tp-socialLoginBtn">
                                <li><button class="facebook" tabindex="0" type="button"><span><i class="fa fa-facebook"></i></span></button></li>
                                <li><button class="twitter" tabindex="0" type="button"><span><i class="fa fa-twitter"></i></span></button></li>
                                <li><button class="linkedin" tabindex="0" type="button"><span><i class="fa fa-linkedin"></i></span></button></li>
                            </ul> -->
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