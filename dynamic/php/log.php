<style>
	body {
		background: #1f2038;
		color: lightgray;
		font-family: 'Roboto Mono', monospace;
	}

	li {
		margin-bottom: 10pt;
	}

	#container {
		text-align: left;
	}

	#container a {
		font-size: inherit;
	}

	/* Mobile Styling */
	@media only screen and (max-width: 1052px) {
		#container a {
			line
		}
	}

	/* Desktop Styling */
	@media only screen and (min-width: 1053px) {
		#container {
			width: 1024px;
		}
	}
</style>

<body>
	<div id="exoskeleton">
		<div id="header">
			<a href="/" class="logo"></a>

			<div class="controls">
				<a href="javascript:window.history.back()">back</a>
				<a href="javascript:load()">load</a>
				<a href="<?='/?' . $pageName . '=1'?>">first</a>
			</div>
		</div>

		<div id="container">
			<?php
			$folders = glob($pageFolder . '/*', GLOB_ONLYDIR);
			natsort($folders);
			$pages = [];

			
			$prevAction = 'start';
			
			foreach($folders as $pagepath) {
				$p = str_replace($pageFolder . '/', '', $pagepath);
				$nextButton = 'Next';

				ob_start();
				require($pagepath . '/index.html');
				ob_end_clean();

				$timestamp = strftime("%m/%d/%y", strtotime($pubdate));
				$pages[intval($p)] = $timestamp . ': ';
				$pages[intval($p)] .= '<a href="/?' . $pageName . '=' . $p . '">' . $prevAction . '</a><br>';
				$prevAction = $nextButton;
			}

			$pages = array_reverse($pages);
			foreach($pages as $item) echo($item);
			?>
		</div>
		
		<div id="footer">
			<a><?=$license?></a><br>
			<?php require('dynamic/php/footer.php')?>
		</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script src="/dynamic/js/fitty.min.js"></script>
<script src="/global.js"></script>
