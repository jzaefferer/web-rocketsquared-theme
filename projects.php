<?php
/*
Template Name: Projects
*/
?>

<?php get_header(); ?>

    <div id="content" class="projects">
        <?php query_posts( array ( 'category_name' => 'Project', 'posts_per_page' => -1 ) ); ?>
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

        <div class="post">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <div class="entry">
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
            </div>
        </div>
<?php endwhile; ?>
        <?php rewind_posts(); ?>

        <div class="navigation">
        <?php posts_nav_link(); ?>
        </div>

        <?php endif; ?>
    </div>
<?php get_footer(); ?>
