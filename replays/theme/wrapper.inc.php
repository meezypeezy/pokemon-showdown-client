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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8495468781550835" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5919081120284457" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8474325640379248" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9122687163695375" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8974780834871672" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8027782150488141" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8579764309825169"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6407345170767806" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5493137777022425">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5669796139654408">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.06507158888193798">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3554591962347622">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9868659633008148"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.010298686565622717"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6645113621430421"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8547974165627568"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8190689838517311"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9720476808190155"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6964460142130595"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.992604101326356"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3319914455865278"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.429449412546274"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.26873057977101555"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6387097289435595"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6515244550605592"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.11628652762149128"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7774729114145329"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8685390970576603"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5974853642476561"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6044601034693624"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9711804365914409"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
