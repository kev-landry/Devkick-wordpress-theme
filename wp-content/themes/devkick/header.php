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
            <nav class="main-navigation">
                <a class="" href="#">
                    <i class="fas fa-home"></i>
                    <span>Accueil</span>
                </a>
                <?php $cat_id= get_cat_ID( 'Tutoriels' );?>
                <a class="" href="<?php echo esc_url(get_category_link($cat_id)) ?>">
                    <i class="fas fa-desktop"></i>
                    <span>Tutoriels</span>
                </a>
                <?php $cat_id= get_cat_ID( 'Snippets' );?>
                <a class="" href="<?php echo esc_url(get_category_link($cat_id)) ?>">
                    <i class="fas fa-desktop"></i>
                    <span>Snippets</span>
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