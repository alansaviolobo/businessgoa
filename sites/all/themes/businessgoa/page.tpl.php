<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
  <?php print $head ?>
  <title><?php print $head_title ?></title>
  <?php print $styles ?>
  <?php print $scripts ?>
</head>

<body id="top">

<div id="network">
	<div class="center-wrapper">
		<div class="left">	
			<ul class="tabbed" id="network-tabs">
				<li class="current-tab"><a href="#">Business Goa</a></li>
				<li><a href="#">Savoir Faire</a></li>
				<li><a href="#">My Goa</a></li>
			</ul>
		</div>
		<div class="right">
		<?php print $network_right; ?>
			<div class="clearer">&nbsp;</div>		
		</div>		
		<div class="clearer">&nbsp;</div>
	</div>
</div>

<div id="site">
	<div class="center-wrapper">
		<div id="header">
			<div class="right" id="toolbar">
				&nbsp;
			</div>
			<div class="clearer">&nbsp;</div>
			<div id="site-title">
				<h1><a href="#"><img src='<?php print $logo?>' width=500></a></h1>
			</div>

			<div id="navigation">				
				<div id="main-nav">
					<?php print theme('links', $primary_links, array('class' => 'tabbed')); ?>
					<div class="clearer">&nbsp;</div>
				</div>

				<div id="sub-nav">
						<?php print theme('links', $secondary_links, array('class' => 'tabbed')); ?>
					<div class="clearer">&nbsp;</div>
				</div>

			</div>
		</div>

		<div class="main" id="main-three-columns">
			<div class="left" id="main-left">
				<div class="post">
					<h2><?php print $title ?></h2>
					<div><?php print $tabs ?></div>
		      <?php 
		      	if ($show_messages) { print $messages; } 
		      	print $help;
		      	print $main_left;
		      	print $content; 
		      ?>
        </div>      
        <div class="content-separator"></div>
				<div class="col3 left">
					<div class="column-content">
						<div class="post">
							<?php print $col_left ?>
						</div>
					</div>
				</div>
			<div class="col3 col3-mid left">
				<div class="column-content">
					<div class="post">
						<?php print $col_mid_left ?>
					</div>
				</div>
			</div>
			<div class="col3 right">
				<div class="column-content">
					<div class="post">
						<?php print $col_right ?>
					</div>
				</div>
			</div>		
			<div class="clearer">&nbsp;</div>				
		</div>

		<div class="left sidebar" id="sidebar-1">
			<div class="post">
				<?php print $sidebar1_1; ?>
			</div>
			<div class="content-separator"></div>
			<div class="post">
			<?php print $sidebar1_2; ?>
			</div>

			<div class="content-separator"></div>
			<div class="post">				
			<?php print $sidebar1_3; ?>
			</div>				
		</div>

		<div class="right sidebar" id="sidebar-2">
			<div class="section">
				<div class="section-content">
				<?php print $ad1; ?>
				</div>
			</div>

			<div class="section">
				<div class="section-title"></div>
				<div class="section-content">		
				<?php print $ad2; ?>	
				</div>
			</div>
			<div class="section network-section">
				<div class="section-title"></div>
				<div class="section-content">		
				<?php print $ad3; ?>		
				</div>
			</div>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>

	<div id="dashboard">
		<div class="column left" id="column-1">
			<?php print $about_business_goa;?> 	
			</div>
			<div class="column left" id="column-2">
			<div class="column-content">
			<div class="column-title">Follow Us</div>
			<ul class="plain-list">
				<li><a class="footer-links" href="#"><img class="footer-facebook" src="<?=path_to_theme()?>/images/img_trans.gif" />  Facebook</a></li>
				<li><a class="footer-links" href="#"><img class="footer-orkut" src="<?=path_to_theme()?>/images/img_trans.gif" />  Orkut</a></li>
				<li><a class="footer-links" href="#"><img class="footer-twitter" src="<?=path_to_theme()?>/images/img_trans.gif" />  Twitter</a></li>
				<li><a class="footer-links" href="#"><img class="footer-rss" src="<?=path_to_theme()?>/images/img_trans.gif" />  RSS</a></li>
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
				<li><img class="footer-phone" src="<?=path_to_theme()?>/images/img_trans.gif" />  +91 (0832) 242 5514</li>
				<li><a class="footer-links" href="mailto:response@businessgoa.net"><img class="footer-email" src="<?=path_to_theme()?>/images/img_trans.gif" />  response@businessgoa.net</a></li>
				<li><a class="footer-links" href="?q=contact"><img class="footer-web" src="<?=path_to_theme()?>/images/img_trans.gif" />  Online Contact Form </a></li>
			</ul>
			</div>
			</div>
		<div class="clearer">&nbsp;</div>
	</div>
	
	<div id="footer">
		<div class="left">&copy; <?= date("Y")?> Business Goa</div>
		<div class="right">Designed & Maintained by <a href="http://www.technotrix.co.in"> Technotrix</a></div>
		<div class="clearer">&nbsp;</div>
	</div>

	</div>
</div>
<?php print $closure; ?>
</body>
</html>
