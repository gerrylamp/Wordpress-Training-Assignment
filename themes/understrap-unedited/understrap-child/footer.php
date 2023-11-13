
<footer>
    <div class="container">
        <div class="row">
            <div class="col">
                <p>Our company</p>
                <nav class="site-navigation ml-auto d-lg-block" role="navigation">
                    <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'footerMenuLocation1',
                        'menu_class'      => 'site-menu js-clone-nav ml-auto',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 2,
                    )
                    ); ?>
                </nav>
            </div>

            <div class="col">
                <p>Inspections</p>
                    <nav class="site-navigation ml-auto d-lg-block" role="navigation">
                    <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'footerMenuLocation2',
                        'menu_class'      => 'site-menu js-clone-nav ml-auto',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 2,
                    )
                    ); ?>
                </nav>
            </div>

            <div class="col">
                <p>Informations</p>
                    <nav class="site-navigation ml-auto d-lg-block" role="navigation">
                    <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'footerMenuLocation3',
                        'menu_class'      => 'site-menu js-clone-nav ml-auto',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 2,
                    )
                    ); ?>
                </nav>
            </div>

            <div class="col">
                <p>Recruit</p>
                    <nav class="site-navigation ml-auto d-lg-block" role="navigation">
                    <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'footerMenuLocation4',
                        'menu_class'      => 'site-menu js-clone-nav ml-auto',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 2,
                    )
                    ); ?>
                </nav>
            </div>
            
            <div class="col">
                    <nav class="site-navigation ml-auto d-lg-block" role="navigation">
                    <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'footerMenuLocation5',
                        'menu_class'      => 'site-menu js-clone-nav ml-auto',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 2,
                    )
                    ); ?>
                </nav>
            </div>
        </div>
    </div>
</footer>
<?php 
wp_footer(); 
?>