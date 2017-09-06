<?php $this->load->view('admin/header_links'); ?>


<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/dropzone/css/basic.css" />
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/dropzone/css/dropzone.css" />

<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Slider Image</h2>

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
                <li><span>Slider Image</span></li>
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
                        <div class="col-xs-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>

                                    <h2 class="panel-title">Slider Image</h2>
                                </header>
                                <div class="panel-body">
                                    <table class="table table-bordered table-striped mb-none" id="datatable-default">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center">#</th>
                                            <th style="text-align: center">Image</th>
                                            <th style="text-align: center">Description</th>
                                            <th style="text-align: center; width: 15%;">
                                                <span class="glyphicon glyphicon-wrench"></span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if($slider_info == null){echo 'No Data Found';}else{ ?>
                                            <?php foreach ($slider_info as $key=>$row) { ?>
                                                <tr class="gradeX">
                                                    <td><?= $key+1 ?></td>
                                                    <td>
                                                        <img style="width: 80px; height: 40px;" src="<?= base_url();?>assets/images/slider/<?= $row->image?>"
                                                             alt="no img">
                                                    </td>
                                                    <td><?= $row->description?></td>
                                                    <td>
                                                        <a style="padding-left: 30px" data-toggle="modal" data-target="#myModal_<?=$row->id?>">
                                                            <span style="color:green" data-toggle="tooltip" data-placement="top" title="Edit"
                                                                class="glyphicon glyphicon-plus">
								                            </span>
                                                        </a>&nbsp;
                                                        <a href="<?= base_url() ?>admin/delete_slider_info/<?= $row->id ?>"
                                                            <span data-toggle="tooltip" data-placement="top" title="Delete"
                                                                  style="color: red" class="glyphicon glyphicon-trash">
                                                            </span>
                                                        </a>
                                                        <div id="myModal_<?=$row->id?>" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        <h4 class="modal-title">Slider Image Description Add</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form class="form-horizontal form-bordered" method="post"
                                                                              action="slider_image_description_add_post" enctype="multipart/form-data">
                                                                            <div class="form-group">
                                                                                <label class="col-md-3 control-label" for="description"><span
                                                                                        style="color: red">*</span>Description</label>
                                                                                <input type="hidden" name="id" id="id" value="<?= $row->id ?>">
                                                                                <div class="col-md-6">
                                                                                    <textarea type="text" class="form-control" required id="description"
                                                                                           name="description" ><?= $row->description?></textarea>
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
<script src="<?= base_url() ?>assets/vendor/dropzone/dropzone.js"></script>
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
<script>
    function myfunction() {
        var image = document.getElementById('slider_image').value;
        if (image == null || image == '') {
            document.getElementById('empty_image_msg').style.display = 'block';
            return false;
        }

    }
</script>

<script type="text/javascript">

    Dropzone.autoDiscover = false;
    var fileList = new Array;
    var i = 0;
    $(document).ready(function () {
        $("#my-dropzone").dropzone({
            maxFiles: 3,
            url: "<?= site_url('admin/upload') ?>",
            acceptedFiles: "image/*",
            addRemoveLinks: "true",
            dictMaxFilesExceeded: "Maximum upload limit reached",
            dictInvalidFileType: "upload only JPG/PNG/GIF",
            success: function (file, response) {
                console.log(response);
            }
        });
    })

</script>

<?php $this->load->view('admin/footer_links'); ?>

