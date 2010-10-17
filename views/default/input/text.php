<?php

$defaults = array(
	'placeholder' => elgg_echo('placeholder:text'),
);

$overrides = array(
	'type' => 'text',
);

echo elgg_view('input/default', array_merge($defaults, $vars, $overrides));