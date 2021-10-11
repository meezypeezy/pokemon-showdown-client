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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6539763671790946" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8366393342267577" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.812074869236511" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6219803723284545" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.2034652702429649" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8939749374831703" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3378911643770195"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.948778063394941" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.02226097966491203">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5530034875266849">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8246357865725087">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.06909624451250562">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6335323306344927"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6443054785159714"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7317170787424971"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4460979018250302"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.1595978595900418"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5230064238631786"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7145185600133952"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6548001266381578"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8207575992408356"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8139054355596118"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9188440933220081"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7746874080998147"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2496286717051286"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6159927118707014"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9400445609072339"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.14627734217566712"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.0715311503065219"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5768929294188878"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5161172178352309"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
