<?php

$defaults = array(
	'class' => 'elgg-input-week',
);

$vars = array_merge($defaults, $vars);

$vars['type'] = 'week';

?>

<input <?php echo elgg_format_attributes($vars); ?> />