<?php
$defaults = array(
	'method' => 'POST',
	'body' => '',
);

$overrides = array(
	'tag' => 'form',
);

echo elgg_view('html/tag', array_merge($defaults, $vars, $overrides));