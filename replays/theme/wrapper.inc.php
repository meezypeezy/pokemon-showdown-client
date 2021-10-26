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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.34911438810676" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6357860694400579" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8252550553861011" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.26876022913400965" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.29312895076263823" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.911696183793395" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.31762766244138585"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.04123028494846359" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7633255239188255">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2075865253634348">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7564544938110596">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.524445467979767">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4080386383285841"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8422018558154305"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.27161943651881937"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.33013305373881296"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.32977620018845055"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7744759054251269"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3446068512572942"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9757019764438153"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.744042530434851"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8431716637645801"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7230195778910253"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.43648004598942536"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2994067194220509"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9767710981349829"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.05405112891151442"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3461943489886212"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8281868106903225"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8646356249168476"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.20758774712285266"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
