<?php $this->load->view('admin/header_links'); ?>

<!-- Specific Page Vendor CSS -->

<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Weekly Result Info</h2>

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
                <li><span>Weekly Result Info</span></li>
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
                                    <h2 class="panel-title">Add Weekly Result Info</h2>
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal form-bordered" method="post"
                                          action="weekly_result_add_post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"><span
                                                    style="color: red">*</span>Year</label>
                                            <div class="col-md-6">
                                                <div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
                                                    <input type="text" name="year_id" id="year" required data-plugin-datepicker class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="class_start"><span
                                                    style="color: red">*</span>Select Month</label>
                                            <div class="col-md-6">
                                                <select id="month_id" name="month_id" required
                                                        class="select2-container form-control select2">
                                                    <option value="">Choose A Month</option>
                                                    <?php foreach ($month_info as $u) { ?>
                                                        <option value="<?= $u->id ?>"><?= $u->month_name ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="admission_start"><span
                                                    style="color: red">*</span>Select Week</label>
                                            <div class="col-md-6">
                                                <select id="week" name="week" required
                                                        class="select2-container form-control select2">
                                                    <option value="">Choose A Week</option>
                                                    <option value="1st">1st</option>
                                                    <option value="2nd">2nd</option>
                                                    <option value="3rd">3rd</option>
                                                    <option value="4th">4th</option>
                                                    <option value="5th">5th</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="admission_start"><span
                                                    style="color: red">*</span>Select Medium</label>
                                            <div class="col-md-6">
                                                <select id="medium" name="medium" required
                                                        class="select2-container form-control select2">
                                                    <option value="">Choose A Medium</option>
                                                    <option value="bangla">Bangla</option>
                                                    <option value="english">English</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="class_start"><span
                                                    style="color: red">*</span>Select Batch</label>
                                            <div class="col-md-6">
                                                <select id="batch_id" name="batch_id" required
                                                        class="select2-container form-control select2">
                                                    <option value="">Choose A Batch</option>
                                                    <?php foreach ($batch_info as $u) { ?>
                                                        <option value="<?= $u->id ?>"><?= $u->batch_name ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputDefault"><span
                                                    style="color: red">*</span>Result File</label>
                                            <div class="col-md-6">
                                                <input type="file" class="form-control" required id="weekly_result"
                                                       name="weekly_result">
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
<!-- Specific Page Vendor -->
<script src="<?= base_url() ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
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

