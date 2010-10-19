<?php

$defauts = array(
	'placeholder' => elgg_echo('placeholder:week'),
);

$overrides = array(
	'type' => 'week',
);

echo elgg_view('html/input', array_merge($defaults, $vars, $overrides));