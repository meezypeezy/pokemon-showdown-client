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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.28556128692923033" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7207216165842301" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5523654804493905" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.24680173899213287" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4809932454585515" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6571177152014105" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.28880686823291657"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8181058395292697" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3804370136426827">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8165771220817055">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5332341459237799">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3644967101404173">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6329928002198413"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7918282998457826"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7201564092584738"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7039905520248986"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.764761663805982"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.767443025267857"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4984416329126864"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.21890050354610557"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9467696798080805"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8932544211758477"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9221646761904871"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5621534024101376"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.42043078334763484"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.21437833582080046"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9698928171036294"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6514235029031661"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3217822373429222"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7693798767096276"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.21886702560304871"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
