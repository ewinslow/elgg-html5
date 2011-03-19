<?php
$defaults = array(
	'placeholder' => elgg_echo('placeholder:tel'),
);

$vars = array_merge($defaults, $vars);
?>

<input type="tel" <?php echo elgg_format_attributes($vars); ?> />