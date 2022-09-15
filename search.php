<?php 
include 'header.php'; 
$keyword = $_GET['keyword'];
?>
<!-- .tp-breadcumb-area start -->
<div class="tp-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tp-breadcumb-wrap">
                    <h2>Search about : <span><?= $keyword ?></span></h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><span>Search</span></li>
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
            </div>
        </div>
        <div class="row">
            <?php
            $sql = "SELECT * FROM causes WHERE title like '%$keyword%' ORDER BY id DESC";
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
                            <li><a href="#">GOAL : $<?= $row['goal'] ?></a></li>
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

<section class="event-section section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h3>Events</h3>
        </div>
        <div class="row">
            <div class="col col-xs-12">
                <div class="event-grids clearfix">
                    <?php
                    $sql = "SELECT * FROM events WHERE title like '%$keyword%' ORDER BY id DESC";
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
</section>
<!-- case-area-end --> 
<!-- .tp-counter-area start -->
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