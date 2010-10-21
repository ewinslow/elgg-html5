<?php
$defaults = array(
	'placeholder' => elgg_echo('placeholder:tel'),
);

$vars = array_merge($defaults, $vars);
?>

<input type="tel" <?php echo html5_get_html_attributes($vars); ?> />