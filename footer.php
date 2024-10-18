<footer>
    <div class="bas_de_page">
        <div class="info">
            <div class="join_us">
                <h1>Contact us</h1>
                <p>phone</p>
                <p>email</p>
                <p>address</p>
            </div>
            <div class="More_information">
                <h1>More information</h1>
                <p>lorem</p>
                <p>lorem</p>
            </div>
            <div class="pages_links">
                <h1>Page links</h1>
                <?php wp_nav_menu(array(
                    'theme_location' => 'footerLocationOne'
                )); ?>
            </div>
        </div>
        <div class="credits">
            <p>Created by Annabelle | 2024 All rights reserved </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>