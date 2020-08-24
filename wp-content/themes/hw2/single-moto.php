<?php 
	get_header();
	the_post(); 
?>
<main class="layout-col layout-col-main">
	<h1><?php the_title() ?></h1>
	<div class="post-full">
		<?php the_content() ?>
	</div>

	<strong ><p class="price">цена</p>

		<?php if ( get_field('price') ) { ?>
        	<?php the_field('price'); ?>
        <?php } ?>
	</strong>
</main>
<aside class="layout-col layout-col-aside">
	<div class="aside-box">
		<div class="h2">Дополнительная информация</div> 
		                                                         <!-- таксономия -->
		<div>Фирмы производители: <?php the_terms(get_the_ID(), 'manufacturer'); ?></div>
	</div>
</aside>
<?php get_footer() ?>