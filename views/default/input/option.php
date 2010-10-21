<?php

$text = $vars['text'];

if (!isset($text)) {
	$text = $vars['value'];
	unset($vars['value']);
}

$text = htmlentities($text, ENT_QUOTES, 'UTF-8');
$attributes = html5_get_html_attributes($vars);

echo "<option $attributes>$text</option>";