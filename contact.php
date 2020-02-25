<?php include "head.php"; ?>

<title>Contact</title>
</head>


<body class="contact">
    <div class="content-wrapper">
        <?php include "header.php"; ?>
        <div class="main-wrapper">
            <main>

                <section style="background-image: url('./images/inner-page-header.webp')" id="page-header-contact" class="page-header">
                    <h1 class="abs-head">Contact Us</h1>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1>Get In Touch With Us</h1>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="form-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-4 text-center">
                                <h4 class="contact-head">Want to Know More?? <strong>Drop Us a Mail</strong></h4>
                                <img class="big-envelope-img" width="359" height="390" src="./images/open-envelope.png">
                            </div>
                            <div class="col-8">
                                <ul class="info-box">
                                    <li class="clearfix">
                                        <div class="pull-left">
                                            <span class="icon-box">
                                                <i class="ion-android-call"></i>
                                            </span>
                                        </div>
                                        <div class="pull-left">
                                            <div class="content-box">
                                                <h4>Phone:</h4>
                                                <a href="tel:+12345-5-5524">+12345-5-5524</a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="pull-left">
                                            <span class="icon-box">
                                                <i class="ion-paper-airplane"></i>
                                            </span>
                                        </div>
                                        <div class="pull-left">
                                            <div class="content-box">
                                                <h4>Email:</h4>
                                                <a href="mailto:info@logobrisk.com">info@logobrisk.com</a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                </ul>
                                <hr>
                                <div class="conact-form-wrapper">
                                    <form>
                                        <div class="row">
                                            <div class="col-6">
                                                <input required="required" class="form-control" type="text" placeholder="First name">
                                            </div>
                                            <div class="col-6">
                                                <input required="required"  class="form-control" type="text" placeholder="Last name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <input required="required"  class="form-control" type="email" placeholder="Email">
                                            </div>
                                            <div class="col-6">
                                                <input required="required"  class="form-control" type="tel" placeholder="Contact Number">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <textarea required="required"  placeholder="Type your message here..." class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <input class="form-control" type="submit" value="SUBMIT">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-8 mx-auto">
                                
                               
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