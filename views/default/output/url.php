<?php
/**
 * Elgg URL display
 * Displays a URL as a link
 *
 * @package Elgg
 * @subpackage Core
 * @author Curverider Ltd
 * @link http://elgg.org/
 *
 * @uses string $vars['body'] The html to insert between the <a></a> tags
 * @uses string $vars['text'] The string between the <a></a> tags.
 * @uses bool $vars['is_action'] Is this a link to an action?
 *
 */

if (isset($vars['value'])) {
	$vars['href'] = $vars['value'];
	unset($vars['value']);
}

$url = trim($vars['href']);

if (isset($vars['is_action']) && $vars['is_action']) {
	$url = elgg_add_action_tokens_to_url($url);
	unset($vars['is_action']);
}

if (isset($vars['body'])) {
	$body = $vars['body'];
	unset($vars['body']);
}

if (!isset($body)) {
	if (isset($vars['text'])) {
		$text = $vars['text']; 
		unset($vars['text']);
	} else {
		$text = $url;
	}
	
	$body = htmlentities($text, ENT_QUOTES, 'UTF-8');
}

$vars['href'] = $url;
$attributes = html5_get_html_attributes($vars);
echo "<a $attributes>$body</a>";
