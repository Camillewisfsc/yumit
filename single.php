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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.517479185739!2d4.411092815746216!3d50.85861897953381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3ddead94ce555%3A0xe3e8204c0272a848!2sPain%20Patisserie!5e0!3m2!1sfr!2sbe!4v1673397319484!5m2!1sfr!2sbe" width="1399" height="599" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<?php get_footer(); ?>