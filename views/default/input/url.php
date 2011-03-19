<?php

$defaults = array(
	'placeholder' => elgg_echo('placeholder:url'),
);

$vars = array_merge($defaults, $vars);
?>

<input type="url" <?php echo elgg_format_attributes($vars); ?> />