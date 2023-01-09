<?php get_header(); ?>

<body>
    <div class="banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bgcom-resize.jpg)">
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
            <!-- Slogan -->
            <h1>Find, Yum'it, Repeat</h1>
        </div>
    </div>

</body>



<section class="section-main">
    <div class="container">

        <!-- fonctionnement -->
        <h2>Fonctionnement</h2>
    </div>

    <div class="full-w bg-section-grey">
        <div class="container ">
            <div class="d-flex justify-content-between ">
                <div>
                    <img class="commerce" src="<?php echo get_template_directory_uri(); ?>/images/commerce.png" alt="commerce">
                    <h3 class="fonction-titre">Trouve un commerce</h3>
                </div>
                <div>
                    <img class="sac" src="<?php echo get_template_directory_uri(); ?>/images/sac.png" alt="sac">
                    <h3 class="fonction-titre">Shop tes produits</h3>
                </div>
                <div>
                    <img class="yummy" src="<?php echo get_template_directory_uri(); ?>/images/yummy.png" alt="yummy">
                    <h3 class="fonction-titre">Déguste</h3>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="section-main">
    <div class="container">
        <!-- mission -->
        <h2>Notre Mission</h2>
    </div>

    <div class="full-w bg-section-grey mission">
        <div class="container ">


            <p>Yum’it a pour objectif principal le non gaspillage. Tu sais sûrement que beaucoup
                de commerces doivent jeter leur produits invendus de la journée, ce qui fait
                une perte d’argent pour le commerçant mais également beaucoup de gaspillage.
                C’est pourquoi nous proposons aux commerçants d’afficher leurs produits
                invendus sur Yum’it afin que tu puisses en profiter à bas prix toute en faisant
                une bonne action !</p>
            <img class="zerowaste" src="<?php echo get_template_directory_uri(); ?>/images/zerowaste.png" alt="zerowaste">
</section>
</div>
</section>




<?php get_footer(); ?>