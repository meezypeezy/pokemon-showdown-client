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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6349983727714918" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3477467554405931" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.20778832525558477" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.060923026723480156" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.08093812226703045" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.14369812603684862" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5184193499262866"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.22227306319283158" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8452401627731994">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4663074723663856">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8906987063724539">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2936621720255175">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.27526019949892655"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9414538128059542"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.11823495160309228"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.02198516340126022"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.19178678606937982"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1620181937509948"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6243988907560929"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.1999793674678989"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5369156774147128"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.645430937162448"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.36468558809001617"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.37642521794604833"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.11118389734472367"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.39657236341384783"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.449112182036405"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5531565672270111"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.20640335031937074"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8057422000132481"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5770626557820919"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
