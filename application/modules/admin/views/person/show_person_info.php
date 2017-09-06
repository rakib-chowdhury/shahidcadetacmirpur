<?php $this->load->view('admin/header_links'); ?>


<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/select2/select2.css" />
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Person Info</h2>

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
                <li><span>Show Person Info</span></li>
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
            <h2 class="panel-title">Show Person Info</h2>
            <hr>
            <?php if(sizeof($person_info) < 2){ ?>
            <div>
                <a href="<?= base_url() ?>admin/person_add" class="btn btn-success btn-rounded">Add Person Info</a>
            </div>
            <?php } ?>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                <tr>
                    <th style="text-align: center">#</th>
                    <th style="text-align: center">Image</th>
                    <th style="text-align: center">Name</th>
                    <th style="text-align: center">Designation</th>
                    <th style="text-align: center">Phone</th>
                    <th style="text-align: center; width: 15%;">
                        <span class="glyphicon glyphicon-wrench"></span>
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php if($person_info == null){echo 'No Data Found';}else{ ?>
                <?php foreach ($person_info as $key=>$row) { ?>
                <tr class="gradeX">
                    <td><?= $key+1 ?></td>
                    <td>
                        <img style="width: 80px; height: 40px;" src="<?= base_url();?>assets/images/person/<?= $row->image?>"
                             alt="no img">
                    </td>
                    <td><?= $row->name ?></td>
                    <td><?= $row->designation ?></td>
                    <td><?= $row->phone ?></td>
                    <td>
                        <a style="padding-left: 30px" data-toggle="modal" data-target="#myModal_<?=$row->id?>">
							    <span style="color:green" data-toggle="tooltip" data-placement="top" title="View"
                                      class="glyphicon glyphicon-eye-open">
								</span>
                        </a>&nbsp;
                        <a href="<?= base_url() ?>admin/edit_person_info/<?= $row->id ?>" >
                                <span data-toggle="tooltip" data-placement="top" title="Edit"
                                      class="glyphicon glyphicon-edit"></span>
                        </a>&nbsp;
                        <a href="<?= base_url() ?>admin/delete_person_info/<?= $row->id ?>"
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
                                        <table class="table table-bordered table-striped">
                                            <tr>
                                                <td colspan="2">
                                                    <img style="width:100px; height:80px;"
                                                         src="<?= base_url() ?>assets/images/person/<?= $row->image ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px;">Name</td>
                                                <td style="padding:5px;"><?= $row->name ?></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px;">Designation</td>
                                                <td style="padding:5px;"><?= $row->designation ?></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px;">Message</td>
                                                <td style="padding:5px;"><?= $row->message ?></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px;">Address</td>
                                                <td style="padding:5px;"><?= $row->address ?></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px;">Phone</td>
                                                <td style="padding:5px;"><?= $row->phone ?></td>
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

<?php $this->load->view('admin/footer_links'); ?>
