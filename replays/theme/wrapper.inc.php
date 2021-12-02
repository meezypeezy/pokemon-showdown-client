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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9244475447416618" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.12700120674941928" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5618423540131379" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8434041108680739" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.1743602103656534" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.934608588012378" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6771942892749494"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.03064039618440506" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.008839924251491382">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.70311495214273">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3028427344893543">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3863327040426334">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.34173112739891276"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4577277007933671"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.18472767486734187"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5060131381865891"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.964080017085325"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.0305547046404262"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5187805247572341"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.000866831811753066"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.17537267882193497"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8994617213593274"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6303604151927364"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.013096841179734087"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.18744272644370774"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3516597108103321"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.025261098311332608"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.38286498116669265"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7738778155328132"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5143963283344652"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.06680349477673064"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
