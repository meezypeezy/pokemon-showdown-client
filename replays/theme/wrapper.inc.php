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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2319120692957788" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5407230896613375" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.18570287466016167" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.16712016574249433" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7213025977345207" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6542144068916618" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3544093693622894"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7087567191072175" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.26467581653965433">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.24726340639610855">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8540439187487279">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7071924586286593">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.30599929485061006"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.38138814037246793"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6942870161938377"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8426765239121474"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.31864228453165144"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5039644274670494"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3844204782368721"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.362288564363906"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.15133918468499497"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3492149279459227"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9895010602627006"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.29160904072232574"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7993964530987212"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9656171133705198"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8867211158352171"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8582802785290575"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7539489240056247"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.642157405089012"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8052525125741798"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
