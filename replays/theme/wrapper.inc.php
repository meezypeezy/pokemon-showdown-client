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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5741567886128376" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3432659814104366" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8955911548667015" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.790662106500778" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9904511955746833" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3009628629899652" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.07229109202330797"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8107218220849668" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10449394946533164">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6005512834357956">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3326134487792922">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4021319944475026">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7178233284928695"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.853528981886164"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8212449250250482"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2792362346116988"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8776733232341891"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9402535368700671"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.671103207318346"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.18205612426760798"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9944586138058595"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6189629204961784"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9710905069839486"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4106043651415019"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.615614419855077"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5197983316980732"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.19596685964557126"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7951149329157932"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5035385458065684"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5904426408457804"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.06325257194385259"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
