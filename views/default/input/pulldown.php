<?php

/**
 * Elgg pulldown input
 * Displays a pulldown input field
 *
 * @package Elgg
 * @subpackage Core
 * @author Curverider Ltd
 * @link http://elgg.org/
 *
 * @uses $vars['value'] The current value, if any
 * @uses $vars['js'] Any Javascript to enter into the input tag
 * @uses $vars['internalname'] The name of the input field
 * @uses $vars['options'] An array of strings representing the options for the pulldown field
 * @uses $vars['options_values'] An associative array of "value" => "option" where "value" is an internal name and "option" is
 * 								 the value displayed on the button. Replaces $vars['options'] when defined.
 */

$defaults = array(
	'class' => 'input-pulldown',
);

$overrides = array(
	'tag' => 'select',
);

$args = array_merge($defaults, $vars, $overrides);

$body = '';

if ($vars['options_values']) {
	foreach($vars['options_values'] as $value => $option) {
		$option_args = array(
			'value' => $value,
			'body' => $option,
			'selected' => ($value == $args['value']),
		);
		
		$body .= elgg_view('input/option', $option_args);
	}
} else {
	foreach($vars['options'] as $option) {
		$option_args = array(
			'body' => $option,
			'selected' => ($option == $args['value']),
		);
		
		$body .= elgg_view('input/option', $option_args);
	}
}

$args['body'] = $body;

echo elgg_view('html/tag', $args);
