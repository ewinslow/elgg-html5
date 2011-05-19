<?php
$defaults = array(
	'class' => 'elgg-input-tel',
);

$vars = array_merge($defaults, $vars);

$vars['type'] = 'tel';

?>

<input <?php echo elgg_format_attributes($vars); ?> />