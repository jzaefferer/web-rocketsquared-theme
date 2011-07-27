<?php get_header(); ?>

  <div id="content">
    <div class="posts">
    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

    <div class="post">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php edit_post_link('Edit', ' ', ''); ?>
    <div class="entry">
      <?php the_post_thumbnail(); ?>
      <?php the_content(); ?>

      <p class="postmetadata">
       <?php echo get_the_date() ?>, <?php _e('tagged with'); ?> <?php the_category(', ') ?>
      </p>
    </div>
    <div id="nav-below" class="navigation">
      <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
      <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
    </div>
  </div>

<?php endwhile; ?>
  </div>
    <?php endif; ?>
  <?php get_sidebar(); ?>
  <div style="clear:both"></div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
