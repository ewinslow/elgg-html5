<?php

$overrides = array(
	'type' => 'checkbox',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);