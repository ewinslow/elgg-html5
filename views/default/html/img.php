<?php

$defaults = array(
	'alt' => '',
	'title' => '',
	'border' => 0,
);

$attributes = elgg_format_attributes(array_merge($defaults, $vars));

echo "<img $attributes />";