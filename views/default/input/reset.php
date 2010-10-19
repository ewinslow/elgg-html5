<?php

$defaults = array(
	'value' => elgg_echo('reset'),
);

$overrides = array(
	'type' => 'reset',
);

echo elgg_view('html/input', array_merge($defaults, $vars, $overrides));