<?php $this->load->view('admin/header_links'); ?>
<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/dropify/dist/css/dropify.min.css">

<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Gallery Info</h2>

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
                <li><span>Gallery Info</span></li>
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
                                    <h2 class="panel-title">Add Gallery Image</h2>
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal form-bordered" method="post"
                                          action="success_gallery_add_post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="control-label col-md-3">Image</label>

                                            <input required onchange="readURL(this);" type="file" id="gallery_image"
                                                   class="dropify" name="image" data-default-file="">

                                            <!--                                        <img style="display: none; padding-top: 5px;" id="show_img"
                                                                                         src="#" alt="no image">-->
                                                <span id="empty_image_msg"
                                                      style="display: none;color: red;">Input Image</span>
                                                <span id="p_img_err2" style="color: red; ">
                                                    <p id="image_size" style="color: red; ">
                                                        <?php echo "Image must be less than 1 MB"; ?>
                                                    </p>
                                                    <p id="img_err" style="color: red; ">
                                                        <?php echo form_error('image'); ?>
                                                    </p>
                                                </span>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9" align="center">
                                                <button type="submit" id="myBtn" class="mb-xs mt-xs mr-xs btn btn-success">Submit
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
<!-- Specific Page Vendor -->
<script src="<?= base_url() ?>assets/vendor/dropify/dist/js/dropify.min.js"></script>
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

    var img_extn = ['png', 'PNG', 'jpg', 'JPG', 'jpeg', 'JPEG'];
    function readURL(input) {
        if (input.files && input.files[0]) {
            var i_name = input.files[0]['name'].split('.');

            var img = false;
            $.each(img_extn, function (i, v) {
                if (i_name[i_name.length - 1] == v) {
                    img = true;
                }
            });
            if (input.files[0]['size'] > 1048576) {///1mb=1048576 bytes
                img = false;
            }
            if (img == false) {
                var x = document.getElementById('p_img_err2');
                x.style.color = 'red';
                x.innerText = 'Image should be png/PNG/jpg/JPG/jpeg/JPEG format and Image should be less than 1mb.';
                document.getElementById('myBtn').disabled = true;
                document.getElementById('p_img').value = '';
            } else {
                var x = document.getElementById('p_img_err2');
                x.style.color = 'red';
                x.innerText = '';
                document.getElementById('myBtn').disabled = false;
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#show_img')
                        .attr('src', e.target.result)
                        .width(848)
                        .height(460);
                };
                var x = document.getElementById('show_img');
                x.style.display = 'block';

                reader.readAsDataURL(input.files[0]);
            }
        }
    }

    function myfunction() {
        var image = document.getElementById('slider_image').value;
        if (image == null || image == '') {
            document.getElementById('empty_image_msg').style.display = 'block';
            return false;
        }

    }



</script>

<script>
    $(document).ready(function () {

        $('.dropify').dropify();


        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function (event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function (event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function (event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function (e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>

<?php $this->load->view('admin/footer_links'); ?>

