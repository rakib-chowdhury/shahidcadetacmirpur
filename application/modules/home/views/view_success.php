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
                    style="border:1px solid #e3e3e3;border-radius:3px;padding:10px;text-align:center;"><?= $title ?></h3>
                <div>
                    <table class="table table-bordered table-striped mb-none custom-table">
                        <thead>
                        <tr style="">
                            <th style="text-align: center" color="white"><font color="white">Year</font></th>
                            <th style="text-align: center" color="white"><font color="white">Total Examinee</font></th>
                            <th style="text-align: center"><font color="white">Allowed(Written)</font></th>
                            <th style="text-align: center"><font color=white>Allowed(Final)</font></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($success_info as $u) { ?>
                            <tr class="gradeX">
                                <td><?= $u->year ?></td>
                                <td><?= $u->total_examinee ?></td>
                                <td><?= $u->allowed_written ?></td>
                                <td><?= $u->allowed_final ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <p class="custom-h3"
                   style="margin-top:20px;border:1px solid #e3e3e3;border-radius:3px;padding:10px;text-align: center;">
                    Total <font> <?= $year ?> </font>Years Of Success
                </p>
                <div>
                    <table class="table table-bordered table-striped mb-none">
                        <thead>
                        <tr>
                            <th style="text-align: center;">In Written Allowed</th>
                            <th style="text-align: center;">Finally Allowed</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="gradeX">
                            <td><?= $total_written ?></td>
                            <td><?= $total_allowed ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="clearfix"></div>
            </section>
        </div>
        <div class="col-sm-3 sidebar">
            <!-- widget instructor -->
            <aside class="widget-instructor" style="border:1px solid #a3a3a3;padding:30px;">
                <div class="row">
                    <h2 class="custom-h2">ABOUT US</h2>
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