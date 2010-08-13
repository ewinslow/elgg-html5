<?php

function html5_init() {
	elgg_extend_view('css', 'html5/css');
	
	elgg_extend_view('js/initialise_elgg', 'js/html5');
}

register_elgg_event_handler('init', 'system', 'html5_init');
