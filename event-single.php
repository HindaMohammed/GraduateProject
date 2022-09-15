<?php 
include 'header.php';
$id = $_GET['id'];
$sql = "SELECT * FROM events WHERE id = $id";
$res = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($res);
?>
<!-- .tp-breadcumb-area start -->
<div class="tp-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tp-breadcumb-wrap">
                    <h2><?= $data['title'] ?></h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><span>Event</span></li>
                        <li><span><?= $data['title'] ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .tp-breadcumb-area end -->
<!-- tp-event-details-area start -->
<div class="tp-case-details-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-10 col-md-offset-1">
                <div class="tp-case-details-wrap">
                    <div class="tp-case-details-text">
                        <div id="Description">
                            <div class="tp-case-details-img text-center">
                                <img src="admin/images/<?= $data['image'] ?>" alt="">
                            </div>
                            <div class="tp-case-content">
                                <div class="tp-case-text-top">
                                    <h2><?= $data['title'] ?></h2>
                                    <div class="case-b-text">
                                        <?= $data['description'] ?>
                                    </div>
                                    <!-- <div class="case-bb-text">
                                        <h3>Event Loacation</h3>
                                        <div id="Map" class="tab-pane">
                                            <div class="contact-map">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="submit-area sub-btn">
                                        <a href="donate.php" class="theme-btn submit-btn">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tp-event-details-area end -->
<?php include 'footer.php' ?>