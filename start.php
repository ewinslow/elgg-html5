<?php

function html5_init() {
	
	//This script must appear before any styles
	elgg_extend_view('head/metas', 'scripts/html5', 1);
	
	elgg_extend_view('css', 'html5/css');
	
	elgg_view_register_simplecache('scripts/html5');
	elgg_view_register_simplecache('html5/css');
}