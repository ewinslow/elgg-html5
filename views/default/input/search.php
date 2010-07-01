<?php

$overrides = array(
	'type' => 'search',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);