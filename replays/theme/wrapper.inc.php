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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.17714039357466937" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.22522382542769015" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9915115726815866" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9875067736550944" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.32859293604297846" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8073988437580539" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6499551817762599"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.29003812508928695" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10722243375151597">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8635209259855405">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4620008097128092">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9497355634440612">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9701096402662417"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.1934342659008743"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8183679694139296"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3048730706943925"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7732845966112054"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.03834992747734933"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3028721221159474"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8856741967099668"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9240935163757016"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6285000661437843"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7944991025440853"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5369930132169456"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.930590590533219"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5568922654842852"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.28607501536194957"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.1561788173121208"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8825669955271982"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.050931548286871964"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7749858100491924"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
