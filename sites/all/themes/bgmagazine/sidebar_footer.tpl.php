		<div class="right sidebar" id="sidebar-2">
			<div class="section">
				<div class="section-content">
				<?= $ad_upper_region; ?>
				</div>
			</div>

			<div class="section">
				<div class="section-title"></div>
				<div class="section-content">
				<?= $ad_mid_region; ?>
				</div>
			</div>
			<div class="section network-section">
				<div class="section-title"></div>
				<div class="section-content">
				<?= $ad_lower_region; ?>
				</div>
			</div>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>

	<div id="dashboard" class="left">
		<div class="column left" id="column-1">
			Goan flavoured magazine for the business fraternity.
		</div>
		<div class="column left" id="column-2">
			<div class="column-content">
			<div class="column-title">Follow Us</div>
			<ul class="plain-list">
				<li><a class="footer-links" href="#"><img class="footer-facebook" src="<?=base_path().path_to_theme()?>/images/img_trans.gif" />  Facebook</a></li>
				<li><a class="footer-links" href="#"><img class="footer-orkut" src="<?=base_path().path_to_theme()?>/images/img_trans.gif" />  Orkut</a></li>
				<li><a class="footer-links" href="#"><img class="footer-twitter" src="<?=base_path().path_to_theme()?>/images/img_trans.gif" />  Twitter</a></li>
				<li><a class="footer-links" href="#"><img class="footer-rss" src="<?=base_path().path_to_theme()?>/images/img_trans.gif" />  RSS</a></li>
			</ul>
			</div>
			</div>
			<div class="column left" id="column-3">
			<div class="column-content">
			<div class="column-title">Help &amp; Support</div>
			<ul class="plain-list">
				<li><a class="footer-links" href="#">FAQ</a></li>
				<li><a class="footer-links" href="#">Terms of Use</a></li>
				<li><a class="footer-links" href="#">Privacy Policy</a></li>
			</ul>
			</div>
			</div>
			<div class="column right" id="column-4">
			<div class="column-content">
			<div class="column-title">Get in Touch</div>
			<ul class="plain-list">
				<li><img class="footer-phone" src="<?=base_path().path_to_theme()?>/images/img_trans.gif" />  +91 (0832) 242 5514</li>
				<li><a class="footer-links" href="mailto:response@businessgoa.net"><img class="footer-email" src="<?=base_path().path_to_theme()?>/images/img_trans.gif" />  response@businessgoa.net</a></li>
				<li><?=l("<img class=footer-web src='" . base_path() . path_to_theme() . "/images/img_trans.gif' />Online Contact Form",
									'contact-us', array('attributes' => array('class' => 'footer-links'),'html'=>TRUE))?>
				</li>
			</ul>
			</div>
			</div>
		<div class="clearer">&nbsp;</div>
	</div>

	<div id="footer" class="left">
		<div class="left">&copy; <?= date("Y")?> Business Goa</div>
		<div class="right">Designed & Maintained by <a href="http://www.technotrix.co.in"> Technotrix</a></div>
		<div class="clearer">&nbsp;</div>
	</div>

	</div>
</div>
<?= $closure; ?>
</body>
</html>

