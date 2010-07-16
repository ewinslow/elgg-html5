<?php
/**
 * HTML5 header
 * The standard HTML5 header that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 * @author Curverider Ltd
 * @link http://elgg.org/
 *
 */

// we won't trust server configuration but specify utf-8
header('Content-type: text/html; charset=utf-8');

?>

<!doctype html>
<html>
<?php echo elgg_view('page_elements/head', $vars); ?>
<body>