<?php get_header();?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<h1><?php the_title();?></h1>
	<?php the_content(); ?>
	<?php endwhile; ?>
	<?php else : ?>
		<div class="container">
			<h1>Not Found</h1>
			<p>Sorry, but you are looking for something that isn't here.</p>
			<p>Start over at <a href="/">the homepage</a>.</p>
		</div>
<?php endif; ?>
<?php get_footer();?>
