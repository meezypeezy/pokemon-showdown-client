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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.03943271925508518" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7895710297471337" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.24073910601216642" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.1908969615444962" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9431943874999804" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.04340860746562947" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.10582231054771252"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8529726016997312" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.23791777977577921">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5096842519971996">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.23450142266404828">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3572010868287747">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.23472587551626"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5732096386392922"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.585557011560726"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.07950366428227218"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2029430504355354"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.607325761040399"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.01989634968431009"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2188201725558112"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.32925491470341406"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9944595782331229"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.06747302208412842"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7765040589029149"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.39354368448083"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.13566964901986767"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9952819015862822"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.22775839560158118"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6972210961282748"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.05384534876020619"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6545515172860237"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
