<?php get_header(); ?> 
<section class="site__main">
    <h1>Collège de Maisonneuve</h1>
    <?php
    if (have_posts()):
        while(have_posts()) : the_post(); ?>
            <h2><a href="<?= get_permalink() ?>"><?php the_field('titre'); ?></a></h2>
            <h3><?php the_field('sous_titre'); ?></h3>
            <p><?php the_field('resume'); ?></p>
        <?php endwhile; ?>
    <?php endif; ?>   
    <?php wp_nav_menu(array(
                'menu' => 'menu accueil',
                'container' => 'nav'

            ));
            ?>
</section>


<?php get_footer(); ?>