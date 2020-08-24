<?php 
	get_header();
	the_post(); 
?>
<main class="layout-col layout-col-main">
	<h1><?php the_title() ?></h1>
	<div class="post-full">
		<?php the_post_thumbnail() ?>
		<?php the_content() ?>
	</div>
</main>
<aside class="layout-col layout-col-aside">
	<div class="aside-box">
		<div class="h2"><?php the_date('j F Y') ?></div>
		<div class="h2">Author: <?php the_author(); ?></div>
	</div>
	<div class="aside-box">
		<div class="h2">Post categories</div>

	<!-- решение без фильтра -->

    <!-- <ul class="secondery-navigation">
    	<li class="secondery-navigation">
    		<?php the_category('</li><li class="secondery-navigation">') ?>
    	</li>

    </ul> -->

    <!-- самое простое решение категорий со стилями cм styles.css .secondary-navigation -->



		<!-- <?php the_category('@std@') ?> -->
	</div>
	<div class="aside-box">
		<div class="h2">Post tags</div>
		<?php the_tags('<ul class="secondery-navigation"><li>','</li><li>','</li></ul>') ?>
	</div>
</aside>
<?php get_footer() ?>