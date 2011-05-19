<?php 
$defaults = array(
	'class' => 'elgg-input-image',
);

$vars = array_merge($defaults, $vars);

$vars['type'] = 'image';

?>
<input <?php echo elgg_format_attributes($vars); ?> />