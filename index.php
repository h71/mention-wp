<?php get_header(); ?>
<section class="heading {{#if @blog.cover}}" style="background-image: url({{@blog.cover}}){{else}}no-cover{{/if}}">
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
<!--     		 <ul class="onlyLinks">
              <li class=" nav-{{slug}}{{#if current}} nav-current{{/if}}" role="presentation">
                <a href="{{url absolute="true"}}">{{label}}</a>
              </li>
	              
	         </ul> -->
	         <a class="footerBtn" href="#">Get free quote</a>
	    </div>
	  </div>
	</nav>
</div>


{{! The main content area on the homepage }}
<div class="mainContent">
    {{! The tag below includes the post loop - partials/loop.hbs }}
    {{> "loop"}}
</div>
<?php get_footer(); ?>