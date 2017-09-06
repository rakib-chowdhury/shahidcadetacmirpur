<?php $this->load->view('admin/header_links'); ?>


<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/summernote/summernote.css" />
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/summernote/summernote-bs3.css"/>

<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Company Info</h2>

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
                <li><span>Company Info</span></li>
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
                                    <h2 class="panel-title">Add Company Info</h2>
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal form-bordered" method="post" action="company_add_post">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputDefault">Company Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputDefault">Phone</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputDefault">Company Website</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="website" name="website" placeholder="Company Website">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Company Address</label>
                                            <div class="col-md-9">
                                                <textarea class="summernote" name="address" id="address" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'>Start typing...</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9" align="center">
                                                <button type="submit" class="mb-xs mt-xs mr-xs btn btn-success">Submit</button>
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
</div>

<?php $this->load->view('admin/footer'); ?>
<!-- Specific Page Vendor -->
<script src="<?= base_url() ?>assets/vendor/summernote/summernote.js"></script>

<?php $this->load->view('admin/footer_links'); ?>
