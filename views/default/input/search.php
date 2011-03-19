<?php

$defaults = array(
	'placeholder' => elgg_echo('placeholder:search'),
);

$vars = array_merge($defaults, $vars);
?>

<input type="search" <?php echo elgg_format_attributes($vars); ?> />