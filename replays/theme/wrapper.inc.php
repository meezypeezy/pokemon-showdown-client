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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.15845647916558292" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.05272142458483331" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8767207589106314" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.17901214997283454" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8700045436189678" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8085694599816573" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.37047687851268174"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.12842413074728753" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.21922329355003267">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8891823270207369">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.06150064803770183">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.1333737141599427">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.42038992327613633"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.26901341108236765"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5664636782665322"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3949716914237682"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.07373343733949689"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5630487091241505"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.13726981072903754"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.27439939473828834"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.13117090079922433"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4254230313305716"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.390534303396211"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.14950432318327622"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.257754089434306"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.08242195221907478"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.18431550068419544"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7033212847201618"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7230541865461082"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.08450962263421347"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.10423299208773962"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
