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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.32721079198411185" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9166425240491327" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.0151159440647195" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.38327438170659356" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5931475116382603" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2685957779250241" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.10960493194086873"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.35196387900170545" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.09391193004535281">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9947042151836512">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5100981463834442">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.40349711267218225">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4037261616990053"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.05458725146378085"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.24997584026579656"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.04191913862481855"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5122831717048588"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6133153534568965"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7263162917389765"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8457932455495776"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4541471103020036"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3238885394186348"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.15756571991106605"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.37324036899544644"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8539684625702857"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.37078378907413945"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3302942295420719"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5348594796542883"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.03920088262358301"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8362329401834461"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.032152036265405304"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
