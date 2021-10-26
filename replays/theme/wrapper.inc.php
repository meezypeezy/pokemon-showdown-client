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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.23964424351750435" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.42270922528826116" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7340282101769569" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3723308483869727" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.783827206150383" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3628058187194445" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.322112414166543"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.800673336921653" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.023488234986901668">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4304208330792427">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5685143441538651">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8130889160616952">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9075297908843829"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.265799341952913"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5704552225392938"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5641264051242498"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.29015460989534914"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.26778848405342703"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4731090626881964"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9141025354963734"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9190216624892429"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4204340478864812"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6228182462906804"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9876859225479584"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7429448205955997"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.27461326338461567"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.14550493530097786"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5358376402261329"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7123518112631362"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.39036719343689286"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5697315057808279"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
