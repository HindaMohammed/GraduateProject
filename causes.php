<?php include 'header.php'; ?>
<!-- .tp-breadcumb-area start -->
<div class="tp-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tp-breadcumb-wrap">
                    <h2>NCL cases</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><span>cases</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .tp-breadcumb-area end -->
<!-- case-area-start -->
<div class="case-area section-padding">
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <div class="section-title text-center">
                <div class="thumb-text">
                    <span>cases</span>
                </div>
                <h2>Latest cases of No Child Labor.</h2>
            </div>
        </div>
        <div class="row">
            <?php
            $sql = "SELECT * FROM causes ORDER BY id DESC";
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
                            <li><a href="#">GOAL : <?= $row['goal'] ?> NCL</a></li>
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
<!-- <div class="tp-counter-area v2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-counter-grids">
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
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- .tp-counter-area end -->
<!-- news-letter-section start-->
<!-- <section class="news-letter-section s2">
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
    </div>
</section> -->
<!-- news-letter-section end-->
<?php include 'footer.php'; ?>