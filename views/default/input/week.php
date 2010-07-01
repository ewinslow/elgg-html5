<?php

$overrides = array(
	'type' => 'week',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);