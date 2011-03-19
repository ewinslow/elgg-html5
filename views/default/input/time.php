<?php

$defaults = array(
	'placeholder' => elgg_echo('placeholder:time'),
);

$vars = array_merge($defaults, $vars);
?>

<input type="time" <?php echo elgg_format_attributes($vars); ?> />