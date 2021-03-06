<?php $this->load->view('home/header_links'); ?>
<?php $this->load->view('home/header'); ?>
<!-- Header Ends -->
<div class="page-content grid-row clear-fix" style="margin-top:-5px;">
    <div class="page-title" style="background-image: url('<?= base_url() ?>assets/images/back_all.jpg')">
        <div class="grid-row">
            <h1><?= $submenu ?></h1>
            <!-- bread crumb -->
            <nav class="bread-crumb">
                <a href="<?= base_url() ?>home">Home</a>
                <i class="fa fa-long-arrow-right"></i>
                <a><?= $submenu ?></a>
            </nav>
            <!-- / bread crumb -->
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9 mainbar">
            <section style="border:1px solid #a3a3a3;padding:30px;">
                <h3 style="border:1px solid #e3e3e3;border-radius:3px;padding:10px;text-align:center;color: white"><?= $submenu ?></h3>
                <div class=" row grid-col grid-col-10">
                    <div class="boxs-tab">
                        <div class="animated fadeIn active">
                            <?php if ($page_data != null) { ?>
                                <div class="success-box">
                                    <?php foreach ($page_data as $u) { ?>
                                        <div class="col-sm-3 img-hover-scale">
                                            <a href="<?= base_url() ?>assets/images/prospectus/<?= $u->image ?>"
                                               data-plugin-lightbox data-plugin-options='{ "type":"image" }'>
                                                <img class="img-responsive"
                                                     src="<?= base_url() ?>assets/images/prospectus/<?= $u->image ?>"
                                                     width="145" border="5"
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
                <div class="clearfix"></div>
            </section>
        </div>
        <div class="col-sm-3 sidebar">
            <!-- widget instructor -->
            <aside class="widget-instructor" style="border:1px solid #a3a3a3;padding:30px;">
                <div class="row">
                    <h2 style="background-color: white; color: #0a0a0a">ABOUT US</h2>
                    <hr class="divider-big"/>
                    <a href="<?= base_url() ?>home/who_we_are">
                        <img class="col-sm-12 img-responsive"
                             src="<?= base_url() ?>assets/images/about_us/<?= $about[0]->image ?>"
                             style="margin-top:20px;"/></br>
                    </a>
                    <h2>NOTICE BOARD</h2>
                    <div class="clearfix"></div>
                    <a href="<?= base_url() ?>home/admission">
                        <img src="<?= base_url() ?>assets/images/source.gif" class="img-responsive" alt=""
                             style="padding-left:15px;">
                    </a>
                    <h2 style="font-size:23px;">VISIT OUR GALLERY</h2>
                    <a href="">
                        <img src="<?= base_url() ?>assets/images/gallery/<?= $gallery[0]->image ?>"
                             class="img-responsive" alt="" style="padding-left:15px; height: 85px">
                    </a>
                    <a href="">
                        <img src="<?= base_url() ?>assets/images/gallery/<?= $gallery[1]->image ?>" height="85px"
                             class="img-responsive" alt="" style="padding-top:20px;padding-left:15px; height: 85px">
                    </a>
                    <a href="">
                        <img src="<?= base_url() ?>assets/images/gallery/<?= $gallery[2]->image ?>" height="85px"
                             class="img-responsive" alt="" style="padding-top:20px;padding-left:15px; height: 85px">
                    </a>
                </div>
            </aside>
            <!-- / course finder -->
        </div>
    </div>
</div>
<!-- footer -->
<?php $this->load->view('home/footer'); ?>
<script>jQuery.noConflict();</script>
<?php $this->load->view('home/footer_links'); ?>
<script src="<?= base_url(); ?>assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="<?= base_url(); ?>assets/vendor/magnific-popup/magnific-popup.js"></script>
<script src="<?= base_url(); ?>assets/javascripts/theme.js"></script>
<script src="<?= base_url(); ?>assets/javascripts/theme.init.js"></script>
</body>
</html>