<?php

$overrides = array(
	'type' => 'checkbox',
);

$args = array_merge($vars, $overrides);

echo elgg_view('html/input', $args);