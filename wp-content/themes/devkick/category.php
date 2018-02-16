<?php get_header(); ?>
    <header class="hero is-bold main-header">
        <div class="hero-body">
            <div class="container">
                <h1 class="title"><?php single_cat_title( '', true ); ?></h1>
                <h3 class="subtitle"><?php echo category_description() ?></h3>
            </div>
        </div>
    </header>
    <section class="section">
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