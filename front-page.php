<?php get_header(); ?>

    <main>
        <section class="hautDePage">

            <div class="images_cercle">
                <div class="cercle_1" style="background-image: url(<?php echo get_theme_file_uri('/images/Accueil.jpg');?>);"></div>
                <div class="cercle_2"></div>
                <div class="cercle_3"></div>
            </div>

          
            
            <div class="intro">
                <h1><?php echo get_bloginfo('name'); ?></h1>
                <p>Where every coffee is crafted with passion,<br> and served with love to bring you joy,<br> and awaken your senses </p>
                <p class="mots_intro">So just sip and relax...</p>
                <a href="<?php echo site_url('/shop'); ?>"><button class="main_button">Shop &raquo;</button></a>
            </div>
            
        </section>

        
        <section class="milieu">
            <?php get_template_part("composantPHP/wave"); ?>
                <div class="about_us_space">
                    <div class="about_us_cercle">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic facere minima rem blanditiis esse amet commodi magni laboriosam facilis impedit officiis quo quam, consequatur dignissimos numquam, dolore libero nemo temporibus.</p>
                        <button>Know more</button>
                    </div>
                </div>
        </section>
    </main>



<?php get_footer(); ?>    
    

