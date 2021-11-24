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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.38945705815152065" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4078464762999421" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3407637313495828" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.06472565968062716" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.0757742322898991" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7634581031849204" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2734267217659736"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.037038631718423254" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.27128983008049357">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6693466786863866">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.49738390068153926">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4246945049206765">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2914036928944841"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8384728359662654"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4429157885568502"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9274064650200793"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8806207764291509"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.813318474304622"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.36996655908983933"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8198461976766434"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3895448357473166"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9260135140923815"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5054308249775665"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.03517060234313241"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.08837969543551938"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.37393930559220667"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2520149991002767"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2255047739105529"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.16585079734010155"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9986925033842542"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3875847714513636"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
