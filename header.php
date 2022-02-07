<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'title' ); ?></title>

<!-- Action hook : Placeholder pour le code de wordpress -->
    <?php wp_head(  ); ?>
</head>

<!-- Injecte des classes au body selon le contexte -->
<body <?php body_class( ); ?>>

<!-- hook utilisable dans functions.php -->
<?php wp_body_open(  ); ?>

    <header class="v-aligne">
        <div class="conteneur flex space-between">
            <section>
                <h1 class="titre-principal"><?php bloginfo( 'title' ); ?></h1>
                <div class="slogan"><?php bloginfo( 'description' ); ?></div>
            </section>
            <nav class="flex v-aligne">

            <?php 
            
            $args = array(
                'theme_location' => 'main-menu'
            );
            
            wp_nav_menu($args);
            ?>

                <!-- <ul class="menu">
                    <li><a href="#" class="btn">Accueil</a></li>
                    <li><a href="#" class="btn">À propos</a></li>
                    <li><a href="#" class="btn">Contact</a></li>
                </ul> -->
            </nav>
        </div>
    </header>

    <main class="conteneur">