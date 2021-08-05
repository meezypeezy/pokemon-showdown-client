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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.947269725396243" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9959208344847355" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5800315849630453" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.1010006011115383" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.029295389934290927" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.0020054719201041404" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2250064902010298"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.43735710854496124" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4592665601502526">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.32471135690247843">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.0017911376331185558">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2476871517673065">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8142310303744635"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8725149856260177"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7238521233121946"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.14292588947411855"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8037652150293699"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2758556230897531"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.01126772619275096"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.48655619888967294"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6580340667139231"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.028419712436403843"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7863376617885034"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.09257231360488949"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.18050789124767075"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.0732741557387071"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7501442418410291"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6886169177054187"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8501027421446876"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.21906379703025847"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.24708186041326452"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
