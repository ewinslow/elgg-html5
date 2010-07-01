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

// remove all the junk that elgg_view throws into $vars

unset($vars['config']);
unset($vars['url']);
unset($vars['page_owner']);
unset($vars['page_owner_user']);
foreach ($_SESSION as $key=>$value) {
	unset($vars[$key]);
}

// backwards compatibility code
if (isset($vars['internalname'])) {
	$vars['name'] = $vars['internalname'];
	unset($vars['internalname']);
}

if (isset($vars['internalid'])) {
	$vars['id'] = $vars['internalid'];
	unset($vars['internalid']);
}

$js = '';
if (isset($vars['js'])) {
	$js = $vars['js'];
	unset($vars['js']);
}

// default attributes
$defaults = array(
	'type' => 'text',
	'value'	=> '',
);

$attributes = array_merge($defaults, $vars);

$attributes['value'] = htmlspecialchars($attributes['value'], ENT_QUOTES, 'UTF-8');


//Build the input
$element = array();

$element[] = "<input";
foreach ($attributes as $attr => $val) {
	if ($val === TRUE) {
		$element[] = $attr;
	} elseif ($val !== FALSE) {
		$val = addslashes($val);
		$element[] = "$attr=\"$val\"";
	}
}
$element[] = $js;
$element[] = "/>";

echo implode(" ", $tag);