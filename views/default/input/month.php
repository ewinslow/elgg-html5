<?php
$defaults = array(
	'placeholder' => elgg_echo('placeholder:month'),
);

$overrides = array(
	'type' => 'month',
);

if (isset($vars['value']) && is_int($vars['value'])) {
	$vars['value'] = date("Y-m", $vars['value']);
}

echo elgg_view('input/default', array_merge($defaults, $vars, $overrides));