<?php

$defaults = array(
	'class' => 'elgg-input-range',
);

$vars = array_merge($defaults, $vars);

$vars['type'] = 'range';

?>

<input <?php echo elgg_format_attributes($vars); ?> />