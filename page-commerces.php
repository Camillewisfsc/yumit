<?php
/* Template Name: commerce-page */

get_header();
?>

<body>
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

</body>


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

<!--Liste des commerces -->

<div class="container listecommerces">


    <div class="card-store">
        <div class="card-store-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/sequoia.png)"></div>
        <div class="card-store-content">
            <h4 class="card-store-title">Sequoia</h4>
            <p class="card-store-text">produits bio</p>
            <p class="card-store-text">2km</p>
            <span class="fav-icon"></span>
        </div>



        <div class="card-store-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/painpatisserie.png"></div>

        <div class="card-store-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/.png)"></div>
        <div class="card-store-content">
            <h4 class="card-store-title">Pain Pâtisserie</h4>
            <p class="card-store-text">pâtisseries</p>
            <p class="card-store-text">2km</p>

        </div>

        <div class="card-store-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/aucroquant.png"></div>

        <div class="card-store-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/.png)"></div>
        <div class="card-store-content">
            <h4 class="card-store-title">Au croquant</h4>
            <p class="card-store-text">confiseries</p>
            <p class="card-store-text">3km</p>
        </div>



        <div class="card-store-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/comptoirbio.png"></div>

        <div class="card-store-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/.png)"></div>
        <div class="card-store-content">
            <h4 class="card-store-title">Le comptoir bio</h4>
            <p class="card-store-text">produits bio</p>
            <p class="card-store-text">1km</p>
        </div>
    </div>
</div>
</div>


<?php get_footer(); ?>
</body>