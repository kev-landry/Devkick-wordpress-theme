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
    <header class="main-nav">
        <div class="nav-container">
            <!-- <nav class="main-navigation">
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
            </nav> -->
            <?php
                wp_nav_menu( array(
                    'menu' => 'top-menu',
                    'theme_location' => 'primary',
                    'container' => 'nav',
                    'container_class' =>'main-navigation',
                    'container_id'=>'',
                    'depth' => 0,
                    'items_wrap' => '%3$s',
                    // 'walker' => new Devkick_Walker_Nav_Menu()
                    )
                );
            ?>
            <div class="search-area">
                <form role="search" action="" method="get" name="s" class="nav-form-search">
                    <label for=""></label>
                    <input type="search" placeholder="Chercher" name="s" class="nav-form-search-input">
                    <button type="submit" class="nav-form-search-submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>
    </header>
    <main class="main" id="main-content">
        <section class="hero is-bold main-header">
            <div class="hero-body">
                <div class="container">
                <div class="columns">
                    <div class="header-left column is-two-thirds">
                        <p>27 ans, actuellement en alternance en tant que developpeur web et passionné par les nouvelles technologies,
                            notamment du web et de l'IA. Ici tu trouvera ce que j'apprend au fil de mon apprentissage et
                            découverte sous forme d'articles/tutos. Je ferai donc en sorte, à mon échelle, de leur rendre
                            la pareille via ce blog .
                        </p>
                    </div>
                    <div class="header-right column">
                        <figure class="image is-256x256">
                            <img src="//localhost:3000/Devkick-wordpress-theme/wp-content/uploads/2018/01/cercle_moi.jpg" alt="avatar">
                        </figure>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="columns">

                    <?php if (have_posts()): ?>
                    <?php while( have_posts()): the_post(); ?>

                    <div class="">
                        <div class="">
                            <?php the_post_thumbnail('thumbnail');?>
                        </div>
                        <div class="">
                            <h2>
                                <?php the_title();?>
                            </h2>
                            <?php the_date(); ?>
                            <?php the_excerpt();?>
                            <!-- Si l'article n'a pas de read more -->
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
            </div>
        </section>
        <?php wp_footer(); ?>
        </div>
    </main>
</body>

</html>