<?php ob_start()?>
<div class="panel">
	<div class="logocont"><span class="logo"><?=$title?></span></div><br>
		
	<div class="controls">
		<?php
		if(is_dir('story/1')) {
			echo('<a href="/?p=1" class="next-button">start</a>');
		} else {
			echo('<a class="next-button">coming soon to a theater near you</a>');
		}
		?>
	</div>
</div>
	
<div id="footer">
	<?=$warning['epilepsy'] ? '<span>epilepsy warning: flashing colors</span><br><br>' : ''?>
	<a <?=is_file('dynamic/php/credits.php') ? 'href="?p=credits"' : ''?>><?=$license?></a><br>
	<?php include('dynamic/php/footer.php')?>
</div>
	
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script src="https://hyperspace.sfo2.cdn.digitaloceanspaces.com/js/fitty.min.js"></script>
<script src="/global.js"></script>

<script>
	$(() => {
		if(window.mobilecheck()) {$('#footer').css('bottom', '0'); $('body').css('height', '90vh')};

		fitty('.logo');

		if(!testSave()) {
			$('.panel .controls').append('<a href="javascript:load()" title="If you have saved you will automatically be returned to your last location.">load</a>')
		}
	});
		
	function testSave() {return typeof Cookies.get('page') == 'undefined'}

	function loadGame() {
		if(testSave()) {
			window.location.pathname = '/story/1';
		} else {
			load();
		}
	}
</script>
<?=ob_get_clean()?>
