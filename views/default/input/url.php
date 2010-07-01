<?php

$overrides = array(
	'type' => 'url',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);