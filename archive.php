<?php
    get_header(); 
?>

    <!--   ceci est egale a the_archive_title() 
        if(is_category()){
        single_cat_title();
    }; -->


    <h1><?php single_cat_title(); ?></h1>
    <p><?php echo category_description(); ?></p>
    <div class="blog_php">
   
      <?php
        while(have_posts()){
            the_post()?>
            <div class="post-item-blog">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                <div class="meta-box">
                    <p>Posted by <?php  the_author() ; ?> on  <?php the_time('j F Y'); ?> | <?php echo get_the_category_list(','); ?></p>
                </div>
                <div class="generic-content">
                    <?php the_excerpt(); ?>
                    <p><a href="<?php the_permalink(); ?>">continue reading &raquo;</a></p>
                </div>
            </div> 
        <?php } 
        echo paginate_links();
      ?>
    </div>

<?php
    
    get_footer();
?>
    

