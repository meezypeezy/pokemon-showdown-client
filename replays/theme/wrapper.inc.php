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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.41583257392877826" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7530555316756071" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6234843978323192" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9863880443578092" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9451330392244992" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.20363929557494886" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8659724110724873"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4038799474750734" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5060678996833599">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4159007727013">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2558481295325652">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4389892050070856">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.31227105806145183"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3769498318118931"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5392105158072327"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9931659792604162"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7801675442326974"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23765528443579975"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.32513888568022864"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5589511250107895"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.670450385445138"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8818908657235824"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.04016676552647103"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7791028232185977"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9614180601857782"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2928026298053674"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9515129697909293"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8868635121805704"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3063253606459915"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7190648417288124"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9988420055225586"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
