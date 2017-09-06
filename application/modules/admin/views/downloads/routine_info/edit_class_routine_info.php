<?php $this->load->view('admin/header_links'); ?>

<!-- Specific Page Vendor CSS -->

<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Class Routine Info</h2>

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
                <li><span>Class Routine Info</span></li>
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
                                    <h2 class="panel-title">Edit Class Routine Info</h2>
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal form-bordered" method="post" enctype="multipart/form-data"
                                          action="<?= site_url('admin/class_routine_info_edit_post')?>">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"><span
                                                    style="color: red">*</span>Year</label>
                                            <div class="col-md-6">
                                                <div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
                                                    <input type="text" name="year_id" id="year" required data-plugin-datepicker
                                                           class="form-control" value="<?= $class_routine_info[0]->year_id ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="admission_start"><span
                                                    style="color: red">*</span>Select Medium</label>
                                            <div class="col-md-6">
                                                <select id="medium" name="medium" required
                                                        class="select2-container form-control select2">
                                                    <option value="">Choose A Medium</option>
                                                    <option value="bangla" <?php if($class_routine_info[0]->medium == "bangla"){echo 'selected';} ?>>Bangla</option>
                                                    <option value="english" <?php if($class_routine_info[0]->medium == "english"){echo 'selected';} ?>>English</option>
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
                                                        <option value="<?= $u->id ?>" <?php if($u->id == $class_routine_info[0]->batch_id){echo 'selected';} ?>><?= $u->batch_name ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputDefault"><span
                                                    style="color: red">*</span>Routine File</label>
                                            <div class="col-md-6">
                                                <input type="file" class="form-control" id="class_routine"
                                                       name="class_routine">
                                            </div>
                                        </div>
                                        <input type="hidden" class="form-control" id="id"
                                               name="id" value="<?= $class_routine_info[0]->id ?>">
                                        <input type="hidden" class="form-control" id="class_routine_old"
                                               name="class_routine_old" value="<?= $class_routine_info[0]->class_routine ?>">
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

