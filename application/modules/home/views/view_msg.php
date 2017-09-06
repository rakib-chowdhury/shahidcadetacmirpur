<?php $this->load->view('home/header_links'); ?>
<?php $this->load->view('home/header'); ?>
<!-- Header Ends -->
<div class="page-content grid-row clear-fix" style="margin-top:-5px;">
    <div class="page-title" style="background-image: url('<?= base_url() ?>assets/images/back_all.jpg')">
        <div class="grid-row">
            <h1>Messages</h1>
            <!-- bread crumb -->
            <nav class="bread-crumb">
                <a href="<?= base_url() ?>home"><?= $menu ?></a>
                <i class="fa fa-long-arrow-right"></i>
                <a><?= $submenu ?></a>
            </nav>
            <!-- / bread crumb -->
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9 mainbar">
            <?php if($chairman != null) { ?>
            <section style="border:1px solid #a3a3a3;padding:30px;">
                <h3 class="custom-h3"
                    style="border:1px solid ;border-radius:3px;padding:10px;text-align:center;"><?= $title ?></h3>
                <div>
                    <img src="<?= base_url() ?>assets/images/person/<?= $chairman[0]->image ?>" align="middle"
                         style="width:30%; float: left; margin: 10px 10px 0 0;"/>
                    <?= $chairman[0]->message ?>
                </div>
                <h3 style="text-align: center"><?= $contact_title ?></h3>
                <p style="text-align: center;">
                    <?= $contact_details ?>
                </p>
                <div class="clearfix"></div>
            </section>
            <?php }else{ ?>
                <section style="border:1px solid #a3a3a3;padding:30px;">
                    <h3 style="border:1px solid ;border-radius:3px;padding:10px;text-align:center;">No Data Found</h3>

                    <div class="clearfix"></div>
                </section>
            <?php } ?>
        </div>
        <div class="col-sm-3 sidebar">
            <!-- widget instructor -->
            <aside class="widget-instructor" style="border:1px solid #a3a3a3;padding:30px;">
                <div class="row">
                    <h2 class="custom-h2" style="background-color: white !important;">ABOUT US</h2>
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
<?php $this->load->view('home/footer_links'); ?>
</body>
</html>