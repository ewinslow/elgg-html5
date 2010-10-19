<?php

$defaults = array(

);

$overrides = array(
	'type' => 'number',
);

echo elgg_view('html/input', array_merge($defaults, $vars, $overrides));