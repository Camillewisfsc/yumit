<?php
/* Template Name: favoritesPage */

get_header();
?>

<div class="headFavorites">
    <div>
        <h2>commerces favoris</h2>

    </div>
    <div>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">

            <option selected>Type de commerce...</option>
            <option value="1">Pâtisseries</option>
            <option value="2">Produits Bio</option>
            <option value="3">Confiseries</option>
            <option value="3">Boulangeries</option>
        </select>
    </div>
</div>

<!--Liste des commerces -->

<div class="shopsContent d-flex justify-content-center">
    <ul>
        <li class="card" style="width: 18rem;">
            <img class="card-img-top" alt="Sequoia" src="<?php echo get_template_directory_uri(); ?>/images/sequoia.png)">
            <div class="card-body">
                <h5 class="card-title">Sequoia</h5>
                <p class="card-specialites">Produits Bio</p>
                <p class="card-distance">2km</p>
            </div>
        </li>
        <li class="card" style="width: 18rem;">
            <img class="card-img-top" alt="Pain patisserie" src="<?php echo get_template_directory_uri(); ?>/images/painpatisserie.png)">
            <div class="card-body">
                <h5 class="card-title">Pain pâtisserie</h5>
                <p class="card-specialites">Pâtisserie</p>
                <p class="card-distance">2km</p>
            </div>
        </li>
    
        <li>
        <li class="card" style="width: 18rem;">
            <img class="card-img-top" alt="Au Croquant" src="<?php echo get_template_directory_uri(); ?>/images/aucroquant.png)">
            <div class="card-body">
                <h5 class="card-title">Au Croquant</h5>
                <p class="card-specialites">Confisseries</p>
                <p class="card-distance">3km</p>
            </div>
        </li>
         
        <li class="card" style="width: 18rem;">
            <img class="card-img-top" alt="Comptoir Bio" src="<?php echo get_template_directory_uri(); ?>/images/comptoirbio.png)">
            <div class="card-body">
                <h5 class="card-title">Le Comptoir Bio</h5>
                <p class="card-specialites">Produits Bio</p>
                <p class="card-distance">1km</p>
            </div>
        </li>

    </ul>
</div>
<?php get_footer(); ?>