<?php $this->load->view('home/header_links'); ?>
<?php $this->load->view('home/header'); ?>
<!-- Header Ends -->
<div class="page-content grid-row clear-fix"
     style="margin-top:-5px;background-image: url('<?= base_url() ?>assets/images/back_all.jpg')">
    <h5 style="padding-top: 10px">Why Us?</h5>
    <div class="row">
        <div class="col-sm-9 mainbar">
            <section style="border:1px solid #a3a3a3;padding:30px;">
                <p>
                    <?= $about[0]->why_us ?>
                </p>
                <div class="clearfix"></div>
            </section>
        </div>
        <div class="col-sm-3 sidebar">
            <!-- widget instructor -->
            <aside class="widget-instructor" style="border:1px solid #a3a3a3;padding:30px;">
                <div class="row">
                    <h2>ABOUT US</h2>
                    <hr class="divider-big"/>
                    <a href="<?= base_url() ?>home/who_we_are">
                        <img class="col-sm-12 img-responsive"
                             src="<?= base_url() ?>assets/images/about_us/<?= $about[0]->image ?>"
                             style="margin-top:20px;"/></br>
                    </a>
                    <h2>NOTICE BOARD</h2>
                    <div class="clearfix"></div>
                    <a href="">
                        <img src="img/admission-open.gif" class="img-responsive" alt="" style="padding-left:15px;">
                    </a>
                    <h2 style="font-size:23px;">VISIT OUR GALLERY</h2>
                    <a href="">
                        <img src="img/image-gallery.jpg" class="img-responsive" alt="" style="padding-left:15px;">
                    </a>
                    <a href="">
                        <img src="img/fees.png" class="img-responsive" alt=""
                             style="padding-top:20px;padding-left:15px;">
                    </a>
                    <a href="">
                        <img src="img/RESULT.jpg" class="img-responsive" alt=""
                             style="padding-top:20px;padding-left:15px;">
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