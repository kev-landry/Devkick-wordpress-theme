<?php get_header(); ?>
    <header class="hero is-bold main-header">
        <div class="hero-body">
            <div class="container">
                <h1 class="title"><?php single_cat_title( '', true ); ?></h1>
                <h3 class="subtitle"><?php echo category_description() ?></h3>
            </div>
        </div>
    </header>





<?php get_footer(); ?>