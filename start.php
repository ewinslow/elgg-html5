<?php

function html5_init() {
	elgg_extend_view('css/elgg', 'html5/css', 1);
	elgg_extend_view('theme_preview/forms/inputs', 'html5/theme_preview/forms/inputs');

	elgg_register_js('Modernizr', '/mod/html5/vendors/Modernizr-1.5.js', 'head', 1);
	elgg_register_js('jquery.placeholder', '/mod/html5/vendors/jquery/jquery.placeholder-1.0.1.js', 'footer');
}

elgg_register_event_handler('init', 'system', 'html5_init');
