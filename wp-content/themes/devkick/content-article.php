<article id="post-<?php the_ID();?>" class="box article-box">
    <div class="article-box-header">
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
        <h1 class="title is-4">
            <a href="<?php the_permalink() ?>">
			    <?php the_title();?>
            </a>
        </h1>
    </div>
    <div class="article-box-excerpt">
	    <?php the_excerpt();?>
    </div>
    <div class="article-box-footer">
        <span class="has-text-grey-light"><?php  the_date(); ?></span>
        <a href="<?php the_permalink(); ?>">Commentaires</a>
    </div>
</article>