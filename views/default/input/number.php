<?php 
$defaults = array(
	'class' => 'elgg-input-number',
);

$vars = array_merge($defaults, $vars);

$vars['type'] = 'number';

?>
<input <?php echo elgg_format_attributes($vars); ?> />