<?php

function html5_init() {
	elgg_extend_view('css/screen', 'html5/css');

	elgg_register_js('Modernizr', 'mod/html5/js/Modernizr-1.5.js', 'head', 1);
	elgg_register_js('jquery.placeholder', 'mod/html5/js/jquery.placeholder-1.0.1.js', 'footer');
}

elgg_register_event_handler('init', 'system', 'html5_init');
