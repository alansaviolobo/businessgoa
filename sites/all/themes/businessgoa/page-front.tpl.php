<?php include("header_navigation.tpl.php");?>
<?php include("main_three_column.tpl.php");?>

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

<?php include("sidebar_footer.tpl.php");?>