<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
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
                <h1 class="titre-principal"><a href="<?php echo esc_url( home_url( '/' ) ) ?>"><?php bloginfo( 'title' ); ?></a></h1>
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
                    <li><a href="#" class="btn">À propos</a></li>
                    <li><a href="#" class="btn">Acheter</a></li>
                    <li><a href="#" class="btn">Vendre</a></li>
                    <li><a href="#" class="btn">Contact</a></li>
                </ul> -->
            </nav>
            <div class="reseaux">
                <div class="facebook"><a href="https://www.facebook.com/victorandrea.perego.5"><i class="fa-brands fa-facebook-square"></i></a></div>
                <div class="phone"><a href="tel:1418-429-8746"><i class="fa-solid fa-square-phone"></i> 418 429-8746</a></div>
                <div class="mail"><a href="mailto:va.perego@gmail.com"><i class="fa-solid fa-envelope"></i> va.perego@gmail.com</a></div>
            </div>
        </div>
    </header>

    <div class="conteneur flex align-right">

            <form action="<?php echo esc_url(home_url( '/' ) ) ?>" method="get">
                <input type="text" name="s" Placeholder="Rechercher">
            </form>

    </div>

    <main class="conteneur">