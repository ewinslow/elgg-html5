<?php

$defaults = array(
	'class' => 'elgg-input-url',
);

$vars = array_merge($defaults, $vars);

$vars['type'] = 'url';

?>

<input <?php echo elgg_format_attributes($vars); ?> />