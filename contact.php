<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>
<div>
    <?php
    if (isset($_GET['message'])) {
        if ($_GET['message'] == "success") {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Message sent successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Failed to send message. Please try again.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
        }
    }
    ?>
</div>
<!-- Page Title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/team/detail.jpeg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1><?php echo $lang['contact'] ?></h1>

        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- contact-info-section -->
<section class="contact-info-section bg-color-1 centred">
    <div class="auto-container">
        <div class="row clearfix">
            <!--   <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-63"></i></div>
                        <h3>Phone</h3>
                        <p><a href="tel:14077731234">+1 (407) 773-1234</a></p>
                        <p><a href="tel:14077546863">+1 (407) 754-6863</a></p>
                    </div>
                </div>
            </div> -->
            <div class="col-lg-6 col-md-6 col-sm-12 info-column">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-64"></i></div>
                        <h3><?php echo $lang['email_address'] ?></h3>
                        <p><a href="mailto:jcgcenter@aeth.org">jcgcenter@aeth.org</a></p>
                        <p><a href="mailto:info@aeth.org">info@aeth.org</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 info-column">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-65"></i></div>
                        <h3><?php echo $lang['our_location'] ?></h3>
                        <p>160 Clariemont Avenue, Suite 300 </br> Decatur, GA 30030</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-info-section end -->

<!-- contact-section -->
<section class="contact-section sec-pad">
    <div class="auto-container">
        <!-- iframe div -->

        <div class="iframe-container" style="margin-bottom: 30px;">
            <iframe
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=160%20Clairemont%20Avenue%20Decatur%20GA%2030030+(JC%20Resource%20Center)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                <div class="content-box p_relative mr_70">
                    <h3><?php echo $lang['fell_free'] ?></h3>
                    <p><?php echo $lang['contact_desc'] ?></p>
                    <ul class="social-links clearfix">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 form-column">

                <div class="form-inner">

                    <form method="post" action="send_mail.php" id="contact-form">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="username" placeholder="<?php echo $lang['your_name'] ?>"
                                    required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="<?php echo $lang['your_email'] ?>"
                                    required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" name="phone" required
                                    placeholder="<?php echo $lang['your_phone'] ?>">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="<?php echo $lang['your_message'] ?>"
                                    required></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0">
                                <button class="theme-btn-one" type="submit"
                                    name="submit-form"><span><?php echo $lang['send_message'] ?></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // Scroll to the message div if it exists
    window.onload = function () {
        var messageDiv = document.getElementById("form-message");
        if (messageDiv) {
            messageDiv.scrollIntoView({ behavior: "smooth", block: "center" });
        }
    };
</script>
<?php include 'footer.php'; ?>

</html>
