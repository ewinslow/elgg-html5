<?php
$defaults = array(
	'placeholder' => 'yyyy-mm-ddThh:mm:ss+hh:mm',
);

$overrides = array(
	'type' => 'datetime-local',
);

if (isset($vars['value']) && is_int($vars['value'])) {
	$vars['value'] = date("c", $vars['value']);
}

echo elgg_view('input/default', array_merge($defaults, $vars, $overrides));