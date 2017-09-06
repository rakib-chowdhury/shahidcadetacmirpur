<?php $this->load->view('admin/header_links'); ?>


<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/select2/select2.css" />
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

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
                </li>
                <li><span>Show Success Info</span></li>
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
            <h2 class="panel-title">Show Success Info</h2>
            <hr>
            <div>
                <a href="<?= base_url() ?>admin/success_info_add" class="btn btn-success btn-rounded">Add Success Info</a>
            </div>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                <tr>
                    <th style="text-align: center">#</th>
                    <th style="text-align: center">Year</th>
                    <th style="text-align: center">Total Examinee</th>
                    <th style="text-align: center">Allowed(Written)</th>
                    <th style="text-align: center">Allowed(Admission)</th>
                    <th style="text-align: center; width: 15%;">
                        <span class="glyphicon glyphicon-wrench"></span>
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php if($success_info == null){echo 'No Data Found';}else{ ?>
                <?php foreach ($success_info as $key=>$row) { ?>
                <tr class="gradeX">
                    <td><?= $key+1 ?></td>
                    <td><?= $row->year ?></td>
                    <td><?= $row->total_examinee ?></td>
                    <td><?= $row->allowed_written ?></td>
                    <td><?= $row->allowed_final ?></td>
                    <td>
                        <a href="<?= base_url() ?>admin/edit_success_info/<?= $row->id ?>" style="padding-left: 40px" >
                                <span data-toggle="tooltip" data-placement="top" title="Edit"
                                      class="glyphicon glyphicon-edit"></span>
                        </a>&nbsp;
                        <a href="<?= base_url() ?>admin/delete_success_info/<?= $row->id ?>"
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
<!--                                        <table class="table table-bordered table-striped">-->
<!--                                            <tr>-->
<!--                                                <td colspan="2">-->
<!--                                                    <img style="width:100px; height:80px;"-->
<!--                                                         src="--><?//= base_url() ?><!--assets/images/person/--><?//= $row->image ?><!--">-->
<!--                                                </td>-->
<!--                                            </tr>-->
<!--                                            <tr>-->
<!--                                                <td style="padding:5px;">Name</td>-->
<!--                                                <td style="padding:5px;">--><?//= $row->name ?><!--</td>-->
<!--                                            </tr>-->
<!--                                            <tr>-->
<!--                                                <td style="padding:5px;">Designation</td>-->
<!--                                                <td style="padding:5px;">--><?//= $row->designation ?><!--</td>-->
<!--                                            </tr>-->
<!--                                            <tr>-->
<!--                                                <td style="padding:5px;">Message</td>-->
<!--                                                <td style="padding:5px;">--><?//= $row->message ?><!--</td>-->
<!--                                            </tr>-->
<!--                                            <tr>-->
<!--                                                <td style="padding:5px;">Address</td>-->
<!--                                                <td style="padding:5px;">--><?//= $row->address ?><!--</td>-->
<!--                                            </tr>-->
<!--                                            <tr>-->
<!--                                                <td style="padding:5px;">Phone</td>-->
<!--                                                <td style="padding:5px;">--><?//= $row->phone ?><!--</td>-->
<!--                                            </tr>-->
<!--                                        </table>-->
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
