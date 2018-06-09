<?php get_header();?>
    <?php
        $term = $wp_query->get_queried_object()->term_id;

        $color = get_term_meta( $term, '_category_color', true );
    ?>
    <section class="hero is-bold" style="background-color:#<?php echo $color ?> !important">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-centered"><?php single_cat_title( '', true );?></h1>
                <h3 class="subtitle has-text-centered"><?php echo category_description() ?></h3>
            </div>
        </div>
    </section>
    <section class="section article-section">
            <div class="container">
                <div class="columns">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="column">
                            <?php get_template_part('content-article'); ?>
                        </div>
                <?php endwhile; endif; ?>

                </div>
                <!-- container -->
            </div>
    </section>

<?php get_footer(); ?>