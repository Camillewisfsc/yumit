<?php
/* Template Name: registerPage */
get_header();
?>



<div class="container">
    <h2 style="color: #D52200 ; font-size: 20px">Inscription</h2>


    <ul class="nav nav-tabs" id="tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="consomateur" data-bs-toggle="tab" data-bs-target="#consomateur-pane" type="button" role="tab" aria-controls="consomateur-pane" aria-selected="true">Consomateur</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="commercant-tab" data-bs-toggle="tab" data-bs-target="#commercant-tab-pane" type="button" role="tab" aria-controls="commercant-tab-pane" aria-selected="false">Commercant</button>
        </li>
    </ul>



</div>

<div class="tab-content" id="tabContent">
    <div class="tab-pane fade show active" id="consomateur-pane" role="tabpanel" aria-labelledby="consomateur-pane" tabindex="0">
        <div class="inscriptionContent">

            <br>
            <br>

            <div>
                <div>
                    <label for="name">Nom</label>
                </div>
                <div>
                    <input type="text" class="myInput" id="name" placeholder="Entrez votre nom" required>
                </div>
            </div>
            <br>


            <div>
                <div>
                    <label for="name">Prénom</label>
                </div>
                <div>
                    <input type="text" class="myInput" id="name" placeholder="Entrez votre prénom" required>
                </div>
            </div>
            <br>


            <div>
                <div>
                    <label for="name">E-mail</label>
                </div>
                <div>
                    <input type="text" class="myInput" id="name" placeholder="Entrez votre adresse mail" required>
                </div>
            </div>
            <br>

            <div>
                <div>
                    <label for="name">Téléphone</label>
                </div>
                <div>
                    <input type="text" class="myInput" id="name" placeholder="Entrez votre numéro de téléphone" required>
                </div>
            </div>
            <br>

            <div>
                <div>
                    <label for="name">Adresse</label>
                </div>
                <div>
                    <input type="text" class="myInput" id="name" placeholder="Entrez votre adresse" required>
                </div>
            </div>
            <br>

            <div>
                <div>
                    <label for="name">Région</label>
                </div>
                <div>
                    <input type="text" class="myInput" id="name" placeholder="Entrez votre région" required>
                </div>
            </div>
            <br>

            <div>
                <div>
                    <label for="name">Mot de passe</label>
                </div>
                <div>
                    <input type="text" class="myInput" id="name" placeholder="Entrez votre mot de passe" required>
                </div>
            </div>
            <br>

            <div>
                <div>
                    <label for="Confirmation">Nom</label>
                </div>
                <div>
                    <input type="text" class="myInput" id="name" placeholder="Entrez à nouveau votre mot de passe" required>
                </div>
            </div>
            <br>

            <div>
                <div>
                    <label for="name">Nom</label>
                </div>
                <div>
                    <input type="text" class="myInput" id="name" placeholder="Entre votree nom" required>
                </div>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    J'accepte les conditions générales
                </label>
            </div>
            <br>
            <table style="margin-right: auto; margin-left: auto">
                <tr>
                    <td>
                        <button type="button" class="btn btn-danger">S'inscrire</button>
                    </td>
                </tr>
            </table>

            <br>
            <br>
            <br>


        </div>
    </div>
    <div class="tab-pane fade" id="commercant-tab-pane" role="tabpanel" aria-labelledby="commercant-tab" tabindex="0">
        <div class="inscriptionContent">

            <table style="margin-right: auto; margin-left: auto; text-align: center">
                <tr>
                    <td>
                        <img src="https://img.freepik.com/premium-vector/mockup-iphone-10-10s-11-11pro-new-iphone-12-12pro-12-mini-mock-up-screen-iphone-vector-illustration_561158-87.jpg?w=2000" width="300px" height="500px">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="button" class="btn btn-danger">Télécharger l'application</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        La version APP a été concue uniquement pour les commercant ! Télécharge la pour mettre à jkour ta liste de produits invenuds en un seul clic !
                        <br>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>


<?php get_footer(); ?>