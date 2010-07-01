<?php

$overrides = array(
	'type' => 'password',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);