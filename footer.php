        <footer>
          <div class="firstfooter">
           <div class="footerMenu">
             <?php //navigation here ?>
           </div>
          </div>
          <div class="lastfooter">
            <div class="lastfooterSubcontainer">
              <div class="connect">
                <span><?php echo get_theme_mod( 'mention_share_text', __( 'Connect With Us:', 'mention-wp' ) ); ?></span>
                <!-- Here put link to your social profiles (href="http://example.com/") -->
                <a class="lastfooterSocial" target="_blank" href="#"><i class="icon fa fa-twitter"></i></a>
                <a class="lastfooterSocial" target="_blank" href="#"><i class="icon fa fa-facebook"></i></a>
                <a class="lastfooterSocial" target="_blank" href="#"><i class="icon fa fa-google-plus"></i></a>
              </div>
              <div class="creators">
                <?php //srip tags allowed tags here for copy right text; ?>
                <span class="themeCreator">Powered by <a href="https://ghost.org/">Ghost</a> , crafted by <a href="http://vanila.io/" title="Mobile App development">Vanila</a></span>

              </div>
            </div>
          </div>
        </footer>
    </div>

    <?php wp_footer(); ?>
</body>
</html>
