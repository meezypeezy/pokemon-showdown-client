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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5882327655625648" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6317059140103258" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6203127698642867" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.22100782762626858" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6635290456514467" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8568687783944855" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3790129513946414"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7879740539461393" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7242275559564926">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7680571918627799">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5050904735475858">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.022824198016812458">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.024098099531984385"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6822088571966072"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5061748219205695"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08847859203353003"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.18464383132003648"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9504824628540149"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.691809347386908"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.06274930497020303"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1959467619380877"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.714606354379894"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.34084544498187985"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7791423978128764"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6716119329699928"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.0650721174670581"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7134645049874506"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3603216382677361"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.012768377490213645"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9284391043852407"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1822054089563101"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
