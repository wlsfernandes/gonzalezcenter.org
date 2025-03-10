<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>
<style>
    .embed-responsive {
        position: relative;
        overflow: hidden;
        padding: 0;
        height: 0;
    }

    .embed-responsive-16by9 {
        padding-bottom: 56.25%;
        /* 16:9 aspect ratio */
    }

    .embed-responsive-item {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
<!-- Page Title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/faq.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1><?php echo $lang['gonzalez_video_co'] ?></h1>
        </div>
    </div>
</section>

<section class="about-style-two pt_120" style="margin-bottom:150px;">
    <div class="auto-container">

        <div class="row clearfix">
            <!-- Text Column with Image Floating Inside -->
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box">

                        <div class="sec-title mb_30" style="text-align: center;">
                            <h2 style="color:#330033"><?php echo $lang['youtube_title'] ?></h2>
                        </div>
                        <div class="text">
                            <figure class="image" style="float: left; margin-right: 20px; margin-bottom: 20px;">
                                <img src="assets/images/resource/about-2.jpg" alt=""
                                    style="width: 600px; height: auto;">
                            </figure>

                            <p><?php echo $lang['youtube_description'] ?></p>
                            <p><?php echo $lang['youtube_description2'] ?></p>


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

<section class="video-gallery" style="margin-top:50px; margin-bottom:100px;">
    <div class="container">
        <div class="row">

            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OYbVTZAoD6g"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">The story behind the legacy</h4>
            </div>
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NuSp_3isvNA"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">The story behind the legacy</h4>
            </div>
        </div>

        <div class="row" style="margin-top:50px;">
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                        src="https://www.youtube.com/embed/2rkccnUOC5A?list=PL4qg0UKlUUIluxQZcDUF-HrSPcAoF1Ye-&index=12"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Congresso Hagnos 2009</h4>
            </div>
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                        src="https://www.youtube.com/embed/qoDkKa9cBHk?start=74&list=PL4qg0UKlUUIluxQZcDUF-HrSPcAoF1Ye-&index=10"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Congresso Hagnos 2009</h4>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TezNjc9iddg"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Episodio 1 - Raíces / Episode 1 - Roots</h4>
            </div>
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SllgutR6Br8"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Episodio 2 - Experiencias formativas / Episode 2 - Formative Experiences</h4>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-3ge6FgFVGA"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Episodio 3 - El novatado / Episode 3 - The Freshman's Challenges</h4>
            </div>
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EL0LqCoA0iM"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Episodio 4 - Un viaje inesperado / Episode 4 - An Unexpected Journey</h4>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8XfSGDY7ZqQ"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Episodio 5 - Lecciones de tinta y voz / Espisode 5 - Lessons in Ink and Voice</h4>
            </div>
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9FCx7y2wLRo"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Un nuevo capítulo / Episode 6 - A New Chapter</h4>
            </div>
            <!-- <div class="col-md-6 mb-6">
                <div class="col-md-6 mb-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/995444816"
                            allowfullscreen></iframe>
                    </div>
                    <h4 class="mt-2">Church History Presentation</h4>
                </div>
            </div> -->
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nL4q7qPjXyw"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Episodio 7 - Un encuentro providencial / Episode 7 - A Providential Encounter</h4>
            </div>
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-irAURaagE0"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Episodio 8 - Caminos compartidos / Episode 8 - Shared Paths</h4>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/o5tclt3Tj7o"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Episodio 9 - Teología para un nuevo tiempo / Episode 9 - Theology for a New Era</h4>
            </div>
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vYZAZYJJZoQ"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Episodio 10 - Entre libros y bendiciones / Episode 10 - Among Books and Blessings</h4>
            </div>

        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/J1NWSIJ3qy8"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Episodio 11 - Mas allá de las fronteras / Episode 11 - Beyond Borders</h4>
            </div>
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ixjy0fsGkEs"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Episodio 12 - Forjando comunidad en la diversidad / Episode 12 - Forging Community in
                    Diversity</h4>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/CGgmTlrAhDA"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Episodio 13 - Educación teológica sin fronteras / Episode 13 - Theological Education
                    without Borders</h4>
            </div>

        </div>
</section>


<!-- End Video Gallery Section -->


<?php include 'footer.php'; ?>

</html>
