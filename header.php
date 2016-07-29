<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700' rel='stylesheet' type='text/css'>
    <!-- pingback -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="blogWrapper">
    <div class="progressbarWrapper">
      <div class="progressbar"></div>
    </div>
        <header class="topbar">
          <div class="topbarCont">
            <?php if ( get_header_image() ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
            <?php endif; ?>
          </div>
          <div class="topbarCont">
            <div class="topbarInfo">
              <!-- Add your own tagline here -->
              <span class="header-text"><?php echo get_theme_mod( 'mention_header_text', '' ); ?></span>
              <!-- Also, change title, link and text of the button.-->
              <a class="headerBtn" href="<?php echo get_theme_mod( 'header_btn_url', '#' ); ?>" title="<?php echo get_theme_mod( 'mention_header_btn_text', __( 'Get free quote', 'mention-wp' ) ); ?>"><?php echo get_theme_mod( 'mention_header_btn_text', __( 'Get free quote', 'mention-wp' ) ); ?></a>
            </div>
          </div>
        </header>