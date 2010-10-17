<?php

$defaults = array(
	'placeholder' => elgg_echo('placeholder:color'),
);

$overrides = array(
	'type' => 'color',
);

echo elgg_view('input/default', array_merge($defaults, $vars, $overrides));