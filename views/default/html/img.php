<?php

$defaults = array(
	'alt' => '',
	'title' => '',
);

$overrides = array(
	'tag' => 'img',
	'body' => NULL,
);

echo elgg_view('html/tag', array_merge($defaults, $vars, $overrides));