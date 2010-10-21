<?php

$defaults = array(

);

$vars = array_merge($defaults, $vars);
?>

<input type="range" <?php echo html5_get_html_attributes($vars); ?> />