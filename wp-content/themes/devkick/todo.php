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