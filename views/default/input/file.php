<?php

$defaults = array(

);

$overrides = array(
	'type' => 'file',
);

echo elgg_view('html/input', array_merge($defaults, $vars, $overrides));