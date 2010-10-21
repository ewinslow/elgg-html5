<?php

$defaults = array(
	'value' => elgg_echo('reset'),
);

$vars = array_merge($defaults, $vars);
?>

<input type="reset" <?php echo html5_get_html_attributes($vars); ?> />