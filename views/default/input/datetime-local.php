<?php
if (isset($vars['value']) && is_int($vars['value'])) {
	$vars['value'] = date("Y-m-d\TH:i:s", $vars['value']);
}
?>
<input type="datetime-local" <?php echo elgg_format_attributes($vars); ?> />