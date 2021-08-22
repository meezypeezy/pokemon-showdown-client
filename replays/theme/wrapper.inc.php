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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7017432426951469" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5337563906271772" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7760744084041697" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8057457806097654" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.2682497856541497" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8695259487437448" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5608811479194258"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6936960074136769" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20650327711813654">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2731557789495793">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7982958245225573">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.025209374618150315">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.22004305687342596"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4697040645955568"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.05936018347007521"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6843299680562618"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6323553332483627"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1125207031656914"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3211909453783435"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.42570866739811786"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4879018376333475"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.15030994564337674"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.49966360882591143"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7668878574653333"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.40921340299495923"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.04393621146988025"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.47739137420138267"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.1641469425749542"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.45920671789895695"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6094557957521731"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.18396482177920337"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
