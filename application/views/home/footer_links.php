

<script src="<?= base_url(); ?>assets/home/js/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyA-wMGy_omKYgvdSdmmh_QzXdomh_XsTwU"></script>
<script type="text/javascript"
		src="<?= base_url() ?>assets/vendor/infobox/src/infobox_packed.js"></script>
<script type='text/javascript' src='<?= base_url(); ?>assets/home/js/jquery.validate.min.js'></script>
<script src="<?= base_url(); ?>assets/home/js/jquery.form.min.js"></script>
<script src="<?= base_url(); ?>assets/home/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/home/js/TweenMax.min.js"></script>
<script src="<?= base_url(); ?>assets/home/js/main.js"></script>
<script src="<?= base_url(); ?>assets/home/js/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>assets/home/js/jquery-ui.min.js"></script>
<script src="<?= base_url(); ?>assets/home/js/jflickrfeed.min.js"></script>
<script src="<?= base_url(); ?>assets/home/js/jquery.fancybox.pack.js"></script>
<script src="<?= base_url(); ?>assets/home/js/jquery.fancybox-media.js"></script>
<script src="<?= base_url(); ?>assets/home/js/retina.min.js"></script>
<script src="<?= base_url(); ?>assets/home/js/jquery.tweet.js"></script>


<script type="text/javascript">
	function search_product() {
		var keyword = $("#search_id").val();
		if (keyword == '') {
		}
		else {
			$.ajax({
				url: "<?php echo site_url('home/search');?>",
				type: "post",
				data: {keyword: keyword},
				success: function (msg) {
					//console.log(msg);
					var data = JSON.parse(msg);
					var msg1 = '';
					$.each(data, function (i, v) {
						msg1 += '<li style="background-color: white; color: #0a001f!important;">'
							+ '<a href="' + v['link'] + '">' + v["label"] + '</a>'
							+ '</li>';
					});

					if (data.length == 0) {
						msg1 = '<li style="background-color: white; color: #0a001f!important;">No Match Found.</li>';
					}


					$('#res_div').html(msg1);
					console.log(msg);

				}
			});
		}
	}

	function close_search_div() {
		$("#search_div").css("visibility", "hidden");
		$("#search_div").css("opacity", "0");
	}

</script>
		