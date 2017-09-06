<?php $this->load->view('admin/header_links'); ?>


<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/summernote/summernote.css"/>
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/summernote/summernote-bs3.css"/>
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/dropify/dist/css/dropify.min.css">

<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Meal Info</h2>

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
                <li><span>Meal Info</span></li>
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
                                    <h2 class="panel-title">Add Meal Info</h2>
                                    <hr>
                                    <div>
                                        <a href="<?= base_url() ?>admin/meal_name_add" class="btn btn-success btn-rounded">Add Meal Name</a>
                                    </div>
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal form-bordered" method="post"
                                          action="meal_info_add_post">
                                        <div class="form-group col-md-12">
                                            <div class="form-group" align="center">
                                                <label class="col-md-3 control-label" for="admission_start"><span
                                                        style="color: red">*</span>Select Day</label>
                                                <div class="col-md-6">
                                                    <select id="day_id" name="day_id" required class="select2-container form-control select2">
                                                        <option value="">Choose A Day</option>
                                                        <?php foreach ($day_info as $row) { ?>
                                                            <option value="<?= $row->id ?>"><?= $row->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="class_start">Meal</label>
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        <input type="text" readonly class="form-control" required
                                                               id="breakfast"
                                                               name="breakfast" value="<?= $timing[0]->meal_name.'('.$timing[0]->time.')' ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="details"><span
                                                        style="color: red">*</span>Details</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" required id="b_details"
                                                           name="b_details" placeholder="Details">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="class_start">Meal</label>
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        <input type="text" readonly class="form-control" required
                                                               id="tiffin_first"
                                                               name="tiffin_first" value="<?= $timing[1]->meal_name.'('.$timing[1]->time.')' ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="details"><span
                                                        style="color: red">*</span>Details</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" required id="t1_details"
                                                           name="t1_details" placeholder="Details">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="class_start">Meal</label>
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        <input type="text" readonly class="form-control" required
                                                               id="lunch"
                                                               name="lunch" value="<?= $timing[2]->meal_name.'('.$timing[2]->time.')' ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="details"><span
                                                        style="color: red">*</span>Details</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" required id="details"
                                                           name="l_details" placeholder="Details">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="class_start">Meal</label>
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        <input type="text" readonly class="form-control" required
                                                               id="tiffin_second"
                                                               name="tiffin_second" value="<?= $timing[3]->meal_name.'('.$timing[3]->time.')' ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="details"><span
                                                        style="color: red">*</span>Details</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" required id="details"
                                                           name="t2_details" placeholder="Details">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="class_start">Meal</label>
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        <input type="text" readonly class="form-control" required
                                                               id="dinner"
                                                               name="dinner" value="<?= $timing[4]->meal_name.'('.$timing[4]->time.')' ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="details"><span
                                                        style="color: red">*</span>Details</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" required id="details"
                                                           name="d_details" placeholder="Details">
                                                </div>
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

