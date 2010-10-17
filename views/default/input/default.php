<?php
/**
 * Create an input field
 *
 * @package Elgg
 * @subpackage Core
 * @author Curverider Ltd
 * @link http://elgg.org/
 *
 * @uses $vars['internalname'] The name of the input field
 * @uses $vars['internalid'] The id of the input field
 * @deprecated $vars['js'] Use named attributes instead
 *
 * All other input attributes can be specified using their attribute name
 * including javascript event attributes such as onclick.
 */

// default attributes
$defaults = array(
	'type' => 'text',
);

$overrides = array(
	'tag' => 'input',
);

$args = array_merge($defaults, $vars, $overrides);

echo elgg_view('html/tag', $args);