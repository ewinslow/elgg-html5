<?php

$defaults = array(

);

$overrides = array(
	'type' => 'image',
);

echo elgg_view('input/default', array_merge($defaults, $vars, $overrides));