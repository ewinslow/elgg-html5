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
 * @uses $vars['method'] Method (default POST)
 * @uses $vars['enctype'] How the form is encoded, default blank
 * @uses $vars['action'] URL of the action being called
 * @uses $vars['disable_security'] Force the securitytokens not to be added to this form (@todo what's the point??)
 *
 */

if ($vars['disable_security'] != TRUE) {
	$vars['body'] .= elgg_view('input/securitytoken');
}

unset($vars['disable_security']);

echo elgg_view('html/form', $vars);
