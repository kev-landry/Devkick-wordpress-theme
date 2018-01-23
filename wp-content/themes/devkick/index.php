<?php get_header(); ?>
        <header class="hero is-bold main-header">
            <div class="hero-body">
                <div class="container">
                    <div class="columns">
                        <div class="header-left column is-two-thirds">
                            <h1 class="title is-3">Bienvenu sur KevToDev</h1>
                            <p class="subtitle is-5">27 ans, actuellement en alternance en tant que developpeur web et passionné par les nouvelles
                                technologies, notamment du web et de l'IA. Ici tu trouveraa ce que j'apprend au fil de mon
                                apprentissage et découverte sous forme d'articles/tutos. Je ferai donc en sorte, à mon échelle,
                                de leur rendre la pareille via ce blog .
                            </p>
                        </div>
                        <div class="header-right column">
                            <figure class="image is-256x256">
                                <img src="//devkick.loc:3000/wp-content/uploads/2018/01/cercle_moi.jpg" alt="avatar">
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
