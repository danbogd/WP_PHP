<?php
	// константы пути
	define('HW2_DIR_CSS', get_template_directory_uri() . '/assets/css/');
	define('HW2_DIR_JS', get_template_directory_uri() . '/assets/js/');
	define('HW2_DIR_IMG', get_template_directory_uri() . '/assets/img/');


    // создание нового типа записи
	add_action('init', function(){
	register_post_type('moto', [
		    'labels'             => [
			'name'               => 'Мотоциклы', // Основное название типа записи
			'singular_name'      => 'Мотоциклы', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый мотоцикл',
			'edit_item'          => 'Редактировать мотоцикл',
			'new_item'           => 'Новая мотоцикл',
			'view_item'          => 'Обзор мотоцикла',
			'search_items'       => 'Выбрать мотоцикл',
			'not_found'          =>  'Мотоцикл не найден',
			'not_found_in_trash' => 'В корзине мотоциклов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Мотоциклы'

		  ],
		'public'             => true,
		// 'publicly_queryable' => true,
		// 'show_ui'            => true,
		// 'show_in_menu'       => true,
		// 'query_var'          => true,
		// 'rewrite'            => true,
		// 'capability_type'    => 'post',
		   'has_archive'        => true // включить поддержку страниц архивов
		// 'hierarchical'       => false,
		// 'menu_position'      => null,
		// 'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	] );

	// регистрация таксономии
	register_taxonomy('manufacturer', ['moto'],[
		'labels' => [
	    'name' => 'Компания'
		],
		'public' => true
	]);

	
});
    

    // подсоединение файлов
	add_action('wp_enqueue_scripts', function(){
		wp_enqueue_style('reset', HW2_DIR_CSS . 'reset.css');
		wp_enqueue_style('main', HW2_DIR_CSS . 'styles.css');
		//wp_enqueue_style('bootstrap', HW2_DIR_CSS . 'bootstrap.min.css');

		wp_deregister_script('jquery');
		wp_register_script('jquery', HW2_DIR_JS . 'jquery-3.4.1.min.js', [], false, true);

		wp_enqueue_script('jquery');
		wp_enqueue_script('main', HW2_DIR_JS . 'script.js', ['jquery'], false, true);
	});
    // хуки
	add_action('after_setup_theme', function(){

		// разрешаем миниатюры нашим постам
		add_theme_support('post-thumbnails');


		// регистрация меню
		register_nav_menu('header', 'Меню в шапке');
		register_nav_menu('footer', 'Меню в подвале');
	});

	add_action('widgets_init', function(){

		// регистрация панели
		register_sidebar([
			'name'          => 'Боковая колонка для блога',
			'id'            => 'sidebar-blog',
			'description'   => 'Выводится в блоге',
			'before_widget' => '<div class="aside-box %2$s">',
			'after_widget'  => "</div>\n",
			'before_title'  => '<div class="h2">',
			'after_title'   => "</div>\n",
		]);

		register_sidebar([
			'name'          => 'Текст для главной',
			'id'            => 'sidebar-home',
			'description'   => 'Выводится на главной',
			'before_widget' => '<div class="header-bottom">',
			'after_widget'  => "</div>\n"
		]);
	});

    // добавление фильтра nav_menu_css_class
    // 10 очередность, 2 - количество принимаемых параметров
	add_filter( 'nav_menu_css_class', function($classes, $item){
		
		$newclasses[] = "header-menu-list";

		if(in_array('current-menu-item', $classes)){
        $newclasses = ['header-menu-list a.active'];
		}
	
		return $newclasses;
    }, 10, 2 );

	

	// удаляем лишние id и классы

	add_filter( 'nav_menu_item_id', function($id, $item, $args, $depth){
		
		return '';
    }, 10, 4 );

    add_filter('nav_menu_css_class', function($classes, $item, $args, $depth){
		return [];
	}, 10, 4);



    // подсветка активного меню тег а
	add_filter('nav_menu_link_attributes', function($attrs, $item, $args, $depth){
		if($args->theme_location === 'header'){

			// если имеем 0 классов до добавляем
			if(!isset($attrs['class'])){
				$attrs['class'] = '';
			}

			if($attrs['aria-current'] === 'page'){
				$attrs['class'] .= ' active';
			}
            // убираем пробелы если других классов не было
			$attrs['class'] = trim($attrs['class']);
		}

		return $attrs;
	}, 10, 4);
	
    // фильтр категорий с сепаратором @std@ где <?php the_category('@std@') 
	// add_filter('the_category', function($thelist, $separator, $parents){
	// 	if($separator === '@std@'){
	// 		$parts = explode('@std@', $thelist);
	// 		$thelist = '<ul class="secondery-navigation"><li>';
	// 		$thelist .= implode('</li><li>', $parts);
	// 		$thelist .= '</li></ul>';
	// 	}

	// 	return $thelist;
	// }, 10, 3);