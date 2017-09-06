<?php $this->load->view('admin/header_links'); ?>


<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/select2/select2.css" />
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

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
                </li>
                <li><span>Show Class Info</span></li>
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
            <h2 class="panel-title">Show Class Info</h2>
            <hr>
            <div>
                <a href="<?= base_url() ?>admin/class_add" class="btn btn-success btn-rounded">Add Class Info</a>
            </div>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="<?= base_url() ?>assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                <thead>
                <tr>
                    <th style="text-align: center">#</th>
                    <th style="text-align: center">Class Name</th>
                    <th style="text-align: center; width: 15%;">
                        <span class="glyphicon glyphicon-wrench"></span>
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php if($class_info == null){echo 'No Data Found';}else{ ?>
                <?php foreach ($class_info as $key=>$row) { ?>
                <tr class="gradeX">
                    <td><?= $key+1 ?></td>
                    <td><?= $row->class_name ?></td>
                    <td>
                        <a style="padding-left: 30px" data-toggle="modal" data-target="#myModal_<?=$row->id?>">
							    <span style="color:green" data-toggle="tooltip" data-placement="top" title="Edit"
                                      class="glyphicon glyphicon-edit">
								</span>
                        </a>&nbsp;
                        <a href="<?= base_url() ?>admin/delete_class_info/<?= $row->id ?>"
                                <span data-toggle="tooltip" data-placement="top" title="Delete"
                                      style="color: red" class="glyphicon glyphicon-trash"></span>
                        </a>
                        <div id="myModal_<?=$row->id?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Person Details</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal form-bordered" method="post"
                                              action="class_edit_post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="class_name"><span
                                                        style="color: red">*</span>Class Name</label>
                                                <input type="hidden" name="id" id="id" value="<?= $row->id ?>">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" required id="class_name"
                                                           name="class_name" value="<?= $row->class_name ?>">
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
