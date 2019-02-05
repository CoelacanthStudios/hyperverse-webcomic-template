<?php
require('../../settings.php');
header("Content-type: text/css");

ob_start();
?>
:root {
	--background: #1f2038;
	--text-color: lightgray;
	--link-color: #bb51b6;
	--link-hover-color: #a3479f;
	--selection-color: #00000033;

	--header-background: #4f4f79;
	--header-link-color: #9292d4;
	--header-link-hover-color: #a3479f;

	--container-background: #38395a;
	--caption-background: #2e2f49;

	--footer-color: #4e4e86;
}

/* Desktop Styling */
@media only screen and (min-width: <?php $img_w = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $imageWidth['desktop']); echo(($img_w[0] + 30) . $img_w[1]);?>) {
	body {
		/* Spatial styling */
		width: min-content;
		height: 100%;
		margin: auto;
	}

	#container {
		padding: 6px;
		border-bottom-left-radius: 6px;
		border-bottom-right-radius: 6px;
	}

	.caption {width: 500px}

	.panel {width: <?=$imageWidth['desktop']?>}
}

/* Mobile Styling */
@media only screen and (max-width: <?php $img_w = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $imageWidth['desktop']); echo(($img_w[0] + 29) . $img_w[1]);?>) {
	body{
		/* Spatial styling */
		position: absolute;
		width: 100%;
		height: 100%;
		margin: auto;
	}

	#container .prev-action {
		padding-top: 6px;
	}

	#disqus_thread {
		margin-left: 10pt;
		margin-right: 10pt;
	}

	.panel {width: 100%}

	.caption {margin-bottom: 6px}
}

#header .logo:after {
	content: '<?=$title?>';
}

/* Tiny Styling */
@media only screen and (max-width: 525px) {
	#header .logo:after {
		content: '<?=substr($title, 0, 1)?>' !important;
	}
}

<?=ob_get_clean();?>