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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.42082621947712084" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5740722620580205" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.89685501010732" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7800641883447845" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.07307138322877971" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3328260780308092" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6788360971418781"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.26471408978993294" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1659995040153619">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6632147731488207">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5615339337208658">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6812841335203192">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2297808059864348"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.03946085210208339"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3496742738873999"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.43098488347360076"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2601999590645767"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.42642679898409863"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8441553077075259"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.87655941645546"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.32714455377412976"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2807573024299501"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9643754821760158"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6771663559564209"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3843395979487274"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6219644919176901"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.032975907052571696"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7372949328111866"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.734603289865702"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8811883782694134"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9751339723465435"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
