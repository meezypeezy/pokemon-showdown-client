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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9332103789527526" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8305784051425285" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3124574971061709" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.493350850915816" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.42044643781891944" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9374315711135379" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.43029998729163665"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9435352610169487" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9888196450203999">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3885874076854532">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9784379471740996">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8452874726573338">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1412423878033271"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.37128360720950493"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6365042747161984"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8424601752022229"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.23772517289260908"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4240811503843138"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.34245884785253833"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7088872856734949"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.04845868735987957"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.691191439487471"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4604654058192936"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.022408217504637395"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.00668507158775955"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6628325794116579"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5593599263431472"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5235359224519927"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.04634153978494515"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8042991460491973"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9475044257492566"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
