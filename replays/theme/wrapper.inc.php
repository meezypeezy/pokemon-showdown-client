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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3681798317493912" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5677389812712663" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6887063381022234" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.14733231285910486" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.13420542685275483" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6193325041682247" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8442234270196625"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.25300205049103774" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0734486030823096">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6654299461816742">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.503801968147719">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4736954364429402">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9578989802495388"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6492326456511741"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.34742141328109666"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8086018794064622"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.427320597032564"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5676309108757411"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9144817694025811"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2234307837093703"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.2931769602663792"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9335054889186942"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2508188363906996"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.052057104003926824"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9813015117843045"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.405341812236756"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.48124586406683445"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.37047782639497506"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.965193965915532"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.948187870667349"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.052336339284777766"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
