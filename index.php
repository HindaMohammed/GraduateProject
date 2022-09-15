<?php include("header.php"); ?>

        <!-- start of hero -->
        <section class="hero hero-style-1">
            <div class="hero-slider">
                <?php
                $sql = "SELECT * FROM causes ORDER BY id DESC LIMIT 2";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($result)):
                ?>
               <div class="slide">
                    <div class="container">
                        <img src="admin/images/header-bg.jpg" alt class="slider-bg">
                        <div class="row">
                            <div class="col col-md-6 slide-caption">
                                <div class="slide-title">
                                    <h2>NO CHILD LABOR</h2>
                                </div>
                            <div class="btns">
                                    <a href="donate.php" class="theme-btn">Donate Now</a>  
                                   
                                </div>
                            </div> 
                            <!-- <div class="col-md-6">
                                <img src="admin/images/" alt>
                            </div> -->
                        </div>
                    </div>
                </div> 
                <?php endwhile; ?>
            </div>
        </section>
        <!-- end of hero slider -->
        <!--features start -->
      <!--  <div class="features-area ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="features-item-2">
                            <div class="features-icon">
                                <i class="fi flaticon-salad"></i>
                            </div>
                            <div class="features-content">
                                <p>Health For</p>
                                <h3>Healthy Food</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="features-item-2">
                            <div class="features-icon">
                                <i class="fi flaticon-school"></i>
                            </div>
                            <div class="features-content">
                                <p>Get Free</p>
                                <h3>Pure Education</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="features-item-2">
                            <div class="features-icon">
                                <i class="fi flaticon-medicine"></i>
                            </div>
                            <div class="features-content">
                                <p>Get Free</p>
                                <h3>Medical Facilities</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!--features-features end -->
        <!-- about-area start-->
        <div class="about-style-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-12">
                        <!-- <div class="about-img"> -->
                            <div class="about-img">
                                <ul>
                                <li>
                                    <video width="92%" height="90%" controls style="margin-top:20px ;margin-left:20px">
                                      <source src="movie.mp4" type="video/mp4">
                                      <source src="admin/images/ncl.mp4" type="video/ogg"></video>
                                    </li>
                                </ul>
                            </div>
                        <!-- </div> -->
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="about-content">
                            <div class="section-title">
                                <h2>About Us</h2>
                            </div>
                            <p>We believe in changing the economic situation in Palestine by providing a suitable learning environment 
                                for children so that every child can take his right to education through donations made through this system.</p> 
                            <p> Our ultimate goal is to create a better world where education and
                                 freedom reign for children and to realize their dreams, thus eliminating child labor.</p>


   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-area end-->
        <!-- case-area-start -->
        <div class="case-area section-padding">
            <div class="container">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title text-center">
                        <div class="thumb-text">
                            <span>cases</span>
                        </div>
                        <h3>Latest cases of No Child Labor</h3>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $sql = "SELECT * FROM causes ORDER BY id DESC LIMIT 4";
                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_assoc($result)):
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cause-item">
                            <div class="cause-top">
                                <div class="cause-img">
                                    <img src="admin/images/<?= $row['image'] ?>" alt="">
                                    <div class="case-btn">
                                        <a href="donate.php" class="theme-btn">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="cause-text">
                                <ul>
                                    <li><a href="#">GOAL :  <?= $row['goal'] ?> NCL</a></li>
                                    <!-- <li><a href="#">RISED : $768</a></li> -->
                                </ul>
                                <h3><a href="donate.php"><?= $row['title'] ?></a></h3>
                                <!-- <p>It is a long established fact that a reader will be distracted.</p> -->
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <!-- case-area-end -->
        <!-- .tp-counter-area start -->
        <div class="tp-counter-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- <div class="tp-counter-grids">
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="6200">00</span>+</h2>
                                </div>
                                <p>Donation</p>
                            </div>
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="80">00</span>+</h2>
                                </div>
                                <p>Fund Raised</p>
                            </div>
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="245">00</span>+</h2>
                                </div>
                                <p>teams</p>
                            </div>
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="605">00</span>+</h2>
                                </div>
                                <p>Projects</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- .tp-counter-area end -->
        <!-- start team-section -->
        <section class="team-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3">
                        <div class="section-title text-center">
                            <h2>NCL Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="team-grids clearfix">
                            <?php
                            $sql = "SELECT * FROM teams ORDER BY id DESC";
                            $result = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_assoc($result)):
                            ?>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="admin/images/<?= $row['image'] ?>" style="width:1100px ; height:400px" alt>
                                </div>
                                <div class="details">
                                    <h3><?= $row['name'] ?></h3>
                                    <p><?= $row['position'] ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end team-section -->

        <!-- start event-section -->
        <!-- <section class="event-section section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span>Our Events</span>
                    <h2>Upcoming Events</h2>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="event-grids clearfix">
                        <?php
                        $sql = "SELECT * FROM events ORDER BY id DESC";
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_assoc($result)):
                        ?>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="admin/images/<?= $row['image'] ?>" alt>
                            </div>
                            <div class="details">
                                <ul class="entry-meta">
                                    <li><i class="ti-calendar"></i> <?= $row['date'] ?></li>
                                    <li><i class="ti-folder"></i> <?= $row['category'] ?></li>
                                </ul>
                                <h3><a href="event-single.php?id=<?= $row['id'] ?>"><?= $row['title'] ?></a></h3>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        <!-- </section> --> 
        <!-- end event-section -->
        <!-- tp-cta-area start -->
        <!-- <div class="tp-cta-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-cta-text">
                            <h2>You Can Help The Poor With Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse </p>
                            <div class="btns">
                                <a href="donate.php" class="theme-btn">Donate Now</a>
                                <a href="team.php" class="theme-btn-s2">Join Us Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- tp-cta-area end -->
        <!-- start blog-section -->
        <!-- <section class="blog-section section-padding">
            <div class="container">
                <div class="col-l2">
                    <div class="section-title text-center">
                        <span>From Our Blog</span>
                        <h2>Latest News</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="blog-grids clearfix">
                            <?php
                            $sql = "SELECT * FROM news ORDER BY id DESC";
                            $result = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_assoc($result)):
                            ?>
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="admin/images/<?= $row['image'] ?>" alt="">
                                </div>
                                <div class="details">
                                    <h3><a href="blog-single.php?id=<?= $row['id'] ?>"><?= $row['title'] ?></a></h3>
                                    <p><?= substr($row['description'], 0, 20) ?></p>
                                    
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        <!-- </section>  -->
        <!-- end blog-section -->
<?php include 'footer.php' ?>