<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php the_title() ?></title>
	<?php wp_head() ?>
</head>
<body>
<div class="wrapper">
	<header>
		<div class="header-top">
			<div class="header-logo">
				<div class="title"><?php bloginfo('name') ?></div>
			</div>
			<nav class="header-menu">
				<div class="header-menu-button">Menu</div>
				<?php wp_nav_menu([

					'theme_location' => 'header',
					'container' => false,
					// ставим нужный нам класс
					'menu_class' => 'header-menu-list'
					
				]) ?>
			</nav>
		</div>

		<!-- вывод панели зарег в functions.php -->
		<?php if(is_home() && is_active_sidebar('sidebar-home')): ?>
			<?php dynamic_sidebar('sidebar-home') ?>
		<? endif; ?>

	</header>
	<div class="content-wrapper layout-row">