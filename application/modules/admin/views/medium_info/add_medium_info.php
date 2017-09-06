<?php $this->load->view('admin/header_links'); ?>


<!-- Specific Page Vendor CSS -->

<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Medium Info</h2>

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
                <li><span>Medium Info</span></li>
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
                                    <h2 class="panel-title">Add Medium Info</h2>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="<?= base_url() ?>admin/batch_add"
                                               class="btn btn-success btn-rounded">Add New Batch</a>
                                        </div>
                                    </div>

                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal form-bordered" method="post"
                                          action="medium_info_add_post">
                                        <div class="row col-md-12">
                                            <div class="form-group col-md-6">
                                                <label class="col-md-4 control-label" for="admission_start"><span
                                                        style="color: red">*</span>Select Medium</label>
                                                <div class="col-md-6">
                                                    <select id="medium" name="medium"
                                                            class="select2-container form-control select2">
                                                        <option value="0">Choose A Medium</option>
                                                        <option value="bangla">Bangla</option>
                                                        <option value="english">English</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="col-md-4 control-label" for="class_start"><span
                                                        style="color: red">*</span>Select Batch</label>
                                                <div class="col-md-6">
                                                    <select id="batch_id" name="batch_id"
                                                            class="select2-container form-control select2">
                                                        <option value="0">Choose A Batch</option>
                                                        <?php foreach ($batch_info as $u) { ?>
                                                            <option value="<?= $u->id ?>"><?= $u->batch_name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label" for="class_start">Category</label>
                                                <div class="col-md-12">
                                                    <input type="text" readonly class="form-control" required
                                                           id="category_one"
                                                           name="category_one" value="Non-Residential">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class=" control-label" for="details"><span
                                                        style="color: red">*</span>Admission Charge</label>
                                                <div class="col-md-12">
                                                    <input type="text" onkeyup="checkNumber(this.id)" class="form-control"
                                                           required id="admission_charge"
                                                           name="nr_admission_charge" placeholder="Admission Charge...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="details"><span
                                                        style="color: red">*</span>Monthly Salary</label>
                                                <div class="col-md-12">
                                                    <input type="text" onkeyup="checkNumber(this.id)" class="form-control"
                                                           required id="monthly_salary"
                                                           name="nr_monthly_salary" placeholder="Monthly Salary...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="details"><span
                                                        style="color: red">*</span>Advance Payment</label>
                                                <div class="col-md-12">
                                                    <input type="text" onkeyup="checkNumber(this.id)" class="form-control"
                                                           required id="advance_payment"
                                                           name="nr_advance_payment" placeholder="Advance Payment...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label" for="class_start">Category</label>
                                                <div class="col-md-12">
                                                    <input type="text" readonly class="form-control" required
                                                           id="category_two"
                                                           name="category_two" value="Residential">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class=" control-label" for="details"><span
                                                        style="color: red">*</span>Admission Charge</label>
                                                <div class="col-md-12">
                                                    <input type="text" onkeyup="checkNumber(this.id)" class="form-control"
                                                           required id="admission_charge"
                                                           name="r_admission_charge" placeholder="Admission Charge...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="details"><span
                                                        style="color: red">*</span>Monthly Salary</label>
                                                <div class="col-md-12">
                                                    <input type="text" onkeyup="checkNumber(this.id)" class="form-control"
                                                           required id="monthly_salary"
                                                           name="r_monthly_salary" placeholder="Monthly Salary...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="details"><span
                                                        style="color: red">*</span>Advance Payment</label>
                                                <div class="col-md-12">
                                                    <input type="text" onkeyup="checkNumber(this.id)" class="form-control"
                                                           required id="advance_payment"
                                                           name="r_advance_payment" placeholder="Advance Payment...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label" for="class_start">Category</label>
                                                <div class="col-md-12">
                                                    <input type="text" readonly class="form-control" required
                                                           id="category_three"
                                                           name="category_three" value="Day Care">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class=" control-label" for="details"><span
                                                        style="color: red">*</span>Admission Charge</label>
                                                <div class="col-md-12">
                                                    <input type="text" onkeyup="checkNumber(this.id)" class="form-control"
                                                           required id="admission_charge"
                                                           name="d_admission_charge" placeholder="Admission Charge...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="details"><span
                                                        style="color: red">*</span>Monthly Salary</label>
                                                <div class="col-md-12">
                                                    <input type="text" onkeyup="checkNumber(this.id)" class="form-control"
                                                           required id="monthly_salary"
                                                           name="d_monthly_salary" placeholder="Monthly Salary...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="details"><span
                                                        style="color: red">*</span>Advance Payment</label>
                                                <div class="col-md-12">
                                                    <input type="text" onkeyup="checkNumber(this.id)" class="form-control"
                                                           required id="advance_payment"
                                                           name="d_advance_payment" placeholder="Advance Payment...">
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

