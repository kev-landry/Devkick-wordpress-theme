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
                <form id="form-devkick-options" action="admin-post.php" method="post">
                    <input class="input" name="action"type="hidden" value="devkick_save_options">
                    <!-- <div class="field">
                        <label class="label">Legend</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Legend" value="">
                        </div>
                    </div> -->
                    <div class="field">
                        <label class="label">Legend</label>
                        <div class="control">
                            <input id="devkick_legend_01" class="input" type="text" placeholder="Legend" name="devkick_legend_01" value="<?php echo $theme_opts['legend_01']; ?>">
                        </div>
                    </div>
                    <?php wp_nonce_field( 'devkick_nonce', 'devkick_options_check' ); ?>
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>








    <?php
}

?>