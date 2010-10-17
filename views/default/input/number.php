<?php

$defaults = array(

);

$overrides = array(
	'type' => 'number',
);

echo elgg_view('input/default', array_merge($defaults, $vars, $overrides));