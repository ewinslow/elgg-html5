<?php
$defaults = array(
	'placeholder' => elgg_echo('placeholder:datetime-local'), //'yyyy-mm-ddThh:mm:ss',
);

$overrides = array(
	'type' => 'datetime-local',
);

if (isset($vars['value']) && is_int($vars['value'])) {
	$vars['value'] = date("Y-m-d\TH:i:s", $vars['value']);
}

echo elgg_view('html/input', array_merge($defaults, $vars, $overrides));