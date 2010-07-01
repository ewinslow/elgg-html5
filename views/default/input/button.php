<?php

$overrides = array(
	'type' => 'button',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);