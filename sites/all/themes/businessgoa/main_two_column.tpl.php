<div class="main" id="main-two-columns">
	<div class="left" id="main-left">
		<div class="post">
			<h2><?= $title; ?></h2>
			<div><?= $tabs; ?></div>
			<?php
				if ($show_messages) { print $messages; }
				print $help . $content;
			?>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>
