<?php
// example of how to use basic selector to retrieve HTML contents
include('simple_html_dom.php');
	// Create DOM from URL or file
$html = file_get_html('https://play.google.com/store/apps/details?id=com.ea.game.pvz2_row');

// Find all images
foreach($html->find('img') as $element)
       echo $element->src . '<br>';

// Find all links
foreach($html->find('a') as $element)
       echo $element->href . '<br>';

?>
