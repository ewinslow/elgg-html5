<?php

$overrides = array(
	'type' => 'datetime-local',
);

$args = array_merge($vars, $overrides);

echo elgg_view('input/default', $args);