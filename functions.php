<?php
/**
 * hoithaohueic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hoithaohueic
 */

if ( ! function_exists( 'hoithaohueic_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hoithaohueic_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hoithaohueic, use a find and replace
		 * to change 'hoithaohueic' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hoithaohueic', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'hoithaohueic' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'hoithaohueic_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'hoithaohueic_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hoithaohueic_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'hoithaohueic_content_width', 640 );
}
add_action( 'after_setup_theme', 'hoithaohueic_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hoithaohueic_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hoithaohueic' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hoithaohueic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hoithaohueic_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hoithaohueic_scripts() {
	wp_enqueue_style( 'hoithaohueic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'hoithaohueic-style-awsome', get_template_directory_uri().'/css/font-awesome.min.css' );
	wp_enqueue_style( 'hoithaohueic-style-awsome1', get_template_directory_uri().'/css/template/font-awesome.min.css' );
	wp_enqueue_style( 'hoithaohueic-style-bootstrap', get_template_directory_uri().'/css/template/bootstrap.min.css' );
	wp_enqueue_style( 'hoithaohueic-style-animate', get_template_directory_uri().'/css/animate.min.css' );
	wp_enqueue_style( 'hoithaohueic-style-popup', get_template_directory_uri().'/css/magnific-popup.css' );
	wp_enqueue_style( 'hoithaohueic-style-sppagebuilder', get_template_directory_uri().'/css/sppagebuilder.css' );
	wp_enqueue_style( 'hoithaohueic-style-spagecontainer', get_template_directory_uri().'/css/sppagecontainer.css' );
	wp_enqueue_style( 'hoithaohueic-style-chuongtrinh', get_template_directory_uri().'/css/style-chuong-trinh.css' );
	wp_enqueue_style( 'hoithaohueic-style-diengia', get_template_directory_uri().'/css/style-dien-gia.css' );
	wp_enqueue_style( 'hoithaohueic-style-gioithieu', get_template_directory_uri().'/css/style-gioi-thieu.css' );
	wp_enqueue_style( 'hoithaohueic-style-home', get_template_directory_uri().'/css/style-home.css' );
	wp_enqueue_style( 'hoithaohueic-style-lichsu', get_template_directory_uri().'/css/style-lich-su-hoi-thao.css' );
	wp_enqueue_style( 'hoithaohueic-style-stylemin', get_template_directory_uri().'/css/style-min.css' );
	wp_enqueue_style( 'hoithaohueic-style-tailieu', get_template_directory_uri().'/css/style-tai-lieu.css' );
	wp_enqueue_style( 'hoithaohueic-style-thongbao', get_template_directory_uri().'/css/style-thong-bao.css' );
	wp_enqueue_style( 'hoithaohueic-style-thongcao', get_template_directory_uri().'/css/style-thong-cao-bao-chi.css' );
	wp_enqueue_style( 'hoithaohueic-style-tintuc', get_template_directory_uri().'/css/style-tin-tuc.css' );
	wp_enqueue_style( 'hoithaohueic-style-frontend', get_template_directory_uri().'/css/template/frontend-edit.css' );
	wp_enqueue_style( 'hoithaohueic-style-lagacy', get_template_directory_uri().'/css/template/legacy.css' );
	wp_enqueue_style( 'hoithaohueic-style-pagebuilder', get_template_directory_uri().'/css/template/pagebuilder.css' );
	wp_enqueue_style( 'hoithaohueic-style-preset3', get_template_directory_uri().'/css/template/preset3.css' );
	wp_enqueue_style( 'hoithaohueic-style-template', get_template_directory_uri().'/css/template/template.css' );
	wp_enqueue_style( 'hoithaohueic-style-custom', get_template_directory_uri().'/custom.css' );


	wp_enqueue_script( 'hoithaohueic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'hoithaohueic-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'hoithaohueic-smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array(), '20151215', true );
	wp_enqueue_script( 'hoithaohueic-sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array(), '20151215', true );
	wp_enqueue_script( 'hoithaohueic-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
	wp_enqueue_script( 'hoithaohueic-front-end', get_template_directory_uri() . '/js/frontend-edit.js', array(), '20151215', true );
	


	wp_enqueue_script( 'hoithaohueic-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hoithaohueic_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



function get_news(){
	   $args = array(
                     'cat' =>1,
                     'posts_per_page' => 3 ,
                     'post_type' => 'post',
                     'offset' => 0,
                 );
                 $the_query = new WP_Query( $args );   ?>
                 <div class="row">
                   
                   <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  <div class="col-md-4">
                    
                    <div class="marketing-content">
                    <?php the_post_thumbnail( 'medium' );  ?>
                      <h4 class="title">
                        <a href="<?php echo get_the_permalink(); ?>">
                          <?php the_title(); ?>
                        </a>

                      </h4>
                      <span class="dayago">
                <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' trước'; ?>
                        
                      </span>
                    </div>
                  </div>
                     

               


    <?php endwhile; wp_reset_postdata(); ?>
    </div> <?php
}
add_shortcode( 'shortcode_getnews' , 'get_news' );