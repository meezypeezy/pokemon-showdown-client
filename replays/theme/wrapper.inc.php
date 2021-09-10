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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3586948477600982" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8226249845095184" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.946089086803579" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7715360993281191" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.12977017021514548" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8362641570545848" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.44815057775931333"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7917045867104944" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3365638173373653">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5909115130809344">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4761838580229647">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.556227371457289">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2887116365213782"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.23187291474014815"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7398602738144737"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8860252373446087"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6449253534302333"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.37881471551643187"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7978564545699331"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.051618412858896345"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9576637988786523"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4166182962811307"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9495124130580328"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5736577564079044"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9257791699927727"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.05420225289149094"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7123951126124684"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9351312317215492"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4332834742104039"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5131255401413035"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7859203985535348"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
