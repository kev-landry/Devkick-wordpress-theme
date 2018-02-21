<?php

function devkick_build_options_page() {

    $theme_opts = get_option('devkick_opts');
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
                    echo '<article class="message is-primary">
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
                    echo '<article class="message is-warning">
                    <div class="message-header">
                      <p>Warning</p>
                      <button class="delete" aria-label="delete"></button>
                    </div>
                    <div class="message-body">
                        The legend was updated even thought it is empty.
                    </div>
                  </article>';
                }
            ?>
            </div>
            <form class="media" id="form-devkick-options" action="admin-post.php" method="post">
                <input class="input" name="action"type="hidden" value="devkick_save_options">
                <figure class="media-left">
                    <button type="button" id="devkick_image_01"class="image is-128x128 devkick_image_01">
                        <img src="https://bulma.io/images/placeholders/128x128.png">
                    </button>
                </figure>
                <div class="media-content">
                    <div class="field">
                    <label class="label">Legend</label>
                        <p class="control">
                            <textarea id="devkick_legend_01" class="textarea" type="text" placeholder="Describe your site, yourself or what the fuck you want..." name="devkick_legend_01" value="<?php echo $theme_opts['legend_01']; ?>"></textarea>
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