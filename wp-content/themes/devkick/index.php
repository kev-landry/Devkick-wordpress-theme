<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Blog</title>

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <a class="navbar-brand" href="#">Top navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>
    </header>
    <div class="container">
        <div class="jumbotron">
            <h1>Page d'acceuil</h1>
        </div>
    </div>

    <?php if (have_posts()):

    while( have_posts()):
        the_post();
        the_title();echo '<br>';
    endwhile;
    else:
        echo 'y\'a pas de résultats !';
    endif;
    die();
    ?>
    <section>
        <div class="container">
            <div class="row m-dw-30">
                <div class="col-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/yes.png" alt="" class="img-fluid">
                </div>
                <div class="col-10">
                    <h2>Titre de l'article</h2>
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
            <div class="row m-dw-30">
                <div class="col-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/yes.png" alt="" class="img-fluid">
                </div>
                <div class="col-10">
                    <h2>Titre de l'article</h2>
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
            <div class="row m-dw-30">
                <div class="col-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/yes.png" alt="" class="img-fluid">
                </div>
                <div class="col-10">
                    <h2>Titre de l'article</h2>
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
            <div class="row m-dw-30">
                <div class="col-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/yes.png" alt="" class="img-fluid">
                </div>
                <div class="col-10">
                    <h2>Titre de l'article</h2>
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
        </div>
    </section>


    <?php wp_footer(); ?>
</body>

</html>