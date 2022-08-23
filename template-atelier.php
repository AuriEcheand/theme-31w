<?php
/**
 * Template name: Atelier 
 */
?>
<?php get_header() ?>  

<main class="site__main">

   <?php //the_post_thumbnail("annonce"); ?>
   <mark>Atelier à venir</mark>
       <?php if (have_posts()): the_post(); ?>
      <article class="annonce__article">
         <h1><?= get_the_title() ?></h1>
         <?php the_content(); ?>
         <?php
         $endroit = get_field("endroit");
         $date = get_field("date");
         $heure = get_field("heure");
         $organisateur = get_field("organisateur");
         $formation = get_field("formation");
         $prix = get_field("prix");
         $difficulte = get_field("difficulte");
         $duree = get_field("duree");
         $nbheure = get_field("nbheure");
         echo "<p class='annonce__organisateur'>Le responsable de l'atelier: " . $organisateur . "</p>";
         echo "<p class='annonce__formation'>Le type de formation: " . $formation . "</p>";
         echo "<p class='annonce__date'>La date de début de l'atelier: " . $date . "</p>";
         echo "<p class='annonce__duree'>Durée: " . $duree . "</p>";
         echo "<p class='annonce__nbheure'>Heure: " . $nbheure . "</p>";
         echo "<p class='annonce__heure'>Nombre d'heure par séance: " . $heure . "</p>";
         echo "<p class='annonce__difficulte'>Niveau de difficulté: " . $difficulte . "</p>";
         echo "<p class='annonce__lieu'>Le lieu où se déroulera l'atelier: " . $endroit . "</p>";
         echo "<p class='annonce__prix'>Le prix de l'atelier: " . $prix . "</p>";

         // $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
      
         $image = get_field('image');
         if( !empty( $image ) ): ?>
             <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
         <?php endif; ?>
        
      </article>
      <?php endif ?>
  
</main>
<?php get_footer() ?>