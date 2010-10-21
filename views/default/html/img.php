<?php

$defaults = array(
	'alt' => '',
	'title' => '',
	'border' => 0,
);

$attributes = html5_get_html_attributes(array_merge($defaults, $vars));

echo "<img $attributes />";