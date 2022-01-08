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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.05565832083826172" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.37298775046608634" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2181125164892126" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3300036475142383" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.25969626095027243" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4691937482520383" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6018279346009829"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8764179955777445" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7592970990462871">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1493468303345673">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9055912511220565">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.29607195134386055">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.328658338747452"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.542722771421283"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6475073672162879"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.44466309201661747"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7209712772301096"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6806679251690619"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.43282323708326675"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.33207459261660177"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.07775809250732713"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.23182994021809789"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.05873145522459344"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.775940531377511"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6474539544776801"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8536704450700079"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9758016499612483"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.777997004069847"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.25934415892802654"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.14590902630270897"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9613255938301608"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
