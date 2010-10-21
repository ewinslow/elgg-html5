<?php
if (isset($vars['value']) && is_int($vars['value'])) {
	$vars['value'] = date("c", $vars['value']);
}
?>
<input type="datetime" <?php echo html5_get_html_attributes($vars); ?> />
