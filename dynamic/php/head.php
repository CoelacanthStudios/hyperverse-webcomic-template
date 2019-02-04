<?php ob_start()?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?=$googleAnalytics['id']?>"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', '<?=$googleAnalytics['id']?>');
</script>
<?php
if($googleAnalytics['enabled']) {
	echo(ob_get_clean());
} else {
	ob_get_clean();
}
?>


<?php ob_start();?>
<title><?=$title?></title>

<link rel="icon" href="/icns/favicon.png">
<link rel="stylesheet" href="main.css">
<?=$uri == '/' ? '<link rel="stylesheet" href="dynamic/css/landing.css">' : ''?>

<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,400" rel="stylesheet">

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
	<meta name="twitter:site" content="<?=$twitterHandle?>">
	<meta name="twitter:creator" content="<?=$twitterHandle?>">
	<meta property="twitter:title" content="<?=$title . ' | page ' . $page?>">
	<meta property="twitter:image" content="<?=$domain?>/img/default.jpg">
<?php
	echo(ob_get_clean());
} else {
	ob_start();
?>
	<meta property="og:title" content="<?=$title?>">
	<meta property="og:url" content="<?=$domain?>">
	<meta property="og:description" content="<?=$description?>">
	<meta property="og:image" content="<?=$domain . '/story/ ' . $page . '/panel.gif'?>">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="<?=$twitterHandle?>">
	<meta name="twitter:creator" content="<?=$twitterHandle?>">
	<meta property="twitter:title" content="<?=$title . ' | page ' . $page?>">
	<meta property="twitter:image" content="<?=$domain . '/story/ ' . $page . '/panel.gif'?>">
<?php
	echo(ob_get_clean());
}
?>
