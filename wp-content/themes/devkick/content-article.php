<article id="post-<?php the_ID();?>" class="box article-box">
    <a href="<?php the_permalink(); ?>">
        <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('thumbnail',['class' => 'img-responsive img-thumbnail'] ); 
            } else { ?>
                <img width="150" heigth="150" class="img-responsive img-thumbnail wp-post-image" src="<?php bloginfo('template_directory'); ?>/assets/images/article.jpg" alt="<?php the_title(); ?>" />
                <?php
            }
        ?>
    </a>
    <h1>
        <a href="<?php the_permalink() ?>">
            <?php the_title();?>
        </a>
    </h1>
    <?php //the_date(); ?>
    <?php the_excerpt();?>
</article>