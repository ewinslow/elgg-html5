<?php

$overrides = array(
	'type' => 'file',
	'value' => FALSE,
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);