<?php

$defaults = array(
	'class' => 'elgg-input-search',
);

$vars = array_merge($defaults, $vars);

$vars['type'] = 'search';

?>

<input <?php echo elgg_format_attributes($vars); ?> />