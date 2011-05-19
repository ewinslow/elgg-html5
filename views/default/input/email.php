<?php 
$defaults = array(
	'class' => 'elgg-input-email',
);

$vars = array_merge($defaults, $vars);

$vars['type'] = 'email';

?>

<input <?php echo elgg_format_attributes($vars); ?> />