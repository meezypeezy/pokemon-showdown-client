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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8430717478175669" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4618286195104204" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3357170764797339" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.662378494792119" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.03668140853485391" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.1297629483927203" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8619492002534423"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.24163720025358915" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8615312864976419">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.15757796587747164">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7408653839728963">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.18972344949657294">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.592240822802889"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.22002382547276422"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.49159000166198474"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.287378316792785"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.15101946279238843"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.13726571766069062"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.947832699486338"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9264546915269132"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1382277295558656"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.06206402260759103"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2563620121826444"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5231340879975617"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6954778983606049"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6279085387219363"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5314775233758517"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6961023334945602"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.703789419535924"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5554146208886273"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.48731413798793444"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
