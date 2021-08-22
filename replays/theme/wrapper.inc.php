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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9214982648325931" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7991995420539035" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6041298796613628" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.31876337885164974" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.783743025533546" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7611948679641363" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9299214950035011"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4314221454029028" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12386770536875469">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.44125771578201056">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9094043409222758">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5893204281547155">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.638989432496583"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3131720299814722"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.011837356140811606"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8709127371544527"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.12480148766455335"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4914908096341817"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8427649390067316"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9442383478543208"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.0776129019660099"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8836487533141473"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.04854845885243253"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7793489889454044"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.46080824644220586"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.12145026651689728"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.12204139953057136"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.28552535604370055"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7079636916079914"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2688904669836638"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9673724203873515"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
