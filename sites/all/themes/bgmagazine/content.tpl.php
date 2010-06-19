<div class="left" id="main-left">
	<div class="post">
		<h1><?= $title; ?></h1>
		<div><?= $tabs; ?></div>
		<?php
			if ($show_messages) { print $messages; }
			print $help . $content;
		?>
		<?= $below_content_region; ?>
	</div>
	<div class="clearer">&nbsp;</div>
	<div class="content-separator"></div>
	<div class="col3 left">
		<div class="column-content">
			<div class="post">
				<?= $bottom_left_region; ?>
			</div>
		</div>
	</div>
	<div class="col3 col3-mid left">
		<div class="column-content">
			<div class="post">
				<?= $bottom_mid_region; ?>
			</div>
		</div>
	</div>
	<div class="col3 right">
		<div class="column-content">
			<div class="post">
				<?= $bottom_right_region; ?>
			</div>
		</div>
	</div>
</div>