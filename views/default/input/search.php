<?php

$defaults = array(
	'placeholder' => elgg_echo('placeholder:search'),
);

$overrides = array(
	'type' => 'search',
);

echo elgg_view('html/input', array_merge($defaults, $vars, $overrides));