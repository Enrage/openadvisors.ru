<?= $this->Html->docType() ?>
<html lang="ru">
<head>
	<?= $this->Html->charset() ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?= $this->Html->meta('keywords', '') ?>
	<?= $this->Html->meta('description', '') ?>
	<title><?=$this->fetch('title') ?></title>
	<?= $this->Html->css(['main', 'rslider']) ?>
	<?= $this->Html->script(['jquery', 'less.min', 'responsiveslides.min', 'jcarousel', 'common'], ['block' => 'scriptBottom']) ?>
	<?= $this->Html->meta('openadvisors.png', '/openadvisors.png', ['type' => 'icon']) ?>
	<!--[if IE]>
		<?= $this->Html->script('html5shiv') ?>
	<![endif]-->
</head>
<body>
<div id="wrapper">
	<header>
		<?= $this->cell('TopMenu::display') ?>

		<section id="top_block">
			<div id="logo"><?= $this->Html->image('logo_oi.png',
				['alt' => 'Openadvisors.ru', 'title' => 'openadvisors.ru', 'url' => ['controller' => 'Main', 'action' => 'index']]) ?>
			</div>
			<h1><a href="/">Консалтинговая лаборатория «Открытые инновации»</a></h1>
			<div id="contact">
				<p>Тел. +7 (495) 723-18-50</p>
			</div>
		</section> <!-- #top_block -->

		<section id="second_block">

		</section>

		<?= $this->cell('CatMenu::display') ?>

	</header>

	<?= $this->fetch('content') ?>
</div> <!-- #wrapper -->

<footer>

	<?= $this->cell('BottomMenu::display') ?>

	<section class="social_networks">
		<div class="networks">
			<?= $this->Html->link($this->Html->image('icons/fb_icon.png', ['alt' => 'FaceBook', 'title' => 'FaceBook']), 'https://www.facebook.com/openadvisors/', ['target' => '_blank', 'escape' => false]) ?>

			<?= $this->Html->link($this->Html->image('icons/linkedin_icon.png', ['alt' => 'LinkedIn', 'title' => 'LinkedIn']), 'https://www.linkedin.com/company/%D0%BA%D0%BE%D0%BD%D1%81%D0%B0%D0%BB%D1%82%D0%B8%D0%BD%D0%B3%D0%BE%D0%B2%D0%B0%D1%8F-%D0%BB%D0%B0%D0%B1%D0%BE%D1%80%D0%B0%D1%82%D0%BE%D1%80%D0%B8%D1%8F-%D0%BE%D1%82%D0%BA%D1%80%D1%8B%D1%82%D1%8B%D0%B5-%D0%B8%D0%BD%D0%BD%D0%BE%D0%B2%D0%B0%D1%86%D0%B8%D0%B8-?trk=company_logo', ['target' => '_blank', 'escape' => false]) ?>
		</div>
	</section>

	<div id="copyright">
		<p>&copy; «Открытые инновации», консалтинговая лаборатория, 2010 - 2015 &nbsp;&nbsp; +7(495)723-18-50</p>
	</div>
</footer>
<?= $this->fetch('scriptBottom') ?>
</body>
</html>