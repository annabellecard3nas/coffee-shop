<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <?php wp_head(); ?>

</head>
<body>
    <header>
        <div class="menu_entete">
            <div class="logo_coffee">
             <?php the_custom_logo(); ?>
             <p>Coffee House</p>
             </div>
            <?php wp_nav_menu(); ?>
        </div>
    </header>