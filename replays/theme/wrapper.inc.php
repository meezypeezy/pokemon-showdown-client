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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7140064752038593" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.20215201847996056" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3308903955556124" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9893682721049768" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.09898456216137097" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4794256233942731" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.24560122061512168"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4592765802356087" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.632762899011174">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4217351375139544">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7611938756155441">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.12500626275768556">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.34575566387311385"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7203182880291741"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6764548187091051"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8573995596750594"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9506608867306245"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6168683421766148"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3250252294846758"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4613243009788526"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.45493415806232296"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3138630773002855"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.46624569010639494"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3645147654796219"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.06475725518394304"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.19078487021824198"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8930119000594143"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5151726415662932"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7750806366487664"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.12916307365415358"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.47924740511550823"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
