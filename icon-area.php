<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Koncrete;
$border_class = "no-right-border";
if ( RDTheme::$options['cart_icon'] && class_exists( 'WC_Widget_Cart' ) ) {
  $border_class = "has-right-border";
}
?>

<div class="header-action-items-layout1">
  <ul>
  	<?php if ( RDTheme::$options['search_icon'] ): ?>
      <li class="<?php echo esc_attr( $border_class ); ?>">
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
        <a href="<?php echo esc_url( RDTheme::$options['menu_button_url'] ); ?>" class="item-menu-button query_popup">
          <?php echo esc_html( RDTheme::$options['menu_button_text'] ); ?>
        </a>
      </li>
    <?php endif ?>

  </ul>
</div>
