<?php
$defaults = array(
	'body' => '',
	'class' => 'input-textarea',
);

$overrides = array(
	'tag' => 'textarea',
);

if (isset($vars['value'])) {
	$vars['body'] = $vars['value'];
	unset($vars['value']);
}

echo elgg_view('html/tag', array_merge($defaults, $vars, $overrides));