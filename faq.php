<?php include "head.php"; ?>

<title>Faqs</title>
</head>


<body class="contact">
    <div class="content-wrapper">
        <?php include "header.php"; ?>
        <div class="main-wrapper">
            <main>

                <section style="background-image: url('./images/inner-page-header.webp')" id="page-header-contact" class="page-header">
                    <h1 class="abs-head">Faqs</h1>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1>Frequenty Asked Questions</h1>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="faq" class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                            <div id="faq-collapse-wrapper">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                           
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Collapsible Group Item #1
                                </button>
                            
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faq-collapse-wrapper">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                           
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Collapsible Group Item #2
                                </button>
                            
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faq-collapse-wrapper">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                           
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Collapsible Group Item #3
                                </button>
                            
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faq-collapse-wrapper">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
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