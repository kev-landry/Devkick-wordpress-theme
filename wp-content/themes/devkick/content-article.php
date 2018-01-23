<article id="post-<?php the_ID();?>" class="box">
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('thumbnail',['class' => 'img-responsive img-thumbnail'] ); ?>
    </a>
    <h1>
        <a href="<?php the_permalink() ?>">
            <?php the_title();?>
        </a>
    </h1>
    <?php the_date(); ?>
    <?php the_excerpt();?>
    <!-- Si l'article n'a pas de read more -->
</article>