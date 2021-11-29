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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.06598774683104902" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9934430251709565" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.055371389073998634" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9541932364097914" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.39639289633612385" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3817698883501657" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.797317240789789"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9121598322604434" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.14139449674583138">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6757448172663387">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.11392528838316895">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2613630235416542">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.0921584704574887"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6592929352634385"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5493475440644924"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7218971981987088"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2994875278225755"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7536585575631527"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7942848536530676"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3798174161969985"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.14952916473368139"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2916249101325574"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.09320729749059042"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8679196254021613"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.31471116532901555"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.945092856561697"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.49442814288332904"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8410654478704653"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4881940880893185"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2963553520239448"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.09856035472492186"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
