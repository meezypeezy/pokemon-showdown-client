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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5653987730776562" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9957623990054887" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.0656915300181593" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.16794249637553582" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.18631924205314654" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9864115686099024" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.26603610402788513"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3475910278000587" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8043061276080661">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1746560007644835">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8196268307549421">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4720112707883899">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.25691233983523976"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.004909303186836578"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.10593740437283339"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9344270180037881"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.10810755915867287"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.641550578480113"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6717217063522631"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.1254347785527805"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.04691571366018721"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.49719623631702325"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7174259148958668"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5972489491183794"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5522744218719418"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5787704594819303"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6541869333947383"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3155514465568474"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.22326073730226814"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.530524960806648"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1693353157865416"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
