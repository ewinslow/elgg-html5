<?php

$overrides = array(
	'type' => 'month',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);