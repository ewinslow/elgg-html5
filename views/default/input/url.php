<?php

$defaults = array(
	'placeholder' => elgg_echo('placeholder:url'),
);

$overrides = array(
	'type' => 'url',
);

$args = array_merge($vars, $overrides);

echo elgg_view('html/input', $args);