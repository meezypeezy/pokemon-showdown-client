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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9715784747966554" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7606018864042936" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2697446937717274" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.580330380784241" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6742827282302442" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.17016912420043306" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.258961888624859"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9299226439693082" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6353370020535642">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3050487054234836">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7390216968527663">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5425602764633617">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7729512388860262"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.28406513097663333"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.041634026886856246"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.018113526842729044"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5302661106472013"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.44868778519209096"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.37921995877379855"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8410460672011959"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.06255086061954485"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9291912515519072"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7658043177062959"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6775779149630945"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6012959408413681"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5310372949628421"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7527283274944954"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7305115443926744"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.30585756431642497"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7873035952264"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5219039927976024"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
