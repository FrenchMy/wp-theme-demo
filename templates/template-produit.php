<?php 

/* 

Template Name: Gabarit produit

*/

?>

<?php get_header( ) ?>

<?php  
    $args = array(
        'category__not_in' => 1
    );

    $query = new WP_Query($args);


?>

<div class="flex">
            <section class="trois-quart">

            <?php if($query->have_posts(  )) : ?>

                <?php  while($query->have_posts(  )) : $query->the_post(  ); ?>

                    <article class="flex">

                        <div class="quart">
                           

                            <?php if(has_post_thumbnail(  )) : ?>

                                <?php the_post_thumbnail('small', ['class' => 'fluide'] ); ?>

                            <?php endif ?>

                        </div>

                        <div class="texte-article trois-quart">

                            <h3><?php the_title(  ); ?></h3>
                            <p><?php the_excerpt(  ); ?></p>
                            
                            <a href="<?php the_permalink(); ?>">Decouvrir...</a>

                        </div>
                    </article>
                
            <?php endwhile; ?>

            <?php endif; ?>

            </section>
            
        </div>

<?php get_footer( ) ?>