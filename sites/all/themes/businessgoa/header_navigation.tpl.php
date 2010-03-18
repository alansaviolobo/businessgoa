<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" xmlns:fb="http://www.facebook.com/2008/fbml">

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
					<?php 
						//if (isset($primary_links)) print primary_links(); 
						print theme('links', $primary_links, array('class' => 'tabbed'));
					?>
					<div class="clearer">&nbsp;</div>
				</div>

				<div id="sub-nav">
						<?php 
							//if (isset($secondary_links)) print secondary_links(); 
							print theme('links', $secondary_links, array('class' => 'tabbed'));
						?>				
					<div class="clearer">&nbsp;</div>
				</div>

			</div>
		</div>
