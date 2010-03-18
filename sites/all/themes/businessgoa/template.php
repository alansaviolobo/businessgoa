<?php
function primary_links() {
	$links = menu_primary_links();
	$output = null;
	if ($links) {
		foreach ($links as $link) { var_dump($link);
			$link = l($link['title'], $link['href'], $link['attributes'], $link['query'], $link['fragment']);
			$output .= "<li class='current-tab'>$link</li>";
		};
		$output = "<ul class='tabbed'>$output</ul>";
	}
	return $output;
}

function secondary_links() {
	$links = menu_secondary_links();
	$output = null;
	if ($links) {
		foreach ($links as $link) {
			$link = l($link['title'], $link['href'], $link['attributes'], $link['query'], $link['fragment']);
			$output .= "<li class='current-tab'>$link</a></li>";
		};
		$output = "<ul class='tabbed'>$output</ul>";
	}
	return $output;
}


