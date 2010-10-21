<?php

$defaults = array(
	'value' => elgg_echo('submit'),
);

$vars = array_merge($defaults, $vars);	
?>

<input type="submit" <?php echo html5_get_html_attributes($vars); ?> />