<?php

$defaults = array(
	'placeholder' => elgg_echo('placeholder:search'),
)

$overrides = array(
	'type' => 'search',
);

echo elgg_view('input/default', array_merge($defaults, $vars, $overrides));