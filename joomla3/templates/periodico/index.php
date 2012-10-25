<?php
defined('_JEXEC') or die;
$app = JFactory::getApplication();
$doc = JFactory::getDocument();

$this->language = $doc->language;
$this->direction = $doc->direction;
JHtml::_('bootstrap.framework');
$doc->addStyleSheet('templates/'.$this->template.'/css/style.css');
JHtmlBootstrap::loadCss($includeMaincss = false, $this->direction);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<jdoc:include type="head" />
	<link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
		<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
	<![endif]-->
</head>

<body class="site">
	<!--[if lt IE 7]><p class=chromeframe>Su navegador es muy <em>antiguo!</em> <a href="http://browsehappy.com/">Actualice a uno diferente </a> o <a href="http://www.google.com/chromeframe/?redirect=true">instale Google Chrome Frame</a> para mejorar la experiencia con este sitio.</p><![endif]-->
	<div id="wrapper_all">
	<header>
		<div class="left">
			<h1><?php echo $app->getCfg( 'sitename' )?></h1>
		</div>
		<div class="right">
		</div>
		<div class="cls"></div>
		<nav>
			<?php if($this->countModules('menu')):?>
			<jdoc:include type="modules" name="menu" style="xhtml" />
			<?php endif;?>
		</nav>
	</header>
	<div class="cls"></div>
	<div class="wrapper">
		<div role="main" class="main-content">
			<section id="block_first">
			<?php if($this->countModules('block-top-1')):?>
				<div class="left">
					<jdoc:include type="modules" name="block-top-1" style="xhtml" />
				</div>
			<?php endif;?>
			<?php if($this->countModules('block-top-2')):?>
			<div class="right">
				<jdoc:include type="modules" name="block-top-2" style="xhtml" />
			</div>
			<?php endif;?>
				
			</section>
			<div class="cls"></div>
			<section id="block_second">
				<div class="left_sec">
				<article>
					<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
						new TWTR.Widget({
							version : 2,
							type : 'search',
							search : '#JoomlaPuebla OR #softlitemx',
							interval : 30000,
							title : '',
							subject : '#JoomlaPuebla #Enli2012',
							width : 250,
							height : 310,
							theme : {
								shell : {
									background : '#627994',
									color : '#ffffff'
								},
								tweets : {
									background : '#ffffff',
									color : '#222',
									links : '#041E3F'
								}
							},
							features : {
								scrollbar : false,
								loop : true,
								live : true,
								behavior : 'default'
							}
						}).render().start();
					</script>
				</article>
				</div>
				<?php if($this->countModules('middle')): ?>
				<div class="middle_sec">
					<jdoc:include type="modules" name="middle" style="xhtml" />
				</div>
				<?php else:?>
					<div class="middle_sec">
					<jdoc:include type="component" />
				</div>
				<?php endif;?>				
				<?php if($this->countModules('right')): ?>
				<div class="right_sec">
					<jdoc:include type="modules" name="right" style="xhtml" />
				</div>
				<?php endif;?>
			</section>
		</div>
	<footer>
	</footer>
	</div>
	<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>
