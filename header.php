<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title><?php the_title();?></title>

        <?php wp_head();?>

    </head>
    <body>

        <header class="header">
            <div class="header__container container">
                <?php 
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }

                    wp_nav_menu(
                        array(
                            'theme_location' => 'header-menu',
                            'menu_class' => 'header__menu'
                        )
                    );
                ?>

                <div class="header__toggle js-header-toggle" id="nav-icon-4">
                    <div class="header__toggle-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </header>