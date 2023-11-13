<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
  <header>
    <!-- ******************* The Navbar Area ******************* -->
    <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

      <a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

      <nav class="navbar navbar-expand-md navbar-dark bg-primary">

      <?php if ( 'container' == $container ) : ?>
        <div class="container">
      <?php endif; ?>

            <!-- Your site title as branding in the menu -->
            <?php if ( ! has_custom_logo() ) { ?>

              <?php if ( is_front_page() && is_home() ) : ?>

                <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

              <?php else : ?>

                <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

              <?php endif; ?>


            <?php } else {
              the_custom_logo();
            } ?><!-- end custom logo -->
          
          <a class="navbar-toggler btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
            
            <span class="navbar-toggler-icon"></span>
          </a>

          <!-- The WordPress Menu goes here -->
          <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header justify-content-end">
              <a type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></a>
            </div>
          <?php wp_nav_menu(
            array(
              'theme_location'  => 'primary',
              'menu_class'      => 'navbar-nav ml-auto justify-content-end',
              'fallback_cb'     => '',
              'menu_id'         => 'main-menu',
              'depth'           => 2,
              'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
            )
          ); ?>
          </div>
          
        <?php if ( 'container' == $container ) : ?>
        </div><!-- .container -->
        <?php endif; ?>

      </nav><!-- .site-navigation -->

    </div><!-- #wrapper-navbar end -->
  </header>
