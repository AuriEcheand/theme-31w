<?php
/**
 * Template name: Évenement 
 */
?>
<?php get_header() ?>  

<main class="site__main">

   <?php //the_post_thumbnail("annonce"); ?>
   <mark>Événement à venir</mark>
       <?php if (have_posts()): the_post(); ?>
      <article class="annonce__article">
         <h1><?= get_the_title() ?></h1>
         <?php the_content(); ?>