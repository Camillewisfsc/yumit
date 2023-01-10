<?php get_header(); ?>

<div id="single-post">
    <div class="store-info container">
        <h2 class="store-name"><?php the_title(); ?></h2>
        <p class="store-opening">Ouvert</p>
    </div>
    <div class="store-products">
        <div class="container">
            <div class="section-title">
                <img src="<?php echo get_template_directory_uri(); ?>/images/nourriture-saine.png)" alt="produits du jours">
                <h3>Produits du jour</h3>
            </div>

            <div class="store-products-cards">
                <div class="store-product-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/croissants.png)" alt="Croissants">
                    <p>Croissants</p>
                </div>
                <div class="store-product-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pains.png)" alt="Pains">
                    <p>Pains</p>
                </div>
            </div>
        </div>
    </div>
    <div class="store-localisation container">
        <div class="section-title">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pointeur-de-localisation.png)" alt="Localisation">
            <h3>Localisation de <?php the_title(); ?></h3>
        </div>

        <div class="store-map">
            <img src="<?php echo get_template_directory_uri(); ?>/images/map.png)" alt="carte">
        </div>
    </div>
</div>

<?php get_footer(); ?>