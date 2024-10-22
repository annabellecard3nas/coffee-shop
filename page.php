<?php 

    get_header();

    while(have_posts()){
        the_post();
 ?>
    <div class="pages_php">
      <h1><?php the_title(); ?></h1>
      <h2><?php the_content(); ?></h2>
      
        <a href="<?php echo site_url(''); ?>"> back home </a>
     
    </div>


<?php }
    get_footer();
?>
   