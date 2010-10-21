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
 */

$defaults = array(
	'class' => 'input-plaintext',
);

$value = $vars['value'];
unset($vars['value']);

$attributes = html5_get_html_attributes(array_merge($defaults, $vars));

echo "<textarea $attributes>$value</textarea>";