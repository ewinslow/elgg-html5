<?php

$defaults = array(
	'placeholder' => elgg_echo('placeholder:tel'),
);

$overrides = array(
	'type' => 'tel',
);

echo elgg_view('input/default', array_merge($defaults, $vars, $overrides));