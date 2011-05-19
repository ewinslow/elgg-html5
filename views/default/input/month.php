<?php
$defaults = array(
	'class' => 'elgg-input-month',
);

$vars = array_merge($defaults, $vars);

if (isset($vars['value']) && is_int($vars['value'])) {
	$vars['value'] = date("Y-m", $vars['value']);
}

$vars['type'] = 'month';

?>

<input <?php echo elgg_format_attributes($vars); ?> />