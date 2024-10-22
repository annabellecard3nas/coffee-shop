<?php 

    get_header();

    while(have_posts()){
        the_post();
 ?>
    <div class="page_shop">
      <h1><?php the_title(); ?></h1>
      <div class="grey_line"> </div>
    </div>
  
    <section class="shop_section">
        <div class="carrousel_1">

        </div>
    </section>

    <section class="most_loved_section">
        <div class="carrousel_1">

        </div>
    </section>


<?php }
    get_footer();
?>
   