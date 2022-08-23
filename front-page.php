<?php get_header(); ?> 
<section class="site__main">
    <h1>Collège de Maisonneuve</h1>
    <div class="blocs__horizontaux">
    <?php
    if (have_posts()):
        while(have_posts()) : the_post(); ?>
        <div>
        <article>
        <?php
        $image = get_field('image');
    if(!empty ($image)):?>
    <img src=" <?php echo esc_url($image['url']);?>" alt="<?php echo esc_attr($image['alt']);?>"/>
    <?php endif; ?> 
         
            <h3><a href="<?= get_permalink() ?>"><?php the_field('titre'); ?></a></h3>
            <p><?php the_field('resume'); ?></p>
            <h3><?php the_field('sous_titre'); ?></h3>
            
        </article>
        </div>
        <?php endwhile; ?>
    <?php endif; ?> 
    </div>  
    <?php wp_nav_menu(array(
                'menu' => 'menu accueil',
                'menu' => 'menu atelier',
                'container' => 'nav'));?>
</section>


<?php get_footer(); ?>