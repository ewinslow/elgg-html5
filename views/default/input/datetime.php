<?php

$overrides = array(
	'type' => 'datetime',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);