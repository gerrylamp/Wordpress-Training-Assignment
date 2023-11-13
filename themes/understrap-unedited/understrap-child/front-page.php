<?php get_header(); ?>

<section class="content">
    <section class="section-1">
        <div class="container">
            <div class="text-center">
                <img src="http://localhost/wordpress/wp-content/uploads/2023/11/lead-dec.png" alt="">
                <br>
                <h2>最新情報</h2>
                <p>news</p>
            </div>

            <div>
                <button id="お知らせ" class="active">お知らせ</button>
                <button id="コラム">コラム</button>

                <div class="notice">
                    <?php 
                    $homepageEvents = new WP_Query(array(
                        // 'posts_per_page' => 2,
                        'post_type' => 'notice',
                        'order'     => "ASC"
                    ));

                    while($homepageEvents->have_posts()){
                        $homepageEvents->the_post(); ?>
                        <div class="row">
                            <div class="col-2">
                                <a href="<?php the_permalink(); ?>"><?php the_time( 'Y.m.d') ?></a>
                            </div>

                            <div class="col-10">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>

                        <div class="dash-bottom"></div>
                    <?php
                        }
                    ?>
                </div>

                <div class="column d-none">
                    <?php 
                    $homepageEvents = new WP_Query(array(
                        'post_type' => "column",
                        'order' => "ASC",
                    ));

                    while($homepageEvents->have_posts()){
                        $homepageEvents->the_post(); ?>
                        <div class="row ">
                            <div class="col-2">
                                <a href="<?php the_permalink(); ?>"><?php the_time( 'Y.m.d') ?></a>
                            </div>

                            <div class="col-10">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>

                        <div class="dash-bottom"></div>
                    <?php
                        }
                    ?>
                </div>
                
                <br>

                <div class="text-end">
                    <a href="<?php echo get_post_type_archive_link('notice'); ?>" class="rounded-pill notices-list">おしらせ一覧</a>
                    <a href="<?php echo get_post_type_archive_link('column'); ?>" class="rounded-pill d-none columns-list">コラム一覧</a>
                </div>
            </div>
        </div>
    </section>
</section>


<?php get_footer(); ?>