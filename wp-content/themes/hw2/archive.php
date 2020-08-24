<?php get_header() ?>
<main class="layout-col layout-col-main">

	<!-- выводит на экран текущей таксономии, рубрики или метки -->
	<h1><?php single_term_title()?> </h1>
	<div class="posts-flow layout-row">
		<?php while( have_posts() ) :
			the_post();
		?>
		<article class="post-card layout-col">
			<a href="<?php the_permalink() ?>" class="post-card-link">
				<?php the_post_thumbnail() ?>
			</a>
			<h2 class="post-card-title"><?php the_title() ?></h2>
			<div class="post-card-intro"><?php the_content() ?></div>
		</article>
		<?php endwhile; ?>
	</div>
</main>
<?php if (is_active_sidebar('sidebar-blog')): ?>
	<aside class="layout-col layout-col-aside">
		<?php dynamic_sidebar('sidebar-blog') ?>
	</aside>
<?php endif; ?>
<?php get_footer() ?>











		

