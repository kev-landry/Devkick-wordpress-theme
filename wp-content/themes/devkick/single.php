<?php

    get_header();
    if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
    <article id="post-<?php the_ID();?>" class="">
        <header class=" hero is-light article-header">
            <div class="hero-body" style="text-align:center">
                <a href="<?php the_permalink( ); ?>">
                    <?php the_post_thumbnail('thumbnail',['class' => 'img-responsive img-thumbnail'] ); ?>
                </a>
                <h1 class="title">
                    <a href="<?php the_permalink() ?>">
                        <?php the_title();?>
                    </a>
                </h1>
                <p class="subtitle is-6 has-text-grey-light">Par <a class="has-text-info" href="<?php echo get_home_url().'/about';?>"><?php the_author() ?></a> le <span class="has-text-info"><?php the_date(); ?></span></p>
            </div>
        </header>
        <section class="section">
            <div class="article-container">
                <div class="columns">
                    <div class="section">
	                    <?php the_content();?>
                    </div>
                </div>
            </div>
        </section>
    </article>
    <?php
endwhile; endif;
get_footer();
?>