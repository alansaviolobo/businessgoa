<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
  <?= $head ?>
  <title><?= $head_title ?></title>
  <?= $styles ?>
  <?= $scripts ?>
</head>
<body id="top">
<!--div id="network">
	<div class="center-wrapper">
		<div class="left">
			<ul class="tabbed" id="network-tabs">
				<li class="current-tab"><a href="<?= base_path(); ?>">Business Goa</a></li>
				<li><a href="#">Savoir Faire</a></li>
				<li><a href="#">My Goa</a></li>
			</ul>
		</div>
		<div class="right">
			<div class="clearer">&nbsp;</div>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>
</div-->
<div id="site">
	<div class="center-wrapper">
		<div id="header">
			<div class="right" id="toolbar">&nbsp;</div>
			<div class="clearer">&nbsp;</div>
			<div id="site-title">
				<h1><a href="<?=base_path ();?>"><img src='<?=$logo;?>'></a></h1>
			</div>
			<div id="navigation">
				<div id="main-nav">
					<?=theme ( 'links', $primary_links, array ('class' => 'tabbed' ) );?>
					<div class="clearer">&nbsp;</div>
				</div>
				<div class="inline">
					<div class="scroll-left"></div>
					<div id="sub-nav">
						<?=theme ( 'links', $secondary_links, array ('class' => 'tabbed' ) );?>
					</div>
					<div class="scroll-right"></div>
				</div>
			</div>
		</div>
		<div class="main" id="<?=$innertemplate['id']?>">
			<?php foreach ($innertemplate['files'] as $template ) include $template ?>
		</div>
		<div id="dashboard" class="left">
			<div class="column left" id="column-1">
				<div class="column-content">Business Goa is Goa's first and only
				business magazine dedicated to industry, trade and commerce. Launched in
				July 2009 by Savoir Faire Media, the magazine has managed to capture the
				imagination of everyone who is connected to business in Goa and beyond.
				</div>
			</div>
			<div class="column left" id="column-2">
				<div class="column-content">
					<div class="column-title">Follow Us</div>
					<ul class="plain-list">
						<li>
							<a class="footer-links" href="http://www.facebook.com/pages/Business-Goa/121764281183650">
								<img class="footer-facebook" src="<?=base_path().path_to_theme()?>/images/img_trans.gif" />Facebook
							</a>
						</li>
						<li>
							<a class="footer-links" href="#">
								<img class="footer-orkut" src="<?=base_path().path_to_theme()?>/images/img_trans.gif" /> Orkut
							</a>
						</li>
						<li>
							<a class="footer-links" href=" http://twitter.com/businessgoa">
								<img class="footer-twitter" src="<?=base_path().path_to_theme()?>/images/img_trans.gif" /> Twitter
							</a>
						</li>
						<li>
							<a class="footer-links" href="#">
								<img class="footer-rss" src="<?=base_path().path_to_theme()?>/images/img_trans.gif" /> RSS
							</a>
						</li>
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
						<li>
							<img class="footer-phone" src="<?=base_path().path_to_theme()?>/images/img_trans.gif" /> +91 (0832) 242 5514
						</li>
						<li>
							<a class="footer-links" href="mailto:response@businessgoa.net">
								<img class="footer-email" src="<?=base_path().path_to_theme()?>/images/img_trans.gif" /> response@businessgoa.net
							</a>
						</li>
						<li>
							<a class="footer-links" href="contact">
								<img class=footer-web src='<?= base_path() . path_to_theme() ?>/images/img_trans.gif' />Online Contact Form
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="clearer">&nbsp;</div>
		</div>
		<div id="footer" class="left">
			<div class="left">&copy; <?= date("Y")?> Business Goa</div>
			<div class="right">Designed & Maintained by <a
				href="http://www.technotrix.co.in">Technotrix</a></div>
			<div class="clearer">&nbsp;</div>
		</div>
	</div>
</div>
<?= $closure; ?>
<div id="fb-root"></div>
<script type="text/javascript">
	window.fbAsyncInit = function() {
		FB.init({appId: 'your app id', status: true, cookie: true, xfbml: true});
	};
	(function() {
		var e = document.createElement('script');
		e.async = true;
		e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
		document.getElementById('fb-root').appendChild(e);
	}());
</script>
<script type="text/javascript">
	$(function(){
		var current = 0;
		var step = 2;
		var speed = 200;
		var div = $('#sub-nav');
		var maximum = $('#sub-nav ul li').length ;
		var liWidth = $('#sub-nav ul li').outerWidth();
		var carouselHeight = $('#sub-nav').outerHeight();
		var visible = $('#sub-nav').outerWidth()/$('#sub-nav ul li').outerWidth();
		div.css({overflow: 'hidden'});
		$('#sub-nav ul').css("position", "absolute");
		$('#sub-nav').css("overflow", "hidden").css("position", "relative").css('height',"36px");
		$('.inline .scroll-right').click(function() {
			if(current + step < 0 || current - step > maximum - visible) { return; }
			else {
				current = current + step;
				$('#sub-nav ul').animate({left: -(liWidth * current)}, speed, null);
			}
			return false;
		});
		$('.inline .scroll-left').click(function() {
			if(current - step < 0 ) { return; }
			else {
				current = current - step;
				$('#sub-nav ul').animate({left: -(liWidth * current)}, speed, null);
			}
			return false;
		});
	});
</script>
</body>
</html>