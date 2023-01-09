<?php
/* Template Name: shopsPage */

get_header();
?>


    <head>
        <style>
            .shopsContent {
                margin: auto;
                width: 90%;
                ackground-color: white;
            }

            .shopsContent li {
                display: inline-block;
                padding: 20px;
            }


            .searchContent {
                display: flex;
                align-items: baseline;
                justify-content: center;
                margin-top: 20px;
            }

            .searchContent div img {
                width: 28px;
                height: 28px;
            }

            .searchContent div select {
                border: 0px;
            }

            .searchContent div select:active {
                border: 0px;
            }

            .searchContent div select:enabled {
                border: 0px;
            }


        </style>
    </head>

    <div class="bannercommerce"
         style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg-commerces.png)">
        <div class="container">
            <!-- Barre de recherche -->
            <form class="form-inline" action="/recherche/" method="get">
                <fieldset>
                    <div class="input-group">
                        <div class="search-container">
                            <img class="localisation"
                                 src="<?php echo get_template_directory_uri(); ?>/images/localisation.png"
                                 alt="localisation">
                            <input placeholder="Saisissez votre adresse... " id="oSaisie" name="oSaisie" type="text"
                                   class="form-control" aria-label="Saisie de mots clés" required="required">
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

    <div class="searchContent">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/nourriture-saine.png"
                 alt="panier">
        </div>
        <div>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">

                <option selected>Type de commerce...</option>
                <option value="1">Pâtisseries</option>
                <option value="2">Produits Bio</option>
                <option value="3">Confiseries</option>
                <option value="3">Boulangerie</option>
            </select>
        </div>
    </div>


    <!--Liste des commerces -->

    <div class="shopsContent d-flex justify-content-center">
        <ul>
            <li>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sequoia.png)">
                </div>
                <div>
                    <h4 class="card-store-title">Sequoia</h4>
                    <p class="card-store-text">Produits Bio</p>
                    <p class="card-store-text">2km</p>
                </div>
            </li>

            <li>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/painpatisserie.png)">
                </div>
                <div>
                    <h4 class="card-store-title">Pain Pâtisserie</h4>
                    <p class="card-store-text">Pâtisseries</p>
                    <p class="card-store-text">2km</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/aucroquant.png)">
                </div>
                <div>
                    <h4 class="card-store-title">Au Croquant</h4>
                    <p class="card-store-text">Confiseries</p>
                    <p class="card-store-text">3km</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/comptoirbio.png)">
                </div>
                <div>
                    <h4 class="card-store-title">Le Comptoir Bio</h4>
                    <p class="card-store-text">Produits Bio</p>
                    <p class="card-store-text">1km</p>
                </div>
            </li>
        </ul>

    </div>

    </div>



<?php get_footer(); ?>