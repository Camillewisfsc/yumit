<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<footer>
  <div class="container">
    <div class="footer-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logofooter.png" alt="logofooter">
    </div>
    <div class="footer-links">
      <div class="footer-socials">
        <h4>Réseaux sociaux</h4>
        <div class="icones">
          <a href="#">
            <img class="insta" src="<?php echo get_template_directory_uri(); ?>/images/instagram (1).png" alt="instagram (1)">
          </a>
          <a href="#">
            <img class="facebook" src="<?php echo get_template_directory_uri(); ?>/images/facebook (1).png" alt="facebook">
          </a>
          <a href="#">
            <img class="linkedin" src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="linkedin">
          </a>
        </div>
      </div>
      <div class="footer-contact">
        <h4>Contactez-nous</h4>
        <ul>
          <li>yummit@gmail.com</li>
          <li>0274 06 38 90</li>
        </ul>
      </div>

      <div class="footer-mentions-légales">
        <h4>Mentions légales</h4>

        <ul>
          <li><a href="#">Qui sommes-nous?</a></li>
        </ul>
      </div>

    </div>
    <div class="footer-copyright">
      <p>&copy; 2022 Yum'it</p>
    </div>
  </div>

</footer>



<?php wp_footer(); ?>
</body>

</html>