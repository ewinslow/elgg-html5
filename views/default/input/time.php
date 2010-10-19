<?php

$defaults = array(
	'placeholder' => elgg_echo('placeholder:time'),
);

$overrides = array(
	'type' => 'time',
);

echo elgg_view('html/input', array_merge($defaults, $vars, $overrides));