<?php

$defaults = array(

);

$overrides = array(
	'type' => 'hidden',
);

echo elgg_view('input/default', array_merge($defaults, $vars, $overrides));