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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9691441808708448" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8156028218019764" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.24100447696561034" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4674365049299716" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.35017133678663126" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6891468308872761" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.34594174532855027"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2951952980180399" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6619785700043848">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.23102555878457198">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7102818673125857">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7884122464535048">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5391315175307987"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8181455818125551"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5787211429892867"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3633097523544393"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5735673140514279"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4878688692989368"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.006454579340705147"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9040975096598427"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8159259810147135"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8700557840812411"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.08467091432162421"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5130602457803162"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7047702235005155"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8407443612944023"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6777674922828787"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5618014286358513"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8137282067917837"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.18056874802940892"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.18470964633322917"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
