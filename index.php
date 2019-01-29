<!DOCTYPE html>

<html lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132345912-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-132345912-2');
	</script>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="theme-color" content="#4e4e86">
	<title>hyperverse</title>
	<link rel="icon" href="/icns/favicon.png">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,400" rel="stylesheet">

	<meta property="og:title" content="hyperverse">
	<meta property="og:url" content="https://hyperve.rs/">
	<meta property="og:description" content="A webcomic that will span many universes.">
	<meta property="og:image" content="https://hyperve.rs/story/1/panel1.gif">
</head>

<style>
body {
	width: 100vw;
	height: 100vh;

	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	overflow: hidden;
}

#footer {
	position: absolute;
	width: max-content !important;
	bottom: 10px;
	left: 50%;
	transform: translate(-50%, 0);

	user-select: none;
	
	text-align: center;
	color: #4e4e86;
}

#footer a {
	font-size: 12pt;
	color: #4e4e86;
}


.logocont {
	width: 70vw;
	height: auto;
	margin: auto;

	font-weight: 100;
	/* color: #141525; */
	color: #141525;
}



.logo {
	-webkit-transition: 0.5s all ease;
	-moz-transition: 0.5s all ease;
	-o-transition: 0.5s all ease;
	transition: 0.5s all ease;
}

/* .logo {text-shadow: 0px -2px 0px #2b2c4d} */
.logo {text-shadow: 0px -2px 0px #2b2c4d}
.logo:hover {text-shadow: 0px 3px 0px #2b2c4d !important}

.panel {
	text-align: center;
}

.controls a:nth-child(2) {
	margin-left: 20px;
}

</style>

<body>
	<div class="panel">
		<div class="logocont"><span class="logo">hyperverse</span></div><br>
		
		<div class="controls">
			<a href="/story/1" class="next-button">start</a>
		</div>
	</div>
	
	<div id="footer">
		<span>epilepsy warning: flashing colors</span><br><br>
		<a href="/credits/">© 2019 all rights reserved.</a><br>
		<?php include('footer.php')?>
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
</body>
</html>
