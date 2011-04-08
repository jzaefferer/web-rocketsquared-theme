<?php
/*
Template Name: Frontpage
*/
?>
<?php get_header(); ?>

    <div id="content">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
        <div style="clear:both"></div>
        <hr />
        <?php get_sidebar('home'); ?>
        <a href="http://twitter.com/bassistance" rel="nofollow" class="twitterFollowMe" target="_blank">Follow Me</a>
    </div>

<?php get_footer(); ?>
