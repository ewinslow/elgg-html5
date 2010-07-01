<?php

$overrides = array(
	'type' => 'hidden',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);