<?php
/**
 * Elgg long text input
 * Displays a long text input field
 *
 * @package Elgg
 * @subpackage Core
 * @author Curverider Ltd
 * @link http://elgg.org/
 *
 * @uses $vars['value'] The current value, if any
 * @uses $vars['js'] Any Javascript to enter into the input tag
 * @uses $vars['internalname'] The name of the input field
 *
 */

$defaults = array(
	'class' => 'input-textarea',
);

$overrides = array(
	'tag' => 'textarea',
);

$args = array_merge($defaults, $vars, $overrides);

if (isset($args['value'])) {
	$args['body'] = $args['value'];
}

$args['class'] = $args['class'].' input-richtext';

echo elgg_view('html/tag', $args);