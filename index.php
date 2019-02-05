<!DOCTYPE html>

<?php
require('settings.php');
require('dynamic/php/global.php');

$uri = $_SERVER['REQUEST_URI'];
$page = isset($_GET[$pageName]) ? $_GET[$pageName] : '';
?>

<html lang="en">
<head>
	<?php require('dynamic/php/head.php');?>
</head>

<body>
	<?php
	if($page == '')
		require('dynamic/php/landing.php');
		else if($page == 'log')
		require('dynamic/php/log.php');
	else
		require('dynamic/php/page.php');
	?>
</body>
</html>
