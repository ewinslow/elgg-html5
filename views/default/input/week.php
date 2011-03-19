<?php

$defauts = array(
	'placeholder' => elgg_echo('placeholder:week'),
);

$vars = array_merge($defaults, $vars);
?>

<input type="week" <?php echo elgg_format_attributes($vars); ?> />