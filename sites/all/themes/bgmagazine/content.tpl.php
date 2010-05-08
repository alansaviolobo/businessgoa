<div class="left" id="main-left">
	<div class="post">
		<h2><?= $title; ?></h2>
		<div><?= $tabs; ?></div>
		<?php
			if ($show_messages) { print $messages; }
			print $help . $content;
		?>
		<?= $below_content_region; ?>
	</div>
	<div class="clearer">&nbsp;</div>
</div>
