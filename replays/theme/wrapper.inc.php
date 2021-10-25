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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9829052096175017" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9682801846403777" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.823960646320383" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.729243472046633" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7957962322868737" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9694443388057707" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7609380415378855"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4316630756369555" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8330875006663767">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.052630151966176264">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3604554554816597">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.30103160263323625">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4311078186360322"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4292687543964169"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9310147678177179"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.12831886271980775"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6694801328341178"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3201610866469464"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5433942608333435"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.010966997657587907"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.47669624717285575"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.932162235673637"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.16236111392727426"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.026645631471270192"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5713627026534889"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.10668284438946452"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8875235813897588"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9795603764926837"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5792285863873945"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6265065441523907"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8733705187910872"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
