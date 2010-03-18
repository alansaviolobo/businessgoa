<div class="main" id="main-two-columns">
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
		      <? #php print $feed_icons; ?>  
        </div>      
			<div class="clearer">&nbsp;</div>				
		</div>
