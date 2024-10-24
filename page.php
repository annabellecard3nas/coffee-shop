<?php 

    get_header();

    while(have_posts()){
        the_post();
 ?>
    <div class="pages_php">
    <?php get_template_part("composantPHP/title-page"); ?>
      <h2><?php the_content(); ?></h2>
      
      
        <a href="<?php echo site_url(''); ?>"> back home </a>
     
    </div>


<?php }
    get_footer();
?>
   