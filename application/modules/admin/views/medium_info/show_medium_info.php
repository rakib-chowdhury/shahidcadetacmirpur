<?php $this->load->view('admin/header_links'); ?>


<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/select2/select2.css" />
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

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
                </li>
                <li><span>Show Medium Info</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
            </div>
            <h2 class="panel-title">Show Medium Info</h2>
            <hr>
            <div>
                <a href="<?= base_url() ?>admin/medium_add" class="btn btn-success btn-rounded">Add Medium Info</a>
            </div>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                <tr>
                    <th style="text-align: center">#</th>
                    <th style="text-align: center">Medium</th>
                    <th style="text-align: center">Batch</th>
                    <th style="text-align: center">Admission Charge</th>
                    <th style="text-align: center; width: 15%;">
                        <span class="glyphicon glyphicon-wrench"></span>
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php if($medium_info == null){echo 'No Data Found';}else{ ?>
                    <?php foreach ($medium_info as $key=>$row) { ?>
                        <tr class="gradeX">
                            <td><?= $key+1 ?></td>
                            <td><?= $row->medium ?></td>
                            <td><?= $row->batch_name ?></td>
                            <td><?= $row->nr_admission_charge ?></td>
                            <td>
                                <a style="padding-left: 30px" data-toggle="modal" data-target="#myModal_<?=$row->id?>">
							    <span style="color:green" data-toggle="tooltip" data-placement="top" title="View"
                                      class="glyphicon glyphicon-eye-open">
								</span>
                                </a>&nbsp;
                                <a href="<?= base_url() ?>admin/edit_medium_info/<?= $row->id ?>" style="">
                                <span data-toggle="tooltip" data-placement="top" title="Edit"
                                      class="glyphicon glyphicon-edit"></span>
                                </a>&nbsp;
                                <a href="<?= base_url() ?>admin/delete_medium_info/<?= $row->id ?>"
                                <span data-toggle="tooltip" data-placement="top" title="Delete"
                                      style="color: red" class="glyphicon glyphicon-trash"></span>
                                </a>
                                <div id="myModal_<?=$row->id?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Medium Details</h4>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table table-bordered table-striped">
                                                    <tr>
                                                        <td style="padding:5px;">Medium</td>
                                                        <td style="padding:5px;"><?= $row->medium ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:5px;">Category</td>
                                                        <td style="padding:5px;"><?= $row->category_one ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:5px;">Batch</td>
                                                        <td style="padding:5px;"><?= $row->batch_name ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:5px;">Admission Charge</td>
                                                        <td style="padding:5px;"><?= $row->nr_admission_charge ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td style="padding:5px;">Monthly Salary</td>
                                                        <td style="padding:5px;"><?= $row->nr_monthly_salary ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:5px;">Advance Payment</td>
                                                        <td style="padding:5px;"><?= $row->nr_advance_payment ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:5px;">Category</td>
                                                        <td style="padding:5px;"><?= $row->category_two ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:5px;">Batch</td>
                                                        <td style="padding:5px;"><?= $row->batch_name ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:5px;">Admission Charge</td>
                                                        <td style="padding:5px;"><?= $row->r_admission_charge ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td style="padding:5px;">Monthly Salary</td>
                                                        <td style="padding:5px;"><?= $row->r_monthly_salary ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:5px;">Advance Payment</td>
                                                        <td style="padding:5px;"><?= $row->r_advance_payment ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:5px;">Category</td>
                                                        <td style="padding:5px;"><?= $row->category_three ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:5px;">Batch</td>
                                                        <td style="padding:5px;"><?= $row->batch_name ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:5px;">Admission Charge</td>
                                                        <td style="padding:5px;"><?= $row->d_admission_charge ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td style="padding:5px;">Monthly Salary</td>
                                                        <td style="padding:5px;"><?= $row->d_monthly_salary ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:5px;">Advance Payment</td>
                                                        <td style="padding:5px;"><?= $row->d_advance_payment ?></td>
                                                    </tr>

                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } }?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- end: page -->
</section>
</div>

<?php $this->load->view('admin/footer'); ?>
<!-- Specific Page Vendor -->
<script src="<?= base_url() ?>assets/vendor/select2/select2.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
<script src="<?= base_url() ?>assets/javascripts/tables/examples.datatables.default.js"></script>
<script src="<?= base_url() ?>assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
<script src="<?= base_url() ?>assets/javascripts/tables/examples.datatables.tabletools.js"></script>

<?php $this->load->view('admin/footer_links'); ?>
