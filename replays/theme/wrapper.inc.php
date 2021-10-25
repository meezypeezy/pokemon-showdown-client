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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.12535860870544835" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.937599246801814" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.04509125445191042" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.19154939545209215" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.45834580800922664" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.22197967607062985" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7727962174982517"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5284973952470129" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9820322664312895">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.11295263505534625">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5871038966579545">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.27508542537859726">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.707728909813111"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.08524118670245473"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.13239842704826166"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7222135722775516"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.11268335854172817"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5597074234147097"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.16911944414287738"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8968533583027469"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.0508447605371396"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6777003136843955"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4194067470516567"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3791760984790169"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.07540024491568298"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.14622573144871587"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.15969778539793622"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.08357132641333753"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.12951983356688102"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8708562751938724"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4073711147382191"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
