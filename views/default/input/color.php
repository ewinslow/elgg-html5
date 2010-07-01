<?php

$overrides = array(
	'type' => 'color',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);