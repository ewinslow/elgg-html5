<?php

$defaults = array(

);

$overrides = array(
	'tag' => 'option',
);

$args = array_merge($defaults, $vars, $overrides);

if (!isset($args['body'])) {
	$args['body'] = $args['value'];
}

if (isset($args['body'])) {
	$args['body'] = htmlentities($args['body'], ENT_QUOTES, 'UTF-8');
}

echo elgg_view('html/tag', $args);