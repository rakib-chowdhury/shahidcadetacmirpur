<?php $this->load->view('admin/header_links'); ?>


<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/summernote/summernote.css"/>
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/summernote/summernote-bs3.css"/>
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/dropify/dist/css/dropify.min.css">

<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Class Info</h2>

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
                <li><span>Class Info</span></li>
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
                        <div class="col-md-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    <h2 class="panel-title">Add Class Info</h2>
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal form-bordered" method="post"
                                          action="class_add_post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="class_name"><span
                                                    style="color: red">*</span>Class Name</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" required id="class_name"
                                                       name="class_name" placeholder="Class Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9" align="center">
                                                <button type="submit" class="mb-xs mt-xs mr-xs btn btn-success">Submit
                                                </button>
                                            </div>
                                        </div>

                                    </form>
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

<?php $this->load->view('admin/footer_links'); ?>

