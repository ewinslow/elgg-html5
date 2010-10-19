<?php

$defaults = array(
	'placeholder' => elgg_echo('placeholder:text'),
);

$overrides = array(
	'type' => 'text',
);

echo elgg_view('html/input', array_merge($defaults, $vars, $overrides));