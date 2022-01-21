<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.030410298516917678" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7710049207011382" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.21981060268726527" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.28247054918499304" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7425081497627208" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.1889959304690796" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8020981862810261"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.27859255410645867" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1265937883575794">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6301415890509519">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6817482932233943">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5942985527000191">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.10958280165772516"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.21572407479037303"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.829101800664328"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8504505431317524"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4053732651258284"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.714157585351114"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.17364513752167166"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7468756612297154"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.41795825665799513"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5573444791993718"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.516380831774921"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.18440939749934637"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.25761102650428436"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7777415112897879"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7388010303448715"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6116015793119789"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5417495570217317"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5753968383301968"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5052276368582631"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
