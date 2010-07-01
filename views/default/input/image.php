<?php

$overrides = array(
	'type' => 'image',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);