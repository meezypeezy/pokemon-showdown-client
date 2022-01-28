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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.36495768529474226" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8435232117289722" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.021551318046196588" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9760174954597105" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3028747671367442" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.05601140578052699" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8231155357359714"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9103496325800682" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.13786197870273464">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9909892342827582">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.520563168320874">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.49490678601582183">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.20122453963739972"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8384440669708952"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9670897809345869"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3360059816388581"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4786296910904726"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6451874420310024"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9931385673449078"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2655311938954328"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5217997097997435"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.04152367114938316"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2247343914306661"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7401228613777167"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9293418420013135"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8802383773846489"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9711395446839377"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8720451327781251"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9310295330162721"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5616765910012582"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4949655677989584"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
