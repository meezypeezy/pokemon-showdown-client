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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6556161020669127" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.557942398298396" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.19423199851371642" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.23283928864001258" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.19599011170434943" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9981682254888558" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5583284214469724"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.13152877276759045" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.40670237287247346">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5405107456767155">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5288908952613394">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.36529854719946764">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7791422743264547"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7828095343858439"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.29008975872556886"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6267877976934912"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4437506923853276"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6387606199882006"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8167803301559569"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2371781236340169"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1435605033460079"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.49865560597434877"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.33873665976144385"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6149955635789519"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.06262837155218648"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8515032923394925"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.44212600256145596"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3408432004837203"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9807075100868734"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.46859095791864935"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8202422098276316"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
