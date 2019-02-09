<div id="exoskeleton">
<div id="header">
	<a href="/" class="logo"></a>
	<div class="controls">
		<a href="<?=$page == 1 ? '/' : '/?' . $pageName . '=' . ($page - 1)?>" class="prev-button" >prev</a>
		<a href="javascript:save()">save</a>
		<a href="javascript:load()">load</a>
		<a href="javascript:clear()">clear</a>
		<span class="separate">
			<?=$page != 1 ? '<a href="/?' . $pageName . '=1">&nbsprestart</a>' : ''?>
			<a href="<?='/?' . $pageName . '=log'?>"><?=$page == 1 ? '&nbsp' : ''?>log</a>
		</span>
	</div>
</div>
	
<div id="container">
	<?php
	if($page > 1) {
		ob_start();
		require($pageFolder . '/' . ($page - 1) . '/index.html');
		ob_end_clean();
		$prevAction = $nextButton;
	} else {
		$prevAction = 'start';
	}

	echo('<div class="prev-action">' . $prevAction . '</div>');
	include($pageFolder . '/' . $page . '/index.html');
	
	if(is_dir($pageFolder . '/' . ($page + 1))) echo('<br><a class="next-button" href="/?' . $pageName . '=' . ($page + 1) . '">' . $nextButton . '</a><br><br>');
	?>
</div>

<div id="footer">
	<a><?=$license?></a><br>
	<?php require('dynamic/php/footer.php')?>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fitty@2.2.6/dist/fitty.module.min.js"></script>
<script src="/global.js"></script>
