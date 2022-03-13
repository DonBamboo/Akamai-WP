  <footer class='footer-bar'>
    <div class="container">
      <div class="row">
        <nav class="footer-menu col-xl-10 col-md-8 col-sm-8 col-6">
            <?php wp_nav_menu( array( 'theme_location' => 'footer_menu' ) ); ?>  
        </nav>
        <div class="social-media col-xl-2 col-md-4 col-sm-4 col-6 text-right">social media</div>
        <div class="copyright">
          <p>Copyright</p>
        </div>
      </div>
    </div>
  </footer>
<?php wp_footer(); ?>
</body>
</html>