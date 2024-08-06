<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<!-- Page Title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/video-gallery.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>González Channel</h1>
        </div>
    </div>
</section>
<!-- End Page Title -->
<section class="about-style-three sec-pad">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-6.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_four">
                    <div class="content-box p_relative mr_30">
                        <div class="sec-title mb_30">
                            <h2><?php echo $lang['youtube_title'] ?></h2>
                        </div>
                        <div class="text p_relative mb_35">
                            <p><?php echo $lang['youtube_description'] ?></p>
                            <p><?php echo $lang['youtube_description2'] ?></p>
                        </div>
                        <ul class="list-style-one clearfix mb_40">
                            <li><?php echo $lang['Exclusive_Content'] ?></li>
                        </ul>
                        <div class="btn-box">
                            <a href="https://www.youtube.com/@drjustogonzalez" target="blank"
                                class="theme-btn-one"><i class="fab fa-youtube"></i>  González Youtube Channel</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box ml_40">
                    <div class="shape">
                        <div class="shape-1"></div>
                        <div class="shape-2" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                    </div>
                    <figure class="image"><img src="assets/images/channel.jpg" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video Gallery Section -->
<section class="video-gallery" style="margin-top:100px; margin-bottom:100px;">
    <div class="container">
        <div class="row">
            <!-- Video Item 1 -->
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OYbVTZAoD6g"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">The story behind the legacy</h4>
                <p>Description of the video.</p>
            </div>
            <!-- Video Item 2 -->
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TLTn1gclVEw"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Get to know González Resource Center</h4>
                <p>Description of Video 2.</p>
            </div>
        </div>
    </div>
</section>


<!-- End Video Gallery Section -->


<?php include 'footer.php'; ?>

</html>