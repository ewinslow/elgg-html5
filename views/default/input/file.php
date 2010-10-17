<?php

$defaults = array(

);

$overrides = array(
	'type' => 'file',
);

echo elgg_view('input/default', array_merge($defaults, $vars, $overrides));