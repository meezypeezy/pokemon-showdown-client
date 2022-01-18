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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.29853389090708626" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.04104593637011367" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.417068025172854" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9772369388538766" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.049195958506232484" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6567055427759236" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6761475846243596"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8306505464140175" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6978466264475769">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.39855289459992416">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.22113334212525615">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.950134596626496">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.18911135000559365"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.1970567634119995"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.855661493303093"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5162847551212479"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.904399123335691"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.21878234841211208"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.820696002625255"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.846378826869127"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6722948135264655"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.13440672628266226"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6796819137163976"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8667525436992609"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.20468524306969238"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.10423659680683528"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9170397240858783"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.01004230370469017"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.40688818715099195"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7122529581792072"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5634391672247516"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
