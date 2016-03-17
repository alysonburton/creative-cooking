<?php get_header();
/*
Template Name: Home Page
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <img src="<?php bloginfo('template_url'); ?>/images/cover_image.jpg" class="logo"" alt="">
  




  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>