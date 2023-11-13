<?php get_header(); 

while(have_posts()){
    the_post(); ?>

    <div class="container page">
        <h1><?php the_title(); ?></h1>
        
        <p><?php the_content(); ?></p>
    </div>

<?php }
 get_footer(); ?>