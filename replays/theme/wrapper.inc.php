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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3357185546932113" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8705248384925646" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7694673909873351" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.709473095604024" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.0936559916630808" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8354263862256652" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.21401404819091074"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.10805642267038307" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1393941709817077">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6552274970929577">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7395838765782474">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9283078868397465">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2671266890002495"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.22077328770537052"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.47581434490022523"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8013265786757737"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8658707632069671"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.0037354307693220345"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5304221336640105"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.08700055697516995"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4598131050480745"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5707296067421403"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3724388745418896"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.024564241544366094"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2904958814836809"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.39079250773463037"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4547121945053756"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.24744262510387616"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6132639459367142"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9287182457748073"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8563804226089413"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
