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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.813261475545656" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8227859210231314" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8500449485426644" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.18586124696967432" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8099744586835875" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.09762727850568065" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.19906626889507772"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8826409336121275" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1645591227027272">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2968321443352018">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9801151283124427">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3368039015576676">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1063975952213092"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.31270290773217435"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.23789637900961358"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6650207968585926"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.26179991190486995"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5795102703289126"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6590068935972662"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8959545910824851"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.19488757665007106"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.06202886781844552"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9395814903788264"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.41120476563400055"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.782690443831519"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4008033012533667"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9636602813685249"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.903167303238291"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8506712653945043"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.15340150599719493"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4967975028242073"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
