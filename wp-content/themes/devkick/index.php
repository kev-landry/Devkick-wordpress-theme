<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Blog</title>

    <?php wp_head(); ?>
</head>

<body>
    <header> <!-- Menu barre top -->
        <div class="nav-container">
            <nav class="topbar">
                <a class="" href="#">
                <i class="fas fa-home"></i>
                <span>Accueil</span>
                </a>
                <a class="" href="#">
                <i class="fas fa-desktop"></i>
                <span>Articles</span>
                </a>
                <a class="" href="#">
                <i class="fab fa-kickstarter-k"></i>
                <span>Kevin</span>
                </a>
                <a class="" href="#">
                <i class="far fa-thumbs-up"></i>
                <span>Portfolio</span>
                </a>
            </nav>
        </div>
    </header>
    <div class="">
        <div class="">
            <h1>Page d'acceuil</h1>
        </div>
    </div>

    <?php
        wp_nav_menu( array(
            'menu' => 'top-menu',
            'theme_location' => 'primary'
            )
        );
    ?>

    <section>
        <div class="">

            <?php if (have_posts()): ?>
            <?php while( have_posts()): the_post(); ?>

            <div class="">
                <div class="">
                    <?php the_post_thumbnail('thumbnail');?>
                </div>
                <div class="">
                    <h2><?php the_title();?></h2>
                    <?php the_date(); ?>
                    <?php the_excerpt();?> <!-- Si l'article n'a pas de read more -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend urna vitae lectus lacinia eleifend.
                        Sed id consequat lorem. Aenean interdum ultrices nulla, id varius tellus fringilla eu. Vivamus suscipit
                        suscipit orci, sed venenatis lorem bibendum vel. Nulla facilisi. Phasellus pellentesque leo odio,
                        id accumsan quam pulvinar vitae. Integer rutrum elit ut ipsum porta vehicula. Duis in dui purus.
                        Quisque facilisis mattis blandit. Duis velit velit, lacinia non fringilla sit amet, congue vel lectus.
                        Nunc tincidunt ex purus, sed efficitur risus ultrices vel. Nulla a sem dapibus, euismod turpis vitae,
                        suscipit enim. Nunc vulputate lectus leo, sed placerat velit fringilla eget. Suspendisse rutrum venenatis
                        velit, quis viverra tellus luctus nec. Fusce eu dignissim ligula.</p>
                </div>
            </div>
            <!-- row m-dw-30 -->
            <?php endwhile; ?>
            <?php else: ?>
                <div class="">
                    <div class="">
                        <p>Pas de résultats !</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <!-- container -->
    </section>

    <?php wp_footer(); ?>
</body>

</html>