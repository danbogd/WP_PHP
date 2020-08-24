<?php get_header() ?>
<main class="layout-col layout-col-main">
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
<aside class="layout-col layout-col-aside">
	<div class="aside-box">
		<div class="h2">Производители мотоциклов</div>
		<ul class="secondery-navigation">
			<!--список таксономий -->
		<?php 
			$terms = get_terms([
				'taxonomy' => 'manufacturer',
				// сокрытие отсуствующих
				'hide_empty' => true,
				'hierarchical'  => false, 
			]);
            // вывод массива в удобном формате
			// echo('<pre>');
			// print_r($terms);
			// echo('</pre>');
		

		// вывод terms на экран
			foreach($terms as $term):
		?>
			<li>
				<!-- get_term_link - выводит ссылку -->
				<a href="<?php echo get_term_link($term) ?>"><?php echo $term->name ?></a>
			</li>
		<?php
			endforeach;
		?>
		</ul>
	</div>
</aside>
<?php get_footer() ?>