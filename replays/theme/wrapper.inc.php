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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6980322943901316" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6881315897838052" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.1535445627922194" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.36261234232316175" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8573569808524528" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6336900170833208" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9284343220931437"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4199168854026343" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.039799279013955635">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3003434155482101">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.920160374306799">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.22477658041732473">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1723741284322995"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.1377922552275126"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5339117682462495"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7556088466806896"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.40346922657047424"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5012085616639423"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3924635068960405"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.22146890895434224"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4508533699579156"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.721740955074281"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.457727640174008"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9663449798456725"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.43918287108279186"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5448120890444419"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.38979489769442477"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.32094284640410886"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.15124512805924817"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8784571385256483"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8825692123118383"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
