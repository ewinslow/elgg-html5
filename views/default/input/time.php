<?php

$defaults = array(
	'placeholder' => elgg_echo('placeholder:time'),
);

$vars = array_merge($defaults, $vars);
?>

<input type="time" <?php echo html5_get_html_attributes($vars); ?> />