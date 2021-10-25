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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.07912715442260176" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.03414224502500107" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.0726808376623389" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3272524224019" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6381101468703743" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4498924630199794" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.700742052440007"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.15680407379815686" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7736716704831537">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5139586244361749">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.11071292766813357">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2890783351688393">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9143768233517828"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5813997037537073"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8684762271992601"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.21060985299171353"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.813557175911783"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3435790177235776"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.12266678774693607"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.12916546012824015"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.16637874621705584"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.21758249225292503"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6539127501936102"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5007749874624594"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4093191994419261"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4836623161878746"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.11788523812330842"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4821171902891306"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3927640923315081"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7080878813959011"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.005784966376212841"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
