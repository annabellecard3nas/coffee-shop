<?php 

function coffeeShop_files(){
    /*
    appeler les script javaScript 
    (arra('jquery') c'est  pour quand ton javascript depend de d'autre files javaScript)
    Null si ton file javaScript le depend de aucun autre dossier javaScript

    le dernier argument  sert a savoir si tu veux que sa load au debut ou a la fin du body 
    (true=charge en bas de la page au lieu d'en haut ce qui est meilleur pour la performance en general)
    */
    wp_enqueue_script('buger_button', get_theme_file_uri(''), array('jquery'),'1.0', true);


    //pour appeler les styles
    wp_enqueue_style('font_google_Lato','//fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
    wp_enqueue_style('font_google_EB_Garamond','//fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap');
    wp_enqueue_style('font_google_montserrat','//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    wp_enqueue_style('coffeShop_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','coffeeShop_files');

function ajout_au_theme(){
    add_theme_support( 'post-thumbnails' ); 
	add_theme_support( 'custom-logo');
    add_theme_support( 'menus' );
}
add_action('after_setup_theme','ajout_au_theme');

