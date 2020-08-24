<?php 
	get_header();
	the_post(); 
?>
<main class="layout-col layout-col-full">
	<h1><?php the_title() ?></h1>
	<?php the_content() ?>
</main>
<?php get_footer() ?>