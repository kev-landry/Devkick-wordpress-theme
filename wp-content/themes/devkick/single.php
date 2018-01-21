<?php

    get_header();
    if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
    <article id="post-<?php the_ID();?>" class="">
        <header>
            <div class="container article-container" style="text-align:center">
                <a href="<?php the_permalink( ); ?>">
                    <?php the_post_thumbnail('thumbnail',['class' => 'img-responsive img-thumbnail'] ); ?>
                </a>
                <h1>
                    <a href="<?php the_permalink() ?>">
                        <?php the_title();?>
                    </a>
                </h1>
                <?php the_date(); ?>
            </div>
        </header>
        <section class="section">
            <div class="container article-container">
                <?php the_content();?>
            </div>
        </section>
        <!-- Si l'article n'a pas de read more -->
    </article>
    <?php
endwhile; endif;
get_footer();
?>