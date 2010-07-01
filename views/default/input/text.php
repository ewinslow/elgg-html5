<?php

$overrides = array(
	'type' => 'text',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);