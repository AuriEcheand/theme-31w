<?php

/**
 * Template Header
 * se template est intégré dans tous les modèles de thème
 * @link : https://developer.wordpress.org/themes/
 * @package : 31W
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>        <!--fonction qui va attribuer la langue attribué a wp -->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>                       <!--va attribuer le title ... -->
</head>
<body>
<section class="site">
        <header class="site__header">
            <section class="site__branding">
                <h1>
                    <a href="<?= esc_url( home_url( '/' ) ) ?>"><?= bloginfo( 'name' ); ?></a>
                </h1>
                <h2>
                <?= bloginfo( 'description' ); ?>
                </h2>
            </section>
            <nav class="site__navigation">
            Menu
            </nav>
        </header>
        <section class="site__sidebar">
            <h3>Menu Lateral</h3>
            <img src="https://s2.svgbox.net/hero-solid.svg?ic=menu&color=000000" width="32" height="32">
            <?php wp_nav_menu(array(
                            `menu` => 'menu sidebar',
                            `container` =>'nav',
                            'container_class' => 'menu__sidebar',
                            'menu_class' => 'menu__sidebar__ul'


            ))?>

        </section>

