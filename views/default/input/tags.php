<?php
/**
 * Elgg tag input
 * Displays a tag input field
 *
 * @package Elgg
 * @subpackage Core
 * @author Curverider Ltd
 * @link http://elgg.org/
 *
 * @uses $vars['value'] The current value, if any - string or array - tags will be encoded
 * @uses $vars['js'] Any Javascript to enter into the input tag
 * @uses $vars['internalname'] The name of the input field
 * @uses $vars['internalid'] The id of the input field
 * @uses $vars['class'] CSS class override
 * @uses $vars['disabled'] Is the input field disabled?
 */


$defaults = array(
	'class' => 'input-tags',
);

if (isset($vars['value']) && is_array($vars['value'])) {
	$vars['value'] = implode(", ", $vars['value']);
}

echo elgg_view('input/text', array_merge($defaults, $vars));