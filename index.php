<?php
/**
 * Sample App
 */

require('config.php');
require('page.php');

// TODO: Allow different pages to be rendered
$page = new Page();
echo $page->render('welcome');

?>
