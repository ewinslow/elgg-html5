<?php

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
	//@todo put deprecated notice
	$vars['name'] = $vars['internalname'];
	unset($vars['internalname']);
}

if (isset($vars['internalid'])) {
	//@todo put deprecated notice
	$vars['id'] = $vars['internalid'];
	unset($vars['internalid']);
}

$js = '';
if (isset($vars['js'])) {
	//@todo put deprecated notice
	$js = $vars['js'];
	unset($vars['js']);
}

$tag = $vars['tag'];
unset($vars['tag']);

$body = $vars['body'];
unset($vars['body']);

//Build the input
$element = array();

$element[] = "<$tag";
foreach ($vars as $attr => $val) {
	if ($val === TRUE) {
		$element[] = $attr;
	} elseif ($val !== FALSE) {
		$val = htmlspecialchars($val);
		$element[] = "$attr=\"$val\"";
	}
}

if (!empty($js)) {
	$element[] = $js;
}

if (!isset($body)) {
	$element[] = '/';
}

echo implode(" ", $element).">";

if (isset($body)) {
	echo "$body</$tag>";
}