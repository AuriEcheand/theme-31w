<?php get_header(); ?>
<h1> Collège de Maisonneuve</h1>
<?php
if (have_posts()):
    while (have_posts()): the_post(); ?>
        <p><?php the_title(); ?></p>
    <?php  endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
