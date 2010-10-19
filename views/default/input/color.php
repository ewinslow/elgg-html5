<?php

$defaults = array(
	'placeholder' => elgg_echo('placeholder:color'),
);

$overrides = array(
	'type' => 'color',
);

echo elgg_view('html/input', array_merge($defaults, $vars, $overrides));