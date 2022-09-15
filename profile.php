<?php 
include 'db/dbconnect.php';
include("header.php"); 
?>

<?php

if($_SESSION['id']) {
  $id = $_SESSION['id'];
  $sql = "SELECT * FROM users WHERE id = $id";
  $result = mysqli_query($con, $sql);
  $data = mysqli_fetch_assoc($result);
}

?>
        <!-- end of header -->
        <!-- .tp-breadcumb-area start -->
        <div class="tp-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-breadcumb-wrap">
                            <h2>Profile</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><span>Profile</span></li>
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
                    
                    <div class="col col-md-12">
                        <div class="contact-form-area">
                            <?php 
                            if(isset($_POST['edit'])) {
                              $name     = $_POST['name'];
                              $email    = $_POST['email'];
                              $password = empty($_POST['password']) ? $data['password'] : md5($_POST['password']);
                            
                              
                              $sql = "UPDATE users SET name = '$name', email = '$email',	password = '$password' WHERE id = $id";
                              
                              if(mysqli_query($con, $sql)) {
                                echo "<div class='alert alert-success'>Profile updated successfully</div>";
                              }
                            
                              $id = $_SESSION['id'];
                              $sql = "SELECT * FROM users WHERE id = $id";
                              $result = mysqli_query($con, $sql);
                              $data = mysqli_fetch_assoc($result);
                            }

                            if(isset($msg)): ?>
                            <div class="alert alert-<?= $type ?>">
                                <?= $msg ?>
                            </div>
                            <?php endif; ?>
                            <div class="section-title-s3 section-title-s5">
                                <h2>Update your profile</h2>
                            </div>
                            <div class="contact-form">
                            <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="mb-3">
          <lable>Name</lable>
          <input type="text" name="name" class="form-control" value="<?= $data['name'] ?>" />
        </div>

        <div class="mb-3">
          <lable>Email</lable>
          <input type="email" name="email" class="form-control" value="<?= $data['email'] ?>" />
        </div>

        <div class="mb-3">
          <lable>Password</lable>
          <input type="password" name="password" class="form-control" />
        </div>
        <p style="clear: both"></p>

        <div><button class="theme-btn" name="edit">Update</button></div>
      </form>

                                
                            </div>
                        </div>
                    </div>                    
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-contact-section -->
        <!-- news-letter-section start-->
        <section class="news-letter-section s2">
            <div class="container">
                <div class="news-letter-wrap">
                    <div class="row">
                        <div class="col col-lg-10 col-lg-offset-1 col-md-8 col-md-offset-2">
                            <div class="newsletter">
                                <h3>Subscribe our Newsletter</h3>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                                <div class="newsletter-form">
                                    <form>
                                        <div>
                                            <input type="text" placeholder="Enter Your Email" class="form-control">
                                            <button class="bigCursor" type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        
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