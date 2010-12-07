<?php
require('config.php');
require('page.php');

echo '<h1>Eduhub Sample App</h1>';

// TODO: Allow different pages to be rendered
$page = new Page();
echo $page->render('welcome');

?>
