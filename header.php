<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hoithaohueic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	    <link href="//fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic&amp;subset=greek-ext" rel="stylesheet" type="text/css" />

	 <script src="https://use.fontawesome.com/9c12a2c8b5.js"></script>
	<?php wp_head(); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body <?php body_class("site com-sppagebuilder view-page no-layout no-task itemid-437 vi-vn ltr  sticky-header layout-fluid off-canvas-menu-init"); ?>>
<div id="page" class="site">
    <div class="body-wrapper">
        <div class="body-innerwrapper">

			<header id="sp-header" class="site-header header-transparent">
				<div class="container">
                    <div class="row">
                        <div id="sp-logo" class="col-xs-8 col-sm-1 col-md-1">
                            <div class="sp-column ">
                                <div class="logo">
                                    <a href="trang-chu.php"><img class="sp-default-logo" src="<?php bloginfo('template_directory'); ?>/img/home/logo.png" alt="Logo"></a>
                                </div>
                            </div>
                        </div>
                        <div id="sp-menu" class="col-xs-4 col-sm-11 col-md-11">
                            <!-- <div class="sp-column ">
                                <div class='sp-megamenu-wrapper'>
                                    <a id="offcanvas-toggler" class="visible-sm visible-xs" href="#"><i class="fa fa-bars"></i></a>
                                    <ul class="sp-megamenu-parent menu-fade hidden-sm hidden-xs">
                                        <li class="sp-menu-item current-item active"><a href="trang-chu.php"><i class="fa fa-home"></i></a></li>
                                        <li class="sp-menu-item"><a href="gioi-thieu.php">Giới thiệu</a></li>
                                        <li class="sp-menu-item"><a href="chuong-trinh.php">Chương trình</a></li>
                                        <li class="sp-menu-item"><a href="dien-gia.php">Diễn giả</a></li>
                                        <li class="sp-menu-item"><a href="to-chuc-hoi-thao.php">Tổ chức hội thảo</a></li>
                                        <li class="sp-menu-item sp-has-child"><a href="tin-tuc.php">Tin tức</a>
                                            <div class="sp-dropdown sp-dropdown-main sp-menu-center" style="width: 210px;left: -105px;">
                                                <div class="sp-dropdown-inner">
                                                    <ul class="sp-dropdown-items">
                                                        <li class="sp-menu-item"><a href="thong-bao.php">Thông báo</a></li>
                                                        <li class="sp-menu-item"><a href="thong-cao-bao-chi.php">Thông cáo báo chí</a></li>
                                                        <li class="sp-menu-item"><a href="tin-tuc.php">Tin tức</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="sp-menu-item"><a href="lich-su-hoi-thao.php">Lịch sử hội thảo</a></li>
                                        <li class="sp-menu-item"><a href="lien-he.php">Liên hệ</a></li>
                                        <li class="sp-menu-item"><a href="tai-lieu.php">Tài liệu</a></li>
                                        <li class="sp-menu-item tv">
                                            <a href="/vi/"></a>
                                        </li>
                                        <li class="sp-menu-item en">
                                            <a href="/en/"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                            	<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'hoithaohueic' ); ?></button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu'            => '',
				        'container'       => 'div',
				        'container_class' => 'sp-megamenu-wrapper',
				        // 'container_id'    => 'sp-menu',
				        'menu_class'      => 'menu sp-megamenu-parent menu-fade hidden-sm hidden-xs',
				        'echo'            => true,
				        'fallback_cb'     => 'wp_page_menu',
				        'before'          => '',
				        'after'           => '',
				        'link_before'     => '',
				        'link_after'      => '',
				        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				        'item_spacing'    => 'preserve',
				        'depth'           => 0,
				        'walker'          => '',
				        
					) );
					?>
				</nav><!-- #site-navigation -->
                        </div>
                    </div>
                </div>
				<div class="site-branding">
					<?php
					// the_custom_logo();
				?>
				</div><!-- .site-branding -->

			
			</header><!-- #masthead -->

	<div id="content" class="site-content">
