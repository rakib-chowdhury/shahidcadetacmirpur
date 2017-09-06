<?php $this->load->view('admin/header_links'); ?>


<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/dropzone/css/basic.css" />
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/dropzone/css/dropzone.css" />

<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Slider Image</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="<?= base_url() ?>admin">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>admin">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li><span>Slider Image</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row">
        <div class="col-md-6 col-lg-12 col-xl-6">
            <section class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>

                                    <h2 class="panel-title">Slider Image</h2>
                                    <hr>
                                    <div>
                                        <a href="<?= base_url() ?>admin/slider_description_add" class="btn btn-success btn-rounded">Add Image Description</a>
                                    </div>
                                </header>
                                <div class="panel-body">
                                    <div id="my-dropzone" class="dropzone">

                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- end: page -->
</section>
<?php $this->load->view('admin/footer'); ?>
<!-- Specific Page Vendor -->
<script src="<?= base_url() ?>assets/vendor/dropzone/dropzone.js"></script>
<script type="text/javascript">
    function checkNumber(id) {
        var tmp_num = $('#' + id).val();
        tmp_num = tmp_num.replace(/\s+/g, '');

        $('#' + id).val(tmp_num);
        var tmp_num = $('#' + id).val();
        if (tmp_num == null || isNaN(tmp_num)) {
            var x = document.getElementById(id);
            x.value = x.value.replace(/[^0-9]/, '');
        }
    }
</script>
<script>
    function myfunction() {
        var image = document.getElementById('slider_image').value;
        if (image == null || image == '') {
            document.getElementById('empty_image_msg').style.display = 'block';
            return false;
        }

    }
</script>

<script type="text/javascript">

    Dropzone.autoDiscover = false;
    var fileList = new Array;
    var i = 0;
    $(document).ready(function () {
        $("#my-dropzone").dropzone({
            maxFiles: 3,
            url: "<?= site_url('admin/upload') ?>",
            acceptedFiles: "image/*",
            addRemoveLinks: "true",
            dictMaxFilesExceeded: "Maximum upload limit reached",
            dictInvalidFileType: "upload only JPG/PNG/GIF",
            
            success: function (file, response) {
                console.log(response);
            }
        });
    })

</script>

<?php $this->load->view('admin/footer_links'); ?>

