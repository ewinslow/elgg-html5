<?php
/**
 * Create a form for data submission.
 * Use this view for forms rather than creating a form tag in the wild as it provides
 * extra security which help prevent CSRF attacks.
 *
 * @package Elgg
 * @subpackage Core
 * @author Curverider Ltd
 * @link http://elgg.org/
 *
 * @uses $vars['body'] The body of the form (made up of other input/xxx views and html
 * @uses $vars['disable_security'] Force the securitytokens not to be added to this form (@todo what's the point??)
 *
 */
$defaults = array(
	'body' => '',
	'method' => 'POST',
);

$vars = array_merge($defaults, $vars);

if ($vars['disable_security'] != TRUE) {
	$body .= elgg_view('input/securitytoken');
}
unset($vars['disable_security']);

$body = $vars['body'];
unset($vars['body']);

$attributes = html5_get_html_attributes($vars);

echo "<form $attributes>$body</form>";
