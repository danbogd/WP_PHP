		</div>
		<footer class="site-footer layout-row">
			<span class="site-footer-text layout-col">
				<?php echo date('Y') ?>, 
				<?php bloginfo('name') ?>. 
				<?php bloginfo('description') ?>.
			</span>
			<div class="layout-col">
				<div class="site-footer-links">
					<a href="#">
						<img src="<?php echo HW2_DIR_IMG?>/flickr.jpg" alt= "Иконка">
						<span>Wood Design on Flickr</span>
					</a>
					<a href="#">
						<img src="<?php echo HW2_DIR_IMG?>/twitter.jpg" alt= "Иконка">
						<span>Wood Design on Twitter</span>
					</a>
				</div>
			</div>

			<nav class="header-menu">
				<div class="header-menu-button">Menu</div>
				<?php wp_nav_menu([

					'theme_location' => 'footer',
					'container' => false,
					// ставим нужный нам класс
					'menu_class' => 'header-menu-list'
					
				]) ?>
		    </nav>
		    
		</footer>
	</div>
		

	<?php wp_footer() ?>
</body>
</html>