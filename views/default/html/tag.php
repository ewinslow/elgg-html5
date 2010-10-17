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

$tag = $vars['tag'];

//Build the input
$element = array();

$element[] = "<$tag";
foreach ($attributes as $attr => $val) {
	if ($val === TRUE) {
		$element[] = $attr;
	} elseif ($val !== FALSE) {
		$val = htmlspecialchars($val);
		$element[] = "$attr=\"$val\"";
	}
}
$element[] = $js;
$element[] = "/>";

echo implode(" ", $element);