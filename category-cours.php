<?php get_header(); ?> 
<section class="site__main">
    <h1>Collège de Maisonneuve</h1>
    <div class="blocs__horizontaux">
    <?php
    
    if (have_posts()):
        while(have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <?php $lien = " ... <a class='bouton' href='" 
                    . get_permalink()  
                    . "'>"
                    . substr(get_the_title(),0,8) 
                    ."</a>"; ?>

    <p><?= wp_trim_words(get_the_content(), 20, $lien) ?></p>

    </article>  
        <?php endwhile; ?>
    <?php endif; ?>  
 </div> 
</section>
<?php get_footer(); ?>