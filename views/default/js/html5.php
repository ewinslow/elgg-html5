<?php
global $CONFIG;

include $CONFIG->pluginspath.'html5/js/Modernizr-1.5.min.js';

$placeholder_script = $vars['url'].'mod/html5/js/jquery.placeholder-1.0.1.js';
?>

if (!Modernizr.input.placeholder) {
	$(function() { $('[placeholder]').placeholder({className:'html5-placeholder'}); });
	document.write('<script src="<?php echo $placeholder_script; ?>"></script>');
}
