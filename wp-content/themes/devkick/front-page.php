<?php get_header(); ?>
<section class="hero is-bold gradient">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="header-left column is-two-thirds">
                    <?php $theme_opts = get_option('devkick_opts'); ?>
                    <h1 class="title is-3">Kevin Landry</h1>
                    <p class="subtitle is-4">
                        <?php echo stripslashes($theme_opts['legend_01']); ?>
                        <br/>
                        <a href="<?php echo get_home_url().'/about';?>"><strong style="color:#f5da55">Si vous voulez en savoir plus</strong></a>.
                    </p>
                    <p class="hero-social">
                            <a href="<?php echo get_home_url().'/about';?>">
                                <i class="fas fa-user-circle"></i>About
                            </a>
                            <a target="_blank" href="https://twitter.com/TheSisck1">
                                <i class="fab fa-twitter-square"></i>Twitter</a>
                            <a target="_blank" href="https://github.com/kev-landry">
                                <i class="fab fa-github-square"></i>Github</a>
                    </p>
                </div>
                <div class="header-right column">
                    <figure class="image-options is-256x256">
                        <img alt="kevin landry" src="<?php echo $theme_opts['image_01_url'];?>" alt="avatar">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<main class="main" id="main-content">
    <section class="section article-section">
        <div class="container article-container">
            <h2 class="title is-4">Derniers articles</h2>
            <div class="columns">
                <?php
                    $args = array ( 'category_name' => 'tuto', 'posts_per_page' => 3);
                    $posts = get_posts( $args );
                    foreach( $posts as $post ) :	setup_postdata($post);
                    ?>
                    <div class="column">
                        <?php get_template_part('content-article', get_post_format()); ?>
                    </div>
                    <?php endforeach; wp_reset_postdata();?>
            </div>
            <!-- container -->
        </div>
    </section>
    <section class="section article-section">
        <div class="container article-container">
            <h2 class="title is-4">Derniers snippets</h2>
            <div class="columns">
                <?php
                    $args = array ( 'category_name' => 'snippet', 'posts_per_page' => 3);
                    $posts = get_posts( $args );
                    foreach( $posts as $post ) :	setup_postdata($post);
                    ?>
                    <div class="column">
                        <?php get_template_part('content-article', get_post_format()); ?>
                    </div>
                    <?php endforeach; wp_reset_postdata();?>
            </div>
            <!-- container -->
        </div>
    </section>
</main>

<?php get_footer(); ?>