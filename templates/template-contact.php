<?php 

/* 

Template Name: Gabarit contact

*/

?>

<?php get_header( ) ?>


<div class="flex">
            <section class="trois-quart">
                <div class="location">
                    <h2>Contactez-moi</h2>
                    <section class="part1">
                        <p>Pour toutes demandes, n'hésitez pas à remplir le formulaire</p>
                        <form action="" method="get">
                            <label for="name">Nom *</label><br>
                            <input id="name" name="name" required="" type="text" /><br>
                            <label for="telephone">Téléphone</label><br>
                            <input id="telephone" name="telephone" type="text" /><br>
                            <label for="email">Courriel *</label><br>
                            <input id="mail" name="mail" required="" type="text" /><br>
                            <label for="message">Message *</label><br>
                            <textarea id="message" cols="50" name="message" required="" rows="20"></textarea><br>
                            <input id="btn-form" type="button" value="Envoyer" /><br>
                            <p>* Obligatoire</p>
                            </form>
                        </section>
                    </div>
            </section>
            <section class="quart sidebar">
                <?php get_sidebar(  ); ?>
            </section>
        </div>

<?php get_footer( ) ?>


