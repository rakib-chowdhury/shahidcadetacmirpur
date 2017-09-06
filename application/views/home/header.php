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
                <a href="https://www.facebook.com/Shahid-Cadet-Academy-dhaka-1485120938388812/?ref=br_rs"><i
                        class="fa fa-facebook-square"></i></a>
                <a href="https://twitter.com/shahidcadet"><i class="fa fa-twitter"></i></a>
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
                    <img src="<?= base_url(); ?>assets/images/logo.jpg" class="img-responsive" alt>
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
<!--                                    <li><a href="--><?//= base_url() ?><!--home/message_dmd">Message from DMD</a></li>-->
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
                            <h4 style="margin-bottom: -11px; margin-top: -13px">Talk to us</h4>
                            <?php foreach ($phone as $key=>$row) {
                                if($key!=0){
                                    echo '<br>';
                                }
                                ?>
                                <a href="tel:<?= $row ?>"><?= $row?></a>
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