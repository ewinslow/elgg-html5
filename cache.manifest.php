<?php
header("Content-type: text/cache-manifest");

require_once dirname(dirname(dirname(__FILE__))).'/engine/start.php';

global $CONFIG;

$viewtype = get_input('viewtype', 'default');

$manifest = <<<MANIFEST
CACHE MANIFEST
# Viewtype:  $viewtype
# Lastcache: {$CONFIG->lastcache}

CACHE:
# CSS
{$CONFIG->url}_css/css.css?lastcache={$CONFIG->lastcache}&viewtype=$viewtype

# Scripts
{$CONFIG->url}vendors/jquery/jquery-1.3.2.min.js
{$CONFIG->url}vendors/jquery/jquery-ui-1.7.2.min.js
{$CONFIG->url}vendors/jquery/jquery.form.js
{$CONFIG->url}vendors/jquery/jquery.easing.1.3.packed.js
{$CONFIG->url}_css/js.php?js=initialise_elgg&viewtype=$viewtype&lastcache={$CONFIG->lastcache}
{$CONFIG->url}_css/js.php?js=friendsPickerv1&viewtype=$viewtype&lastcache={$CONFIG->lastcache}

NETWORK:
*

MANIFEST;

echo $manifest;