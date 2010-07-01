<?php

$overrides = array(
	'type' => 'reset',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);