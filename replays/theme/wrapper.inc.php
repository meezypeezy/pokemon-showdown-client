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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.32420934505445187" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.1529407721042022" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.22356704477675793" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.049737819774249736" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8943911574149712" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.13203260745257261" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8275542365750577"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.34305389494036675" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4635354218243788">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4821073236295399">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.002003318285344502">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.630853158697412">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9888160661203198"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.24454216788380623"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9578395143867464"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7132131444449195"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6362981653175315"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9096562846943699"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7971568732337464"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5655138138842217"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8783944528725081"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7602955935171085"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.37788155802996615"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7595581265274247"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7556336390550471"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6851324645822736"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.03532021079338987"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.13108700880696955"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7668155342294392"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6481175721484398"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.08981924846620815"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
