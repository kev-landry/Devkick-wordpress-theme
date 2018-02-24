<?php get_header(); ?>
        <header class="hero is-bold main-header">
            <div class="hero-body">
                <div class="container">
                    <div class="columns">
                        <div class="header-left column is-two-thirds">
                            <?php $theme_opts = get_option('devkick_opts'); ?>
                            <h1 class="title is-3">Bienvenu sur KevToDev</h1>
                            <p class="subtitle is-5"><?php echo $theme_opts['legend_01']; ?>
                            </p>
                        </div>
                        <div class="header-right column">
                            <figure class="image is-256x256">
                                <img src="<?php echo $theme_opts['image_01_url'];?>" alt="avatar">
                            </figure>
                        </div>
                    </div>
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
