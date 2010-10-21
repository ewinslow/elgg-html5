<?php

function html5_init() {
	elgg_extend_view('css', 'html5/css');
	
	elgg_extend_view('js/initialise_elgg', 'js/html5');
}

function html5_get_html_attributes(array $attrs = array(), $quote_style = ENT_COMPAT, $charset = 'UTF-8', $double_encode = TRUE) {
	$attrs = html5_clean_vars($attrs);
	$attributes = array();
	
	if (isset($attrs['js'])) {
		elgg_deprecated_notice("Use of the 'js' attribute was deprecated in 1.8.  You can now use the js attributes directly.", '1.8');
		
		if (!empty($attrs['js'])) {
			$attributes[] = $attrs['js'];
		}
		
		unset($attrs['js']);
	}
	
	foreach ($attrs as $attr => $val) {
		$attr = strtolower($attr);
		
		if ($val === TRUE) {
			$attributes[] = $attr;
		} elseif (!empty($val)) {
			//allow multi-value attributes to be passed as array
			if (is_array($val)) {
				sort($val); //gzip?
				
				$val = implode(' ', $val);
			}
			
			$val = htmlspecialchars($val, $quote_style, $charset, $double_encode);
			$attributes[] = "$attr=\"$val\"";
		}
	}

	sort($attributes); //gzip?
	
	return implode(' ', $attributes);
}

// remove all the junk that elgg_view throws into $vars
function html5_clean_vars(array $vars = array()) {
	unset($vars['config']);
	unset($vars['url']);
	unset($vars['page_owner']);
	unset($vars['page_owner_user']);
	
	foreach ($_SESSION as $key => $value) {
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
	
	return $vars;
}

register_elgg_event_handler('init', 'system', 'html5_init');
