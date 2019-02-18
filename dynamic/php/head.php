
<?php ob_start()?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?=$googleAnalytics?>"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', '<?=$googleAnalytics?>');
</script>
<?php
if($googleAnalytics != '') {
	echo(ob_get_clean());
} else {
	ob_clean();
}
?>


<?php ob_start();?>
<title><?=$title?></title>

<link rel="icon" href="/icns/favicon.png">
<link rel="stylesheet" href="/dynamic/css/style.php">
<link rel="stylesheet" href="/dynamic/css/main.css">
<?=$uri == '/' ? '<link rel="stylesheet" href="/dynamic/css/landing.css">' : ''?>

<meta name="viewport" content="width=device-width initial-scale=1">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="theme-color" content="#4e4e86">
<?=ob_get_clean()?>

<?php
if($page == '') {
	ob_start();
?>
	<meta property="og:title" content="<?=$title?>">
	<meta property="og:url" content="<?=$domain?>">
	<meta property="og:description" content="<?=$description?>">
	<meta property="og:image" content="<?=$domain?>/img/default.jpg">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="<?=$twitterAccount?>">
	<meta name="twitter:creator" content="<?=$twitterAccount?>">
	<meta property="twitter:title" content="<?=$title?>">
	<meta property="twitter:image" content="<?=$domain?>/img/default.jpg">
<?php
	echo(ob_get_clean());
} else {
	ob_start();
?>
	<meta property="og:title" content="<?=$title?>">
	<meta property="og:url" content="<?=$domain?>">
	<meta property="og:description" content="<?=$description?>">
	<meta property="og:image" content="<?=$domain . '/' . $pageFolder . '/' . $page . '/' . $firstPanel?>">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="<?=$twitterAccount?>">
	<meta name="twitter:creator" content="<?=$twitterAccount?>">
	<meta property="twitter:title" content="<?=$title . ' | page ' . $page?>">
	<meta property="twitter:image" content="<?=$domain . '/' . $pageFolder . '/' . $page . '/' . $firstPanel?>">
<?php
	echo(ob_get_clean());
}
?>
