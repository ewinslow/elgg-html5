<?php
$defaults = array(
	'class' => 'elgg-input-datetime-local',
);

$vars = array_merge($defaults, $vars);

if (isset($vars['value']) && is_int($vars['value'])) {
	$vars['value'] = date("Y-m-d\TH:i:s", $vars['value']);
}

$vars['type'] = 'datetime-local';
?>
<input <?php echo elgg_format_attributes($vars); ?> />