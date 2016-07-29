<?php get_header(); ?>
<section class="heading">
	<div class="headingSub headingTitle">
		<h1 class="site-title"><?php bloginfo('name'); ?></h1>
		<span class="site-description"><?php bloginfo( 'description' ); ?></span>
	</div>
</section>

<div class="headerMenu">
	<nav role="navigation" class="homeNav nav">
	  <div class="navLinks-wrap">
	    <div class="navLinks">
	        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'onlyLinks', 'container' => '', 'depth' => 1
	         ) ); ?>
	    </div>
	  </div>
	</nav>
</div>

<div class="mainContent">
    
</div>
<?php get_footer(); ?>