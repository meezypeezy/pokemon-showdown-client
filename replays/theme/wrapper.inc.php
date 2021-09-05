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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7154258950959003" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.0915408725512099" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9918017823655889" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.19177935811153568" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.688694773563622" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.006658733302378872" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1020512189032865"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7167532057088319" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2144097815016559">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.07939154925029968">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7255324847299138">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2956788420537111">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8396572046883337"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.09542507174742876"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.20501065016644282"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6584729573367976"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.25496242832608895"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7990255529732337"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.33946703150069313"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8269194708464929"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5057754536054779"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5660829255950286"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6784923952689759"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6755011760230427"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3698802441002753"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.0551173669547278"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.641533250265631"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8502722324566021"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.08985023692485417"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5577813686717965"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9985580921263757"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
