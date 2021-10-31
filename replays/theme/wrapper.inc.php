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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7623664421841316" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7138941864493085" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.01962941183207567" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5885958845788914" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4201073609951369" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.726247461878726" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.268190692555786"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7877813824144047" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.28127953643984305">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.545999293410611">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4961687013346472">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.572491931868824">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8928587479025456"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7113042771898279"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4524549401218303"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.35521896143447407"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.42276981705986905"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10079767512978743"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6569090922645242"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.1562777282221648"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9487329063895831"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3839974071237571"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5692404513619767"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9742196847548052"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3124358836288368"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3964118752171446"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7852632866850331"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8574816547325135"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8916006045093332"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6091852953241788"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.443201906385976"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
