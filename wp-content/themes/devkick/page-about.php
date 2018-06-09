<?php get_header(); ?>
<section class="hero is-bold hero-about">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-centered"> About</h1>
                <h3 class="subtitle has-text-centered">Kevin Landry</h3>
            </div>
        </div>
    </section>
    <section class="section article-section">
            <div class="container">
                <div class="columns">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID();?>" class="">
                    <section class="section">
                        <div class="container article-container">
                            <?php the_content();?>
                        </div>
                    </section>
                    <!-- Si l'article n'a pas de read more- -->
                </article>
                <?php endwhile; endif; ?>

                </div>
                <!-- container -->
            </div>
    </section>
<?php get_footer(); ?>