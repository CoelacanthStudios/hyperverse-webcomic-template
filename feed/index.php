<?php
require('../settings.php');

$folders = glob('../story/*', GLOB_ONLYDIR);
natsort($folders);
// $folders = array_reverse($folders);

$prevAction = 'start';

$items = [];

foreach($folders as $pagepath) {
	$page = substr($pagepath, 9);

	ob_start();
	require($pagepath . '/index.html');
	$nb = $nextButton;
	ob_end_clean();


	ob_start();
?>
		<item>
			<title><?=$page?></title>
			<description><?=$prevAction?></description>
			<link><?=$domain . '/story/' . $page . '/'?></link>
			<guid><?=$domain . '/story/' . $page . '/'?></guid>
			<pubDate><?=$pubdate?></pubDate>
		</item>
<?php
	$items[intval($page)] = ob_get_clean(); // Append Item to Posts Variable

	$prevAction = $nb;
}

$items = array_reverse($items);
?>
<?php
// header("Content-Type: application/rss+xml; charset=ISO-8859-1");
header('Content-type: text/xml');
ob_start();
?>
<?='<?xml version="1.0" encoding="UTF-8"?>'?>

<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel>
		<atom:link href="https://hyperve.rs/feed/" rel="self" type="application/rss+xml" />

		<title><?=$title?></title>
		<link><?=$domain?></link>
		<description><?=$description?></description>
		<?php foreach($items as $item) echo($item)?>
	</channel>
</rss>
<?=ob_get_clean()?>
