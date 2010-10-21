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
	'class' => 'input-richtext',
);

$value = $vars['value'];
unset($vars['value']);

$attributes = html5_get_html_attributes(array_merge($defaults, $vars));

echo "<textarea $attributes>$value</textarea>";