<?php
$defaults = array(
	'placeholder' => elgg_echo('placeholder:email'),
);

$overrides = array(
	'type' => 'email',
);

$args = array_merge($defaults, $vars, $overrides);

echo elgg_view('html/input', $args);