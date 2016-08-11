        <footer>
          <div class="firstfooter">
           <div class="footerMenu">
              <nav role="navigation" class="homeNav nav">
                <div class="navLinks-wrap">
                  <div class="navLinks">
                      <?php if ( has_nav_menu( 'footer' ) ) { 
                        wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'onlyLinks', 'container' => '', 'depth' => 1
                        ) );
                       } ?>
                  </div>
                </div>
              </nav>
           </div>
          </div>
          <div class="lastfooter">
            <div class="lastfooterSubcontainer">
              <div class="connect">
                <span><?php echo get_theme_mod( 'mention_share_text', __( 'Connect With Us:', 'mention-wp' ) ); ?></span>
                <!-- Here put link to your social profiles (href="http://example.com/") -->
                <?php //if ( get_theme_mod( 'mention_share_icon_1' ) ) { ?>
                    <a class="lastfooterSocial social-icon-1" target="_blank" href="#"><i class="icon fa <?php echo get_theme_mod( 'mention_share_icon_1', 'fa-twitter' ); ?>"></i></a>
                <?php //} ?>
                <?php //if ( get_theme_mod( 'mention_share_icon_2' ) ) { ?>
                    <a class="lastfooterSocial social-icon-2" target="_blank" href="#"><i class="icon fa <?php echo get_theme_mod( 'mention_share_icon_2', 'fa-facebook' ); ?>"></i></a>
                <?php //} ?>
                <?php //if ( get_theme_mod( 'mention_share_icon_3' ) ) { ?>
                    <a class="lastfooterSocial social-icon-3" target="_blank" href="#"><i class="icon fa <?php echo get_theme_mod( 'mention_share_icon_3', 'fa-google-plus' ); ?>"></i></a>
                <?php //} ?>
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
