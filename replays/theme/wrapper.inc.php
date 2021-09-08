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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.553799179072493" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.43441238551515493" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6480768057959092" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.19639730109071474" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.920940457111558" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.07343814302552953" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8231910670634599"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.028352234137900112" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20937512833780314">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5438334615378035">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6029427223749872">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8128752417292173">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.25974607851184417"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.12285823239248583"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4727225471459473"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.11989158055620308"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5461951402943208"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.12066072761367264"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2503164807059901"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.11625889092858666"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6952373889155588"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3020948029269779"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.22093567444657802"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2612103480055108"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7432969529638407"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9960587035963151"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6463227149802586"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6666077306403206"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5073849624902134"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.14522779658822582"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4011451911637558"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
