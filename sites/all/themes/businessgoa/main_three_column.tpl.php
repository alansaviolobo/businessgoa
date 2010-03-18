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
		      <? #php print $feed_icons; ?>  
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
