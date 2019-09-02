<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hoithaohueic
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-md-3">
	 <section id="section-id-1555814814177" class="sppb-section "  ><div class="sppb-row-container"><div class="sppb-row">
<div class="sppb-col-md-3">
    <div id="column-id-1555814814178" class="sppb-column">
        <div class="sppb-column-addons">
            <div id="sppb-addon-1555814814233" class="clearfix">
                <div class="sppb-addon sppb-addon-module menu-linh">
                    <div class="sppb-addon-content">
                        <!-- <ul class="nav menu">
                            <li class="item-585"><a href="thong-bao.php"> Thông báo</a></li>
                            <li class="item-586"><a href="thong-cao-bao-chi.php"> Thông cáo báo chí</a></li>
                            <li class="item-587"><a href="thu-moi-tai-tro.php"> Thư mời tài trợ</a></li>
                            <li class="item-588"><a href="thu-cam-on.php"> Thư cảm ơn</a></li>
                            <li class="item-578"><a href="lich-su-hoi-thao.php"> Lịch sử hội thảo</a></li>
                        </ul> -->
                        <?php 

                        wp_nav_menu( array(
						// 'theme_location' => 'menu-1',
						// 'menu_id'        => 'primary-menu',
						'menu'            => 'sidebar',
				        'container'       => 'div',
				        'container_class' => '',
				        // 'container_id'    => 'sp-menu',
				        'menu_class'      => 'nav menu',
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
				        
					) ); ?>
                    </div>
                </div>
            </div>
            <div id="sppb-addon-1556121312045" class="clearfix">
                <div class="sppb-addon sppb-addon-module ">
                    <div class="sppb-addon-content">

                        <div class="custom">
                            <div>
                                <a title="Ủy ban Văn hóa, Giáo dục, Thanh niên, Thiếu niên và Nhi đồng của Quốc hội" href="http://quochoi.vn/uybanvanhoagiaoducthanhnienthieunienvanhidong/Pages/default.aspx" target="_blank" rel="noopener noreferrer"><img style="display: block; margin-left: auto; margin-right: auto; width: 100%; margin-bottom: 5px;" src="<?php bloginfo('template_directory'); ?>/img/nav-menu/quochoi.jpg" alt="" /></a>
                            </div>
                            <div>
                                <a title="Bộ Lao động - Thương binh và Xã hội" href="http://www.molisa.gov.vn/" target="_blank" rel="noopener noreferrer"><img style="display: block; margin-left: auto; margin-right: auto; width: 100%; margin-bottom: 5px;" src="<?php bloginfo('template_directory'); ?>/img/nav-menu/boldtbxh.jpg" alt="" /></a>
                            </div>
                            <div>
                                <a title="Tổng cục Giáo dục nghề nghiệp" href="http://gdnn.gov.vn/" target="_blank" rel="noopener noreferrer"><img style="display: block; margin-left: auto; margin-right: auto; width: 100%; margin-bottom: 5px;" src="<?php bloginfo('template_directory'); ?>/img/nav-menu/tcgdnn.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>

</aside><!-- #secondary -->

	</div>
</div>