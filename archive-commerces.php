<?php get_header()  ?>
<div class="bannercommerce" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg-commerces.png)">
    <div class="container">
        <!-- Barre de recherche -->
        <form class="form-inline" action="/recherche/" method="get">
            <fieldset>
                <div class="input-group">
                    <div class="search-container">
                        <img class="localisation" src="<?php echo get_template_directory_uri(); ?>/images/localisation.png" alt="localisation">
                        <input placeholder="Saisissez votre adresse... " id="oSaisie" name="oSaisie" type="text" class="form-control" aria-label="Saisie de mots clés" required="required">
                    </div>

                    <div class="input-group-append">
                        <button class="boutoncommerce" type="submit">Trouver un commerce</button>
                    </div>
                </div>
            </fieldset>
        </form>

    </div>
</div>
<!-- Barre de recherche - commerces - panier -->
<form class="form-inline3" action="/recherche/" method="get">
    <fieldset>
        <div class="input-group">
            <div class="search-container3">
                <img class="panier" src="<?php echo get_template_directory_uri(); ?>/images/nourriture-saine.png" alt="panier">
                <input placeholder="Type de commerce... " id="oSaisie" name="oSaisie" type="text" class="form-control" aria-label="Saisie de mots clés" required="required">
            </div>

            <!--div class="input-group-append"-->

            <!--/div-->
        </div>
    </fieldset>
</form>

<div class="card-container listecommerces container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <a class="card" href="<?php the_permalink() ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-specialites"><?php the_field('specialites'); ?></p>
                    <p class="card-distance"><?php the_field('distance'); ?></p>
                </div>
            </a>
        <?php endwhile;
    else : ?>
        <p>Aucun article :(</p>
    <?php endif; ?>
</div>


<?php get_footer() ?>