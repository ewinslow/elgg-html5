<?php
if (isset($vars['value']) && is_int($vars['value'])) {
	$vars['value'] = date("Y-m-d", $vars['value']);
}
?>
<input type="date" <?php echo html5_get_html_attributes($vars); ?> />
