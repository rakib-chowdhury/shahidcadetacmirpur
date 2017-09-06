<?php $this->load->view('admin/header_links'); ?>


<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/summernote/summernote.css"/>
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/summernote/summernote-bs3.css"/>

<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Contact Info</h2>

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
                <li><span>Contact Info</span></li>
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
                                    <h2 class="panel-title">Edit Contact Info</h2>
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal form-bordered" method="post"
                                          action="<?= site_url('admin/contact_edit_post')?>">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Company
                                                Address</label>
                                            <div class="col-md-8">
                                                <textarea class="summernote" name="address" id="address"
                                                          data-plugin-summernote
                                                          data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'><?= $contact_info[0]->address ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputDefault">Phone</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="phone" name="phone"
                                                       value="<?= $contact_info[0]->phone ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputDefault">Cell</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="cell"
                                                       name="cell" value="<?= $contact_info[0]->cell ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputDefault">Bkash</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="bkash"
                                                       name="bkash" value="<?= $contact_info[0]->bkash ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputDefault">Company Website</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="website"
                                                       name="website" value="<?= $contact_info[0]->website ?>">
                                            </div>
                                        </div>

                                        <input type="hidden" class="form-control" required id="id"
                                               name="id" value="<?= $contact_info[0]->id ?>">
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
<!-- Specific Page Vendor -->
<script src="<?= base_url() ?>assets/vendor/summernote/summernote.js"></script>
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

<?php $this->load->view('admin/footer_links'); ?>

