<?php $this->load->view('admin/header_links'); ?>

<!-- Specific Page Vendor CSS -->

<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Success Info</h2>

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
                <li><span>Success Info</span></li>
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
                                    <h2 class="panel-title">Edit Success Info</h2>
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal form-bordered" method="post" enctype="multipart/form-data"
                                          action="<?= site_url('admin/success_edit_post')?>">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"><span
                                                    style="color: red">*</span>Year</label>
                                            <div class="col-md-6">
                                                <div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
                                                    <input type="text" name="year" value="<?= $success_info[0]->year ?>" id="year" data-plugin-datepicker class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="designation">Total Examinee</label>
                                            <div class="col-md-6">
                                                <input type="text" onkeyup="checkNumber(this.id)" class="form-control" required id="total_examinee"
                                                       name="total_examinee" value="<?= $success_info[0]->total_examinee ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputDefault">Allowed Written</label>
                                            <div class="col-md-6">
                                                <input type="text" onkeyup="checkNumber(this.id)"
                                                       class="form-control" required id="allowed_written"
                                                       name="allowed_written" value="<?= $success_info[0]->allowed_written ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputDefault">Allowed Final</label>
                                            <div class="col-md-6">
                                                <input type="text" onkeyup="checkNumber(this.id)"
                                                       class="form-control" required id="allowed_final"
                                                       name="allowed_final" value="<?= $success_info[0]->allowed_final ?>">
                                            </div>
                                        </div>
                                        <input type="hidden" class="form-control" id="id"
                                               name="id" value="<?= $success_info[0]->id ?>">
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
    $("#year").datepicker({
        format: "yyyy",
        startView: "years",
        minViewMode: "years"
    });
</script>

<?php $this->load->view('admin/footer_links'); ?>

