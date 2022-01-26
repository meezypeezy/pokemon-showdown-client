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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7906000369364703" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2108886017779199" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.1349625424855989" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5506525763916459" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4284983592973508" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.529548096858937" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5362389550517059"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5699297930994935" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5859587856711426">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.46421461607912606">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5258915901486407">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.054393051939511716">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9327325101688497"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.30238612660174446"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8912705516063173"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.03382022768214221"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.684747608280013"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.038137040160828306"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8965174271920524"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4994265528429116"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.26785980108702145"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8841181812414518"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3234021608037432"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.216745559073509"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7274770585591279"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5735576299842222"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6277287641378475"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5371906440181196"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.42147055399786626"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9879585646750035"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8914279282243021"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
