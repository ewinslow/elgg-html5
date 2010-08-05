<?php
$defaults = array(
	'placeholder' => 'yyyy-mm-ddThh:mm:ss',
);

$overrides = array(
	'type' => 'datetime-local',
);

if (isset($vars['value']) && is_int($vars['value'])) {
	$vars['value'] = date("Y-m-d\TH:i:s", $vars['value']);
}

echo elgg_view('input/default', array_merge($defaults, $vars, $overrides));