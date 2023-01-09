<?php
/* Template Name: profil-page */

get_header();
?>
<div class="container">

    <h2>profil</h2>
    <img class="femme" src="<?php echo get_template_directory_uri(); ?>/images/femme-pro.png" alt="profil de femme">
    <h3 class="prenom">Manon</h3>
    <p class="emailprofil">Manon.maunet@outlook.be</p>
    <div class="infosprofil">
        <div class="input-container">
            <img class="mail profile-input-icon" src="<?php echo get_template_directory_uri(); ?>/images/mail.png" alt="mail">
            <input value="manon.maniquet@hotmail.com" id="mail" type="text" class="profile-input">
        </div>
        <span>Modifier</span>
    </div>

    <div class="infosprofil">
        <div class="input-container">
            <img class="language profile-input-icon" src="<?php echo get_template_directory_uri(); ?>/images/language.png" alt="language">
            <input value="Français" id="language" type="text" class="profile-input">
        </div>
        <span>Modifier</span>
    </div>
  
    <div class="infosprofil">
        <div class="input-container">
            <img class="padlock profile-input-icon" src="<?php echo get_template_directory_uri(); ?>/images/padlock.png" alt="padlock">
            <input value="********" id="padlock" type="text" class="profile-input">
        </div>
        <span>Modifier</span>
    </div>

    <button type="button" class="boutondeconnexion">déconnexion</button>
    

</div>
<?php get_footer(); ?>
