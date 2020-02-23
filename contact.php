<?php include "head.php"; ?>

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
                            <div class="col-6 text-center">
                                <!-- <i class="ion-paper-airplane big-plane"></i> -->
                                <img class="big-envelope-img" width="359" height="390" src="./images/open-envelope.png">
                            </div>
                            <div class="col-6">
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
                                <h4>Want to Know More?? Drop Us a Mail</h4>
                                <hr>
                                <div class="conact-form-wrapper">
                                    <form>
                                        <div class="row">
                                            <div class="col-6">
                                                <input class="form-control" type="text" placeholder="First name">
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="text" placeholder="Last name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <input class="form-control" type="email" placeholder="Email">
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="tel" placeholder="Contact Number">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <textarea class="form-control" rows="3"></textarea>
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
                    </div>
                </section>



            </main>
        </div>
        <?php include "footer.php"; ?>
        <?php include_once('popup-quote.php'); ?>

    </div>

    <?php include_once('libraries.php'); ?>
</body>