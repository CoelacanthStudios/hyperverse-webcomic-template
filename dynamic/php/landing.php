<?php ob_start()?>
<div class="exo">
	<div class="logocont"><span class="logo"><?=$title?></span></div><br>
		
	<div class="controls">
		<?php
		if(is_dir($pageFolder . '/1')) echo('<a href="/?' . $pageName . '=1" class="next-button">start</a>');
		if(isset($_COOKIE['page'])) echo('<a href="' . $_COOKIE['page'] . '">load</a>');
		?>
	</div>
</div>
	
<div id="footer">
	<?=$warning['epilepsy'] ? '<span>epilepsy warning: flashing colors</span><br><br>' : ''?>
	<a><?=$license?></a><br>
	<?php require('dynamic/php/footer.php')?>
</div>
	
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script src="https://hyperspace.sfo2.cdn.digitaloceanspaces.com/js/fitty.min.js"></script>
<script src="/global.js"></script>
<script>$(() => {if(window.mobilecheck()) {$('#footer').css('bottom', '0'); $('body').css('height', '90vh')}; fitty('.logo');});</script>
<?=ob_get_clean()?>
