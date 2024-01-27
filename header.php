<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark my-nav">
        <div class="container-fluid px-0">
            <a class="navbar-brand fw-bold fs-3 px-4" href="#!">Posgrados<span class="fw-light mx-3">|</span><img class="img-fluid" src="http://localhost/vectorial/wp-content/uploads/2024/01/logo-icesi-a-otro-nivel-blanco.png" width="150" alt="Logo Icesi"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse d-flex justify-content-end navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-principal',
                    'menu_class'     => 'el-menu-principal navbar-nav',
                ));
                ?>
            </div>
            <a class="" href="#!">
                <button class="solicitar-info"><i class="fa-solid fa-message"></i>Solicitar información</button>
            </a>
        </div>
    </nav>