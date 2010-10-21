<?php
/**
 * Elgg checkbox input
 * Displays a checkbox input field
 * NB: This also includes a hidden input with the same name as the checkboxes
 * to make sure something is sent to the server.  The default value is 0.
 * If using JS, be specific to avoid selecting the hidden default value:
 * 	$('input[type=checkbox][name=internalname])
 *
 * @package Elgg
 * @subpackage Core
 * @author Curverider Ltd
 * @link http://elgg.org/
 *
 * @uses string $vars['internalname'] The name of the input fields (Forced to an array by appending [])
 * @uses array $vars['options'] An array of strings representing the label => option for the each checkbox field
 * @uses string $vars['internalid'] The id for each input field. Optional (Only use this with a single value.)
 * @uses string $vars['default'] The default value to send if nothing is checked. Optional, defaults to 0.
 * @uses bool $vars['disabled'] Make all input elements disabled. Optional.
 * @uses string $vars['value'] The current value. Optional.
 * @uses string $vars['class'] The class of each input element. Optional.
 * @uses string $vars['js'] Any Javascript to enter into the input tag. Optional.
 *
 */

$defaults = array(
	'class' => 'input-checkboxes',
	'disabled' => FALSE,
);

$vars = array_merge($defaults, $vars);

$value = $vars['value'];
unset($vars['value']);

$value_array = (is_array($value)) ? array_map('strtolower', $value) : array(strtolower($value));

$options = $vars['options'];
unset($vars['options']);

if ($options) {
	foreach($options as $value => $label) {
		echo "<label>";
		echo elgg_view('input/checkbox', array_merge($vars, array(
			'value' => $value,
			'internalname' => $vars['internalname'].'[]',
			'checked' => in_array(strtolower($value), $value_array),
		)));
		echo "$label</label><br />";
	}
}