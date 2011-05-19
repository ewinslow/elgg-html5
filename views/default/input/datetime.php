<?php
$defaults = array(
	'class' => 'elgg-input-datetime',
);

$vars = array_merge($defaults, $vars);

if (isset($vars['value']) && is_int($vars['value'])) {
	$vars['value'] = date("c", $vars['value']);
}

$vars['type'] = 'datetime';

?>
<input <?php echo elgg_format_attributes($vars); ?> />
