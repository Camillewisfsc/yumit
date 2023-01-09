<?php
/* Template Name: loginPage */
get_header();
?>
<div>
    <h1>Login Page</h1>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="inscriptionContent">

                <br>
                <table style="margin-right: auto; margin-left: auto">
                    <tr>
                        <td>
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
                            <button type="button" class="btn btn-danger">Se connecter</button>
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
