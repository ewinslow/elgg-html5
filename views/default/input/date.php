<?php
$defaults = array(
	'placeholder' => elgg_echo('placeholder:date'), //'yyyy-mm-dd',
);

$overrides = array(
	'type' => 'date',
);

if (isset($vars['value']) && is_int($vars['value'])) {
	$vars['value'] = date("Y-m-d", $vars['value']);
}

echo elgg_view('html/input', array_merge($defaults, $vars, $overrides));