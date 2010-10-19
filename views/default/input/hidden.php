<?php

$defaults = array(

);

$overrides = array(
	'type' => 'hidden',
);

echo elgg_view('html/input', array_merge($defaults, $vars, $overrides));