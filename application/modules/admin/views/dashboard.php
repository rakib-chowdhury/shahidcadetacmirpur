<?php $this->load->view('admin/header_links'); ?>


<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css"/>
<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css"/>
<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/morris/morris.css"/>

<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Dashboard</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Dashboard</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 col-sm-4 download-form">
                    <a href="<?= base_url() ?>admin/show_person_info" class="dash-titles">
                        <div class="panel panel-hover dash-panel" style="background: #1ABC9C; padding: 5%">
                            <i class="fa fa-archive" style="font-size: 400%; color: white" aria-hidden="true"></i>
                            <div class="bubbles"><strong><?= sizeof($person_info); ?></strong></div>
                            <h5 style="color: white">Person</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 download-form">
                    <a href="<?= base_url() ?>admin/slider_description_add" class="dash-titles">
                        <div class="panel panel-hover dash-panel" style="background: #FB6E52; padding: 5%">
                            <i class="fa fa-archive" style="font-size: 400%; color: white" aria-hidden="true"></i>
                            <div class="bubbles "><strong><?= sizeof($slider_info); ?></strong></div>
                            <h5 style="color: white">Slider Image</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 download-form">
                    <a href="<?= base_url() ?>admin/show_gallery_info" class="dash-titles">
                        <div class="panel panel-hover dash-panel" style="background: #11A7DB; padding: 5%">
                            <i class="fa fa-archive" style="font-size: 400%; color: white" aria-hidden="true"></i>
                            <div class="bubbles "><strong><?= sizeof($gallery_info); ?></strong></div>
                            <h5 style="color: white">Gallery Image</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 download-form">
                    <a href="<?= base_url() ?>admin/show_weekly_result_info" class="dash-titles">
                        <div class="panel panel-hover dash-panel" style="background: #11A7DB; padding: 5%">
                            <i class="fa fa-archive" style="font-size: 400%; color: white"  aria-hidden="true"></i>
                            <div class="bubbles "><strong><?= sizeof($weekly_result_info); ?></strong></div>
                            <h5 style="color: white">Weekly Result</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 download-form">
                    <a href="<?= base_url() ?>admin/show_weekly_syllabus_info" class="dash-titles">
                        <div class="panel panel-hover dash-panel" style="background: #435059;padding: 5%">
                            <i class="fa fa-archive" style="font-size: 400%; color: white" aria-hidden="true"></i>
                            <div class="bubbles "><strong><?= sizeof($weekly_syllabus_info); ?></strong></div>
                            <h5 style="color: white">Weekly Syllabus</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 download-form">
                    <a href="<?= base_url() ?>admin/show_term_result" class="dash-titles">
                        <div class="panel panel-hover dash-panel" style="background: #DE291E;padding: 5% ">
                            <i class="fa fa-archive" style="font-size: 400%; color: white" aria-hidden="true"></i>
                            <div class="bubbles"><strong><?= sizeof($slider_info); ?></strong></div>
                            <h5 style="color: white;">Term Results</h5>
                        </div>
                    </a>
                </div>
            </div><!-- /row -->
        </div>
    <!-- end: page -->
</section>
</div>

<?php $this->load->view('admin/footer'); ?>
<!-- Specific Page Vendor -->
<script src="<?= base_url(); ?>assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="<?= base_url(); ?>assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
<script src="<?= base_url(); ?>assets/vendor/jquery-appear/jquery.appear.js"></script>
<script src="<?= base_url(); ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="<?= base_url(); ?>assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
<script src="<?= base_url(); ?>assets/vendor/flot/jquery.flot.js"></script>
<script src="<?= base_url(); ?>assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
<script src="<?= base_url(); ?>assets/vendor/flot/jquery.flot.pie.js"></script>
<script src="<?= base_url(); ?>assets/vendor/flot/jquery.flot.categories.js"></script>
<script src="<?= base_url(); ?>assets/vendor/flot/jquery.flot.resize.js"></script>
<script src="<?= base_url(); ?>assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
<script src="<?= base_url(); ?>assets/vendor/raphael/raphael.js"></script>
<script src="<?= base_url(); ?>assets/vendor/morris/morris.js"></script>
<script src="<?= base_url(); ?>assets/vendor/gauge/gauge.js"></script>
<script src="<?= base_url(); ?>assets/vendor/snap-svg/snap.svg.js"></script>
<script src="<?= base_url(); ?>assets/vendor/liquid-meter/liquid.meter.js"></script>
<script src="<?= base_url(); ?>assets/vendor/jqvmap/jquery.vmap.js"></script>
<script src="<?= base_url(); ?>assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
<script src="<?= base_url(); ?>assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="<?= base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
<script src="<?= base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
<script src="<?= base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
<script src="<?= base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
<script src="<?= base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
<script src="<?= base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>


<?php $this->load->view('admin/footer_links'); ?>
