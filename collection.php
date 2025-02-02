<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<!-- Page Title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/JustoGonzalezLibrary2.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1><?php echo $lang['gonzalez_collection'] ?></h1>

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
                                <img src="assets/images/team/books.jpg" alt="" style="width: 500px; height: 920px;">
                            </figure>

                            <p><?php echo $lang['acervo_desc']['p1'] ?></p>
                            <p><?php echo $lang['acervo_desc']['p2'] ?></p>
                            <p><?php echo $lang['acervo_desc']['p3'] ?></p>
                            <?php //echo sprintf($lang['acervo_desc']['p4'], $linkFriends); ?></p>

                            <p><?php echo $lang['acervo_desc']['p44'] ?>
                            <div class="btn-box">
                                <a href="https://aeth.info/shop/justo-catherine-gonzalez-resource-center-access"
                                    target="blank" class="theme-btn-two"><?php echo $lang['purchase_subscription']?></a>
                            </div>
                            </p>

                            <p><?php echo $lang['acervo_desc']['p45'] ?>
                            <div class="btn-box">
                                <a href="friends.php?lang=<?php echo $lang_code; ?>" class="theme-btn-two"><?php echo $lang['friends']?></a>
                            </div>
                            </p>

                            <p><?php echo $lang['acervo_desc']['p5'] ?></p>
                            <p><?php echo $lang['acervo_desc']['p6'] ?></p>


                            <div class="btn-box">
                                <a href="https://archive.gonzalezcenter.org/users/login" target="blank"
                                    class="theme-btn-one"><?php echo $lang['gotocollection']; ?></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>

</html>