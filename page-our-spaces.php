<?php 

    get_header();

    while(have_posts()){
        the_post();
 ?>
    <div class="page_shop">
        <div class="titre_page">
                <h1><?php the_title(); ?></h1>
        </div>
  

        <div class="description_ourSpaces">
           <p><?php the_content(); ?></p>
        </div>
        <div class="image">
            <img src="" alt="">
        </div>

        <div class="theWindows">
            <div class="window1"></div>
            <div class="window1"></div>
            <div class="window3"></div>
        </div>

        <div>
            <?php ; ?>
        </div>
    </div>

   


<?php }
    get_footer();
?>
   