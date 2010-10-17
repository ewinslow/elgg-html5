<?php

$defaults = array(
	'placeholder' => elgg_echo('placeholder:password'),
);

$overrides = array(
	'type' => 'password',
);

echo elgg_view('input/default', array_merge($defaults, $vars, $overrides));