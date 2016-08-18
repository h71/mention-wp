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
    <?php if ( have_posts() ) :
    	while ( have_posts() ) {
    		the_post(); ?>
				
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<article class="loopPost <?php if ( 0 === $wp_query->current_post ) echo 'latestPost'; ?>">

					<?php if ( 0 === $wp_query->current_post ) : ?>
						<p class="latestMark"><?php _e( 'Latest post', 'mention-wp' ); ?></p>
					<?php endif; ?>

					<h2 class="loopPost-title post-title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h2>
					<?php if ( has_post_thumbnail() ) : ?>
				        <div class="postCover">
							<img class="post-thumbnail" src="<?php the_post_thumbnail_url( 'mention-blog' ); ?>">
				        </div>
					<?php endif; ?>

					<div class="postInfo">
						<span><?php the_author(); ?> |</span>
						<span class="post-date" datetime="<?php the_time( get_option( 'date_format' ) ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></span>
						<span> | <?php the_category( ', ' ); ?> </span>
					</div>

					<div class="postSharing">
						<span><?php _e( 'Share on:', 'mention-wp' ); ?></span>
						<a class="postShare fb" title="<?php the_title(); ?>" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;">
							<i class="icon fa fa-facebook"></i>
						</a>
						<a class="postShare  twitter" title="<?php the_title(); ?>" target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title_attribute(); ?>&amp;url=<?php the_permalink(); ?>" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;">
							<i class="icon fa fa-twitter"></i>
						</a>
						<a class="postShare  googleplus" title="<?php the_title(); ?>" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;">
							<i class="icon fa fa-google-plus"></i>
						</a>
					</div>

						<div class="postExcerpt">
							<?php the_excerpt(); ?>
							<a class="readMore" title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
								<span><?php _e( 'Continue reading ', 'mention-wp' ); ?></span>
								<span>&#10142;</span>
							</a>
						</div>

				</article>
			</div>

    	<?php }
    	endif; ?>

</div>
<?php get_footer(); ?>