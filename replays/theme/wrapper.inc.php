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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8298444802105369" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.32655966740365905" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7284798908880361" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.32587250812656343" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3730499402473624" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6522725420491124" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7033970716489519"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.29078440023715846" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7546952065654824">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.011098806550693618">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.061889147479611495">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7824722255185712">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5571325165941619"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7474646538791041"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.69187194151066"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5589006549331044"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9028198537811574"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7253095887844634"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.772744608752705"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5887517830254103"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9131019984704096"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3742263469395182"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.40663860649042927"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6227217506358425"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3254591990898221"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7788671307940405"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5956733284053499"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.12638550963169837"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6065077946414357"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4908363552421704"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.20853243186406445"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
