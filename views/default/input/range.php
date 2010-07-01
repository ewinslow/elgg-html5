<?php

$overrides = array(
	'type' => 'range',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);