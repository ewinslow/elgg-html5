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
 * @uses $vars['options'] An array of strings representing the options for the pulldown field
 * @uses $vars['options_values'] An associative array of "value" => "option" where "value" is an internal name and "option" is
 * 								 the value displayed on the button. Replaces $vars['options'] when defined.
 */

$defaults = array(
	'class' => 'input-pulldown',
);

$vars = array_merge($defaults, $vars);

$options_values = $vars['options_values'];
unset($vars['options_values']);

$options = $vars['options'];
unset($options);

$value = $vars['value'];
unset($vars['value']);
?>

<select <?php echo html5_get_html_attributes($vars); ?>>
<?php 
if ($options_values) {
	foreach($options_values as $opt_val => $opt_text) {
		echo elgg_view('input/option', array(
			'value' => $opt_val,
			'text' => $opt_text,
			'selected' => ($opt_val == $value),
		));
	}
} else {
	foreach($options as $option) {
		echo elgg_view('input/option', array(
			'text' => $option,
			'selected' => ($option == $value),
		));
	}
}
?>
</select>