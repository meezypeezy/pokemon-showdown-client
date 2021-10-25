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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6770014058187301" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9280400959840689" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8882092999891773" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6979450864476344" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.748981229233743" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.397712756299788" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3920106581483178"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6999994156529259" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.02522609434659362">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3467926892938331">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6888775745905555">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5006770383061698">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5584600858878475"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.539509596663563"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.38787119445979745"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08044147386943146"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.1772761767452551"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7861672568622733"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6856459731456388"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7160312913072147"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.16274919425324508"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.33470067907639955"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8502013262512567"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4848971293145825"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9790852512851045"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3549759221943105"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.028837401003928953"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5514306801286575"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.28775260033045247"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9126346321475449"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7823948153584097"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
