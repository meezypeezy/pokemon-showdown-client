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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.03175233291684254" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.20846592874663306" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.34312861164237196" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.11503905056861585" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.44219007882758654" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5415050866436777" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9246730912206009"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9324875514153188" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.33226780177097237">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9700441676769525">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6236666678225393">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.46160436507450053">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2845248735207082"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.09847523634488375"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9779897535892321"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.010956511669741875"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4842837468786161"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.38918722913868775"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9431453836918338"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3948578796208817"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9838845058021575"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6340568347868474"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9149881246027232"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5109594811860667"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.28340353094883786"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4361129579599752"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7939612774228191"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.45972953053675836"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5289255648788995"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4265048056703167"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4905778876822591"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
