<?php include "head.php"; ?>

<title>Contact</title>
</head>


<body class="contact">
    <div class="content-wrapper">
        <?php include "header.php"; ?>
        <div class="main-wrapper">
            <main>

                <section style="background-image: url('./images/inner-page-header.webp')" id="page-header-contact" class="page-header">
                    <h1 class="abs-head">Website</h1>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1>Our Attractive Websites Portfolio</h1>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="website-about" class="section">
                    <div class="container">
                        <div class="col-6">

                        </div>
                        <div class="col-6"></div>
                    </div>
                </section>

                <section id="website-video-samples" class="section">
                    <div class="container-fluid p-0">
                        <div class="row m-0">
                            <div class="col-12 p-0">
                                <!-- Swiper -->
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                            <video loop="true" autoplay muted width="540" height="423">
                                                <source src="./images/webvideos/video_0.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                        <div class="swiper-slide">
                                            <video loop="true" autoplay muted width="540" height="423">
                                                <source src="./images/webvideos/video_1.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                        <div class="swiper-slide">
                                        <video loop="true" autoplay muted width="540" height="423">
                                                <source src="./images/webvideos/video_2.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                        <div class="swiper-slide">
                                        <video loop="true" autoplay muted width="540" height="423">
                                                <source src="./images/webvideos/video_3.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                        <!-- <div class="swiper-slide">
                                        <video loop="true" autoplay muted width="540" height="423">
                                                <source src="./images/webvideos/video_4.mp4" type="video/mp4">
                                            </video>
                                        </div> -->
                                        <div class="swiper-slide">
                                        <video loop="true" autoplay muted width="540" height="423">
                                                <source src="./images/webvideos/video_5.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                        <div class="swiper-slide">
                                        <video loop="true" autoplay muted width="540" height="423">
                                                <source src="./images/webvideos/video_6.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                        <div class="swiper-slide">
                                        <video loop="true" autoplay muted width="540" height="423">
                                                <source src="./images/webvideos/video_7.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div style="display: none;" class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="testimonials" class="section">
                    <div class="container">
                        <h3>What Our Client Says</h3>
                        <div class="row">
                            <div class="col-12">
                                <!-- MAIN SLIDES -->
                                <div class="slider">
                                    <div data-index="1">
                                        <blockquote>
                                            Your text goes here. this is just placeholder content.Your text goes here. this is just placeholder content. your text goes here. Your text goes here. this is just placeholder content. your text goes here.
                                        </blockquote>
                                        <div class="author">L. Wilson</div>
                                    </div>
                                    <div data-index="2">
                                        <blockquote>
                                            Your text goes here. this is just placeholder content.Your text goes here. this is just placeholder content. your text goes here. Your text goes here. this is just placeholder content. your text goes here.
                                        </blockquote>
                                        <div class="author">L. Wilson</div>
                                    </div>
                                    <div data-index="3">
                                        <blockquote>
                                            Your text goes here. this is just placeholder content.Your text goes here. this is just placeholder content. your text goes here. Your text goes here. this is just placeholder content. your text goes here.
                                        </blockquote>
                                        <div class="author">L. Wilson</div>
                                    </div>
                                    <div data-index="4">
                                        <blockquote>
                                            Your text goes here. this is just placeholder content.Your text goes here. this is just placeholder content. your text goes here. Your text goes here. this is just placeholder content. your text goes here.
                                        </blockquote>
                                        <div class="author">L. Wilson</div>
                                    </div>
                                </div>

                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails">
                                    <div class="slick-current"><img src="images/testi-1.webp" slide="slide_1">
                                    </div>
                                    <div><img src="images/testi-2.webp" slide="slide_2">
                                    </div>
                                    <div><img src="images/testi-3.webp" slide="slide_3">
                                    </div>
                                    <div><img src="images/testi-4.webp" slide="slide_4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>




            </main>
        </div>
        <?php include "footer.php"; ?>
        <?php include_once('popup-quote.php'); ?>

    </div>

    <?php include_once('libraries.php'); ?>
</body>