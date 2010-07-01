<?php

$overrides = array(
	'type' => 'radio',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);