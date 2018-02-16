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