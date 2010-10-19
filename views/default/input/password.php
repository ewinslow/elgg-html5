<?php

$defaults = array(
	'placeholder' => elgg_echo('placeholder:password'),
);

$overrides = array(
	'type' => 'password',
);

echo elgg_view('html/input', array_merge($defaults, $vars, $overrides));