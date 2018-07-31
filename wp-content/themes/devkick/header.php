<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php if (is_front_page()){?>Kevin Landry<?php } elseif(is_single()) { echo the_title();}else {echo single_tag_title();} ?></title>

    <?php if(!is_single()):?>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <?php else: ?>
    <meta name="description" content="<?php single_post_title( '', true) ?>" />
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body class="template">
    <header class="main-nav">
        <div class="nav-container">
            <nav class="main-navigation">
                <a class="front <?php if (is_front_page()){?>current<?php } ?>" href="<?php echo get_home_url(); ?>">
                    <i class="fas fa-home"></i>
                    <span>Accueil</span>
                </a>
                <?php $cat_id= get_cat_ID('Tutoriels');?>
                <a class="tuto <?php if (is_category('tuto')){?>current<?php } ?>" href="<?php echo esc_url(get_category_link($cat_id)) ?>">
                    <i class="fas fa-desktop"></i>
                    <span>Tutoriels</span>
                </a>
                <?php $cat_id= get_cat_ID('Snippets');?>
                <a class="snippet <?php if (is_category('snippet')){?>current<?php } ?>" href="<?php echo esc_url(get_category_link($cat_id)) ?>">
                    <i class="far fa-file-code"></i>
                    <span>Snippets</span>
                </a>
                <a class="about <?php if (is_page('about')){?>current<?php } ?>" href="<?php echo esc_url(get_permalink(get_page_by_path('about')))?>">
                    <i class="far fa-user"></i>
                    <span>About</span>
                </a>
            </nav>
            <div class="search-area">
                <form role="search" action="" method="" name="s" class="search-area-form">
                    <label for=""></label>
                    <input type="" placeholder="Chercher" name="" class="nav-form-search-input">
                    <button type="submit" class="nav-form-search-submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>
    </header>
