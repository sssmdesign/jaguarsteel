<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Koncrete;
$logo_dark =  RDTheme::$options['logo_dark']['url'] ? RDTheme::$options['logo_dark']['url'] : Helper::get_img( 'logo-dark.png' ) ;
$logo_light =  RDTheme::$options['logo_light']['url'] ? RDTheme::$options['logo_light']['url'] : Helper::get_img( 'logo-light.png' )  ;
$logo = RDTheme::$transparent_header ? $logo_light : $logo_dark;
$has_icon = RDTheme::$options['search_icon'] || RDTheme::$options['cart_icon']  || RDTheme::$menu_button;
?>

<div class="header-top-bar top-bar-layout2">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-5">
        <div class="row">
          <?php if( RDTheme::$options['phone'] ):?>
            <div class="mr-4 header-fetures justify-content-start">
              <div class="media">
                <i class="flaticon-phone-call"></i>
                <div class="media-body space-sm">
                  <h3 class="title"><?php echo esc_html( RDTheme::$options['phone_text'] ); ?></h3>
                  <div class="subtitle"><?php echo esc_html(RDTheme::$options['phone'])   ?> </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <?php if(RDTheme::$options['email']): ?>
            <div class="mr-4 header-fetures justify-content-start">
              <div class="media">
                <i class="flaticon-message"></i>
                <div class="media-body space-sm">
                  <h3 class="title"><?php echo esc_html( RDTheme::$options['email_text'] ); ?></h3>
                  <div class="subtitle">
                    <?php $email = RDTheme::$options['email']; ?>
                    <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        </div>

      </div>
      <div class="col-md-3">
        <div class="logo-area d-flex justify-content-center">
          <a href="<?php echo  home_url( '/' ); ?>" class="temp-logo">
            <img src="<?php echo esc_url($logo); ?>" alt="<?php echo esc_attr( get_bloginfo('title') ); ?>" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="col-md-4 d-flex justify-content-end align-items-center">
        <div class="header-social-layout3 light-bg">
          <?php if ($socials = Helper::socials()) : ?>
           <ul>
            <?php foreach ($socials as $social): ?>
                <li>
                  <a href="<?php echo esc_url($social['url']) ?>">
                    <i class="<?php echo esc_attr($social['icon']) ?>"></i>
                  </a>
                </li>
            <?php endforeach ?>
           </ul>
           <?php endif; ?>
        </div>

        <?php if ($has_icon): ?>
          <div class="header-action-items-layout1 ml-4">
            <ul>

              <?php if ( RDTheme::$options['search_icon'] ): ?>
                <li class="d-none d-xl-block">
                  <form role="search" class="top-search-form header-search-dark" method="get" action="<?php echo esc_url( home_url( '/' ) )  ?>">
                    <a href="#" class="search-close">x</a>
                    <input type="text" name="s" class="search-input" placeholder="<?php echo esc_attr__( 'Search here ...', 'koncrete' )  ?>" value="<?php get_search_query(); ?>">
                    <a class="search-button">
                      <i class="flaticon-magnifying-glass"></i>
                    </a>
                  </form>
                </li>
              <?php endif ?>

              <?php if ( RDTheme::$options['cart_icon'] && class_exists( 'WC_Widget_Cart' ) ): ?>
                <li>
                  <?php get_template_part( 'template-parts/header/icon', 'cart' ); ?>
                </li>
              <?php endif ?>

              <?php if ( RDTheme::$menu_button ): ?>
                <li>
                  <a href="<?php echo esc_url( RDTheme::$options['menu_button_url'] ); ?>" class="item-menu-button">
                    <?php echo esc_html( RDTheme::$options['menu_button_text'] ); ?>
                  </a>
                </li>
              <?php endif ?>

            </ul>
          </div>
        <?php endif ?>
      </div>


    </div>
  </div>
</div>
<div class="header-menu-area header-menu-layout2">
  <div class="container">
    <div class="row no-gutters d-flex align-items-center">
      <div class="col possition-static">
        <div class="main-navigation-area">
          <div class="main-navigation">
            <?php
            $nav_menu_args = Helper::nav_menu_args();
            wp_nav_menu($nav_menu_args);
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
