<?php get_header(); ?>
    
    <?php if(have_posts( )) : ?>

        <?php while(have_posts( )) : the_post( ); ?>

            <article class="flex">
                <div class="quart">
                
                <?php if(has_post_thumbnail(  )) 
                {
                    the_post_thumbnail( );
                } ?>
                </div>
                <div class="texte-article trois-quart">
                    <h3><?php the_title(  ); ?></h3>
                    <p><?php the_content(  ); ?></p>
                    <p>Ce bien vous intéresse ? consulter d'autres biens de ce genre <?php the_category(',' ) ?>.</p>
                </div>
            </article>


    
<?php endwhile;
    endif;
?>
<?php get_footer(); ?>