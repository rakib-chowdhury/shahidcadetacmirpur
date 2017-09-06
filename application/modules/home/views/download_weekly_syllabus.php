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
                    style="border:1px solid #e3e3e3;border-radius:3px;padding:10px;text-align:center;">
                    Download<?= ' ' . $submenu ?></h3>
                <div class="col-lg-12" style="padding:10px;">
                    <form action="<?= base_url() ?>home/<?= $a ?>" method="post">
                        <div class="col-md-3">
                            <label for="year_id" style="font-size: medium">Year</label>
                            <select id="year_id" name="year_id"
                                    class="select2-container form-control select2">
                                <option value="0">Select A Year</option>
                                <?php foreach ($year_month as $u) { ?>
                                    <option value="<?= $u->year_id ?>"><?= $u->year_id ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="month_id" style="font-size: medium">Batch</label>
                            <select id="batch_id" name="batch_id"
                                    class="select2-container form-control select2">
                                <option value="0">Select A Batch</option>
                                <?php foreach ($batch_info as $u) { ?>
                                    <option value="<?= $u->id ?>"><?= $u->batch_name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="month_id" style="font-size: medium">Month</label>
                            <select id="month_id" name="month_id"
                                    class="select2-container form-control select2">
                                <option value="0">Select A Month</option>
                                <?php foreach ($month_info as $u) { ?>
                                    <option value="<?= $u->id ?>"><?= $u->month_name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="month_id" style="font-size: medium">Week</label>
                            <select id="week" name="week"
                                    class="select2-container form-control select2">
                                <option value="0">Select A Week</option>
                                <?php foreach ($year_month as $u) { ?>
                                    <option value="<?= $u->week ?>"><?= $u->week ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <button type="submit" name='submit' value='1'
                                    style='margin-top: 60%;margin-left: 970%;' class='button-color btn btn-raised'>
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
                <?php if ($show_div == 1) { ?>
                    <div>
                        <table class="table table-bordered table-striped mb-none custom-table" id="datatable-default">
                            <thead>
                            <tr style="background-color: #1a3156; color: white">
                                <th style="text-align: center" colspan="4">Download Links</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ($content == null) {
                                echo 'No Data Found';
                            } else { ?>
                                <?php foreach ($content as $row) { ?>
                                    <tr class="gradeX">
                                        <td>
                                            <a href="<?= base_url() ?>assets/downloads/weekly_syllabus/<?= $row->weekly_syllabus ?>">Download
                                                Weekly Result For <?= $row->week . ' ' ?>Week
                                                Of <?= ' ' . $row->month_name ?></a></td>
                                    </tr>
                                <?php }
                            } ?>
                            </tbody>
                        </table>
                    </div>
                <?php } ?>
                <div class="clearfix"></div>

            </section>
        </div>
        <div class="col-sm-3 sidebar">
            <!-- widget instructor -->
            <aside class="widget-instructor" style="border:1px solid #a3a3a3;padding:30px;">
                <div class="row">
                    <h2 style="color: #0a0a0a;background-color: white">ABOUT US</h2>
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