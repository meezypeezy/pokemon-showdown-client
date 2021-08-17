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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9170904643916662" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8967071082898814" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.33475915853734595" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.1587010140586309" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.18539444468544009" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7612992251272457" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.86487450496247"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7778826768912215" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9477581870368188">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9290146642905139">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9492293505229428">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7020524355665172">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.045591150910641254"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.450159763538283"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5102623674152271"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5904953958086754"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.995189657112036"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.19390456020031888"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5203653920066833"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3414307702283532"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1415612652846896"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.12197451872062937"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6917595314223037"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.14692420312004995"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3746827595760738"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.37214698139517477"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2218724751775334"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.711421229684023"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8450384542941707"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.902355138815061"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7683354597055672"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
