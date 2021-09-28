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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8744208939623686" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.947410159023856" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.44094101977476163" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6366899165271263" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.736244491486012" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6436948451695947" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8411254658719276"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.11427991784077407" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5586217963486799">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.31297919264678464">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3472310937849954">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9660842417107112">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14139015019300416"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7476925160949686"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6507414867161301"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7409119179107166"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.536525436857457"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.28912740896617195"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8962232052353454"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8201919191395586"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8790896933549375"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.22119188696533598"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6602869558354421"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.13367446677998918"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9584578864411732"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4407001322630417"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.27170464397007454"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.06947936331319382"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4622719446494419"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9534724445709697"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6247980732936487"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
