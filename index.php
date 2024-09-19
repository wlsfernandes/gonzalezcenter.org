<?php
include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/team/book_background.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1><?php echo $lang['website_name']; ?></h1>
        </div>
    </div>
</section>
<!--
<section class="about-style-two pt_120">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box mr_40">
                    <div class="image-shape" style="background-image: url(assets/images/shape/shape-1.png);">
                    </div>
                    <figure class="image"><img src="assets/images/team/justoandCatherineGonzalez3.jpg" alt=""></figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box ml_40">

                        <div class="text mb_40">
                            <p><?php echo $lang['database_desc1'] ?></p>
                            
                            <p><?php echo $lang['database_desc3'] ?></br>
                                <?php echo $lang['database_desc4'] ?></br>
                                <?php echo $lang['database_desc5'] ?>
                            </p>
                            <p> <?php echo $lang['database_desc6'] ?></p>
                            <div class="btn-box">
                                <a href="https://archive.gonzalezcenter.org"  target="blank" class="theme-btn-one"><?php echo $lang['getaccessdatabase']; ?></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<section class="about-style-two pt_120" style="background-color:#f7f5f1">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="content_block_two">

                    <div class="content-box ml_40">
                        <div class="sec-title mb_55">
                            <h2><?php echo $lang['welcome_description']['p1'] ?></h2>
                        </div>
                        <div class="text mb_40">
                            <p><?php echo $lang['welcome_description']['p2'] ?></p>
                            <p><?php echo $lang['welcome_description']['p3'] ?></p>
                            <p><?php echo $lang['welcome_description']['p4'] ?></p>
                            <p><?php echo $lang['welcome_description']['p5'] ?></p>

                            <!--  <div class="btn-box">
                                <a href="friend.php" target="blank"
                                    class="theme-btn-one"><?php echo $lang['friends']; ?></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="image-box mr_40">
                    <div class="image-shape" style="background-image: url(assets/images/shape/shape-1.png);">
                    </div>
                    <figure class="image" style="width:70%"><img src="assets/images/gallery/g12.jpg" alt=""></figure>
                </div>

            </div>
        </div>
    </div>
</section><!--
<section class="cta-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="inner-box">
            <h2><?php echo $lang['getaccessdatabase'] ?></h2>
            <div class="btn-box">
                <a href="https://archive.gonzalezcenter.org" target="blank"
                    class="theme-btn-one"><span><?php echo $lang['clickhere'] ?></span></a>
            </div>
        </div>
    </div>
</section> -->
<!-- about-style-three -->
<section class="about-style-three sec-pad">
    <div class="pattern-layer"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_four">
                    <div class="content-box p_relative mr_30">
                        <div class="text mb_40">
                            <p><?php echo $lang['welcome_description']['p6'] ?></p>
                            <p style="margin-top:15px;"><?php echo $lang['welcome_description']['p7'] ?></p>
                            <div class="btn-box" style="margin-top:25px;">
                                <a href="https://gonzalezcenter.s3.us-east-2.amazonaws.com/l_inic_01305.pdf" target="blank"
                                    class="theme-btn-one">
                                    <?php echo $lang['download_here'] ?></a>
                            </div>
                            <p style="margin-top:25px;">
                                <?php echo sprintf($lang['welcome_description']['p8'], $linkCollection); ?></p>
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
                    <figure class="image"><img src="assets/images/resource/ebook.jpg" alt="" style="width:80%"></figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FRIENDS about-style-two -->
<section class="about-style-two pt_120" style="background-color:#f7f5f1; margin-top:100px;">
    <div class="auto-container">
        <div class="row align-items-center clearfix">

            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box ml_40">
                    <div class="shape">
                        <div class="shape-1"></div>
                        <div class="shape-2" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                    </div>
                    <figure class="image"><img src="assets/images/gallery/g72.jpg" alt="" style="width:80%"></figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box ml_40">

                        <div class="text mb_40">
                            <p><?php echo $lang['welcome_description']['p9'] ?> </p>
                            <p><?php echo sprintf($lang['welcome_description']['p10'], $linkFriends); ?></p>
                            <p><?php echo $lang['welcome_description']['p11'] ?></p>
                        </div>
                        <div class="btn-box" style="margin-top:25px;">
                            <a href="https://aeth.info/_donacion-justo-center" target="_blank"
                                class="theme-btn-one"><?php echo $lang['donate']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--
<section class="funfact-section pt_80 pb_80 bg-color-2" style="margin-top:100px;">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
       <div class="inner-container">
            <div class="funfact-block-one">
                <div class="inner-box">
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="29">0</span>
                    </div>
                    <h3>Years of <br />Fund Raising</h3>
                </div>
            </div>
            <div class="funfact-block-one">
                <div class="inner-box">
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="3">0</span><span>k</span>
                    </div>
                    <h3>Happy <br />Volunteers</h3>
                </div>
            </div>
            <div class="funfact-block-one">
                <div class="inner-box">
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="8">0</span><span>k</span>
                    </div>
                    <h3>Total <br />Monthly Doners</h3>
                </div>
            </div>
            <div class="funfact-block-one">
                <div class="inner-box">
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="10">0</span><span>k</span>
                    </div>
                    <h3>Total <br />Campaigns</h3>
                </div>
            </div>
        </div> 
    </div>
</section>
-->

<?php include 'testimonial.php'; ?>
<!--
<section class="cta-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="inner-box">
            <h2><?php echo $lang['getaccessdatabase'] ?></h2>
            <div class="btn-box">
                <a href="https://archive.gonzalezcenter.org" target="blank"
                    class="theme-btn-one"><span><?php echo $lang['clickhere'] ?></span></a>
            </div>
        </div>
    </div>
</section>
-->
<?php include 'footer.php'; ?>

</html>