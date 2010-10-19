<?php
$defaults = array(
	'type' => 'text',
);

$overrides = array(
	'tag' => 'input',
);

$args = array_merge($defaults, $vars, $overrides);

echo elgg_view('html/tag', $args);