<?php get_header(); ?>

<div class="archive content section-1">
    <div class="container">
        <div class="text-center">
            <img src="http://localhost/wordpress/wp-content/uploads/2023/11/lead-dec.png" alt="">
            <br>
            <h2><?php the_archive_title(); ?></h2>
        </div>
        
        <br><br>

        <?php while(have_posts()){
            the_post(); ?>

                <div class="row ">
                    <div class="col-2">
                        <a href="<?php the_permalink(); ?>"><?php the_time( 'Y.m.d') ?></a>
                    </div>

                    <div class="col-10">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                </div>

                <div class="dash-bottom"></div>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>