<?php $this->load->view('admin/header_links'); ?>


<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/select2/select2.css" />
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Admission Info</h2>

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
                <li><span>Show Admission Info</span></li>
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
            <h2 class="panel-title">Show Schooling System Info</h2>
            <hr>
            <?php if(sizeof($schooling_info) == 0)  {?>
            <div>
                <a href="<?= base_url() ?>admin/schooling_system_add" class="btn btn-success btn-rounded">Add Schooling System Info</a>
            </div>
            <?php } ?>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                <tr>
                    <th style="text-align: center">#</th>
                    <th style="text-align: center">Rules & Facilities</th>
                    <th style="text-align: center">Residential Facilities</th>
                    <th style="text-align: center">Parent's Responsibility</th>
                    <th style="text-align: center; width: 15%;">
                        <span class="glyphicon glyphicon-wrench"></span>
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php if($schooling_info == null){echo 'No Data Found';}else{ ?>
                <?php foreach ($schooling_info as $key=>$row) { ?>
                <tr class="gradeX">
                    <td><?= $key+1 ?></td>
                    <td>
                        <img style="width: 80px; height: 40px;" src="<?= base_url();?>assets/images/schooling_system/<?= $row->rules_facilities?>"
                             alt="no img">
                    </td>
                    <td><?= $row->residential_facilities?></td>
                    <td>
                        <img style="width: 80px; height: 40px;" src="<?= base_url();?>assets/images/schooling_system/<?= $row->parent_responsibility?>"
                             alt="no img">
                    </td>
                    <td>
                        <a style="padding-left: 30px" data-toggle="modal" data-target="#myModal_<?=$row->id?>">
							    <span style="color:green" data-toggle="tooltip" data-placement="top" title="View"
                                      class="glyphicon glyphicon-eye-open">
								</span>
                        </a>&nbsp;
                        <a href="<?= base_url() ?>admin/edit_schooling_info/<?= $row->id ?>" >
                                <span data-toggle="tooltip" data-placement="top" title="Edit"
                                      class="glyphicon glyphicon-edit"></span>
                        </a>&nbsp;
                        <a href="<?= base_url() ?>admin/delete_schooling_info/<?= $row->id ?>"
                                <span data-toggle="tooltip" data-placement="top" title="Delete"
                                      style="color: red" class="glyphicon glyphicon-trash"></span>
                        </a>
                        <div id="myModal_<?=$row->id?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Schooling Info Details</h4>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bordered table-striped">
                                            <tr>
                                                <td colspan="2">
                                                    <img style="width:100px; height:80px;"
                                                         src="<?= base_url() ?>assets/images/schooling_system/<?= $row->rules_facilities ?>">
                                                    <img style="width:100px; height:80px;"
                                                         src="<?= base_url() ?>assets/images/schooling_system/<?= $row->parent_responsibility ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px;">Residential Facilities</td>
                                                <td style="padding:5px;"><?= $row->residential_facilities ?></td>
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
