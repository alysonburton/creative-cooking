<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

dasjfksdjflkjdslkf

    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>


<?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_sidebar('cats'); ?>


<?php get_footer(); ?>