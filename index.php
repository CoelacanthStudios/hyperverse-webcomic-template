<!DOCTYPE html>

<?php
$uri = $_SERVER['REQUEST_URI'];
$page = isset($_GET['page']) ? $_GET['page'] : '';

require('settings.php');
?>

<html lang="en">
<head>
	<?php require('dynamic/php/head.php');?>
</head>

<body>
	<?php
	if($page == '')
		require('dynamic/php/landing.php');?>
</body>
</html>
