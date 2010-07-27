<?php
$defaults = array(
	'placeholder' => 'yyyy-mm-dd',
);

$overrides = array(
	'type' => 'date',
);

echo elgg_view('input/default', array_merge($defaults, $vars, $overrides));