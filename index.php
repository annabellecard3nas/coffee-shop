<?php
    get_header(); 
?>

    <div class="blog_php">
   
      <?php
        while(have_posts()){
            the_post()?>
            <div class="post-item-blog">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                <div class="meta-box">
                    <p>Posted by <?php  the_author() ; ?></p>
                </div>
                <div class="generic content">
                    <?php the_excerpt(); ?>
                    <p><a href="<?php the_permalink(); ?>">continue reading &raquo;</a></p>
                </div>
            </div> 
        <?php } 
      ?>
    
    </div>

<?php
    
    get_footer();
?>
    

