<?php
/* Template Name: connexion-page */
get_header();
?>
<div>
    <h2 class="login-title">Connexion</h2>

    <div class="tab-content">
        <div id="home" class="tab-panel">
            <div class="inscriptionContent">

                <br>
                <table style="margin-right: auto; margin-left: auto">
                    <tr>
                        <td>
                            <br>

                            <div>
                                <div>
                                    <label for="name">Adresse Mail</label>
                                </div>
                                <div>
                                    <input type="text" class="myInput" id="name" placeholder="Entrez votre e-mail" required>
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
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" class="boutondeconnexion">Se connecter</button>
                        </td>
                    </tr>
                </table>

                <br>
                <br>
                <br>


            </div>
        </div>

    </div>
    
</div>

<?php get_footer(); ?>
