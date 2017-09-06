<?php $this->load->view('admin/header_links'); ?>


<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/select2/select2.css" />
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Contact Info</h2>

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
                <li><span>Show Contact Info</span></li>
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
            <h2 class="panel-title">Show Contact Info</h2>
            <hr>
            <?php if(sizeof($contact_info) == 0) { ?>
            <div>
                <a href="<?= base_url() ?>admin/contact_add" class="btn btn-success btn-rounded">Add Contact Info</a>
            </div>
            <?php } ?>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                <tr>
                    <th style="text-align: center">#</th>
                    <th style="text-align: center">Address</th>
                    <th style="text-align: center">Phone</th>
                    <th style="text-align: center">Cell</th>
                    <th style="text-align: center">Bkash</th>
                    <th style="text-align: center">Website</th>
                    <th style="text-align: center; width: 15%;">
                        <span class="glyphicon glyphicon-wrench"></span>
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php if($contact_info == null){echo 'No Data Found';}else{ ?>
                <?php foreach ($contact_info as $key=>$row) { ?>
                <tr class="gradeX">
                    <td><?= $key+1 ?></td>
                    <td><?= $row->address ?></td>
                    <td><?= $row->phone ?></td>
                    <td><?= $row->cell ?></td>
                    <td><?= $row->bkash ?></td>
                    <td><?= $row->website ?></td>
                    <td>
                        <a href="<?= base_url() ?>admin/edit_contact_info/<?= $row->id ?>" style="padding-left: 30px">
                                <span data-toggle="tooltip" data-placement="top" title="Edit"
                                      class="glyphicon glyphicon-edit"></span>
                        </a>&nbsp;
                        <a href="<?= base_url() ?>admin/delete_contact_info/<?= $row->id ?>"
                                <span data-toggle="tooltip" data-placement="top" title="Delete"
                                      style="color: red" class="glyphicon glyphicon-trash"></span>
                        </a>
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
