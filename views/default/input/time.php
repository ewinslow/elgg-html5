<?php

$overrides = array(
	'type' => 'time',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);