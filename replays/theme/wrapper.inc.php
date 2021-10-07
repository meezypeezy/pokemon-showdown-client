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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.05835984406111505" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.09640002604733833" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4363760323819461" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5601493085235958" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.022179710442788547" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.851630606128907" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.42011174007707464"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7529143622207495" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.19595081783165158">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4651510145112183">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.17921452636952329">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5689869873971192">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.27791511799488466"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3860088234601047"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.38057556962574024"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8367351095809819"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.43192253717825957"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2966710270061532"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9181577928478177"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.09165915452543993"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4930655370761754"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5322193957122257"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9871377994775794"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.42600644823039313"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9082290498666343"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9151199384550557"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6740854598249524"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8094714330149473"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.1078743302292604"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7927079341800545"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8832209349673272"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
