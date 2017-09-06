<?php $this->load->view('admin/header_links'); ?>


<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/select2/select2.css" />
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Success Gallery</h2>

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
                <li><span>Show Success Gallery</span></li>
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
            <h2 class="panel-title">Show Success Gallery</h2>
            <hr>
            <?php if(sizeof($success_gallery) < 8) { ?>
            <div>
                <a href="<?= base_url() ?>admin/success_gallery_image_add" class="btn btn-success btn-rounded">Add Gallery Image</a>
            </div>
            <?php }else{ ?>
                <p id="image_size" style="color: red; ">
                    <?php echo "Maximum Image Limit: 8. You need to delete some pictures to upload again."; ?>
                </p>
            <?php } ?>

        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                <tr>
                    <th style="text-align: center">#</th>
                    <th style="text-align: center">Image</th>
                    <th style="text-align: center; width: 15%;">
                        <span class="glyphicon glyphicon-wrench"></span>
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php if($success_gallery == null){echo 'No Data Found';}else{ ?>
                <?php foreach ($success_gallery as $key=>$row) { ?>
                <tr class="gradeX">
                    <td><?= $key+1 ?></td>
                    <td>
                        <img style="width: 140px; height: 80px;" src="<?= base_url();?>assets/images/success_gallery/<?= $row->image?>"
                             alt="no img">
                    </td>
                    <td>
                        <a href="<?= base_url() ?>admin/success_gallery_image_edit/<?= $row->id ?>" style="padding-left: 30px">
                                <span data-toggle="tooltip" data-placement="top" title="Replace"
                                      class="glyphicon glyphicon-edit"></span>
                        </a>&nbsp;
                        <a href="<?= base_url() ?>admin/delete_success_gallery_info/<?= $row->id ?>"
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
