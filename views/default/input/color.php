<?php 
$defaults = array(
	'class' => 'elgg-input-color',
);

$vars = array_merge($defaults, $vars);

$vars['type'] = 'color';

?>

<input <?php echo elgg_format_attributes($vars); ?> />