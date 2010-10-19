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
	'default' => 0,
	'disabled' => FALSE,
);

$args = array_merge($defaults, $vars);

$value_array = (is_array($args['value'])) ? array_map('strtolower', $args['value']) : array(strtolower($args['value']));

$options = $args['options'];

if ($options) {
	// include a default value so if nothing is checked 0 will be passed.
	if ($args['internalname']) {
		echo elgg_view('input/hidden', array('internalname' => $args['internalname'], 'value' => $args['default']));
	}
	
	foreach($options as $option => $label) {
		$opts = array(
			'value' => $option,
			'checked' => in_array(strtolower($option), $value_array),
			'class' => $args['class'],
			'disabled' => $args['disabled'],
			'js' => $args['js'],
			'internalname' => $args['internalname'].'[]',
		);
		
		echo "<label>".elgg_view('input/checkbox', $opts)."$label</label><br />";
	}
}