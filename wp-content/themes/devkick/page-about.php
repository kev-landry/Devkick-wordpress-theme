<?php get_header(); ?>
<section class="hero is-bold hero-about">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-centered"> About</h1>
                <h3 class="subtitle has-text-centered">Kevin Landry</h3>
            </div>
        </div>
    </section>
    <section class="section">
            <div class="article-container">
                <div class="columns">
                    <section class="section">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID();?>" class="box article-box">
                            <?php the_content();?>
                        </article>
                    <?php endwhile; endif; ?>
                    </section>
                </div>
            </div>
    </section>
<?php get_footer(); ?>