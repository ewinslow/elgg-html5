<?php

$overrides = array(
	'type' => 'email',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);