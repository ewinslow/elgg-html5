<?php

$defaults = array(

);

$overrides = array(
	'type' => 'range',
);

echo elgg_view('input/default', array_merge($defaults, $vars, $overrides));