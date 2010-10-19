<?php

$defaults = array(

);

$overrides = array(
	'type' => 'image',
);

echo elgg_view('html/input', array_merge($defaults, $vars, $overrides));