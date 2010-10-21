<?php

$defaults = array(
	'placeholder' => elgg_echo('placeholder:text'),
);

$vars = array_merge($defaults, $vars);
?>

<input type="text" <?php echo html5_get_html_attributes($vars); ?> />