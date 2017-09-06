<?php $this->load->view('home/header_links'); ?>
<?php $this->load->view('home/header'); ?>
<!-- Header Ends -->
<div class="page-content grid-row clear-fix" style="margin-top:-5px;">
	<div class="page-title" style="background-image: url('<?= base_url() ?>assets/images/back_all.jpg')">
		<div class="grid-row">
			<h1>Admission</h1>
			<!-- bread crumb -->
			<nav class="bread-crumb">
				<a href="<?= base_url() ?>home">Home</a>
				<i class="fa fa-long-arrow-right"></i>
				<a>Admission</a>
			</nav>
			<!-- / bread crumb -->
		</div>
	</div>
	<div class="row">
		<div class="col-sm-9 mainbar">
			<section style="border:1px solid #a3a3a3;padding:30px;">
				<h3 class="custom-h3" style="border:1px solid #e3e3e3;border-radius:3px;padding:10px;text-align:center;"><?= $title ?></h3>
				<div>
					<img src="<?= base_url() ?>assets/images/admission_info/<?= $content_image ?>" style="width:100%;"/>
				</div>
				<p style="margin-top:20px;border:1px solid #e3e3e3;border-radius:3px;padding:10px;">
					<strong class="blue-text"><?= $admsn_title?> </strong>
					<?= $content_admission ?>
				</p>
				<p style="margin-top:20px;border:1px solid #e3e3e3;border-radius:3px;padding:10px;">
					<strong class="blue-text"><?= $class_title?></strong><br/>
					<?= $content_class ?>
				</p>
				<h3 style="text-align: center"><?= $contact_title ?></h3>
				<p style="text-align: center;">
					<?= $contact_details ?>
				</p>
				<h2>Fees &amp; Charges</h2>
				<div class="table-responsive" style="width:101%;">
					<table class="MsoTableLightShadingAccent1"
						   style="border-collapse: collapse; mso-table-layout-alt: fixed; border: none; mso-border-top-alt: solid #4F81BD 1.0pt; mso-border-top-themecolor: accent1; mso-border-bottom-alt: solid #4F81BD 1.0pt; mso-border-bottom-themecolor: accent1; mso-yfti-tbllook: 1184; mso-padding-alt: 0in 5.4pt 0in 5.4pt;"
						   cellspacing="0" cellpadding="0" border="1">
						<tbody>
						<tr>
							<td style="width: 218.75pt; border-top: solid #4F81BD 1.0pt; mso-border-top-themecolor: accent1; border-left: none; border-bottom: solid #4F81BD 1.0pt; mso-border-bottom-themecolor: accent1; border-right: none; padding: 0in 5.4pt 0in 5.4pt;"
								colspan="4" width="292" valign="top">
								<p class="MsoListParagraphCxSpFirst"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal; mso-yfti-cnfc: 5;">
									<b><span
											style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Non-Residential</span></b>
								</p>
							</td>
							<td style="width: 156.6pt; border-top: solid #4F81BD 1.0pt; mso-border-top-themecolor: accent1; border-left: none; border-bottom: solid #4F81BD 1.0pt; mso-border-bottom-themecolor: accent1; border-right: none; padding: 0in 5.4pt 0in 5.4pt;"
								colspan="3" width="209" valign="top">
								<p class="MsoListParagraphCxSpMiddle"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal; mso-yfti-cnfc: 1;">
									<b><span
											style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;">Residential</span></b>
								</p>
							</td>
							<td style="width: 156.55pt; border-top: solid #4F81BD 1.0pt; mso-border-top-themecolor: accent1; border-left: none; border-bottom: solid #4F81BD 1.0pt; mso-border-bottom-themecolor: accent1; border-right: none; padding: 0in 5.4pt 0in 5.4pt;"
								colspan="3" width="209" valign="top">
								<p class="MsoListParagraphCxSpLast"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal; mso-yfti-cnfc: 1;">
									<b><span
											style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;">Day-care</span></b>
								</p>
							</td>
						</tr>
						<tr>
							<td style="width: 1.0in; border: none; background: #D3DFEE; mso-background-themecolor: accent1; mso-background-themetint: 63; padding: 0in 5.4pt 0in 5.4pt;"
								width="96" valign="top">
								<p class="MsoListParagraphCxSpFirst"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal; mso-yfti-cnfc: 68;">
									<b><span
											style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;">Class</span></b>
								</p>
							</td>
							<td style="width: .75in; border: none; background: #D3DFEE; mso-background-themecolor: accent1; mso-background-themetint: 63; padding: 0in 5.4pt 0in 5.4pt;"
								width="72" valign="top">
								<p class="MsoListParagraphCxSpMiddle"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal; mso-yfti-cnfc: 64;">
									<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;">Admission charge</span>
								</p>
							</td>
							<td style="width: 42.15pt; border: none; background: #D3DFEE; mso-background-themecolor: accent1; mso-background-themetint: 63; padding: 0in 5.4pt 0in 5.4pt;"
								width="56" valign="top">
								<p class="MsoListParagraphCxSpMiddle"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal; mso-yfti-cnfc: 64;">
									<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;">Monthly salary</span>
								</p>
							</td>
							<td style="width: 50.6pt; border: none; background: #D3DFEE; mso-background-themecolor: accent1; mso-background-themetint: 63; padding: 0in 5.4pt 0in 5.4pt;"
								width="67" valign="top">
								<p class="MsoListParagraphCxSpMiddle"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal; mso-yfti-cnfc: 64;">
									<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;">Advance payment at a time </span>
								</p>
							</td>
							<td style="width: 58.5pt; border: none; background: #D3DFEE; mso-background-themecolor: accent1; mso-background-themetint: 63; padding: 0in 5.4pt 0in 5.4pt;"
								width="78" valign="top">
								<p class="MsoListParagraphCxSpMiddle"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal; mso-yfti-cnfc: 64;">
									<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;">Admission charge</span>
								</p>
							</td>
							<td style="width: 48.8pt; border: none; background: #D3DFEE; mso-background-themecolor: accent1; mso-background-themetint: 63; padding: 0in 5.4pt 0in 5.4pt;"
								width="65" valign="top">
								<p class="MsoListParagraphCxSpMiddle"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal; mso-yfti-cnfc: 64;">
									<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;">Monthly salary</span>
								</p>
							</td>
							<td style="width: 49.3pt; border: none; background: #D3DFEE; mso-background-themecolor: accent1; mso-background-themetint: 63; padding: 0in 5.4pt 0in 5.4pt;"
								width="66" valign="top">
								<p class="MsoListParagraphCxSpMiddle"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal; mso-yfti-cnfc: 64;">
									<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;">Payment at a time </span>
								</p>
							</td>
							<td style="width: 58.5pt; border: none; background: #D3DFEE; mso-background-themecolor: accent1; mso-background-themetint: 63; padding: 0in 5.4pt 0in 5.4pt;"
								width="78" valign="top">
								<p class="MsoListParagraphCxSpMiddle"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal; mso-yfti-cnfc: 64;">
									<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;">Admission charge</span>
								</p>
							</td>
							<td style="width: 48.75pt; border: none; background: #D3DFEE; mso-background-themecolor: accent1; mso-background-themetint: 63; padding: 0in 5.4pt 0in 5.4pt;"
								width="65" valign="top">
								<p class="MsoListParagraphCxSpMiddle"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal; mso-yfti-cnfc: 64;">
									<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;">Monthly salary</span>
								</p>
							</td>
							<td style="width: 49.3pt; border: none; background: #D3DFEE; mso-background-themecolor: accent1; mso-background-themetint: 63; padding: 0in 5.4pt 0in 5.4pt;"
								width="66" valign="top">
								<p class="MsoListParagraphCxSpLast"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal; mso-yfti-cnfc: 64;">
									<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;">Payment at a time </span>
								</p>
							</td>
						</tr>
						<?php foreach ($medium_info as $u) { ?>
						<tr>
							<td style="width: 1.0in; border: none; padding: 0in 5.4pt 0in 5.4pt;" width="96"
								valign="top">
								<p class="MsoListParagraphCxSpFirst"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal; mso-yfti-cnfc: 4;">
									<b><span
											style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;"><?= $u->batch_name ?></span></b>
								</p>
							</td>
							<td style="width: .75in; border: none; padding: 0in 5.4pt 0in 5.4pt;" width="72"
								valign="top">
								<p class="MsoListParagraphCxSpMiddle"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal;">
									<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;"><?= $u->nr_admission_charge ?></span>
								</p>
							</td>
							<td style="width: 42.15pt; border: none; padding: 0in 5.4pt 0in 5.4pt;" width="56"
								valign="top">
								<p class="MsoListParagraphCxSpMiddle"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal;">
									<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;"><?= $u->nr_monthly_salary ?></span>
								</p>
							</td>
							<td style="width: 50.6pt; border: none; padding: 0in 5.4pt 0in 5.4pt;" width="67"
								valign="top">
								<p class="MsoListParagraphCxSpMiddle"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal;">
									<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;"><?= $u->nr_advance_payment ?></span>
								</p>
							</td>
							<td style="width: 58.5pt; border: none; padding: 0in 5.4pt 0in 5.4pt;" width="78"
								valign="top">
								<p class="MsoListParagraphCxSpMiddle"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal;">
									<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;"><?= $u->r_admission_charge ?></span>
								</p>
							</td>
							<td style="width: 48.8pt; border: none; padding: 0in 5.4pt 0in 5.4pt;" width="65"
								valign="top">
								<p class="MsoListParagraphCxSpMiddle"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal;">
									<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;"><?= $u->r_monthly_salary ?></span>
								</p>
							</td>
							<td style="width: 49.3pt; border: none; padding: 0in 5.4pt 0in 5.4pt;" width="66"
								valign="top">
								<p class="MsoListParagraphCxSpMiddle"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal;">
									<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;"><?= $u->r_advance_payment ?></span>
								</p>
							</td>
							<td style="width: 58.5pt; border: none; padding: 0in 5.4pt 0in 5.4pt;" width="78"
								valign="top">
								<p class="MsoListParagraphCxSpMiddle"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal;">
									<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;"><?= $u->d_admission_charge ?></span>
								</p>
							</td>
							<td style="width: 48.75pt; border: none; padding: 0in 5.4pt 0in 5.4pt;" width="65"
								valign="top">
								<p class="MsoListParagraphCxSpMiddle"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal;">
									<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;"><?= $u->d_monthly_salary ?></span>
								</p>
							</td>
							<td style="width: 49.3pt; border: none; padding: 0in 5.4pt 0in 5.4pt;" width="66"
								valign="top">
								<p class="MsoListParagraphCxSpLast"
								   style="margin: 0in; margin-bottom: .0001pt; mso-add-space: auto; line-height: normal;">
									<span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: #365f91; mso-themecolor: accent1; mso-themeshade: 191;"><?= $u->d_advance_payment ?></span>
								</p>
							</td>
						</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<h4 style="text-align: center"><?= $wage ?></h4>
				<div class="clearfix"></div>
			</section>
		</div>
		<div class="col-sm-3 sidebar">
			<!-- widget instructor -->
			<aside class="widget-instructor" style="border:1px solid #a3a3a3;padding:30px;">
				<div class="row">
					<h2 style="background-color: white;color: #0a0a0a">ABOUT US</h2>
					<hr class="divider-big"/>
					<a href="<?= base_url() ?>home/who_we_are">
					<img class="col-sm-12 img-responsive" src="<?= base_url() ?>assets/images/about_us/<?= $about[0]->image ?>" style="margin-top:20px;"/></br>
					</a>
					<h2>NOTICE BOARD</h2>
					<div class="clearfix"></div>
					<a href="<?= base_url() ?>home/admission">
						<img src="<?= base_url() ?>assets/images/source.gif" class="img-responsive" alt="" style="padding-left:15px;">
					</a>
					<h2 style="font-size:23px;">VISIT OUR GALLERY</h2>
					<a href="">
						<img src="<?= base_url() ?>assets/images/gallery/<?= $gallery[0]->image ?>"   class="img-responsive" alt="" style="padding-left:15px; height: 85px">
					</a>
					<a href="">
						<img src="<?= base_url() ?>assets/images/gallery/<?= $gallery[1]->image ?>" height="85px"  class="img-responsive" alt="" style="padding-top:20px;padding-left:15px; height: 85px">
					</a>
					<a href="">
						<img src="<?= base_url() ?>assets/images/gallery/<?= $gallery[2]->image ?>" height="85px" class="img-responsive" alt="" style="padding-top:20px;padding-left:15px; height: 85px">
					</a>
				</div>
			</aside>
			<!-- / course finder -->
		</div>
	</div>
</div>
<!-- footer -->
<?php $this->load->view('home/footer'); ?>
<?php $this->load->view('home/footer_links'); ?>
</body>
</html>