<?php
if (isset($vars['value']) && is_int($vars['value'])) {
	$vars['value'] = date("Y-m", $vars['value']);
}
?>

<input type="month" <?php echo elgg_format_attributes($vars); ?> />