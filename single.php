<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php if ( has_post_thumbnail() ) : ?>
<main class="mainContent" role="main">
  <article <?php post_class(); ?>>
    <h1 class="postTitle" itemprop="headline"><?php the_title(); ?></h1>
      <div class="postInfo">
        <span><?php the_author(); ?> |</span>
        <span class="post-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time(); ?> |</span>
        <span><?php _e( 'reading time:', 'mention-wp' ); ?> <span class="eta"></span></span>
      </div>
            <div class="postCover">
          <img class="post-thumbnail" src="<?php the_post_thumbnail_url( 'mention-blog' ); ?>">
            </div>
      <?php endif; ?>
      <section class="post-content postContent">
            <?php the_content(); ?>
      </section>

      <?php if ( get_next_post() ) : ?>

      <section class="recentPost">
                <p><?php _e( 'Check the next post: ', 'mention-wp' ); next_post_link(); ?></p>
      </section>

      <?php endif; ?>


<div class="postShare-wrap">
<div class="postSharing">
  <span>Share on:</span>
  <a class="postShare fb" title="<?php the_title(); ?>" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;"><i class="icon fa fa-facebook"></i></a>
  <a class="postShare   twitter" title="<?php the_title(); ?>" target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title_attribute(); ?>&amp;url=<?php the_permalink(); ?>" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;"><i class="icon fa fa-twitter"></i></a>
  <a class="postShare   googleplus" title="<?php the_title(); ?>" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;"><i class="icon fa fa-google-plus"></i></a>
</div>
</div>
  </article>

<section class="authorWrap">
        <div class="authorInner">
          <?php echo get_avatar( get_the_author_meta( 'ID' ), 132 ); ?>
        </div>
        <div class="authorDesc">
          <h4 class="author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" title="<?php the_author_meta('user_nicename'); ?>" rel="author"><?php the_author_meta('user_nicename'); ?></a></h4>
          <p class="authorInfo"><?php the_author_meta('description'); ?>
          <?php if ( get_the_author_meta('url') ) : ?>
          <span><?php _e( 'Say hey: ', 'mention-wp' ); ?>
            <a href="<?php the_author_meta('url'); ?>"><?php the_author_meta('url'); ?></a>
          </span>
          <?php endif; ?>
          </p>
        </div>
</section>

<?php comments_template(); ?>

</main>
<?php wp_reset_postdata(); endwhile; ?>
<?php get_footer(); ?>
