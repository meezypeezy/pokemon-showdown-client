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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8690417667996746" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.682659944388547" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.20776680370048517" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6622188326247758" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5932393127184137" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.010989336547091" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.009549807522800435"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6377478409023656" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.033295710434540604">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.13996464389774754">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.628539388863437">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8718964290011899">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.19334033815096707"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.07579338419075254"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.883698552912292"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5789726252748162"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2630601177703369"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8337769518009779"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.07973462450302038"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4469095112069461"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8600048693635929"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5231883729249298"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8854179062991006"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3468392191267977"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.20316309406718736"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7310722879768763"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9700679143205369"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5880100531324033"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.09502082621283758"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5137393536582535"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.18953951230423915"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
