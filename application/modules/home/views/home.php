<!DOCTYPE HTML>
<html>
<head>
    <title>Shahid Cadet Academy</title>
    <meta charset="utf-8">
    <meta name="description" content="Shahid Cadet Academy helps students to take preparation for admission exam especially in cadet colleges, reputed schools & colleges and also for future higher education. Over the period of 30 years, Shahid Cadet Academy ( in pioneer it was Shahid Cadet coaching center) provides proper education with the strategic learning method and that’s why in every year the maximum number of students get admission in all Cadet Colleges from this academy. And rest of all students get admission in all the reputed Schools like RAJUK Uttara model School & College, Ideal Model School, Residential model College, BAF Shaheen School, Viqarunnisa Noon school, Willes Little Flower School, etc. in Dhaka and country-wide reputed schools and Besides our own School success is Excellent in recent few years in every class. Our students are achieving Excellent results in P.S.C, J.S.C and S.S.C.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <script src="<?= base_url(); ?>assets/vendor/modernizr/modernizr.js"></script>
    <!-- style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/pnotify/pnotify.custom.css"/>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css"/>
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.png">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/home/css/font-awesome.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/home/fi/flaticon.css">
    <link href="<?= base_url(); ?>assets/home/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/home/css/<?= $color[0]->css_change ?>">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/home/css/jquery.fancybox.css"/>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/home/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/home/rs-plugin/css/settings.css"
          media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/home/css/animate.css">
    <!--styles -->

</head>
<body>
<!-- page header -->
<header class="only-color">
    <!-- header top panel -->

    <!-- / header top panel -->
    <!-- sticky menu -->

    <div class="bg-blue"></div>
    <div class="page-header-top">
        <div class="grid-row clear-fix">
            <div class="left-top-bar">
                <a href=""><i class="fa fa-facebook-square"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
            </div>
            <div class="top-header">
                <h3 style="color: white !important;">Shahid Cadet Academy Mirpur</h3>
            </div>
            <div class="header-top-panel">
                <a class="custom-a" href="<?= base_url() ?>home/login"><span data-toggle="tooltip" data-placement="top">Login</span></a>
                <a href="#" class="search-open" style="margin-right:20px;"><i class="fa fa-search"></i></a>
                <form class="search" method="post" action="index.html">
                    <input type="text" name="q" onfocus="search_product()" onkeyup="search_product()"
                           id="search_id" name="search" placeholder="Search..."/>
                    <ul class="res" id="res_div" style="margin-top: 43px;     border:  #4294c9; ">

                    </ul>
                </form>
                <div class="results" id="search_div">

                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="sticky-menu">
            <div class="grid-row clear-fix bg-white" style="border-top-left-radius:4px;border-top-right-radius:4px;">
                <!-- logo -->
                <a href="<?= base_url() ?>" class="logo">
                    <img src="<?= base_url() ?>assets/images/img/logo.jpg" class="img-responsive" alt>
                    <h1></h1>
                </a>
                <!-- / logo -->
                <div style="float:right;text-align: center; box-shadow: 2px 2px 2px 0 rgba(0, 0, 0, 0.05);">
                    <nav class="main-nav">
                        <ul class="clear-fix">
                            <li>
                                <a href="<?= base_url() ?>" class="active">Home</a>
                            </li>
                            <li>
                                <a style="cursor:text">About Us</a>
                                <!-- sub mega menu -->
                                <ul class="sub-menu">
                                    <li><a href="<?= base_url() ?>home/who_we_are">Who we are?</a></li>
                                    <li><a href="<?= base_url() ?>home/why_us">Why us?</a></li>
                                    <li><a href="<?= base_url() ?>home/success">Our Success</a></li>
                                    <li><a href="<?= base_url() ?>home/meal_info">Daily Food Menu</a></li>
                                </ul>
                                <!-- / sub mega menu -->
                            </li>
                            <li>
                                <a style="cursor:text">Messages</a>
                                <!-- sub menu -->
                                <ul class="sub-menu">
                                    <li><a href="<?= base_url() ?>home/message_chairman">Message from Chairman</a></li>
                                    <li><a href="<?= base_url() ?>home/message_md">Message from MD</a></li>
                                    <li><a href="<?= base_url() ?>home/message_dmd">Message from DMD</a></li>
                                </ul>
                                <!-- / sub menu -->
                            </li>
                            <li>
                                <a href="<?= base_url() ?>home/admission">Admission</a>
                            </li>
                            <li>
                                <a style="cursor:text">Schooling System</a>
                                <!-- sub menu -->
                                <ul class="sub-menu">
                                    <li><a href="<?= base_url() ?>home/rules_facilities">Rules & Facilities</a></li>
                                    <li><a href="<?= base_url() ?>home/residential_facilities">Residential
                                            Facilities</a></li>
                                    <li><a href="<?= base_url() ?>home/parent_responsibility">Parents
                                            Responsibilites</a></li>
                                </ul>
                                <!-- / sub menu -->
                            </li>
                            <li>
                                <a style="cursor:text">Medium</a>
                                <!-- sub menu -->
                                <ul class="sub-menu">
                                    <li><a href="<?= base_url() ?>home/bangla_medium">Bangla Version</a></li>
                                    <li><a href="<?= base_url() ?>home/english_medium">English Version</a></li>
                                </ul>
                                <!-- / sub menu -->
                            </li>
                            <li>
                                <a href="<?= base_url() ?>home/prospectus">Prospectus</a>
                                <!-- sub menu -->
                                <!-- / sub menu -->
                            </li>
                            <li>
                                <a href="">Download</a>
                                <ul class="sub-menu">
                                    <li><a href="<?= base_url() ?>home/weekly_result">Weekly Result</a></li>
                                    <li><a href="<?= base_url() ?>home/weekly_syllabus">Weekly Syllabus</a></li>
                                    <li><a href="<?= base_url() ?>home/class_routine">Class Routine</a></li>
                                    <li><a href="<?= base_url() ?>home/term_result">Term Result</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>home/contact_us">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="tm-call-action">
                        <div class="">
                            <h4 style="margin-bottom: -13px; margin-top: -13px">Talk to us</h4>
                            <?php foreach ($phone as $key => $row) {
                                if ($key != 0) {
                                    echo '<br>';
                                }
                                ?>
                                <a href="tel:<?= $row ?>"><?= $row ?></a>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-row clear-fix bottom-bar">
                <div class="">
                    <p>
                        <strong style="color:white;">Shahid Cadet Academy</strong> Mirpur Branch
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- sticky menu -->
</header>
<div class="tp-banner-container">
    <div class="tp-banner-slider">
        <ul>
            <?php foreach ($slider_info as $key => $u) { ?>
                <?php if ($key == 0) { ?>

                    <li data-masterspeed="700">
                        <img src="<?= base_url() ?>assets/images/slider/<?= $u->image ?>"
                             data-lazyload="<?= base_url() ?>assets/images/slider/<?= $u->image ?>" alt>
                        <div class="tp-caption sl-content align-left" data-x="['left','center','center','center']"
                             data-hoffset="20" data-y="center" data-voffset="0"
                             data-width="['720px','600px','500px','300px']"
                             data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                             data-transform_out="opacity:0;s:300;s:1000;" data-start="400">
                            <div class="sl-title"
                                 style="height: 100px !important; width: 710px !important; background-color: transparent; color: #0a0a0a; font-size: 20px; margin-bottom: 450px">
                                <b><?= $u->description ?></b></div>
                        </div>
                    </li>
                <?php } elseif ($key == 1) { ?>

                    <li data-masterspeed="700" data-transition="fade">
                        <img src="<?= base_url() ?>assets/images/slider/<?= $u->image ?>"
                             data-lazyload="<?= base_url() ?>assets/images/slider/<?= $u->image ?>" alt>
                        <div class="tp-caption sl-content align-center" data-x="center" data-hoffset="0" data-y="center"
                             data-voffset="0" data-width="['720px','600px','500px','300px']"
                             data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                             data-transform_out="opacity:0;s:300;s:1000;" data-start="400">
                            <div class="sl-title"
                                 style="height: 100px !important; width: 710px !important; background-color: transparent;
                                 color: #0a0a0a; font-size: 20px; margin-bottom: 450px"><b><?= $u->description ?></b>
                            </div>
                        </div>
                    </li>

                <?php } ?>
            <?php } ?>
        </ul>
    </div>
</div>
<!-- / revolution slider -->
<hr class="divider-color">
<!-- content -->
<div id="home" class="page-content padding-none">

    <section class="mid-top-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-9 admission-banner-z-up">
                    <div class="admission-banner-block">
                        <a href="admission.html"><img src="<?= base_url() ?>assets/images/banner.jpg"
                                                      class="img-responsive" alt=""></a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main-description">
                                <h2 class="text-center text-uppercase">SHAHID CADET ACADEMY</h2>
                                <p>
                                    <?= $bio_info[0]->bio ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden-xs col-sm-4 col-md-3 chairman-z-up">
                    <?php if (sizeof($chairman) != 0) { ?>
                        <div class="chairman-msg-block">
                            <div class="chairman-msg-img">
                                <img class="img-responsive"
                                     src="<?= base_url() ?>assets/images/person/<?= $chairman[0]->image ?>"
                                     height="250px"/>
                            </div>
                            <div class="chairman-msg-description">
                                <h3 class="uk-module-title" style="background-color: white !important; color: black">
                                    Chairman's welcome</h3>
                                <p class="tm-quote" style="margin-bottom: -0.15em">
                                    <?= word_limiter($chairman[0]->message, 59, ''); ?>...
                                </p>
                                <button style="float: right" class="btn btn-info btn-raised"
                                        onclick="window.location='<?php echo site_url("home/message_chairman"); ?>'">
                                    Read
                                    More...
                                </button>
                                <br>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </section>

    <hr class="divider-color"/>
    <!-- section -->
    <?php if ((sizeof($chairman) != null) || (sizeof($md)) != null) { ?>
        <section class="padding-section">
            <div class="grid-row clear-fix">
                <div class="grid-col-row">
                    <div class="grid-col grid-col-4">
                        <div class="course-item">
                            <?php if ($chairman != null) { ?>
                            <div class="course-hover">
                                <img src="<?= base_url() ?>assets/images/person/<?= $chairman[0]->image ?>"
                                     data-at2x="<?= base_url() ?>assets/images/person/<?= $chairman[0]->image ?>"
                                     style="height: 360px !important; width: 370px !important;" alt>

                            </div>
                            <div class="course-name clear-fix" style="text-align:center">
                                <h3 class="custom-h3-color" style="font-weight: bolder;"><a
                                        href="<?= base_url() ?>home/message_chairman"><?= $chairman[0]->name ?></a></h3>
                            </div>
                            <div class="course-date bg-color-1 clear-fix">
                                <div class="description"
                                     style="font-weight: bolder;"><?= $chairman[0]->designation ?></div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="grid-col-person grid-col-4">
                        <!-- course item -->
                        <div class="course-item">
                            <?php if ($md != null) { ?>
                                <div class="course-hover">
                                    <img src="<?= base_url() ?>assets/images/person/<?= $md[0]->image ?>"
                                         data-at2x="img/md.png"
                                         style="height: 360px !important; width: 370px !important;" alt="">
                                </div>
                                <div class="course-name clear-fix" style="text-align: center;">
                                    <h3 class="custom-h3-color" style="font-weight:bolder"><a
                                            href="<?= base_url() ?>home/message_md"><?= $md[0]->name ?></a></h3>
                                </div>
                                <div class="course-date bg-color-2 clear-fix">
                                    <div class="description"
                                         style="font-weight:bolder;"><?= $md[0]->designation ?></div>
                                </div>
                            <?php } ?>
                        </div>
                        <!-- / course item -->
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <!-- / section -->

    <hr class="divider-color"/>

    <!-- paralax section -->
    <section class="padding-section">
        <div class="grid-row clear-fix">
            <div class="grid-col-row">
                <h2 class="text-uppercase text-center">Photo Gallery</h2>
                <div class=" row form-group col-md-12">
                    <div class="tabs-box">
                        <a href="#vd" data-boxs-tab="1" class="active">All</a>
                        <a href="#dvd" data-boxs-tab="2">SCAM Teachers</a>
                        <a href="#cddv" data-boxs-tab="3">SCAM Students</a>
                        <a href="#cddv" data-boxs-tab="4">SCAM Officials</a>
                    </div>
                </div>
                <div class=" row grid-col grid-col-12">
                    <div class="boxs-tab">
                        <div class="animated fadeIn active" data-box="1">
                            <div class="col-sm-12 gallery-box">
                                <?php foreach ($gallery as $u) { ?>
                                    <div class="col-sm-3 img-hover-scale">

                                        <a href="<?= base_url() ?>assets/images/gallery/<?= $u->image ?>"
                                           data-plugin-lightbox data-plugin-options='{ "type":"image" }'>
                                            <img class="img-responsive"
                                                 src="<?= base_url() ?>assets/images/gallery/<?= $u->image ?>"
                                                 width="145"
                                                 style="height: 180px !important; width: 400px !important; border: 6px groove #545565">
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="animated fadeIn" data-box="2">
                            <div class="col-sm-12 gallery-box">
                                <?php foreach ($gallery as $u) { ?>
                                    <?php if ($u->category == 'SCAM Teachers') { ?>
                                        <div class="col-sm-3 img-hover-scale">
                                            <a href="<?= base_url() ?>assets/images/gallery/<?= $u->image ?>"
                                               data-plugin-lightbox data-plugin-options='{ "type":"image" }'>
                                                <img class="img-responsive"
                                                     src="<?= base_url() ?>assets/images/gallery/<?= $u->image ?>"
                                                     width="145"
                                                     style="height: 180px !important; width: 400px !important; border: 6px groove #545565">
                                            </a>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                        <div class="animated fadeIn" data-box="3">
                            <div class="gallery-box">
                                <?php foreach ($gallery as $u) { ?>
                                    <?php if ($u->category == 'SCAM Students') { ?>
                                        <div class="col-sm-3 img-hover-scale">
                                            <a href="<?= base_url() ?>assets/images/gallery/<?= $u->image ?>"
                                               data-plugin-lightbox data-plugin-options='{ "type":"image" }'>
                                                <img class="img-responsive"
                                                     src="<?= base_url() ?>assets/images/gallery/<?= $u->image ?>"
                                                     width="145"
                                                     style="height: 180px !important; width: 400px !important; border: 6px groove #545565">
                                            </a>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                        <div class="animated fadeIn" data-box="4">
                            <div class="gallery-box">
                                <?php foreach ($gallery as $u) { ?>
                                    <?php if ($u->category == 'SCAM Officials') { ?>
                                        <div class="col-sm-3 img-hover-scale">
                                            <a href="<?= base_url() ?>assets/images/gallery/<?= $u->image ?>"
                                               data-plugin-lightbox data-plugin-options='{ "type":"image" }'>
                                                <img class="img-responsive"
                                                     src="<?= base_url() ?>assets/images/gallery/<?= $u->image ?>"
                                                     width="145"
                                                     style="height: 180px !important; width: 400px !important; border: 6px groove #545565">
                                            </a>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / paralax section -->
    <hr class="divider-color"/>
    <!-- paralax section -->
    <section class="fullwidth-background padding-section">
        <div class="grid-row clear-fix">
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="text-center text-uppercase">Success of SCAM</h3>
                            <div class=" row grid-col grid-col-10">
                                <div class="boxs-tab">
                                    <div class="animated fadeIn active">
                                        <?php if ($success_gallery != null) { ?>
                                            <div class="gallery-box">
                                                <?php foreach ($success_gallery as $u) { ?>
                                                    <div class="col-sm-3 img-hover-scale">
                                                        <a href="<?= base_url() ?>assets/images/success_gallery/<?= $u->image ?>"
                                                           data-plugin-lightbox
                                                           data-plugin-options='{ "type":"image" }'>
                                                            <img class="img-responsive"
                                                                 src="<?= base_url() ?>assets/images/success_gallery/<?= $u->image ?>"
                                                                 width="145"
                                                                 style="height: 160px !important; width: 400px !important; border: 6px groove #545565">

                                                        </a>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        <?php } else { ?>
                                            <div class="gallery-box">
                                                <div class="col-sm-3 img-hover-scale">
                                                    <h4>No Data Found</h4>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 sidebar" style="margin-top:10px;">
                    <!-- widget instructor -->
                    <aside class="widget-instructor" style="border:1px solid #a3a3a3;padding:30px;">
                        <div class="row">
                            <h2 class="custom-h2">ABOUT US</h2>
                            <a href="<?= base_url() ?>home/who_we_are"><img class="col-sm-12 img-responsive"
                                                                            src="<?= base_url() ?>assets/images/about_us/<?= $about_info[0]->image ?>"
                                                                            style="margin-top:10px;"/></br></a>
                            <h2 class="custom-h2">NOTICE BOARD</h2>
                            <div class="clearfix"></div>
                            <a href="<?= base_url() ?>home/admission">
                                <img src="<?= base_url() ?>assets/images/admission.gif" class="img-responsive" alt=""
                                     style="padding-left:15px;">
                            </a>
                            <h2 style="font-size:23px;" class="custom-h2">VISIT OUR GALLERY</h2>
                            <a href="">
                                <img src="<?= base_url() ?>assets/images/gallery/<?= $gallery[0]->image ?>"
                                     class="img-responsive" alt="" style="padding-left:15px; height: 85px; border: 6px groove #545565">
                            </a>
                            <a href="">
                                <img src="<?= base_url() ?>assets/images/gallery/<?= $gallery[1]->image ?>"
                                     height="85px" class="img-responsive" alt=""
                                     style="padding-top:20px;padding-left:15px; height: 85px; border: 6px groove #545565">
                            </a>
                            <a href="">
                                <img src="<?= base_url() ?>assets/images/gallery/<?= $gallery[2]->image ?>"
                                     height="85px" class="img-responsive" alt=""
                                     style="padding-top:20px;padding-left:15px; height: 85px; border: 6px groove #545565">
                            </a>
                        </div>
                    </aside>
                    <!-- / course finder -->
                </div>
            </div>
        </div>
    </section>
    <!-- paralax section -->

    <hr class="divider-color"/>

    <!-- google map -->
    <div class="wow fadeInUp">
        <div id="gmap" style="height:400px;"></div>
    </div>
    <!-- / google map -->
</div>
<!-- / content -->
<!-- footer -->
<footer>
    <div class="grid-row">
        <div class="grid-col-row clear-fix">
            <section class="col-sm-3 col-xs-6 footer-colleges">
                <h2 class="corner-radius text-uppercase">Cadet Colleges</h2>
                <ul class="footer-links-list">
                    <li>
                        <a target="_blank" href="http://www.fcc.army.mil.bd/">Faujdarhat Cadet College</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.jcc.army.mil.bd/">Jhenidah Cadet College</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.scc.army.mil.bd/">Sylhet Cadet College</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.mgcc.army.mil.bd/">Mymensingh Girls’ Cadet College</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.ccc.army.mil.bd/">Comilla Cadet College</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.mcc.army.mil.bd/">Mirzapur Cadet College</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.jgcc.army.mil.bd/">Joypurhat Girls Cadet College</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.bcc.army.mil.bd/">Barisal Cadet College</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.pcc.army.mil.bd/">Pabna Cadet College</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.rcc.army.mil.bd/">Rajshahi Cadet College</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.ccr.army.mil.bd/">Rangpur Cadet College</a>
                    </li>
                </ul>
            </section>
            <section class="col-sm-3 col-xs-6 footer-links">
                <h2 class="corner-radius text-uppercase">Links at a glance</h2>
                <ul class="footer-links-list">
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Messages</a></li>
                    <li><a href="">Admission</a></li>
                    <li><a href="">Schooling System</a></li>
                    <li><a href="">Medium</a></li>
                    <li><a href="">Branch</a></li>
                    <li><a href="">Download</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </section>
            <section class="col-sm-3 col-xs-6 footer-payments">
                <h2 class="corner-radius text-uppercase">We accept payments</h2>
                <article>
                    <p>
                        <a href="">
                            <img class="center-block" src="<?= base_url(); ?>assets/images/bkash_logo.png"
                                 alt="bkash payment"
                                 style="border:1px solid white;background-color:white;">
                        </a>
                    </p>
                    <p><strong style="color:white;">Pay to any of the following number:</strong></p>
                    <p style="padding-left:25px"><?= $contact_info[0]->bkash ?><br>
                        <br>
                    </p>
                </article>
            </section>
            <section class="col-sm-3 col-xs-6 footer-contact">
                <h2 class="corner-radius text-uppercase">Keep in touch</h2>
                <div class="textwidget">
                    <p>Shahid Cadet Academy<br>
                        <?= $contact_info[0]->address ?></p>
                    <p>Phone: <?php foreach ($cell as $row) {
                            echo "<br>" . $row;
                        } ?></p>
                    <p>Cell: <?php foreach ($cell as $row) {
                            echo "<br>" . $row;
                        } ?>
                    </p>
                    <p>Email:<br> <?= $contact_info[0]->website ?></p>
                </div>
            </section>

        </div>
    </div>
    <div class="footer-bottom">
        <div class="grid-row clear-fix">
            <div class="copyright">Copyright <span></span> 2017 Shahid Cadet Academy, all rights reserved</div>
            <nav class="footer-nav">
                <ul class="clear-fix footer-social">
                    <li>
                        <a href="" class="fa fa-facebook"></a>
                    </li>
                    <li>
                        <a href="" class="fa fa-twitter"></a>
                    </li>
                    <li>
                        <a href="" class="fa fa-google-plus"></a>
                    </li>
                    <li>
                        <a href="" class="fa fa-rss"></a>
                    </li>
                    <li>
                        <a href="" class="fa fa-youtube"></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</footer>
<!-- / footer -->
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.js"></script>
<script src="<?= base_url(); ?>assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="<?= base_url(); ?>assets/vendor/magnific-popup/magnific-popup.js"></script>
<script src="<?= base_url(); ?>assets/javascripts/theme.js"></script>
<script src="<?= base_url(); ?>assets/javascripts/theme.init.js"></script>

<!--<script src="--><? //= base_url(); ?><!--assets/home/js/jquery.min.js"></script>-->
<script type="text/javascript"
        src="http://maps.google.com/maps/api/js?key=AIzaSyA-wMGy_omKYgvdSdmmh_QzXdomh_XsTwU"></script>
<script type='text/javascript' src='<?= base_url(); ?>assets/home/js/jquery.validate.min.js'></script>
<script src="<?= base_url(); ?>assets/home/js/jquery.form.min.js"></script>
<script src="<?= base_url(); ?>assets/home/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/home/js/TweenMax.min.js"></script>
<script src="<?= base_url(); ?>assets/home/js/main.js"></script>
<!-- jQuery REVOLUTION Slider  -->
<script type="text/javascript" src="<?= base_url(); ?>assets/home/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript"
        src="<?= base_url(); ?>assets/home/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript"
        src="<?= base_url(); ?>assets/home/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript"
        src="<?= base_url(); ?>assets/home/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript"
        src="<?= base_url(); ?>assets/home/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript"
        src="<?= base_url(); ?>assets/home/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript"
        src="<?= base_url(); ?>assets/home/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript"
        src="<?= base_url(); ?>assets/home/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript"
        src="<?= base_url(); ?>assets/home/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript"
        src="<?= base_url(); ?>assets/home/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?= base_url(); ?>assets/home/js/jquery.isotope.min.js"></script>

<script src="<?= base_url(); ?>assets/home/js/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>assets/home/js/jquery-ui.min.js"></script>
<script src="<?= base_url(); ?>assets/home/js/jflickrfeed.min.js"></script>
<script src="<?= base_url(); ?>assets/home/js/jquery.fancybox.pack.js"></script>
<script src="<?= base_url(); ?>assets/home/js/jquery.fancybox-media.js"></script>
<script src="<?= base_url(); ?>assets/home/js/retina.min.js"></script>
<script src="<?= base_url(); ?>assets/home/js/jquery.tweet.js"></script>


<script>
    google.maps.event.addDomListener(window, "load", init);
    var map;
    function init() {
        var mapOptions = {
            center: new google.maps.LatLng(23.80109, 90.355761),
            zoom: 15,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT
            },
            disableDoubleClickZoom: false,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
            },
            scaleControl: true,
            scrollwheel: false,
            panControl: true,
            streetViewControl: true,
            draggable: true,
            overviewMapControl: true,
            overviewMapControlOptions: {
                opened: false
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [{
                "featureType": "landscape",
                "stylers": [{"hue": "#F1FF00"}, {"saturation": -27.4}, {"lightness": 9.4}, {"gamma": 1}]
            }, {
                "featureType": "road.highway",
                "stylers": [{"hue": "#0099FF"}, {"saturation": -20}, {"lightness": 36.4}, {"gamma": 1}]
            }, {
                "featureType": "road.arterial",
                "stylers": [{"hue": "#00FF4F"}, {"saturation": 0}, {"lightness": 0}, {"gamma": 1}]
            }, {
                "featureType": "road.local",
                "stylers": [{"hue": "#FFB300"}, {"saturation": -38}, {"lightness": 11.2}, {"gamma": 1}]
            }, {
                "featureType": "water",
                "stylers": [{"hue": "#00B6FF"}, {"saturation": 4.2}, {"lightness": -63.4}, {"gamma": 1}]
            }, {
                "featureType": "poi",
                "stylers": [{"hue": "#9FFF00"}, {"saturation": 0}, {"lightness": 0}, {"gamma": 1}]
            }]
        };

        var mapElement = document.getElementById("gmap");
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [
            {lat: 23.799944, lng: 90.352295, title: "Shahid Cadet Academy"}
        ];

        var opts = {};
        for (var i = 0; i < locations.length; i++) {
            opts.position = new google.maps.LatLng(locations[i].lat, locations[i].lng);
            opts.map = map;
            if (!!locations[i].title) {
                opts.title = locations[i].title;
            }
            if (!!locations[i].description) {
                opts.description = locations[i].description;
            }
            marker = new google.maps.Marker(opts);

            (function () {
                var html = [
                    '<div style="background-color: #FFF; color: #000; padding: 5px; width: 150px;">',
                    '{title}',
                    '{description}',
                    '</div>'
                ].join('');

                html = html.replace(/{title}/, !!opts.title ? ("<h4>" + opts.title + "</h4>") : "");
                html = html.replace(/{description}/, !!opts.description ? ("<p>" + opts.description + "</p>") : "");
                var infoWindow = new google.maps.InfoWindow({content: html});
                google.maps.event.addListener(marker, 'click', function () {
                    if (infoWindow.isOpened) {
                        infoWindow.close();
                        infoWindow.isOpened = false;
                    } else {
                        infoWindow.open(map, this);
                        infoWindow.isOpened = true;
                    }
                });
            })();
        }
    }
</script>
</body>
</html>