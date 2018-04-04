<?php

function devkick_build_options_page() {

    $theme_opts = get_option('devkick_opts');
	        wp_enqueue_style( 'devkick_css', get_template_directory_uri(). '/assets/css/main.css', array(),
        DEVKICK_VERSION, 'all' );
    ?>

        <section class="hero is-warning">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">Devkick Settings</h1>
                    <h2 class="subtitle">Where the magic happens !</h2>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
            <?php
                if (isset($_GET['status']) && $_GET['status'] == 1) {
                    echo
                    '<article class="message is-primary">
                    <div class="message-header">
                      <p>Succes</p>
                      <button class="delete" aria-label="delete"></button>
                    </div>
                    <div class="message-body">
                        Your settings have been saved !
                    </div>
                  </article>';
                }
                if (isset($_GET['status']) && $_GET['status'] == 2) {
                    echo '
                    <div class="notification is-danger">
                    <button class="delete"></button>
                        There was an error, contact your administrator or wait a few minutes before retry !
                  </div>
                  ';
                }
            ?>
            </div>
                <div class="tabs is-centered is-boxed">
                    <ul>
                        <li class="is-active">
                        <a>
                            <span class="icon is-small"><i class="fas fa-home"></i></span>
                            <span>Home</span>
                        </a>
                        </li>
                        <li>
                        <a>
                            <span class="icon is-small"><i class="fas fa-file"></i></span>
                            <span>Category</span>
                        </a>
                        </li>
                        <li>
                        <a>
                            <span class="icon is-small"><i class="fas fa-film"></i></span>
                            <span>Videos</span>
                        </a>
                        </li>
                        <li>
                        <a>
                            <span class="icon is-small"><i class="fas fa-file-alt"></i></span>
                            <span>Documents</span>
                        </a>
                        </li>
                    </ul>
                </div>
            <form class="media" id="form-devkick-options" action="admin-post.php" method="post">
                <input class="input" name="action"type="hidden" value="devkick_save_options">

                <figure class="media-left">
                    <button type="button" id="btn_img_01" class="button is-light image-options is-128x128">
                        <img id="preview_img_01" src="<?php echo $theme_opts['image_01_url']; ?>">
                        <input type="hidden" id="input_img_01" name="devkick_image_url_01" value="<?php echo $theme_opts['image_01_url']; ?>">
                    </button>
                </figure>
                <div class="media-content">
                    <div class="field">
                        <p class="control">
                            <textarea cols="25" maxlength="355" d="devkick_legend_01" class="textarea" type="textarea" placeholder="" name="devkick_legend_01" value="<?php echo stripslashes($theme_opts['legend_01']); ?>">   <?php echo stripslashes($theme_opts['legend_01']); ?>
                            </textarea>
                        </p>
                    </div>
                    <?php wp_nonce_field( 'devkick_nonce', 'devkick_options_check' ); ?>
                    <nav class="level">
                        <div class="field">
                            <div class="control">
                                <button type="submit" class="button is-primary">Submit</button>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <label class="checkbox">
                                    <input type="checkbox"> Press enter to submit
                                </label>
                            </div>
                        </div>
                    </nav>
                </div>
            </form>
        </section>

    <?php
}

?>