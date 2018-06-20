</main>

<footer class="footer container-fluid tech-footer">
    <div class="row"><div class="col">
      <p>&copy; <?php echo date("Y"); ?> Worcester Technical High School</p>
    </div></div>
    
    <div class="row"><div class="col">
      <small>
        This site is designed and maintained by students in <a href="/webdev/">Programming and Web Development</a>.
        |
        Read <a href="/about-this-theme/">The story behind this design.</a>
        <br>
        <a href="/contact/">Contact us with your Comments, Questions, and Suggestions.</a>
        |
        <a href="/privacy-policy/">This Website's Privacy Policy</a>
      </small>
    </div></div>
</footer>
<footer class="footer container-fluid wps-footer">
    <div class="row">
      <div class="d-block d-sm-none col-sm-2 wps-logo">
        <img class="img-fluid" src="<?php echo get_theme_file_uri( '/assets/images/wps-logo.gif' ); ?>">
      </div><!-- /.col -->
      <div class="col">
        <small>
          <img class="img-fluid float-left d-none d-sm-block" src="<?php echo get_theme_file_uri( '/assets/images/wps-logo.gif' ); ?>" style="margin-right:20px">
          The <a href="worcesterschools.org" target="_blank">Worcester Public Schools</a>
          is an Equal Opportunity/Affirmative Action Employer/Educational Institution and
          does not discriminate regardless of race, color, gender, age, religion, national
          origin, gender identity, marital status, sexual orientation, disability or homelessness.
          The Worcester Public Schools provides equal access to employment and the full range
          of general, occupational and vocational education programs. For more information
          relating to Equal Opportunity/Affirmative Action contact the Human Resource Manager,
          20 Irving Street, Worcester, MA 01609, <span style="">508-799-3020.</span>
        </small>
      </div><!-- /.col -->
    </div><!-- /.row -->
</footer>

  <!-- Event Feed Hook -->
  <?php dynamic_sidebar( 'footer_js' ); ?>
  <?php wp_footer(); ?>
</body>
</html>
