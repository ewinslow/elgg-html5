<?php
$defaults = array(
	'placeholder' => elgg_echo('placeholder:datetime'), //'yyyy-mm-ddThh:mm:ss+hh:mm',
);

$overrides = array(
	'type' => 'datetime',
);

if (isset($vars['value']) && is_int($vars['value'])) {
	$vars['value'] = date("c", $vars['value']);
}

echo elgg_view('input/default', array_merge($defaults, $vars, $overrides));