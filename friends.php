<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<!-- Page Title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/team/detail4.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1><?php echo $lang['friend_of_the_center_title'] ?></h1>
            
        </div>
    </div>
</section>
<!-- End Page Title -->
<section class="about-style-two pt_120" style="margin-bottom:150px;">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Text Column with Image Floating Inside -->
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box">
                        <div class="text">
                            <!-- Float the image inside the text content -->
                            <figure class="image" style="float: left; margin-right: 20px; margin-bottom: 20px;">
                                <img src="assets/images/meet1.jpg" alt="" style="width: 600px; height: auto">
                            </figure>
                            <h3><?php echo $lang['friends'] ?></h3>
                            <p style="margin-top:20px;"><?php echo $lang['friends_desc']['p1'] ?></p>
                            <p><?php echo $lang['friends_desc']['p2'] ?></p>
                            <p><?php echo $lang['friends_desc']['p3'] ?></p>
                            <p><?php echo $lang['friends_desc']['p4'] ?></p>
                            <p><?php echo $lang['friends_desc']['p5'] ?></p>
                            <p><?php echo $lang['friends_desc']['p6'] ?></p>

                            <!-- Uncomment to add button -->
                            <!--
                            <div class="btn-box">
                                <a href="friend.php" target="blank" class="theme-btn-one"><?php echo $lang['friends']; ?></a>
                            </div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'footer.php'; ?>

</html>