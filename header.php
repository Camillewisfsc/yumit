<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/all.css">
</head>

<body>

    <header class="d-flex justify-content-between">

        <img class="logopc" src="<?php echo get_template_directory_uri(); ?>/images/logopc.png" alt="logopc">
        <!-- Barre Nav -->

        <ul class="nav justify-content-end align-items-center">
            <li class="nav-item profile">
                <a class="nav-link active" aria-current="page" href="<?php echo home_url() . "/profil/";  ?>">
                    <span class="nav-link-icon"></span>
                    <span class="nav-link-text">profil</span>
                </a>
            </li>

            <li class="nav-item favorites">
                <a class="nav-link" aria-current="page" href="<?php echo home_url() . "/home/";  ?>">
                    <span class="nav-link-icon"></span>
                    <span class="nav-link-text">favoris</span>
                </a>
            </li>
            <li class="nav-item commerces">
                <a class="nav-link" aria-current="page" href="<?php echo home_url() . "/commerces/";  ?>">
                    <span class="nav-link-icon"></span>
                    <span class="nav-link-text">commerces</span>
            </li>

            <a class="nav-link active" aria-current="page" href="#">

            </a>
            </li>
            <button type="button" class="nav-btn btnnav1">s'inscrire</button>
            <button type="button" class="nav-btn btnnav2">se connecter</button>
        </ul>

    </header>

    <body <?php body_class(); ?>>

        <?php wp_body_open(); ?>