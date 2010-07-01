<?php

$overrides = array(
	'type' => 'submit',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);