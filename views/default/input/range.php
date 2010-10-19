<?php

$defaults = array(

);

$overrides = array(
	'type' => 'range',
);

echo elgg_view('html/input', array_merge($defaults, $vars, $overrides));