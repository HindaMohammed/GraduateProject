<?php include 'header.php'; ?>
<!-- .tp-breadcumb-area start -->
<div class="tp-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tp-breadcumb-wrap">
                    <h2>Our Event</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><span>Event</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .tp-breadcumb-area end -->

<!-- start event-section -->
<section class="event-section section-padding">
    <div class="container">
        <div class="section-title text-center">
            <span>NCL Events</span>
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
</section>
<!-- end event-section -->
<!-- .tp-counter-area start -->

<!-- .tp-counter-area end -->
<?php include 'footer.php'; ?>