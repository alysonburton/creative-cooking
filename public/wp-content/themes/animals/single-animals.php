<?php get_header(); ?>

<a href="<?php bloginfo('url');?>/animals" class="btn btn-primary">Back</a>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


      <h1><?php the_title(); ?></h1>
   

     <?php the_content(); ?>


     



<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>