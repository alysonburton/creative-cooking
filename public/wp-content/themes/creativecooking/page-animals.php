<?php get_header();
/*
Template Name: Animals Page
*/
?>


<div class="row">
	<div class="col-xs-12">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    <h1><?php the_title(); ?></h1>
		    <?php the_content(); ?>

		<?php endwhile; else: ?>
		    <p>Sorry, no pages matched your criteria.</p>
		<?php endif; ?>
	</div>
</div>


<div class="row">
	<div class="col-xs-8"> 
		<?php 

		$animals = new WP_Query([
			'post_type' =>'animals',
			'order'		=> 'ASC',
			'orderby'	=> 'title'
			]);

		 if ($animals->have_posts()) : while ($animals->have_posts()) : $animals->the_post(); ?>
			
			<div class="col-xs-3">
				<div class="animal">
					<?php the_title(); ?>
					<img src="<?php the_field('thumbnail');?>" alt="">
					<a href="<?php the_permalink();?>" class="btn btn-primary">View</a>
				</div>
			</div>

		  <?php endwhile; else: ?>
		    <p>Sorry, no animals matched your criteria.</p>
		<?php endif; ?>
	</div>
	
	<div class="col-xs-4">
		<?php get_sidebar();?>
	</div>

</div>










<?php get_footer(); ?>