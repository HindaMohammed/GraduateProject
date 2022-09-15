<?php 
include 'db/dbconnect.php';
include("header.php"); 

if( isset($_POST['submit']) ) {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $note    = htmlspecialchars($_POST['note']);

    $sql = "INSERT INTO contact (name, email, phone, address, description) VALUES ('$name', '$email', '$phone', '$address', '$note')";

    if(mysqli_query($con, $sql)) {
        $msg = 'Your message has been sent successfully';
        $type = 'success';
    }else {
        $msg = 'There is an error';
        $type = 'danger';
    }
}
?>
        <!-- end of header -->
        <!-- .tp-breadcumb-area start -->
        <div class="tp-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-breadcumb-wrap">
                            <h2>Contact Us</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><span>Contact</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .tp-breadcumb-area end -->
        <!-- start contact-pg-contact-section -->
        <section class="contact-pg-contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="section-title-s3 section-title-s5">
                            <h2>NCL Contacts</h2>
                        </div>
                        <div class="contact-details">
                            <p>NCL is a university graduation project from a small team that seeks to rise to quality and dedication to its work. </p>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <h5>Our Location</h5>
                                    <p>8 Street, GAZA City, palestine
</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <h5>Phone</h5>
                                    <p>+970592803632</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <h5>Email</h5>
                                    <p>NoChildLabor2022@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="contact-form-area">
                            <?php if(isset($msg)): ?>
                            <div class="alert alert-<?= $type ?>">
                                <?= $msg ?>
                            </div>
                            <?php endif; ?>
                            <div class="section-title-s3 section-title-s5">
                                <h2>Quick Contact Form</h2>
                            </div>
                            <div class="contact-form">
                                <form method="post" class="contact-validation-active" id="contact-form" action="">
                                    <div>
                                        <input type="text" class="form-control"  name="name" id="name" placeholder="Name*">
                                    </div>
                                    <div>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
                                    </div>
                                    <div>
                                        <input type="text" class="form-control"  name="address" id="address" placeholder="Address*">
                                    </div>
                                    <div class="comment-area">
                                        <textarea  name="note"  id="note" placeholder="Case description*"></textarea>
                                    </div>
                                    <div class="submit-area">
                                        <button type="submit" name="submit" class="theme-btn">Submit Now</button>
                                        <div id="loader">
                                            <i class="ti-reload"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix error-handling-messages">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671" allowfullscreen></iframe>
                        </div>                        
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-contact-section -->
        <!-- news-letter-section start-->

        <!-- news-letter-section end-->
        <!-- <div class="tp-ne-footer"> -->
            <!-- start tp-site-footer -->
            <!-- <footer class="tp-site-footer">
                <div class="tp-upper-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-3 col-md-3 col-sm-6">
                                <div class="widget about-widget">
                                    <div class="logo widget-title">
                                        <img src="assets/images/logo.png" alt="blog">
                                    </div>
                                    <p>Build and Earn with your online store with lots of cool and exclusive tp-features </p>
                                    <ul>
                                        <li>
                                            <div class="parallax-wrap">
                                                <div class="parallax-element">
                                                    <a href="#">
                                                        <i class="ti-facebook"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="parallax-wrap">
                                                <div class="parallax-element">
                                                    <a href="#">
                                                        <i class="ti-twitter-alt"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="parallax-wrap">
                                                <div class="parallax-element">
                                                    <a href="#">
                                                        <i class="ti-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="parallax-wrap">
                                                <div class="parallax-element">
                                                    <a href="#">
                                                        <i class="ti-google"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col col-lg-2 col-md-3 col-sm-6">
                                <div class="widget link-widget">
                                    <div class="widget-title">
                                        <h3>Useful Links</h3>
                                    </div>
                                    <ul>
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="causes.php">Our Causes</a></li>
                                        <li><a href="donate.php">Donate</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                        <li><a href="event.php">Our Event</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-lg-offset-1 col-md-3 col-sm-6">
                                <div class="widget market-widget tp-service-link-widget">
                                    <div class="widget-title">
                                        <h3>Contact </h3>
                                    </div>
                                    <p>online store with lots of cool and exclusive tp-features</p>
                                    <div class="contact-ft">
                                        <ul>
                                            <li><i class="fi flaticon-pin"></i>28 Street, New York City, USA</li>
                                            <li><i class="fi flaticon-call"></i>+000123456789</li>
                                            <li><i class="fi flaticon-envelope"></i>Sadakat@gmail.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-6">
                                <div class="widget instagram">
                                    <div class="widget-title">
                                         <h3>Instagram</h3>
                                    </div>
                                    <ul class="d-flex">
                                        <li><a href="#"><img src="assets/images/instragram/1.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/instragram/2.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/instragram/3.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/instragram/4.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/instragram/5.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/instragram/6.jpg" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> end container
                </div>
                <div class="tp-lower-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <p class="copyright">&copy; 2021 Sadakat. All rights reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer> -->
            <!-- end tp-site-footer -->
        </div>
    </div>
    <?php include 'footer.php' ?>
    <!-- end of page-wrapper -->
    <div id="magic-cursor">
        <div id="ball">
            <div id="ball-drag-x"></div>
            <div id="ball-drag-y"></div>
            <div id="ball-loader"></div>
        </div>
    </div>
    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>

</html>