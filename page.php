<?php get_header(); ?>
    

<div class="flex">

    <section class="trois-quart">

        <?php get_template_part( 'templates/generique-loop' ); ?>

    </section>

    <section class="quart sidebar">

        <?php get_sidebar(  ); ?>

    </section>

</div>

<?php get_footer(); ?>