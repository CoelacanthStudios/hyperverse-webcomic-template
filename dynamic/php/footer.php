<a href="/feed/?type=rss" title="Subscribe to the RSS feed"><img src="/icns/rss-icon.svg"></a>

<?php
foreach($socialMedia as $platform=>$link) {
	ob_start();
?>
<a href="<?=$link['url']?>" title="<?=$link['title']?>"><img src="/icns/<?=$platform . '-icon.svg'?>"></a>
<?php
	if($link['url'] != '') {
		echo(ob_get_clean());
	} else {
		ob_clean();
	}
}
?>
