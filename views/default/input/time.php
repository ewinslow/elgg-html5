<?php

$defaults = array(
	'placeholder' => elgg_echo('placeholder:time'),
);

$overrides = array(
	'type' => 'time',
);

echo elgg_view('input/default', array_merge($defaults, $vars, $overrides));