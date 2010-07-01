<?php

$overrides = array(
	'type' => 'date',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);