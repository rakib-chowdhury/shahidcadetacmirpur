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
                <h3 class="custom-h3"
                    style="border:1px solid #e3e3e3;border-radius:3px;padding:10px;text-align:center"><?= $submenu ?></h3>
                <p style="margin-top:20px;border:1px solid #e3e3e3;border-radius:3px;padding:10px;" class="col-md-4">
                    <label for="address" style="color: #2b542c"><strong>Address:</strong></label>
                    <?= $content[0]->address ?>
                </p>
                <p style="margin-top:20px;border:1px solid #e3e3e3;border-radius:3px;padding:10px;margin-left: 15%"
                   class="col-md-5">
                    <label for="address" style="color: #2b542c"><strong>Phone:</strong></label>
                    <?= $content[0]->phone ?>
                    <label for="cell" style="color: #2b542c"><strong>Cell:</strong></label>
                    <?= $content[0]->cell ?>
                    <label for="website" style="color: #2b542c"><strong>Website:</strong></label>
                    <?= $content[0]->website ?>
                </p>
                <div class="clearfix"></div>
                <section style="border:1px solid #a3a3a3;padding:30px;">
                    <?php if ($this->session->flashdata('msg')) { ?>
                        <div class="alert alert-success">
                            <?= $this->session->flashdata('msg'); ?>
                        </div>
                    <?php } ?>
                    <h3 class="custom-h3"
                        style="border:1px solid #e3e3e3;border-radius:3px;padding:10px;text-align:center">Send Us A
                        Mail</h3>
                    <form action="<?= site_url('home/mail') ?>" method="post">
                        <div class="form">
                            <input type="text" name="name" id="name" placeholder="Your Name" required/>
                            <input type="email" name="email" id="email" placeholder="Your Email Address" required/>
                            <input type="text" name="phone" id="phone" placeholder="Your Phone Number" required/>
                            <textarea cols="90" rows="5" name="message" id="message"
                                      placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Message" required></textarea>
                            <button type="submit" class="button-color btn btn-primary" style="margin-left: 50%">Send
                            </button>
                        </div>
                    </form>
                </section>
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
<?php $this->load->view('home/footer_links'); ?>
</body>
</html>