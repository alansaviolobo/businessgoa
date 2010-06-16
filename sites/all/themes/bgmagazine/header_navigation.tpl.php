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
		<?= $network_right; ?>
			<div class="clearer">&nbsp;</div>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>
</div-->

<div id="site">
	<div class="center-wrapper">
		<div id="header">
			<div class="right" id="toolbar">
				&nbsp;
			</div>
			<div class="clearer">&nbsp;</div>
			<div id="site-title">
				<h1><a href="<?= base_path(); ?>"><img src='<?= $logo; ?>'></a></h1>
			</div>

			<div id="navigation">
				<div id="main-nav">
					<?= theme('links', $primary_links, array('class' => 'tabbed')); ?>
					<div class="clearer">&nbsp;</div>
				</div>

				<div class="inline">
					<div class="scroll-left"></div>
					<div id="sub-nav">
						<?= theme('links', $secondary_links, array('class' => 'tabbed')); ?>
					</div>
					<div class="scroll-right"></div>
			</div>
				<script type="text/javascript">
					<!--
					$(function(){
						var div = $('#sub-nav');

						var current = 0;
						var step = 2;
						var maximum = $('#sub-nav ul li').length ;
						var liWidth = $('#sub-nav ul li').outerWidth();
						var carouselHeight = $('#sub-nav').outerHeight();
						var speed = 200;
						var visible = $('#sub-nav').outerWidth()/$('#sub-nav ul li').outerWidth();

						div.css({overflow: 'hidden'});

						$('#sub-nav ul').css("position", "absolute");

						$('#sub-nav').css("overflow", "hidden").css("position", "relative").css('height',"36px");

						$('.inline .scroll-right').click(function() {
							if(current + step < 0 || current - step > maximum - visible) {return; }
							else {
								current = current + step;
								$('#sub-nav ul').animate({left: -(liWidth * current)}, speed, null);
							}
							return false;
						});

						$('.inline .scroll-left').click(function() {
							if(current - step < 0 ) {return; }
							else {
								current = current - step;
								$('#sub-nav ul').animate({left: -(liWidth * current)}, speed, null);
							}
							return false;
						});

					});
				-->
				</script>
			</div>
		</div>
