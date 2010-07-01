<?php

$overrides = array(
	'type' => 'number',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);