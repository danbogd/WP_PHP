<?php get_header() ?>
<main class="layout-col layout-col-full">
	<h1><?php single_term_title()?> </h1>
	<div class="posts-flow layout-row">
		<?php while( have_posts() ) :
			the_post();
		?>
		<article class="post-card layout-col">
			<h2 class="post-card-title"><?php the_title() ?></h2>
			<div class="post-card-intro"><?php the_content() ?></div>
			<div class="post-card-intro">
				<a href="<?php the_permalink() ?>" class="post-card-link">
					Читать далее
				</a>
			</div>
		</article>
		<?php endwhile; ?>
	</div>
</main>
<?php get_footer() ?>