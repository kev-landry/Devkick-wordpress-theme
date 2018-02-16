<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Blog</title>

    <?php if(!is_single()):?>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <?php else: ?>
    <meta name="description" content="<?php single_post_title( '', true) ?>" />
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body>
    <header class="main-nav">
        <div class="nav-container">
            <?php
                        wp_nav_menu( array(
                            'menu' => 'devkick',
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