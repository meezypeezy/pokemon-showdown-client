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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8999598076035253" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7871473214355567" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8759535326968468" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.1748875405055217" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.22228681487601443" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.17922094173946967" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9189031115885549"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7533292798434901" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.33971816164713275">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5223982425347615">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9735089738308818">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.26239719969509023">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.15855688720493832"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3357163957751861"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.13741426090387598"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9240512374430137"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6945735804856568"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2699287051130983"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.38463742594920514"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9324805484403464"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.737945340648654"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.28695632292356343"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3722980817884991"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.30996207584885016"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.26849953302584106"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.06618691751722694"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9500763003995583"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5245512004496391"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.483255870069776"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.23588475660082286"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2924687923137297"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
