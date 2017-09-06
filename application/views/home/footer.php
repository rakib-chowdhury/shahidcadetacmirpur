<footer>
	<div class="grid-row">
		<div class="grid-col-row clear-fix">
			<section class="col-sm-3 col-xs-6 footer-colleges">
				<h2 class="corner-radius text-uppercase">Cadet Colleges</h2>
				<ul class="footer-links-list">
					<li>
						<a target="_blank" href="http://www.fcc.army.mil.bd/">Faujdarhat Cadet College</a>
					</li>
					<li>
						<a target="_blank" href="http://www.jcc.army.mil.bd/">Jhenidah Cadet College</a>
					</li>
					<li>
						<a target="_blank" href="http://www.scc.army.mil.bd/">Sylhet Cadet College</a>
					</li>
					<li>
						<a target="_blank" href="http://www.mgcc.army.mil.bd/">Mymensingh Girls’ Cadet College</a>
					</li>
					<li>
						<a target="_blank" href="http://www.ccc.army.mil.bd/">Comilla Cadet College</a>
					</li>
					<li>
						<a target="_blank" href="http://www.mcc.army.mil.bd/">Mirzapur Cadet College</a>
					</li>
					<li>
						<a target="_blank" href="http://www.jgcc.army.mil.bd/">Joypurhat Girls Cadet College</a>
					</li>
					<li>
						<a target="_blank" href="http://www.bcc.army.mil.bd/">Barisal Cadet College</a>
					</li>
					<li>
						<a target="_blank" href="http://www.pcc.army.mil.bd/">Pabna Cadet College</a>
					</li>
					<li>
						<a target="_blank" href="http://www.rcc.army.mil.bd/">Rajshahi Cadet College</a>
					</li>
					<li>
						<a target="_blank" href="http://www.ccr.army.mil.bd/">Rangpur Cadet College</a>
					</li>
				</ul>
			</section>
			<section class="col-sm-3 col-xs-6 footer-links">
				<h2 class="corner-radius text-uppercase">Links at a glance</h2>
				<ul class="footer-links-list">
					<li><a href="<?= base_url() ?>home">Home</a></li>
					<li><a href="<?= base_url() ?>home/who_we_are">About Us</a></li>
					<li><a href="<?= base_url() ?>home/message_chairman">Messages</a></li>
					<li><a href="<?= base_url() ?>home/admission">Admission</a></li>
					<li><a href="<?= base_url() ?>home/rules_facilities">Schooling System</a></li>
					<li><a href="<?= base_url() ?>home/bangla_medium">Medium</a></li>
					<li><a href="<?= base_url() ?>home/branch">Branch</a></li>
					<li><a href="<?= base_url() ?>home/term_result">Download</a></li>
					<li><a href="<?= base_url() ?>home/contact_us">Contact Us</a></li>
				</ul>
			</section>
			<section class="col-sm-3 col-xs-6 footer-payments">
				<h2 class="corner-radius text-uppercase">We accept payments</h2>
				<article>
					<p>
						<a href="">
							<img class="center-block" src="<?= base_url(); ?>assets/images/bkash_logo.png"
								 alt="bkash payment"
								 style="border:1px solid white;background-color:white;">
						</a>
					</p>
					<p>Pay to any of the following number:</p>
					<p style="padding-left:25px"><?= $contact_info[0]->bkash ?><br>
						<br>
					</p>
				</article>
			</section>
			<section class="col-sm-3 col-xs-6 footer-contact">
				<h2 class="corner-radius text-uppercase">Keep in touch</h2>
				<div class="textwidget">
					<p>Shahid Cadet Academy<br>
						<?=  $contact_info[0]->address ?></p>
					<p>Phone: <?php foreach ($phone as $row) {
							echo "<br>".$row;
						} ?>
						</p>
					<p>Cell: <?php foreach ($cell as $row) {
							echo "<br>".$row;
						} ?>
						</p>
					<p>Email:<br> <?= $contact_info[0]->website ?></p>
				</div>
			</section>

		</div>
	</div>
	<div class="footer-bottom">
		<div class="grid-row clear-fix">
			<div class="copyright">Copyright <span></span> 2017 Shahid Cadet Academy, all rights reserved</div>
			<nav class="footer-nav">
				<ul class="clear-fix footer-social">
					<li>
						<a href="https://www.facebook.com/Shahid-Cadet-Academy-dhaka-1485120938388812/?ref=br_rs"
						   class="fa fa-facebook"></a>
					</li>
					<li>
						<a href="https://twitter.com/shahidcadet" class="fa fa-twitter"></a>
					</li>
					<li>
						<a href="https://plus.google.com/u/0/104477861668266716663" class="fa fa-google-plus"></a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</footer>