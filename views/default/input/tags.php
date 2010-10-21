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
 */

$defaults = array(
	'class' => 'input-tags',
	'placeholder' => elgg_echo('placeholder:tags'),
);

if (isset($vars['value']) && is_array($vars['value'])) {
	$vars['value'] = implode(", ", $vars['value']);
}

echo elgg_view('input/text', array_merge($defaults, $vars));