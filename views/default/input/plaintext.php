<?php
/**
 * 
 */

$defaults = array(
	'class' => 'input-textarea',
);

$overrides = array(
	'tag' => 'textarea',
);

if (isset($vars['value'])) {
	$vars['body'] = $value;
}

echo elgg_view('html/tag', array_merge($defaults, $vars, $overrides));